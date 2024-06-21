const now = new Date();
console.log(now.toString());
console.log("-------------------------------------------------------------------------");

const date = new Date("2023-01-17T12:30:00+04:00");

console.log("date.toString(): ", date.toString());
console.log("date.toDateString(): ", date.toDateString());
console.log("date.toTimeString(): ", date.toTimeString());
console.log("date.toISOString(): ", date.toISOString());
console.log("date.toUTCString(): ", date.toUTCString());
console.log("date.valueOf()", date.valueOf());
console.log("date.toLocaleDateString()", date.toLocaleDateString());
console.log("date.toLocaleDateString(fr-CA)", date.toLocaleDateString("fr-CA"));
console.log("date.toLocaleTimeString()", date.toLocaleTimeString());
console.log("date.toLocaleTimeString(fr-CA)", date.toLocaleTimeString("fr-CA"));
console.log("date.toLocaleString()", date.toLocaleString());
console.log("date.toLocaleString(fr-CA)", date.toLocaleString("fr-CA"));

let opt1 = { day: 'numeric', weekday: 'short', month: 'long', year: 'numeric' };
console.log(date.toLocaleDateString("fr-FR", opt1)); //ven. 1 décembre 2023

let opt2 = { day: 'numeric' };
console.log(date.toLocaleDateString("fr-FR", opt2));

console.log("date.getFullYear()", date.getFullYear());
console.log("date.getMonth()", date.getMonth());