var button = $("#btn1");
var arr = [];
var rgb = [];
var color;
var count = 0;
var pr = 0;
for (var i = 0; i < 10; i++) {
    for (var j = 0; j < 3; j++) {
        var red = Math.floor(Math.random() * 255);
        var green = Math.floor(Math.random() * 255);
        var blue = Math.floor(Math.random() * 255);
        rgb[j] = "RGB(" + red + " ,  " + green + " ,  " + blue + " )"
    }
    var randomColor = {
        s1: rgb[0],
        s2: rgb[1],
        s3: rgb[2],
        pick: rgb[Math.floor(Math.random() * 3)],
        deffrnd: false,
    }
    arr.push(randomColor);
}
$("tbody").html(" ");
arr.forEach(function (e, i)
{
    $("tbody").append('<tr id=' + i + '><td><h3>' + e.pick + '</h3></td><td><input type="radio" name="' + i + '"onclick= "check(' + `'${e.pick}','${e.s1}',${i}` + ')" ><label style="background:' + e.s1 + '"></label></td><td><input type="radio" name="' + i + '" onclick= "check(' + `'${e.pick}','${e.s2}',${i}` + ')" ><label  style="background:' + e.s2 + '"></label></td><td><input type="radio" name="' + i + '" onclick= "check(' + `'${e.pick}','${e.s1}',${i}` + ')" ><label  style="background:' + e.s3 + '"></label></td></tr>');
});
function check(pick, clicked, index) {
    if (pick == clicked) {
        arr[index].deffrnd = true;
    }
}
$("#btn1").on("click", function () {
    count++;
    $("#atm1").text(count);
    if (count == 2) {
        $("tbody").css("display", "none");
        $("#btn1").css("display", "none");
        arr.forEach(function (e, i) {
            if (e.deffrnd == true) {
                pr++;
                $("#list").append('<li style="color:green">' + e.pick + '</li>');
            }
            else {
                $("#untik").append('<li style="color:red">' + e.pick + '</li>');
            }
        });
        var h = ((pr / 10) * 100);
        $("#prg").text(h);
    } else {
        $("tbody").html(" ");
        arr.forEach(function (e, i) {
            if (e.deffrnd == false) {
                $("tbody").append('<tr id=' + i + '><td><h3>' + e.pick + '</h3></td><td><input type="radio" name="' + i + '"onclick= "check(' + `'${e.pick}','${e.s1}',${i}` + ')" ><label style="background:' + e.s1 + '"></label></td><td><input type="radio" name="' + i + '" onclick= "check(' + `'${e.pick}','${e.s2}',${i}` + ')" ><label  style="background:' + e.s2 + '"></label></td><td><input type="radio" name="' + i + '" onclick= "check(' + `'${e.pick}','${e.s1}',${i}` + ')" ><label  style="background:' + e.s3 + '"></label></td></tr>');
            }
        });

    }

});