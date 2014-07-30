<html>
<head>
    <title>
        @section('title')
            Anthony tries himself as CRUD artisan
        @show
    </title>
    {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
    {{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js')  }}
    <style>
        .content
        {
            position: relative;
            left: 50%;
            width: 600px;
            margin-left: -300px;
        }
    </style>
</head>
<body>
<div class="content">
    @yield('content')
</div>
</body>
</html>