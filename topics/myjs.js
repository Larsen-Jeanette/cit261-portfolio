var myElement = document.querySelector("#fact");
myElement.style.backgroundColor = "yellow";

var myElements = document.querySelectorAll(".light");
 
for (var i = 0; i < myElements.length; i++) {
    myElements[i].style.color = "#C8C8C8";
}

var myElements = document.querySelectorAll(".title");
 
for (var i = 0; i < myElements.length; i++) {
    myElements[i].style.fontWeight = "bold";
}

// var theDropDown = document.querySelector("#dropDown");
// theDropDown.classList.add("disableMenu");

var theDropDown = document.querySelector("#dropDown");
theDropDown.classList.remove("disableMenu");