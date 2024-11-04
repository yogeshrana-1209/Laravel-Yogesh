<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Application Components</title>
    <!-- Add your CSS links here -->
</head>
<body>
    <!-- Insert the component x-header here.. -->
    <x-header />

    <main class="content">
        @yield('content')
    </main>

    <!-- Insert the component x-footer here.. -->
    <x-footer />
</body>
</html>
