<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\BannerCategory;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryWithCodeController extends Controller
{
    // php artisan make:controller CategoryWithCodeController

    public function __invoke(Request $request, string $code)
    {
        try {
            $category = Category::find($code);
            if ($category->active) {
                $bannersID = BannerCategory::where('category_id', '=', $code)->pluck('banner_id')->toArray();
                $banners = Banner::whereIn('id', $bannersID)->orderBy('created_at', 'DESC')->orderBy('active', 'DESC')->orderBy('active_from')->orderBy('active_to')->take(5)->get();

                return view('category')->with('banners', $banners)->with('category', $category);
//                echo 'Category name: ' . $category['title'] . '<br>';
//                echo '<b>Banners: </b><br>';
//                foreach ($banners as $banner) {
//                    echo 'ID: ' . $banner['id'] . ' Title: ' . $banner['title'] . '  Created at: ' . $banner['created_at'] . '  Active: ' . $banner['active'] . '  Active_from: ' . $banner['active_from'] . '  Active_to: ' . $banner['active_to'] . '<br>';
//                }
//                echo '---------------------------------<br>';

            } else abort(404, 'Category is not active.');
        } catch (Exception) {
            abort(404, 'Category is not found.');
        }
    }
}
