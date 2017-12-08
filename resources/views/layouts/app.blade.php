<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@lang('task.title')</title>
    {!! Html::script('js/app.js') !!}
    {!! Html::style('css/app.css') !!}
    {!! Html::style('css/style.css') !!}
</head>
<body id="app-layout">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ route('task.index') }}">
                @lang('task.index.header')
            </a>
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>
