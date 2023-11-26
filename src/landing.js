import $ from 'jquery';
import Scrollify from 'jquery-scrollify';

window.jQuery = $;

window.onload = function () {
  showTime();
  showTemperature();
  window.scrollTo(0,1);
};

placeRandomImages();

$.scrollify({
  section : ".scrollify",
  sectionName : "section-name",
  scrollSpeed: 800,
  touchScroll: true
});

function showTime(){
  let date = new Date();
  let h = date.getHours(); // 0 - 23
  let m = date.getMinutes(); // 0 - 59
  let s = date.getSeconds(); // 0 - 59

  h = (h < 10) ? "0" + h : h;
  m = (m < 10) ? "0" + m : m;
  s = (s < 10) ? "0" + s : s;

  let time = h + ":" + m + ":" + s;
  document.getElementById("MyClockDisplay").innerText = time;
  document.getElementById("MyClockDisplay").textContent = time;

  setTimeout(showTime, 1000);
}

function showTemperature() {
  const apiKey = "4d8fb5b93d4af21d66a2948710284366";
  const url = `https://api.openweathermap.org/data/2.5/weather?q=barcelona&appid=${apiKey}&units=metric`;
  fetch(url).then(response => response.json()).then(data => {
    document.getElementById('temperature').innerText = Math.round(data.main.temp);
    document.getElementById('weather-icon').src = 'http://openweathermap.org/img/wn/' + data.weather[0].icon + '@2x.png';
  });
}

function placeRandomImages(){
  document.querySelectorAll('.random-img').forEach((img, index) => {
    setTimeout(() => {
      let height, width = 0;

      if(window.innerWidth < 700) {
        height = window.innerHeight*Math.random()*0.6;
        width = window.innerWidth*Math.random()*0.70 - window.innerWidth*0.2;
      } else {
        height = window.innerHeight*Math.random()*0.3;
        width = window.innerWidth*Math.random()*0.80 - window.innerWidth*0.1;
      }

      img.style.top = height + 'px';
      img.style.left = width + 'px';
      img.classList.toggle('hidden')
    }, 1000*(index));
  });
}

let menuBtn = document.getElementById('menu-btn');
let menuItems = document.getElementById('menu-items');

menuBtn.addEventListener('click', () => {
  menuItems.classList.toggle('hidden');
  if(menuItems.classList.contains('hidden')) {
    menuBtn.innerText = 'Menú';
  } else {
    menuBtn.innerText = 'Cerrar';
  }
});

menuItems.querySelectorAll('a').forEach((element) => {
  element.addEventListener('click', (e) => {
    menuItems.classList.toggle('hidden');
    menuBtn.innerText = 'Menú';
  })
});

document.querySelectorAll('a').forEach((element) => {
  element.addEventListener('click', (e) => {
    let anchor = "#" + e.target.innerText;
    console.log(anchor.toLowerCase())
    $.scrollify.move(anchor.toLowerCase());

    if(anchor.toLowerCase() === '#undefined') $.scrollify.move('#1');
  })
});

window.addEventListener('load', (event) => {
  document.querySelector('body').classList.remove('opacity-0')
});