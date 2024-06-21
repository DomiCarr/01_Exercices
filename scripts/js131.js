// exemple de callback avec affichage différé des données

let username = "";
function wait(fonction, millisecondes) {
    return new Promise((resolve) => {
        setTimeout(() => {
            fonction();
            resolve();
        }, millisecondes);
    })
}

async function affUsername(callback) {
    await wait(() => { username = "Peter Parker" }, 2000);
    callback();
}

console.log("Connection.....");
affUsername(() => { console.log('Bonjour ' + username) });
console.log("Connection de l'utilisateur");

// recuperer des données sur ue API sur le web

const apiKey2 = 'd408b2585e4efe44f7725a1691a98ff2';

async function recupDonees(city, callback) {
    try {
        const response = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey2}&units=metric`);
        const data = await response.json();
        return callback(data);
    } catch {
        console.log("error");
    }
}

function affTemp(dt) {
    console.log(dt.name + " " + dt.main.temp + " °C");
}

recupDonees('Paris', affTemp);