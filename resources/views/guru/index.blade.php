<!DOCTYPE html>
<html lang="en">
{{-- head --}}
@include('guru.partials.head')

<body>
    <div class="app">
        {{-- sidebar --}}
        @include('guru.components.sidebar')

       {{-- main --}}
        @yield('content')
    </div>
</body>

</html>
