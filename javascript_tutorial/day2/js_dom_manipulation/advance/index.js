
const btn = document.getElementById("btn");
btn.addEventListener("click", function () {

    const studentTable = document.getElementById("studentTable");
    const row = document.createElement("tr");
    const nameTd = document.createElement("td");
    const markTd = document.createElement("td");
    const name = document.getElementById("name").value;
    const mark = document.getElementById("mark").value;
    nameTd.innerText = name;
    markTd.innerText = mark;
    row.append(nameTd, markTd);

    const markInt = parseInt(mark);

    if (markInt > 49) {
        row.style.background = "green";
    }

    else {
        row.style.background = "red";
    }
    studentTable.appendChild(row);
})


const sp = document.getElementById("sp");
sp.addEventListener("mouseover", function () {

    sp.style.background = "magenta";
})

sp.addEventListener("mouseout", function () {
    sp.style.background = "white";
})

const input = document.getElementById("in");
input.addEventListener("keypress", function (event) {
    if (event.key === "a") {
        alert("forbiden");
    }
})