<!DOCTYPE html>
<html>
<head>
    <base href="{{ url('/') }}/"  />
    @include('inc.meta')
    {!! js_notify() !!}
</head>
<body>
    @include('inc.header')
    <div id="page">
      @yield('content')
    </div><!--page-->
    @include('inc.footer')
</body>
</html>
