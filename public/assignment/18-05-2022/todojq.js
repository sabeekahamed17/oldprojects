
$("ul").on("click","li" , function()
{
    $(this).toggleClass("completed");
});

$("ul").on("click","span",function(event)
{
   $(this).parent().fadeOut(500,function()
   {
       $(this).remove();
   });
       event.stopPropagation();
});
$("input[type='text']").keypress(function()
{
    if(event.which === 13){
     var todoText = $(this).val();
      $("ul").append("<li> <span><i class='fa fa-trash'></i></span>" + todoText + "</li>");
    }
});
$("fa.fa-plus").click(function(){
    $("input[type='text']").fadeToggle()
});








// $("li").click(function(){
//     $(this).remove();
//      Event.stopPropagation();
// });

// $("span").click(function()
// {
//     alert("clicked on a span");
// });
// $("ul").click(function()
// {
//     alert("clicked on a ul");
// });
// $("#container").click(function()
// {
//     alert("clicked on a container");
// });
// $("body").click(function()
// {
//     alert("clicked on a body");
// });








// console.log($(this).css("color"));
    // if($(this).css("color") === "rgb(128, 128, 128)"){
    //     $(this).css(
    //         {
    //             color:"black",
    //             textDecoration: "none"
    //         });
        
    //     console.log("it is currendly gray")
    // }
    // else{
    //     $(this).css(
    //         {
    //             color:"gray",
    //             textDecoration: "line-through"
    //         });
    // }
    // $(this).css("color","grey");
    // $(this).css("text-decoration","line-through");