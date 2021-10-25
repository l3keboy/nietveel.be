const dynamic = document.getElementById("dynamic");

text_array = [
    "NietVeel.be",
    "NietVeel.be",
    "NietVeel.be",
    "NietVeel.be"
]
var randomItem = text_array[Math.floor(Math.random() * text_array.length)];

dynamic.innerHTML = randomItem;
