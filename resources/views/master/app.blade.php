<!DOCTYPE html>
<html lang="en">

<head>
    @include('master.meta')
    @include('master.css')
</head>

<body class="uni-body panel bg-white text-gray-900 dark:bg-black dark:text-gray-200 overflow-x-hidden">
    <div>
        @include('components.navbar')
        <div>
            @yield('content')
        </div>
        @include('components.footer')
    </div>
    @include('master.js')
</body>

</html>
