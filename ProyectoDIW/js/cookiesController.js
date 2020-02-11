$(function () {
    "use strict";

    var cookieAlert = document.querySelector(".cookiealert");
    var cookieNotif = document.querySelector(".cookienotif");
    var acceptCookies = document.querySelector(".acceptcookies");
    var acceptNotificaciones = document.querySelector(".acceptnotificaciones");

    if (!cookieAlert) {
        return;
    }

    cookieNotif.offsetHeight; // Force browser to trigger reflow 
    cookieAlert.offsetHeight; // Force browser to trigger reflow 
   
    if (getCookie("acceptCookies")) {
        if (!getCookie("acceptNotificaciones")) {
            cookieNotif.classList.add("show");
        }
    }

    // Show the alert if we cant find the "acceptCookies" cookie
    if (!getCookie("acceptCookies")) {
        cookieAlert.classList.add("show");
    }
  
 
    // When clicking on the agree button, create a 1 year
    // cookie to remember user's choice and close the banner
    acceptCookies.addEventListener("click", function () {
        setCookie("acceptCookies", true, 365);
        cookieAlert.classList.remove("show");
    });

    acceptNotificaciones.addEventListener("click", function () {
        setCookie("acceptNotificaciones", true, 30);
        cookieNotif.classList.remove("show");
    });


    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
})();