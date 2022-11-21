


// function colorChange()
// {
//     return Math.floor(Math.random()*255);
// }
// function color()
// {
//     var red = colorChange();
//     var green = colorChange();
//     var blue = colorChange();
//     var b = document.querySelector(".boot");

    
//     var h1=document.querySelector("h1");
//     result= "rgb("+ red +","+ green +","+ blue +")";   
//      h1.textContent=result;
//      b.style.background = result;
 
// }
// var numColors = ;
// var colors = generateRandomColors(numColors);
// var pickedColor = pickColor();

// var bb= document.querySelector(".boot");



// function generateRandomColors(){
//     var r = Math.floor(Math.random()*256);
//     var g = Math.floor(Math.random()*256);
//     var b = Math.floor(Math.random()*256);
    
//     result = "rgb("+ r +", "+ g +", "+ b +")";
//     console.log(result);     
    
// }

// function randomColor(num){
//     var arr =[];
//     for(var i = 0; i < num; i++){
//         arr.push(generateRandomColors());
// }
// return arr;
// }

// for(var i=0;i<bb.clientHeight;i++){
//     bb[i].style.background = colors[i];
//     bb[i].addEventListener("click",function(){
//         var clickedColor=this.style.background;
//         if(clickedColor===pickedColor){
//             alert("This correct");
//         }else{
//             alert("This wrong");
//         }
//     });

// }

// function pickColor(){
//     var random = Math.floor(Math.random()*colors.length);
//     console.log(random);
//     return colors[random];
// } 

var h1 = document.querySelector("h1");

var boots = document.querySelectorAll(".boot")

function generateRandomColors(genColor){
 
	var arr = []
	 
	for(var i = 0; i < genColor; i++){
	 
		arr.push(randomColor())
	}
	 
	return arr;
}
document.querySelector("#btn").addEventListener("click",function(){
    var r = Math.floor(Math.random()*256);
    var g = Math.floor(Math.random()*256);
    var b = Math.floor(Math.random()*256);

    result = "rgb("+r+", "+g+", "+b+")";
    for(var i = 0 ; i<boots.length; i++){
        boots[i].style.background = result;
    }
});
