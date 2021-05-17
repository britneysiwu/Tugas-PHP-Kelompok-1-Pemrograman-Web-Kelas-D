const colButton = document.querySelector('.col')
const button1 = document.querySelector('.check')
const button2 = document.querySelector('.next')
const button3 = document.querySelector('.hide')
const terma = document.querySelector(".term")
const body = document.querySelector('body')
const titl = document.querySelector(".title")
const defi = document.querySelector(".definition")
const colors = ['#8675a9', '#fabea7', '#c2e8ce', '#c8e7ed', '#e0ffcd'] /*ungu,pink,blugreen,biru,greenpastel*/
const whitey = ['#ffffff']


colButton.addEventListener('click', changeBackground)

function changeBackground(){
const colorIndex= parseInt(Math.random()*colors.length)
if (colors[colorIndex] === '#8675a9' || colors[colorIndex] === '#fabea7') {
 body.style.backgroundColor = colors[colorIndex]
 button1.style.backgroundColor = [whitey];
 button1.style.color = colors[colorIndex];
button2.style.color = colors[colorIndex];
button2.style.backgroundColor = [whitey];
button3.style.color = colors[colorIndex];
button3.style.backgroundColor = [whitey];
colButton.style.color = colors[colorIndex];
colButton.style.backgroundColor = [whitey];
terma.style.color = colors[colorIndex];
titl.style.color = [whitey];
term.style.backgroundColor = [whitey];
term.style.borderColor = [whitey];
defi.style.backgroundColor = '#0f0f0f';
defi.style.color = [whitey];
defi.style.borderColor = '#0f0f0f';
} else {
body.style.backgroundColor = colors[colorIndex]
button1.style.color = colors[colorIndex];
button1.style.backgroundColor = '#0f0f0f';
button2.style.color = colors[colorIndex];
button2.style.backgroundColor = '#0f0f0f';
button3.style.color = colors[colorIndex];
button3.style.backgroundColor = '#0f0f0f';
colButton.style.color = colors[colorIndex];
colButton.style.backgroundColor = '#0f0f0f';
terma.style.color = colors[colorIndex];
titl.style.color = '#0f0f0f';
term.style.backgroundColor = '#0f0f0f';
term.style.borderColor = '#0f0f0f';
defi.style.backgroundColor = [whitey];
defi.style.color = '#0f0f0f';
defi.style.borderColor = [whitey];
}
}