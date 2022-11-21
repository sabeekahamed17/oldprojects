if(jQuery){
    alert("jquery loated");
}else{
    alert("No jQuery");
}


$("div").css("background" , "purple");
$("div.highlight").css("width" , "150px");
$("#third").css("border", "2px solid orange");
$("div:first-of-type").css("color" , "wheat");

$("h1").click(function(){ alert("h1 clicked");});
 $("button").click(function(){ 
    $(this).css("background","#green");
});
 $("button").click(function(){
     var text= $(this).text();
     console.log("you are clicked" + text);
 });

$("input").keypress(function(event)
{
    if(event.which === 13)
    {
        alert("you are enter");
    }
});
$("body").css("background","grey");




$("button").on("click",function(){
    $("div").slideDown();
  });