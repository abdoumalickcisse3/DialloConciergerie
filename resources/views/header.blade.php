<header class="header">
    
    <a href="{{ ('/') }}" class="logo"><img src="{{ asset('images/logo.svg') }}" alt="" /></a>
    <a href="{{ ('/') }}" class="logo2"><img id="logo1" src="{{ asset('images/logo1.png') }}" alt="" /></a>
    <a href="{{ ('/') }}" class="logo2"><img id="logo2" src="{{ asset('images/logo2.png') }}" alt="" /></a>

    <nav class="navbar">
        <a href="{{ ('/') }}" >Acceuil</a>
        <a href="{{ route('apropos') }}" >À Propos</a>
        <a href="{{ route('service') }}">Services</a>
       
        <a href="{{ route('blog') }}">Blog</a>
        <a href="{{ route('galerie') }}">Galerie</a>
        <a class="last-child" href="{{ route('contact') }}">Contact</a>
        <button class="signature">Signature</button>
    </nav>

    <div class="bx bx-menu" id="menu-icon"></div>

</header>