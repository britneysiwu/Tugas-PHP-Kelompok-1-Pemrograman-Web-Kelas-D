const term = document.querySelector('.term');
const definition = document.querySelector('.definition')
const checkButton = document.querySelector('.check');
const nextButton = document.querySelector('.next');
const hideButton = document.querySelector('.hide');

var words = {
    Otodidak: "Belajar sendiri tanpa bantuan orang lain",
    Retorika: "Kepandaian dalam berbicara",
    Loyalitas: "Kesungguhan dalam bekerja",
    Transplantasi: "Pemindahan dari satu tempat ke tempat lain biasanya untuk pemindahan organ",
    Filsuf: "Orang yang berpikir secara filsafat",
    Analogi: "Persamaan antara dua hal yang berlainan",
    Aspirasi: "Keinginan atau kehendak untuk mendapatkan sesuatu",
    Prioritas: "Hal yang diutamakan untuk dikerjakan"
}

var data = Object.entries(words)

function getRandomWord() {
    randomTerm = data[Math.floor(Math.random() * data.length)]
    term.innerHTML = `<h3>${randomTerm[0]}</h3>`;
    definition.innerHTML = `<h3>${randomTerm[1]}</h3`;
}


checkButton.addEventListener('click', function() {
    definition.style.display = 'block'; 
});

nextButton.addEventListener('click', function() {
    getRandomWord();
});

hideButton.addEventListener('click', function() {
    definition.style.display = 'none';
});