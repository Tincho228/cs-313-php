// Function to alert box clicked
function clickBox1(){
    var element = document.getElementsByClassName("box");
    element[0].classList.toggle("style_alert");
}
function clickBox2(){
    var element = document.getElementsByClassName("box");
    element[1].classList.toggle("style_alert");
}
function clickBox3(){
    var element = document.getElementsByClassName("box");
    element[2].classList.toggle("style_alert");
}
function clickMe(){
    alert("Botton Clicked");
}
// Function to change de color of the first div
    $("#color").click(function(){
    var boxUno = document.getElementById("input_box").value;
    var element = document.getElementsByClassName("box");
    $(element[0]).css("background", boxUno); 
    });

// Function to hide the last div
    $("#fade").click(function(){
    var element = document.getElementsByClassName("box");
    $(element[2]).fadeToggle("slow");
    });
