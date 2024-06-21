console.log("-----------------------------------------");
console.log("--------- Exo: Boucles     ");
console.log("-----------------------------------------");
const nbmax = 50;
let liste = "";
for (let i = 1; i <= nbmax; i++) {
    if ((i % 4) == 0) {
        liste = liste + i + " ";
        console.log("liste: ", liste)
    }
}

console.log("-----------------------------------------");
console.log("--------- Exo: Tableaux     ");
console.log("-----------------------------------------");
const nombre = 10;

let table = [];

for (let i = 1; i <= 10; i++) {
    let resultat = nombre * i;
    table.push(resultat);
}
for (let i = 0; i < 10; i++) {
    console.log(nombre, "x", i + 1, "=", table[i])
}

console.log("-----------------------------------------");
console.log("--------- Exo: boucle for in ");
console.log("-----------------------------------------");
var obj = { a: 1, b: 2, c: 3 };

for (let prop in obj) {
    console.log(prop);
    console.log(`obj.${prop} = ${obj[prop]}`);
}


console.log("-----------------------------------------");
console.log("--------- Exo: boucle  ");
console.log("-----------------------------------------");
let nombres = "";
nb = 120;

for (let nb = 120; nb < 131; nb++) {
    nombres += nb + " ";
}
console.log(nombres);

console.log("-----------------------------------------");
console.log("--------- Exo: boucle for of");
console.log("-----------------------------------------");
let tab_plantes = ["saule", "figuier", "platane", "pommier", "poirier"];
let liste_plantes = "";
for (let plante of tab_plantes) {
    console.log(plante);
    liste_plantes += plante + ", ";
}
console.log(liste_plantes);

console.log("-----------------------------------------");
console.log("--------- Exo: boucle for of           ");
console.log("-----------------------------------------");

let tab_ordi = ["Apple", "Acer", "HP", "Packard"];
for (let ordi of tab_ordi) {
    if ((ordi == "Apple") || (ordi == "HP") || (ordi == "Dell") || (ordi == "Microsoft")) {
        console.log(ordi, " Valide");
    }
    else {
        console.log(ordi, " NON VALIDE");
    }

}

console.log("-----------------------------------------");
console.log("--------- Exo: boucle for in        ");
console.log("-----------------------------------------");
let ordi = new Object();
ordi.ram = 256;
ordi.stock = 512;

for (let pp in ordi) {
    console.log(pp, " ", ordi[pp]);
}

console.log("-----------------------------------------");
console.log("--------- Exo: boucle while       ");
console.log("-----------------------------------------");

let a = 110;

while (a >= 100 && a <= 150) {

    console.log(a);
    a += 10;

    if (a == 130) {
        continue;
    }
    else if (a == 140) {
        break;
    }

    console.log("nv");
}

console.log("fini");

console.log("-----------------------------------------");
console.log("--------- Exo: boucle: diviseurs entiers      ");
console.log("-----------------------------------------");

const list = [24, 67, 18];
for (n of list) {
    console.log(n);
    let d = 1;
    let div = "";
    while (d <= n) {
        if ((n % d) == 0) {
            div = div + d + " ";
        }
        d++
    }
    console.log("Les diviseurs de", n, "sont:", div);
}




console.log("-----------------------------------------");
console.log("--------- Exo: xxxxxxx      ");
console.log("-----------------------------------------");




