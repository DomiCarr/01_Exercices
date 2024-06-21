var counter = 1;
var animalContainer = document.getElementById("animal-info");
var btn = document.getElementById("btn");

btn.addEventListener("click", function () {
    var pet = new XMLHttpRequest();
    pet.open('GET', 'https://learnwebcode.github.io/json-example/animals-' + counter + '.json');
    pet.onload = function () {
        if (pet.status >= 200 && pet.status < 400) {
            var ourData = JSON.parse(pet.responseText);
            aff(ourData);
        } else {
            console.log("connected but error");
        }
    }
    pet.onerror = function () {
        console.log("connection error");
    };
    pet.send();
    counter++;
    if (counter > 3) {
        document.getElementById('btn').style.visibility = 'hidden';;
    }
});

function aff(data) {
    var htmlString = "";
    for (i = 0; i < data.length; i++) {
        htmlString += data[i].name + " is a " + data[i].species + " that likes to eat ";
        for (ii = 0; ii < data[i].foods.likes.length; ii++) {
            if (ii == 0) {
                console.log("IF ii: ", ii);
                htmlString += data[i].foods.likes[ii];
            }
            else {
                console.log("ELSE ii:", ii);
                htmlString += " and " + data[i].foods.likes[ii];
            }
            htmlString += '.</p>';
        }

        animalContainer.insertAdjacentHTML('beforeend', htmlString);
    }
}