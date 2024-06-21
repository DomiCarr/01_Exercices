const mapromesse = new Promise((resolve, reject) => {
    // code asynchrone de la promesse

    setTimeout(() => {
        resolve("Promesse 1 : attendu 2 secondes");
    }, 2000);
});

const promesse2 = new Promise((resolve, reject) => {
    setTimeout(() => {
        resolve("Promesse 2: attendu 4 secondes");
    }, 4000);
});



mapromesse.then(resultat => {
    // reussite
    // va afficher nos avons attendu 2 secondes
    console.log("resultat: ", resultat);
    return promesse2;
})
    .then(result => {
        // va afficher nos avons attendu 4 secondes
        console.log("result ", result);

    })
    .catch(erreur => {
        //echec
        console.log("erreur: ", erreur);
    })
    .finally(() => {
        //après le succès ou l'échec
        console.log("Promesses terminées ");
    })

// -------------------------------------------------------------
// Executer plusieur promesses en //

const promise1 = new Promise((resolve, reject) => {
    // Code asynchrone
});

const promise2 = new Promise((resolve, reject) => {
    // Code asynchrone
});

Promise.all([promise1, promise2])
    .then(results => {
        // Code à exécuter après la résolution de toutes les promesses
    })
    .catch(error => {
        // Code à exécuter en cas d'erreur
    });