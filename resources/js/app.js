require('./bootstrap');
require('./category.js');
require('./pagination.min.js');
require('./share.js');
// import 'alpinejs'
import Alpine from 'alpinejs';
Alpine.data('demo', () => ({
    open: false,
    toggle() {
        this.open = !this.open
    }
}));
window.Alpine = Alpine;
// should be last
Alpine.start();
const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");
  
  cookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
  });
  
  setTimeout(() => {
    if (!localStorage.getItem("cookieBannerDisplayed")) {
      cookieContainer.classList.add("active");
    }
  }, 2000);
function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
};

function initializeClock(id, endtime) {
    var clockings = document.getElementById(id);
    var daysSpan = clockings.querySelector('.days');
    var hoursSpan = clockings.querySelector('.hours');
    var minutesSpan = clockings.querySelector('.minutes');
    var secondsSpan = clockings.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
};
var fecha = $("#clockdiv").attr("date");
initializeClock('clockdiv', fecha);
