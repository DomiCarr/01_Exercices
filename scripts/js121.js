if (true) {
    let a = 10;
    console.log("a=", a);
    let b = 8;
    console.log("b=", b);
    console.log("a+b=", a + b);
    console.log("a-b=", a - b);
    console.log("a*b=", a * b);
    console.log("a/b=", a / b);
    console.log("a%b=", a % b);
    console.log("a**4=", a ** 4);
    console.log("a++=", a++);
    console.log("a=", a);
    let av = a++;
    console.log("a=", a);
    console.log("av=", av);
    let ap = ++a;
    console.log("a=", a);
    console.log("ap=", ap);
    let c = 10;
    console.log("c=", c);
    c += 5;
    console.log("c+5=", c);
    c -= 5;
    console.log("c-5=", c);
    let N = "Nom";
    let P = "Prénom";
    let NP = N + " " + P;
    console.log(N);
    console.log(P);
    console.log(NP);
    let ns = "Peter";
    ns += " Parker";
    console.log("ns: ", ns);

    let lo01 = "A";
    let lo02 = "B";
    let lo03 = "A";

    console.log("lo01: ", lo01);
    console.log("lo02: ", lo02);
    console.log("lo03: ", lo03);
    console.log(lo01, "==", lo02, " : ", lo01 == lo02);
    console.log(lo01, "==", lo03, " : ", lo01 == lo03);
    console.log(lo01, "!=", lo02, " : ", lo01 != lo02);
    console.log(lo01, "!=", lo03, " : ", lo01 != lo03);

    let petit = 1;
    let moyen = 2
    let grand = 3;

    console.log("petit < moyen && moyen < grand", petit < moyen && moyen < grand);
    console.log("petit < moyen && moyen > grand", petit < moyen && moyen > grand);
    console.log("petit < moyen || moyen > grand", petit < moyen || moyen < grand);

    faux = false;
    console.log("faux: ", faux);
    console.log("!faux: ", !faux);

    let marque = "Renault";
    let cv = 100;
    let portes = 4;
    let prix = 8000;

    let condition = ((marque == "Peugeot" || marque == "Renault") && (cv >= 80 && cv <= 100) && (portes != 3) && (prix <= 10000));
    console.log("condition: ", condition);

    let brand = "HP";
    let modele = "Pavillon";
    let stockage = 512;
    let ram = 16;
    let processeur = "intel core i7";

    console.log((brand == "HP" || brand == "Acer") && stockage >= 256 && ram >= 8);

    let p = stockage + (ram * 20);

    let fiche = marque + " " + modele + ", " + stockage + " GO de stockage, " + ram + " GO de ram, processeur " + processeur + ", prix : " + p + " euros";

    console.log(fiche);

    const value = "15";
    console.log("typeof value: ", typeof value);
    if (typeof value == "number") {
        console.log(value, " est un nombre");
    }
    else {
        console.log(value, " n'est PAS un nombre");
    }

    const vmarque = "Ferrari";
    const vcv = 300;
    const vportes = 5;
    let vprix;

    if ((vmarque == "Peugeot" || vmarque == "BMW") && vcv <= 150) {
        vprix = (vcv * 100 + vportes * 30);
        console.log("Prix = " + vprix);
    }
    else if (vmarque == "Peugeot" || vmarque == "BMW") {
        vprix = ((vcv * 100 + vportes * 30) + 2000);
        console.log("Prix taxé = " + vprix);
    }
    else if (vmarque == "Ferrari") {
        if (vcv > 400) {
            vprix = ((vcv * 100 + vportes * 30) + 10000);
            console.log("Prix Ferrari puissante = " + vprix);
        }
        else {
            vprix = ((vcv * 100 + vportes * 30) + 4000);
            console.log("Prix Ferrari = " + vprix);
        }
    }
    else {
        console.log("La marque " + vmarque + " n'est pas valide");
    }

    const omarque = "Apple";

    switch (omarque) {
        case "Apple":
            console.log("Smartphone haut de gamme avec système IOS");
            break;
        case "Samsung":
            console.log("Smartphone haut de gamme avec système Android");
            break;
        case "Xiaomi":
            console.log("Smartphone bon marché avec système Android");
            break;
        case "Huawei":
            console.log("Smartphone bon marché avec système Android");
            break;
        default:
            console.log("Marque non référencée");
            break;
    }

    let privilege = "toto";
    let privilegeNb;
    switch (privilege) {
        case "administrateur":
            console.log("Admin");
            privilegeNb = 1;
            break;
        case "redacteur":
            console.log("Redac");
            privilegeNb = 2;
            break;
        case "utilisateur":
            console.log("user");
            privilegeNb = 3;
            break;
        default:
            console.log("Access denied");
            break;
    }

    const oomarque = "Apple";

    const proc = "M2";

    const ooram = 8;

    const stock = 256;

    if ((oomarque == "Apple" || oomarque == "HP" || oomarque == "Microsoft") && ooram >= 4 && stock >= 256) {
        console.log("L'ordinateur est pris en charge");
        if (oomarque == "Apple") {
            switch (proc) {
                case "Intel core I7":
                    console.log("Le temps de réparation est de 25 jours max");
                    break;
                case "M1":
                    console.log("Le temps de réparation est de 10 jours max");
                    break;
                case "M2":
                    console.log("Le temps de réparation est de 20 jours max");
                    break;
                default:
                    console.log("Le temps de réparation est de 35 jours max");
                    break;
            }
        }
        else {
            console.log("Le temps de réparation est de 20 jours max");
        }
    }
    else {
        console.log("L'ordinateur n'est pas pris en charge");
    }
}
