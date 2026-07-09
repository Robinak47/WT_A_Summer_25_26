
console.log(document.getElementById("btn"));
console.log(document.getElementsByClassName("first-class"));
console.log(document.getElementsByTagName("p"));
console.log(document.querySelector(".first-class"));
console.log(document.querySelectorAll(".first-class"));

const btn = document.getElementById("btn");
btn.addEventListener("click", function () {
    const parent = document.getElementById("container");
    parent.style.background = "red";
    parent.style.height = "200px";
    parent.style.width = "200px";
    parent.style.border = "4px solid black";
    parent.style.outline = "10px solid magenta";
    parent.style.display = "inline";

    const body = document.body;
    const newDiv = document.createElement("div");
    newDiv.setAttribute("id", "div2");
    //newDiv.removeAttribute("id");
    newDiv.classList.add("cls-1");
    newDiv.classList.add("cls-2");
    //newDiv.classList.remove("cls-1");
    newDiv.textContent = "<h1>Meow Moew New Div Meow</h1>";
    body.appendChild(newDiv);

    const image = document.createElement("img");
    image.setAttribute("src", "https://imgs.search.brave.com/dGc_itchNk6LxNSa1IxvwupYs3QILcTqB3M1zHajlvo/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93MC5w/ZWFrcHguY29tL3dh/bGxwYXBlci8zMy82/MjUvSEQtd2FsbHBh/cGVyLWFwcGxlLWFw/cGxlLWxvZ28taXBo/b25lLWxvZ28tcGhv/bmUtdGh1bWJuYWls/LmpwZw")
    body.append(image, "this is multi-element");

    //image.remove();
    body.removeChild(image);





})