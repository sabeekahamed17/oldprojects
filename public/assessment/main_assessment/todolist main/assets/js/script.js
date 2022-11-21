
var first = document.querySelector("#in1");
var date = document.querySelector("#in2");
var submit = document.querySelector("#btn1");
var message = document.querySelector("tbody");
var message1 = document.querySelector("#td1");
var old = document.querySelector("#old");
var btn = document.querySelector("#bu1");
var search = document.querySelector(".btnsearch");
var srch = document.querySelector("#search");
var arr = [];
var Date;
submit.addEventListener("click", function (j) {
    j.preventDefault();
    arr.push({
        Name: first.value,
        Dated: date.value
    });
    addlist();
})
function addlist() {
    message.innerHTML = " ";
    arr.forEach(function (m) {
    var l = document.createElement("tr");
    l.innerHTML = '<tr><td id="demo" onclick="myfunction()">' + m.Name + '</td><td onclick="myoldFunction()">' + m.Dated + '</td><td><button id=bu1 onclick="myeditFunction()"><i class="fa fa-edit" aria-hidden="true"></i></button></td><td><button id=bu1 onclick="mydeleteFunction()"><i class="fa fa-trash" aria-hidden="true"></i></button></td></<tr>';
     message.appendChild(l);
    });
}
function myeditFunction() {

    document.querySelector(".myInput").value = '';
    document.querySelector(".Input").value = '';
}
function myeditFunction(td) {
    selectedRow = td.
    first.value = selectedRow.cells[1].innerHTML;
    date.value = selectedRow.cells[2].innerHTML;
    alert(click);
}
function mydeleteFunction() {
    document.getElementById("myTable").deleteRow(1);
}

function myFunction(p) {
    message1.innerHTML = " ";
    arr.forEach(function (p) {
    var k = document.createElement("tr");
    k.innerHTML = '<td>' + p.Name + '</td><td>' + p.Dated + '<td>';
    message1.appendChild(k);
});
}
function myoldFunction(o) {
    old.innerHTML = "";
    arr.forEach(function (g) {
    var r = document.createElement("tr");
    r.innerHTML = '<td>' + g.Name + '</td><td>' + g.Dated + '<td>';
    old.appendChild(r);
});
}
search.addEventListener("click", function () {
    srch.innerHTML = " ";
    var k = document.createElement("input");
    k.innerHTML = ""+Name+"";
    alert("connected")
    srch.appendChild(k);
})
