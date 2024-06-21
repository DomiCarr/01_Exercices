console.log("==============================================");
console.log("---------------- START -----------------------");
console.log("==============================================");
let d = new Date();
console.log(d.getDate(), "/", d.getMonth(), ":", d.getHours(), "h", d.getMinutes(), "m", d.getSeconds(), "s", d.getMilliseconds(), "ms");
console.log("-----------------------------------------");
console.log(" ");

console.log("-----------------------------------------");
console.log("--------- Exo: Fonctions      ");
console.log("-----------------------------------------");
function perimetreRectangle(largeur, longueur) {
    let perimetre = 2 * largeur + 2 * longueur;
    console.log("Le perimetre du rectangle de ", largeur, "sur", longueur, " est de " + perimetre + " cm2");
    return perimetre;
}

perimetreRectangle(4, 5);

perimetreRectangle(2, 4);

perimetreRectangle(1, 2);

perimetreRectangle(18, 20);

console.log(perimetreRectangle(18, 20));


console.log("-----------------------------------------");
console.log("--------- Exo: symboles      ");
console.log("-----------------------------------------");
let sy1 = Symbol('marque');

console.log(sy1); //Symbol(marque)

console.log(typeof sy1); //symbol

console.log("-----------------------------------------");
console.log("--------- Exo: null      ");
console.log("-----------------------------------------");

let variable = null;
console.log(variable); //null
console.log(typeof variable); //object

console.log("-----------------------------------------");
console.log("--------- Exo: undefined      ");
console.log("-----------------------------------------");
let variable2;
console.log(variable2); //undefined
console.log(typeof variable2); //undefined

console.log("-----------------------------------------");
console.log("--------- Exo: Objet      ");
console.log("-----------------------------------------");

let ordi = new Object();

ordi = {
    marque: "HP",
    ram: 8,
    stockage: 256,
    proc: "Intel",
    demar: function () { console.log("Démarrage"); },
    eteint: function () { console.log("Exteind"); }
}

console.log("marque:", ordi.marque);
console.log("ram:", ordi.ram);
ordi.demar();

console.log(typeof ordi);

console.log("-----------------------------------------");
console.log("--------- Exo: Objet number      ");
console.log("-----------------------------------------");

const nombre = new Number(12465);
console.log("nombre: ", nombre);
console.log("MIN: ", Number.MIN_VALUE);
console.log("MAX: ", Number.MAX_VALUE);

const a = Number(10);
const b = Number(20);
console.log("a+b: ", a + b);

console.log(Object.getOwnPropertyNames(Number.prototype));

const x = new Number(13578123456);

console.log(x.toExponential()); //1.3578e+4
console.log(x.toExponential(2)); //1.36e+4
console.log(x.toExponential(3)); //1.36e+4
console.log(x.toExponential(4)); //1.36e+4

const y = new Number(13578);
let z = y.valueOf();

console.log("y: ", y); //Number 13578
console.log("z: ", z); //Number 13578
console.log("y+1: ", y + 1);
console.log("y+z: ", y + z);

console.log("-----------------------------------------");
console.log("--------- Exo: Number      ");
console.log("-----------------------------------------");

const n1 = new Number(54);
const n2 = 79;
if (Number.isInteger(n2)) {
    console.log(n2, " is an interger");
};

console.log("valueof n1: ", n1.valueOf());

const n3 = new Number(3167830918);

console.log("la longueur de ", n3.valueOf(), " est: ", n3.toString().length);


console.log("-----------------------------------------");
console.log("--------- Exo: Objet String      ");
console.log("-----------------------------------------");

let chaine = "Ceci est une chaine de caractères";
let obj_chaine = new String(chaine);
console.log("chaine: ", chaine);
console.log("Objet chaine: ", obj_chaine);
console.log("Longueur de la chaine: ", obj_chaine.length);

let list = new String("peuplier;saule;bouleau;chene");
console.log(list.split(";"));

console.log(list.slice(9, 10));
let index = 9;
console.log(`Le caractère à l’index ${index} est ${list.charAt(index)}`);

console.log("-----------------------------------------");
console.log("--------- Exo: Objet Array      ");
console.log("-----------------------------------------");

let tableau = ['a', 'b', 'c']; // constructeur ARRAY appelé en arrière plan
console.log("Tableau: ", tableau);
console.log("Longueur Tableau: ", tableau.length);

let nouvelle_longueur = tableau.push('d', 'e');
console.log("Tableau modifié: ", tableau);
console.log("Nouvelle longueur Tableau:", nouvelle_longueur);


// Crée une chaîne de caractères contenant les noms des villes séparées par des virgules
let mesDonnees = 'Paris, Londres, Berlin, Rome, Madrid';

// Utilise la méthode split() pour transformer la chaîne en un tableau en se basant sur le séparateur (la virgule suivie d'un espace)
let monTableau = mesDonnees.split(', ');

// Affiche la longueur du tableau (le nombre d'éléments)
console.log(monTableau.length);

// Affiche la chaîne de caractères initiale (mesDonnees)
console.log(mesDonnees);

// Affiche le tableau créé à partir de la chaîne de caractères (monTableau)
console.log(monTableau);

// Affiche le premier élément du tableau (l'index 0)
console.log(monTableau[0]);

// Affiche le dernier élément du tableau (l'index égal à la longueur du tableau moins 1)
console.log(monTableau[monTableau.length - 1]);

// Utilise la méthode join() pour fusionner les éléments du tableau en une nouvelle chaîne de caractères (myNewString)
let myNewString = monTableau.join(', ');
console.log(myNewString);

// Crée un tableau contenant les noms des joueurs
let nomsDesJoueurs = ["Neymar", "Kylian", "Cristiano", "Lionel"];

// Utilise la méthode toString() pour convertir le tableau des noms des joueurs en une chaîne de caractères
console.log(nomsDesJoueurs.toString());

console.log("-----------------------------------------");
console.log("--------- Exo: ARRAY      ");
console.log("-----------------------------------------");

// creation tableau
let lordi = new Array("ACER", "LENOVO", "HP");
console.log(lordi);
// ajour un element a la fin
lordi.push("PBell");
console.log(lordi);
// suppression dernier element
lordi.pop();
console.log(lordi);
// ajout un element au debut
lordi.unshift("APPLE", "PBell");
console.log(lordi);
// suppression premier element
lordi.shift();
console.log(lordi);
// Supprimer un élément du tableau à partir de son index
lordi.splice(lordi.indexOf("LENOVO"), 1);
console.log(lordi);

console.log("//////////////////////////////////////////////");
console.log("                     END    ");
console.log("//////////////////////////////////////////////");
console.log(" ");



