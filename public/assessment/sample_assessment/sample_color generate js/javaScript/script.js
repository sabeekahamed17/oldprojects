var color;
var h1 =document.querySelector(".box");
var change=document.querySelector(".bt1");
var message=document.querySelector("ul");
var add=document.querySelector("#sadd");
var remove=document.querySelector("#sremove");
var added=document.querySelector("#dadd");
var removed=document.querySelector("#dremove");
var arr=[];
var r, g, b;
var red=document.querySelector("#btn2");
var green=document.querySelector("#btn3");
var blue=document.querySelector("#btn4");
var copy=document.querySelector("#btn5");
var move=document.querySelector("#btn6");
var message1=document.querySelector("#u5");
//random color
change.addEventListener("click",function(){
  color = randomColor();
     h1.style.background = color;
})
 function randomColor(){
     r=Math.floor(Math.random()*256);
     g=Math.floor(Math.random()*256);
     b=Math.floor(Math.random()*256);
    return "rgb("+ r +", "+ g +", "+ b +")";
 }
 //up add
 add.addEventListener("click",function(){
   arr.unshift({red:r, green:g, blue:b});
   addlist();
 })
 //down add
 added.addEventListener("click",function(){
  arr.push({red:r, green:g, blue:b});
  addlist();
})
//up remove
 remove.addEventListener("click",function(){
  arr.shift({red:r, green:g, blue:b});
  addlist();
})
//down remove
 removed.addEventListener("click",function(){
   arr.pop({red:r, green:g, blue:b});
   addlist();
 })

var arr=[];
copy.addEventListener("click",function(){
 cStart=document.querySelector("#myinput").value;
 cEnd=document.querySelector("#myin").value;
  var res=arr.slice(cStart,cEnd);
addlist1(res);
addlist();
console.log(arr);
});

move.addEventListener("click",function(){
  mStart=document.querySelector("#in").value;
   mEnd=document.querySelector("#inn").value;
   var res=arr.splice(mStart,mEnd);
 addlist1(res);
  addlist();
  console.log(arr);
  });

 function addlist(){
   message.innerHTML=" ";
  arr.forEach(function(m) {
    var l=document.createElement("li");
    l.textContent="RED:"+m.red + " GREEN:" +m.green + " BLUE:"+m.blue;
    message.appendChild(l); 
  });
 }

 function addlist1(res1){
  message1.innerHTML=" ";
  res1.forEach(function(n) {
  var k=document.createElement("li");
   k.textContent="RED:"+n.red + " GREEN:" +n.green + " BLUE:"+n.blue;
   message1.appendChild(k); 
 });
}





















ascending 
red.addEventListener("click",function(){
 arr.sort(function(a,b){
 return a.red-b.red;
})
addlist();
});
green.addEventListener("click",function(){
 arr.sort(function(a,b){
 return a.green-b.green; 
})
addlist();
});
blue.addEventListener("click",function(){
 arr.sort(function(a,b){
 return a.blue-b.blue;
})
addlist();
});