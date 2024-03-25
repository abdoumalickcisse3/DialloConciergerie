window.onscroll = () => {
    /*========== sticky navbar ==========*/
    let logo = document.getElementById('logo');


    // Changer l'image du logo lorsque la barre de défilement atteint un certain point
    if (window.scrollY > 100) {
        logo.src = logo1; // Chemin vers la deuxième image du logo
    } else {
        logo.src = logo2; // Chemin vers la première image du logo
    }
};

// Ajouter une classe lorsque l'utilisateur fait défiler la page
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.querySelector('.whatsapp-button').style.display = "block";
    } else {
        document.querySelector('.whatsapp-button').style.display = "none";
    }
}
document.getElementById("whatsappButton").addEventListener("click", function() {
    // Remplacez '123456789' par votre numéro WhatsApp, en incluant le code de pays sans le signe +.
    const phoneNumber = '+221787123843';

    // Générer le lien WhatsApp avec le numéro de téléphone
    const whatsappLink = `https://wa.me/${phoneNumber}`;

    // Rediriger l'utilisateur vers le lien WhatsApp
    window.location.href = whatsappLink;
});