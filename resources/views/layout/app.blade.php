{{$currentpage = 'index';}}

@include('layout/header')


@yield('content')


@include('layout/js_script')
@include('layout/footer')