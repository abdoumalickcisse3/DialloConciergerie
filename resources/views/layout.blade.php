<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Di'allo Conciergerie</title>
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/service.css')}}">
    <link rel="stylesheet" href="{{asset('css/about.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/home.css')}}"> --}}
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> 
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" /> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">   
     <link rel="stylesheet" href="{{asset('cssfiles/style.css')}}">

    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/service.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/home.css')}}"> --}}
     <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> 
        <script>
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', function() {
                    navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                        console.log('ServiceWorker registration successful with scope: ', registration.scope);
                    }, function(err) {
                        console.error('ServiceWorker registration failed: ', err);
                    });
                });
            }
        </script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        @include('header')
    </div>
        <div class="mt-5">
            @yield('content')
        </div>
   

    @include('footer')
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="{{ asset('/jsfiles/navbar.js') }}"></script> 

    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">

        $('.video-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<img class="slick-prev" src="/images/arrow-left.png">',
            nextArrow: '<img class="slick-next" src="/images/arrow-right.png">',
            responsive: [
                {
                    breakpoint: 1550,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 1270,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 456,
                    settings: {
                        slidesToShow: 1,

                    }
                },



            ]
        });
    </script>
    <script type="text/javascript">


        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1000,
            responsive: [
                {
                    breakpoint: 1550,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 1170,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 780,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 450,
                    settings: {
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
                ,
                {
                    breakpoint: 350,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 300,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });

    </script> --}}
</body>
</html>