const now = new Date();
console.log(now.toString());
console.log("-------------------------------------------------------------------------");

let nom = "";

//setTimeout qui exécute une fonction anonyme après 1 seconde en asynchrone

window.setTimeout(() => {
    nom = "PeterParker"
}, 1000);

//affiche 'Bonjour', car exécuté en synchrone, directement après, username n’ayant pas encore été définie sur "PeterParker"
console.log('Bonjour ' + nom);

//affiche 'Bonjour PeterParker' car exécuté en asynchrone 1 seconde après la fonction du setTimeout précédent
window.setTimeout(() => {
    console.log('Bonjour ' + nom);
}, 2000);

// fonction asynchrone qui attend 3 secondes avant d’afficher

async function sayHello() {
    await new Promise((resolve) => { setTimeout(resolve, 3000) });
    console.log("Hello World");
}
sayHello();

// fonction asynchrone qui attend 3 secondes avant d’afficher


function wait(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function logMessage(message) {
    await wait(2000); // attendre 2 secondes
    console.log(message);
}

async function run() {
    console.log('Début du programme');
    logMessage('Message au milieu');
    logMessage('Fin du programme');
}

run();

//

function wwait(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function logMessage() {
    await wwait(2000); // attendre 2 secondes
    console.log('Bonjour');
}

logMessage();
console.log('Fin du programme');