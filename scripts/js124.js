console.log("==============================================");
console.log("---------------- START -----------------------");
console.log("==============================================");
let d = new Date();
console.log(d.getDate(), "/", d.getMonth(), ":", d.getHours(), "h", d.getMinutes(), "m", d.getSeconds(), "s", d.getMilliseconds(), "ms");
console.log("-----------------------------------------");
console.log(" ");

console.log("-----------------------------------------");
console.log("--------- Exo: Objets      ");
console.log("-----------------------------------------");

console.log(Object.getOwnPropertyNames(Number));

let a = new Number(1);
console.log(a.valueOf());

for (let i = 1; i < 20; i++) { console.log("Random: ", Math.random()); }


console.log("-----------------------------------------");
console.log("--------- Exo: Ajout propriétés et methodes      ");
console.log("-----------------------------------------");

console.log(Object.getOwnPropertyNames(Number.prototype));
Number.prototype.message = "Hello world";
console.log(Object.getOwnPropertyNames(Number.prototype));
Number.prototype.aff = function () { console.log("C'est une fonction de l'objet number"); }
let nb = new Number(1);
console.log("nb.message: ", nb.message);
nb.aff();


console.log("-----------------------------------------");
console.log("--------- Exo: objets : this      ");
console.log("-----------------------------------------");

Boolean.prototype.fra = function () {
    if (this.valueOf()) { return "vrai"; }
    else { return "faux"; }
}

let b = new Boolean(true);

console.log(b.fra());

let ordino = {
    marque: "HP",
    model: "PAVILLON",
    aff_ordi: function () { console.log(this.marque, " ", this.model) }
}

ordino.aff_ordi();


console.log("//////////////////////////////////////////////");
console.log("                     END    ");
console.log("//////////////////////////////////////////////");
console.log(" ");



