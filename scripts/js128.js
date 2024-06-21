// Afficher une alerte

window.addEventListener('load', function () {
    alert("Bonjour, bienvenue sur la page !");
});

// ouvrir et fermer une fenêtre
const button = window.document.getElementById('bouton');
button.addEventListener('click', () => {
    const destination = window.open('../exo28dest.html', 'destination', 'width = 400, height = 400,left=200,top=200');
    destination.addEventListener('load', () => {
        const button2 = destination.document.getElementById('bouton2');
        button2.addEventListener('click', () => {
            destination.close();
        })
    })
})

// Afficher une alerte

const button3 = window.document.getElementById('bouton3');
button3.addEventListener('click', () => {
    window.alert("Le bouton 3 a été cliqué");
})

// Saisir un texte sur un prompt puis l'afficher dans une alerte

const button4 = window.document.getElementById('bouton4');
button4.addEventListener('click', () => {
    let mot = window.prompt("Quel mot afficher ?", "mot de votre choix");
    window.alert(mot);
})

// Bout de code brut jeté par Studi sans aucune explication ....

let button5 = document.createElement('button5');
button5.innerHTML = "button5 ";
document.body.appendChild(button5);
button5.addEventListener('click', () => {
    window.open("https://www.google.com", 'google', 'width=500, height=500');
})

// Autre bout de code brut jeté par Studi sans aucune explication ....


let close = document.createElement('button6');
close.innerHTML = "close";
document.body.appendChild(close);
close.addEventListener('click', () => {
    window.close();
})

//Affichage de propriétés de window.location (le mot window est facultatif)

console.log("window location href: ", window.location.href);
console.log("window location protocol: ", window.location.protocol);
console.log("window location host: ", window.location.host);
console.log("window location pathname: ", window.location.pathname);

