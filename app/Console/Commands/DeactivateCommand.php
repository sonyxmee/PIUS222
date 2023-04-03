<?php

namespace App\Console\Commands;

use App\Models\Banner;
use Exception;
use Illuminate\Console\Command;

class DeactivateCommand extends Command
{
    //php artisan make:command DeactivateCommand
    //php artisan banner:deactivate 14
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'banner:deactivate {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'deactivate banner with the specified code';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        try {
            $bannerID = $this->argument('id');
            $banner = Banner::find($bannerID);
            if ($banner->active) {
                $banner->active = false;
                $banner->save();
                $this->info('Banner with id ' . $bannerID . ' is deactivated');
            }
        } catch (Exception) {
            $this->error('Banner is not found.');
        }
    }
}
