/* Theme Name: Lugada - Responsive bootsrap 4 Landing Page Template
   Author: Techzaa
   Version: 1.0.0
   Created: May 2018
   File Description: Main Js file of the template
*/


// Sticky Navbar

function windowScroll() {
    const navbar = document.getElementById("navbar-sticky");
    if (navbar) {
        if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
            navbar.classList.add("nav-sticky");
        } else {
            navbar.classList.remove("nav-sticky");
        }
    }
}

window.addEventListener("scroll", (ev) => {
    ev.preventDefault();
    windowScroll();
});


if(window['WOW']){
    new WOW().init();
    wow = new WOW({
        boxClass: "wow",
        animateClass: "animated",
        offset: 50,
        mobile: true,
        live: true,
    });
    wow.init();
}


// Contact form

function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    var subject = document.forms["myForm"]["subject"].value;
    var comments = document.forms["myForm"]["comments"].value;
    document.getElementById("error-msg").style.opacity = 0;
    document.getElementById("error-msg").innerHTML = "";
    if (name == "" || name == null) {
        document.getElementById("error-msg").innerHTML = "<div class='alert alert-danger error_message text-center'>Please enter a Name</div>";
        fadeIn();
        return false;
    }
    if (email == "" || email == null) {
        document.getElementById("error-msg").innerHTML = "<div class='alert alert-danger error_message text-center'>Please enter a Email</div>";
        fadeIn();
        return false;
    }
    if (subject == "" || subject == null) {
        document.getElementById("error-msg").innerHTML = "<div class='alert alert-danger error_message text-center'>Please enter a Subject</div>";
        fadeIn();
        return false;
    }
    if (comments == "" || comments == null) {
        document.getElementById("error-msg").innerHTML = "<div class='alert alert-danger error_message text-center'>Please enter a Comments</div>";
        fadeIn();
        return false;
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("simple-msg").innerHTML = this.responseText;
            document.forms["myForm"]["name"].value = "";
            document.forms["myForm"]["email"].value = "";
            document.forms["myForm"]["subject"].value = "";
            document.forms["myForm"]["comments"].value = "";
        }
    };
    xhttp.open("POST", "php/contact.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name=" + name + "&email=" + email + "&comments=" + comments);
    return false;
}

function fadeIn() {
    var fade = document.getElementById("error-msg");
    var opacity = 0;
    var intervalID = setInterval(function () {
        if (opacity < 1) {
            opacity = opacity + 0.5;
            fade.style.opacity = opacity;
        } else {
            clearInterval(intervalID);
        }
    }, 200);
}


// // Preloader

function preloader() {
    setTimeout(() => {
        console.log("working");
        if(document.getElementsByClassName('preloader').length>0){
            document.getElementsByClassName('preloader')[0].style.visibility = 'hidden';
            document.getElementsByClassName('preloader')[0].style.opacity = '0';
        }
    }, 500);
}


preloader();


// Tetx-rotate
var i = 0;
var text_rotate = [];
var time = 3000;

text_rotate[0] = "Professional Landing Page Template";
text_rotate[1] = "We Are Modern,We are Creative";
text_rotate[2] = "Perfect solution for small businesses";

function changeText() {
    if (document.getElementById("target")) {
        document.getElementById("target").innerHTML = text_rotate[i];
        i = (i < text_rotate.length - 1) ? i + 1 : 0;
        setTimeout('changeText()', time);
    }
}

changeText();




