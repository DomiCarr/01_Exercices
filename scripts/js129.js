

// ouvrir et fermer une fenêtre
const destination = document.getElementById('destination');

const forward = document.getElementById('forward');

destination.addEventListener('click', () => {
    const destination = window.location.assign('exo29dest.html');
});

forward.addEventListener('click', () => {
    window.history.forward()
});

//création d’un objet Date pour créer une date d’expiration :
const dateExp = new Date();
dateExp.setMonth(dateExp.getMonth() + 1); //nous ajoutons 1 mois à la date

//nous interrogeons l’utilisateur sur son username et son mdp avec window.prompt()
const username = prompt("Username");
const mdp = prompt("Mot de passe");
const nom = prompt("Nom");

//creation des cookies
document.cookie = `username=${username} ; expires=${dateExp.toUTCString()}`;
document.cookie = `mdp=${mdp} ; expires=${dateExp.toUTCString()}`;
document.cookie = `nom=${nom} ; expires=${dateExp.toUTCString()}`;
