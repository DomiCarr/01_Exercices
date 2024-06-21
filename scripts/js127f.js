export default class Formulaire {

    // Definition du constructeur

    constructor(id) {
        this.id = id;
        this.formulaireHtml = document.getElementById(this.id);
        this.formdata = new FormData(this.formulaireHtml)
        this.answers = new Array();
    }

    // Methode pour récupérer le div parent

    getDiv(id) {
        return document.getElementById(id).parentNode;

    }

    // Methode pour récupérer un élément

    getElement(id) {
        return document.getElementById(id);
    }

    // Methode permettant de masquer un element sans animation

    maskChamp(id) {
        this.getDiv(id).classList.add('masque');
        this.getElement(id).required = false;
    }

    //Methode pour afficher le champ

    showChamp(id) {
        this.getDiv(id).classList.remove('disp');
        this.getDiv(id).classList.add('app')
        this.getElement(id).required = true;
    }

    //Methode pour masquer le champ avec animation
    hideChamp(id) {
        this.getDiv(id).classList.remove('app');
        this.getDiv(id).classList.add('disp')
        this.getElement(id).required = false;
    }

    //Methode pour savoir si un radio est sélectionné

    isSelected(id, value, action, otherAction) {
        this.formdata = new FormData(this.formulaireHtml);
        if (this.formdata.get(id) == value) { action(); }
        else { otherAction(); }

    }

    //Methode pour récupérer les éléments de chaque input
    getAnswers() {
        this.formdata = new FormData(this.formulaireHtml);
        this.formdata.forEach((value, key) => {
            if (value != "" && value != "on") {
                this.answers.push([key, value]);
            };
        }
        )
        return this.answers;
    }
    //Methode pour afficher les résultats dans un alert 
    affAnswers() {
        let chaine = "Recapitulatif\n\n";
        for (let ligne of this.getAnswers()) {
            chaine += `${ligne[0]} : ${ligne[1]}\n`;
        }
        alert(chaine);
    }
}






