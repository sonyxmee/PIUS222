<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8"/>
    <meta http - equiv="X-UA-Compatible" content="IE=edge">
    <title> Category </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Category name: {{ $category->title }} </h1>
    <table class="table table-bordered mb-4">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>active</th>
            <th>active_from</th>
            <th>active_to</th>
            <th>link</th>
            <th>image</th>
            <th>created_at</th>
        </tr>
        @foreach($banners as $banner)
            <tr>
                <td>{{ $banner->id }}</td>
                <td>{{ $banner->title }}</td>
                <td>{{ $banner->active }}</td>
                <td>{{ $banner->active_from }}</td>
                <td>{{ $banner->active_to }}</td>
                <td><a>{{ $banner->link }}</a></td>
                <td><a href="{{ $banner->image }}"><img src="{{ $banner->image }}" alt="image"
                                                        width="100" height="100"></a></td>
                <td>{{ $banner->created_at }}</td>
            </tr>
        @endforeach
    </table>
</div>
</body>
