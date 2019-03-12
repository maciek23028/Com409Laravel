
@include ('layouts.header')
@section ('header')
@endsection
<div class='pageContent'>
        <main class="py-4">
             @yield('content')
             <!----page content ----->
             <!----end of page content ----->
        </main>
</div>
@include ('layouts.footer')
@section ('footer')
@endsection
