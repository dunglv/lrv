<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {!! HTML::style('/css/bootstrap.min.css', array('media' => 'screen')) !!}
    {!! HTML::style('/css/main.css', array('media' => 'screen')) !!}
    {!! HTML::script('/js/jquery-1.11.3.min.js') !!}
    {!! HTML::script('/js/main.js') !!}
    <title>Home Page</title>
</head>
<body>
    @yield('body')
</body>
</html>