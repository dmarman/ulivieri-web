import $ from 'jquery';
import * as ScrollMagic from 'scrollmagic'; // Or use scrollmagic-with-ssr to avoid server rendering problems
import { TweenMax, TimelineMax } from 'gsap'; // Also works with TweenLite and TimelineLite
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

window.jQuery = $;

window.onload = function () {
  showTime();
  showTemperature();

  let controller = new ScrollMagic.Controller();
  let $scroller = $("#scroller");

  // Set the scroller at -50vh
  TweenMax.set($scroller, { y: -window.innerHeight/2 });
  let tween_scroller = TweenMax.to($scroller, window.innerHeight/2, { y: 0});

  let scene1 = new ScrollMagic.Scene({
    duration: window.innerHeight,
    reverse: true, // allows the effect to trigger when scrolled in reverse direction
  }).setTween(tween_scroller)
    //.addIndicators() // add indicators (requires plugin)
    // trigger a TweenMax.to tween
    .addTo(controller);
};

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

let menuBtn = document.getElementById('menu-btn');
let menuItems = document.getElementById('menu-items');

menuBtn.addEventListener('click', () => {
  menuItems.classList.toggle('hidden');
  if(menuItems.classList.contains('hidden')) {
    menuBtn.innerText = 'Menú';
    document.getElementById('menu-btn').classList.remove('bg-white');
    document.getElementById('site-header').style.backgroundColor = 'transparent';
  } else {
    menuBtn.innerText = 'Cerrar';
    document.getElementById('menu-btn').classList.add('bg-white');
    document.getElementById('site-header').style.backgroundColor = 'white';
  }
});

window.addEventListener('load', (event) => {
  document.querySelector('body').classList.remove('opacity-0')
});