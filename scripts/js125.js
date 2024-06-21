console.log("==============================================");
console.log("---------------- START -----------------------");
console.log("==============================================");
let d = new Date();
console.log(d.getDate(), "/", d.getMonth(), ":", d.getHours(), "h", d.getMinutes(), "m", d.getSeconds(), "s", d.getMilliseconds(), "ms");
console.log("-----------------------------------------");
console.log(" ");

console.log("-----------------------------------------");
console.log("--------- Exo: CLASSES      ");
console.log("-----------------------------------------");

class Ordi {
    // propriétés d'instance (pas obligatoire mais bonne pratique)
    marque;
    ram;
    stockage;
    // proprietes statiques
    static Content = "Ordinateurs";

    type = "laptop";
    clavier = "azerty";

    constructor(marque, ram, stockage) {
        this.marque = marque;
        this.ram = ram;
        this.stockage = stockage;
    }
    // methodes statiques
    static definition() {
        console.log("Ceci est la definition de l'ordi");
    }
    //définition de méthodes d'instance
    ficheProduit() {
        console.log("Marque : " + this.marque + "\n" + "Mémoire vive : " + this.ram + "\n" + "Stockage : " + this.stockage);
    }
}

let ordi1 = new Ordi("Apple", 8, 512);
let ordi2 = new Ordi("HP", 16, 256);

console.log("ORDI 1:");
console.log("marque: ", ordi1.marque);
console.log("ram: ", ordi1.ram);
console.log("stockage: ", ordi1.stockage);
console.log("ORDI 2:");
console.log("marque: ", ordi2.marque);
console.log("ram: ", ordi2.ram);
console.log("stockage: ", ordi2.stockage);
console.log("FICHE PRODUIT ORDI 1: ");
ordi1.ficheProduit();
console.log("FICHE PRODUIT ORDI 2: ");
ordi2.ficheProduit();


console.log("-----------------------------------------");
console.log("--------- Exo: Classes      ");
console.log("-----------------------------------------");

class Tel {
    // propriete statique
    static TYPE_TEL = "Smartphone";
    // propriété de classe
    bleutooth = true;
    // constructeur
    constructor(tstockage, tram, tphoto) {
        this.tstockage = tstockage;
        this.tram = tram;
        this.tphoto = tphoto;
    }
}

console.log("Type Tél: ", Tel.TYPE_TEL);

const tel01 = new Tel(64, 4, 12);
const tel02 = new Tel(128, 3, 12);

console.log(tel01.tstockage);
console.log(tel02.tstockage);

console.log("-----------------------------------------");
console.log("--------- Exo: Getters and Setters      ");
console.log("-----------------------------------------");

class Computer {
    constructor(mark, model) {
        this._mark = mark;
        this._model = model;
    }
    get mark() { return this._mark; }
    get model() { return this._model; }
    get modelC() { return this.mark + " " + this.model; }
    set mark(value) { this._mark = value; }
    set model(value) { this._model = value; }
    set modelC(value) {
        let tab = value.split(" ");
        this._mark = tab[0];
        this._model = tab[1];
    }
}

const computer1 = new Computer("HP", "PAVILLON");
console.log("marque computer 1: ", computer1.mark);
console.log("modele computer 1: ", computer1.model);
console.log("modele complet computer 1: ", computer1.modelC);

computer1.modelC = "APPLE MACBOOK";

console.log("marque computer 1: ", computer1.mark);
console.log("modele computer 1: ", computer1.model);
console.log("modele complet computer 1: ", computer1.modelC);


console.log("//////////////////////////////////////////////");
console.log("                     END    ");
console.log("//////////////////////////////////////////////");
console.log(" ");



