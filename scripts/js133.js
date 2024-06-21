// Ecrire fonction multiply en callback

function multiply(num1, num2, callback) {
    let result = num1 * num2;
    callback(result);
}

multiply(2, 8, (result) => { console.log("Le résultat est : " + result); });

// transformer fonction en asynchrone

async function multiply(num1, num2, callback) {
    let result = num1 * num2;
    callback(result);
}

multiply(2, 8, (result) => { console.log("Le résultat est : " + result); });

