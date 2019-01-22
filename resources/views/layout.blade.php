<!DOCTYPE html>
<html>
<head>
    @yield('title-tab')
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <button onclick="window.location.href='/logout'">LogOut</button>

</head>
<body>
<div class="container">
    @yield('content')

</div>

</body>
</html>