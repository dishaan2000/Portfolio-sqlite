const Avatar = document.querySelector("#baggroundAvatar");
const AvatarWithOutMask = document.querySelector(".Avatar-without-mask");
const AvatarWithMask = document.querySelector(".Avatar-with-mask");
const hoverWriter = document.querySelector("#typeWriter");
const nameChanger = document.querySelector(".name-changer");
const kontakt = document.querySelector("#kontaktIndex");
const skift = document.querySelector(".skift-knap");


kontakt.addEventListener("mouseenter", () => {
  AvatarWithOutMask.style.bottom = "-100vh";
  AvatarWithMask.style.bottom = "0vh";
  textPosition2 = 0;
  hovertypewriter();
  setTimeout(function () {
    nameChanger.innerHTML = "-Bruce Wayne";
    kontakt.innerHTML = "Batsignal?";
  }, 200);
});

kontakt.addEventListener("mouseleave", () => {
  AvatarWithOutMask.style.bottom = "0vh";
  AvatarWithMask.style.bottom = "-100vh";
  textPosition = 0;
  typewriter();
  setTimeout(function () {
    nameChanger.innerHTML = "-Dishaan Selvarajah";
    kontakt.innerHTML = "Kontakt";
  }, 200);
});

Avatar.addEventListener("mouseenter", () => {
  AvatarWithOutMask.style.bottom = "-100vh";
  AvatarWithMask.style.bottom = "0vh";
  textPosition2 = 0;
  hovertypewriter();
  setTimeout(function () {
    nameChanger.innerHTML = "-Bruce Wayne";
  }, 500);
});

Avatar.addEventListener("mouseleave", () => {
  AvatarWithOutMask.style.bottom = "0vh";
  AvatarWithMask.style.bottom = "-100vh";
  textPosition = 0;
  typewriter();
  setTimeout(function () {
    nameChanger.innerHTML = "-Dishaan Selvarajah";
  }, 500);
});

skift.addEventListener("click", () => {
  if (nameChanger.innerHTML == "-Dishaan Selvarajah") {
    AvatarWithOutMask.style.bottom = "-100vh";
    AvatarWithMask.style.bottom = "0vh";
    textPosition2 = 0;
    hovertypewriter();
    setTimeout(function () {
      nameChanger.innerHTML = "-Bruce Wayne";
      kontakt.innerHTML = "Batsignal?";
    }, 200);
  } else if (nameChanger.innerHTML = "-Bruce Wayne") {
    AvatarWithOutMask.style.bottom = "0vh";
    AvatarWithMask.style.bottom = "-100vh";
    textPosition = 0;
    typewriter();
    setTimeout(function () {
      nameChanger.innerHTML = "-Dishaan Selvarajah";
    }, 500);
  }
});

var quoteArray = ["Front-ender!" + '"'];
var textPosition = 0;
var speed = 100;

typewriter = () => {
  document.querySelector("#typeWriter").innerHTML =
    quoteArray[0].substring(0, textPosition) + "<span>\u25AE</span>";

  if (textPosition < quoteArray[0].length) {
    setTimeout(typewriter, speed);
  }
  textPosition++;
};

window.addEventListener("load", typewriter);

var quoteArray2 = ["Batman!" + '"'];
var textPosition2 = 0;
var speed2 = 100;

hovertypewriter = () => {
  document.querySelector("#typeWriter").innerHTML =
    quoteArray2[0].substring(0, textPosition2) + "<span>\u25AE</span>";
  console.log(
    quoteArray2[0].substring(0, textPosition2) + "<span>\u25AE</span>"
  );
  if (textPosition2 < quoteArray2[0].length) {
    setTimeout(hovertypewriter, speed2);
  }
  textPosition2++;
};
// til typewriter effekt: https://medium.com/@codefoxx/how-to-easily-create-a-typewriter-effect-with-javascript-1e1d9ca05b59


// Header;
function myFunction() {
  var x = document.getElementById("topNav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
// https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav
