<header class="header">
    
    <a href="{{ ('/') }}"  class="logo"><img id="logo" src="{{ asset('images/logo1.png') }}" alt="" /></a>

    <nav class="navbar">
        <a href="{{ ('/') }}" >Acceuil</a>
        <a href="{{ route('apropos') }}" >À Propos</a>
        <a href="#services">Services</a>
        <a href="{{ route('blog') }}">Blog</a>
        <a href="{{ route('galerie') }}">Galerie</a>
        <a class="last-child" href="#Contact">Contact</a>
        <button class="signature">Signature</button>
    </nav>

    <div class="bx bx-menu" id="menu-icon"></div>

</header>