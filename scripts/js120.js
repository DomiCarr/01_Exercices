/*const btn = document.getElementById("btn");

btn.addEventListener('click', function () {
    console.log("bouton cliqué: ");
});
*/

const btn = window.document.getElementById('btn');
btn.addEventListener('click', () => {
    window.alert("Le bouton a été cliqué");
    document.getElementById('btn').style.visibility = 'hidden';
})

/*
btn.addEventListener("click", function (callback) {
    console.log("bouton cliqué;");
    btn.classList.add("hide-me");
    callback();
});

document.getElementById('btn').style.visibility = 'hidden';

*/