@extends( 'layout' )
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- Styles -->

</head>

<body class="antialiased">
<main>
    <section class="cntc">
        <div class="containerh ctc">
            <div
                style="color: black; font-size: 32px; font-family: Poppins; font-weight: 700; line-height: 44px; word-wrap: break-word">
                Nous Contacter</div>
            <div
                style="color: black; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 44px; word-wrap: break-word">
                Nous proposons des services uniques adaptés à tout type de confort</div>
            <div class=" contact-item">
    
                <div class="cntc-inner">
    
                   <form method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="styl2" style="width: 520px; height: 547px; position: relative">
                        <div
                            style="width: 240px; height: 65px; padding-left: 70px; padding-right: 70px; padding-top: 20px; padding-bottom: 20px; left: 0px; top: 482px; position: absolute; background: black; border-radius: 6px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <div 
                                style="text-align: center; color: #DAA520; font-size: 20px; font-family: Poppins; font-weight: 700; word-wrap: break-word">
                                <button type="submit">Envoyer</button></div>
                        </div>
                        <div style="width: 520px; height: 79px; left: 0px; top: 0px; position: absolute">
                            <input type="text" placeholder="Sophi" name="name"
                                style="padding-left: 30px;width: 520px; height: 60px; left: 0px; top: 19px; position: absolute; background: white; border-radius: 8px; border: 1px #595959 solid">
                            <div
                                style="left: 0px; top: 0px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; text-transform: uppercase; word-wrap: break-word">
                                Prénom & Nom</div>
                        </div>
                        <div style="width: 520px; height: 79px; left: 0px; top: 99px; position: absolute">
                            <input type="email" placeholder="exemple@mail.com"name="email"
                                style="padding-left: 30px;width: 520px; height: 60px; left: 0px; top: 19px; position: absolute; background: white; border-radius: 8px; border: 1px #C5D0EA solid">
                            <div
                                style="left: 0px; top: 0px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; text-transform: uppercase; word-wrap: break-word">
                                Email</div>
                        </div>
                        <div style="width: 520px; height: 79px; left: 0px; top: 198px; position: absolute">
                            <input type="date" placeholder="21 Mai 2023 -09H-30" name="date"
                                style="padding-left: 30px;width: 520px; height: 60px; left: 0px; top: 19px; position: absolute; background: white; border-radius: 8px; border: 1px #C5D0EA solid">
                            <div
                                style="left: 0px; top: 0px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; text-transform: uppercase; word-wrap: break-word">
                                Choisir la date</div>
                        </div>
                        <div style="width: 520px; height: 164px; left: 0px; top: 297px; position: absolute">
                            <textarea placeholder="Votre message" name="message" 
                                style="padding-left: 30px;padding-top: 20px;width: 520px; height: 145px; left: 0px; top: 19px; position: absolute; background: white; border-radius: 8px; border: 1px #C5D0EA solid"></textarea>
                            <div
                                style="left: 0px; top: 0px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 600; text-transform: uppercase; word-wrap: break-word">
                                Message</div>
                        </div>
                    </div>
                   </form>
    
                </div>
    
                <div class="inner-cntc" style="margin-top: -86px;">
                    <img src="/images/blog info contact 3.59.52 PM.png" alt="" />
                </div>
            </div>
        </div>
    </section>
</main>
</body>