<!DOCTYPE html>
<html lang="en">
{{-- head --}}
@include('siswa.partials.head')

<body>
    <div class="app">
        {{-- sidebar --}}
        @include('siswa.components.sidebar')

       {{-- main --}}
        @yield('content')
    </div>
</body>

</html>
