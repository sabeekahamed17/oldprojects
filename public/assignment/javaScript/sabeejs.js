
// var friends = ["charlie","john","thomas","joel"];
// {
// console.log(frient[2]);
// }

// var numbers =["charli","antony","bencz","royal"];
// console.log(numbers[numbers.length])

var friendsGroups = [
    ["atley", "bravo", "rayudu"],
    ["kohli", "faf", "maxiwell"],
    ["rohit", "bumrah", "pollard"]
];
console.log(friendsGroups[1][0]);





// function test(x,y)
// {
//     return y-x;
// }
// test(10, 40);

// function isEven(num)
//     {
//         if(num % 1 ===0)
//     {
//             return true
//         } 
//         else
//         {
//             return false 
//         }
//     }
//     console.log("num");


// function isEven(num)
//     {
//         return num % 2 ===0;
// {
//         return true
//     } 
//     else
//     {
//         return false 
//     }
// }
// console.log("num");


//     function factorial(num)
//     {
//         var result = 1;
//         for (var i=2;i<=num;i++;i--)
//         {
//         result *=i;

//     }
//     return result;
// }



var first = document.querySelector("#in1");
var date = document.querySelector("#in2");
var submit = document.querySelector("#btn1");
var message = document.querySelector("tbody");
var message1 = document.querySelector("#td1");
var old = document.querySelector("#old");
var btn = document.querySelector("#bu1");
var search = document.querySelector(".btnsearch");
var srch = document.querySelector("#search");
var arr[]
var Date;

//add

submit.addEventListener("click", function (j) {
    j.preventDefault();
    arr.push({
        Name: first.value,
        Date: date.value
    });
    addlist();
})
function addlist() {
    message.innerHTML = " ";

    arr.forEach(function (m) {
        var a = document.createElement("tr");

        a.innerHTML = '<tr><td id="demo" onclick="myfunction()">' + m.Name + '</td><td onclick="myoldFunction()">' + m.Dated +
            '</td><td><button id=bu1 onclick="myeditFunction()"><i class="fa fa-edit" aria-hidden="true"></i></botton></td><td><button id=bu1 onclick="mydeleteFunction()"><i class="fa fa-trash" aria-hidden="true"></i></botton></td></<tr>';
        message.appendChild(a);

    });
}

//eras

function myeditFunction() {
    document.querySelector(".myInput").value = '';
    document.querySelector(".input").value = '';
}
//edit
function myeditFunction() {
    document.getElementById(mydelete);
}


//completed

function myoldFunction(p) {
    message1.innerHTML = "";
    arr.forEach(function (p) {
        var k = document.createElement("tr");
        k.innerHTML = '<td>' + p.Name + '</td><td>' + p.Dated + '<td>';
        message1.appendChild(k);
    });
}
//old
function myoldFunction(o) {
    old.innerHTML = "";
    arr.forEach(function (g) {
        var r = document.createElement("tr");
        r.innerHTML = '<td>' + g.Name + '</td><td>' + g.Dated + '<td>';
        old.appendChild(r);
    });
}
// search
search.addEventListener("click", function () {
    srch.innerHTML = " ";
    var k = document.createElement("input");

    k.innerHTML = "" + Name"";
    alert("connected")
    srch.appendChild(k);
})
