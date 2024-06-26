<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- boostrap --}}
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap-grid.rtl.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap-reboot.rtl.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap-utilities.rtl.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.rtl.min.css">

    <title>App</title>
</head>
<body>
    @yield('content')

    {{-- boostrap --}}

    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    {{-- jquery --}}

    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
</body>
</html>