<header class="header">
    
    <a href="{{ ('/') }}" class="logo"><img src="{{ asset('images/logo.svg') }}" alt="" /></a>

    <nav class="navbar">
        <a href="{{ ('/') }}" >Acceuil</a>
        <a href="{{ route('apropos') }}" class="active">À Propos</a>
        <a href="#services">Services</a>
        <a href="{{ route('galerie') }}">Galerie</a>
        <a class="last-child" href="#Contact">Contact</a>
        <button class="signature">Signature</button>
    </nav>

    <div class="bx bx-menu" id="menu-icon"></div>

</header>