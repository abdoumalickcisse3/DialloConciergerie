@extends( 'layout' )
    <div class="banniere">
        <div class="banner">
            <p>DI’ALLO Conciergerie</p>
            <h1>À Propos</h1>
        </div>
    </div>
@section('content')
    <div class="about-content">
        <div class="about-content-item">
            <p>Bienvenue chez DI’ALLO Conciergerie, votre partenaire de confiance pour des voyages inoubliables et des services de conciergerie privée au Maroc. Notre expérience solide nous permet de répondre à vos besoins, qu'il s'agisse de vous accompagner en tant que coursier privé ou de planifier des voyages d'exception.</p>
            <img src="{{ asset('images/Frame 680.svg') }}" alt="">
        </div>
        <div class="about-content-item">
            <img src="{{ asset('images/Group 681.svg') }}" alt="">
            <div class="item-text">
                <h1>La Conciergerie Privée</h1>
                <p>Chez DI’ALLO Conciergerie, nous comprenons l'importance de votre temps et de votre confort. Notre service de conciergerie privée et notre service de coursier privé également connu sous le nom de FAST TRACK, vise à simplifier votre vie quotidienne. Nous nous engageons à fournir un service exceptionnel qui garantit votre sécurité, votre discrétion et votre confort.</p>
            </div>
        </div>
        <div class="about-content-item">
            <div class="item-text2">
                <h5>Gestion du Temps:</h5><span> Nous prenons en charge</span>
                <ul>
                    <li>la réservation de services de nettoyage, d'entretien de la maison,</li>
                    <li>la coordination de rendez-vous médicaux.</li>
                </ul>
                <h5>Services Personnalisés:</h5><span> Que ce soit pour</span>
                <ul>
                    <li>Des services de bien-être</li>
                    <li>Des achats personnels</li>
                    <li>L'organisation d'événements spéciaux</li>
                </ul>
                <p>Nous nous occupons de tout, vous permettant de vous détendre et de profiter pleinement de votre vie.</p>
            </div>
            <img src="{{ asset('images/manko.svg') }}" alt="">
        </div>
        <div class="about-content-item">
            <img src="{{ asset('images/hotel.svg') }}" alt="">
            <div class="item-text">
                <h1>La Conciergerie Privée</h1>
                <p>Chez DI’ALLO Conciergerie, nous comprenons l'importance de votre temps et de votre confort. Notre service de conciergerie privée et notre service de coursier privé également connu sous le nom de FAST TRACK, vise à simplifier votre vie quotidienne. Nous nous engageons à fournir un service exceptionnel qui garantit votre sécurité, votre discrétion et votre confort.</p>
            </div>
        </div>
    </div>
@endsection
