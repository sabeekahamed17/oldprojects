var colors = generateRandomColor(6);
var squares = document.querySelectorAll(".square");
var pickedColor = pickColor();
var colorDisplay = document.getElementById("colorDisplay");
var messageDisplay = document.querySelector("#message");


colorDisplay.textContent = pickedColor;

for(var i=0; i < squares.length; i++)
{
    squares[i].style.background = colors[i];
    squares[i].addEventListener("click", function(){
        var clickedColor = this.style.background;
        if(clickedColor === pickedColor)
            {
                messageDisplay.textContent = "CORRECT!"
                changeColors(clickedColor);
        }
        else
        {
           this.style.background = "#232323";
           messageDisplay.textContent = "Try Again"
        }
    });
   
}
function changeColors(color)
{
    for(var i=0;i < squares.length; i++)
    {
        squares[i].style.background = color;
    }
}

function pickColor()
{
    var random = Math.floor(Math.random () * colors.length);
    return colors[random];
}

 function generateRandomColor(num)
 {
     var arr  = []
     for(var i=0; 1< num;i++)
     {
       arr.push(randomColor())  
     }
     return arr;
 }

function randomColor(){
    var r = Math.floor(Math.random() * 256);
    var g = Math.floor(Math.random() * 256);
    var b = Math.floor(Math.random() * 256);
    return "rgb("+ r +","+ g +"," + b + ")";
}

