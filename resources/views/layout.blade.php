<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">    <link rel="stylesheet" href="{{asset('cssfiles/style.css')}}">
    <title>Di'allo Conciergerie</title>
    <link rel="stylesheet" href="{{ asset('/cssfiles/blog.css') }}">
    <script>
        var logo1 = '{{ asset("images/logo1.png") }}';
        var logo2 = '{{ asset("images/logo2.png") }}';
    </script>
    

</head>
<body>
    <div class="whatsapp-button">
        <a href="https://wa.me/221787123843" target="_blank">
            <img src="{{ asset('images/whatsapp-icon.png') }}" alt="WhatsApp">
        </a>
    </div>
    <div class="container">
        @include('header')
        <div class="mt-5">
            @yield('content')
        </div>
    </div>

    @include('footer')

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="{{ asset('/jsfiles/navbar.js') }}"></script>
</body>
</html>