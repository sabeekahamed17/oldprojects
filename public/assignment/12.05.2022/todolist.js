
var h1= document.querySelectorAll



var todos = ["buy a new cars"];

var input = prompt("what would you like to do?");
while(input === "quit")
{
    if (input === "list")
    {
    console.log(todos);
}
else if(input === "new")
{
    var newTodo = promplistt("Enter the value");
    todos.push(newTodo);
}
input= prompt("what would you like to do");
}
console.log("OK, QUIT IT")


var colors = ["red", "orange","apple","grabs"];

for(i=0;i<colors;i++)
{
    ocnsole.log(colors[0]);
}


var numbers = [1,2,3,4,5,6,7,8,9,10];
var colors= ["red","oarange","green","yellow"];

numbers.forEach(function(color)
{
    if(color% 3===0); 
    {
        console.log(color);
    }
}); 


var todos = ["buy a new cars"];

var input = prompt("what would you like to do?");

while(input !== "quit")
{
    if (input !== "list")

    console.log("*********");
    todos.forEach(finction(todo, i)
    {
        console.log("********")
    });
    {
    console.log(todos);
}
else if(input === "new")
{
    var newTodo = promplistt("Enter the value");
    todos.push(newTodo);
}
input= prompt("what would you like to do");
}console.log("OK, QUIT IT");




var body = document.querySelector("body");
//  h1.style.color = "pink";
var isBlue = false;
 
setInterval (function()
{
    if (isBlue){
        body.style.background = "white";
    }
    else{
        body.style.background = "#3498db";
    }
    isblue =!isBlue;
}, 1000);

for(var i=1;i<=5;i++)
{
    document.write(i);
}