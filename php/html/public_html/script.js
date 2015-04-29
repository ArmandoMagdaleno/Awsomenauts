/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("document").ready(function() {
    $(".lbj").css("background-color", "gold");
    $("body").css("background-color", "black");
    $("h1").css({"background-color": "red", "color": "white"});
    $("p:lt(3)").css({"background-color": "maroon", "color": "white", "border-style": "dashed"});
    $("p:gt(2)").css({"background-color": "white", "color": "maroon", "border-style": "dashed"});
    $("h1").bind("mouseover", mouseOverMe).bind("mouseout", mouseOutMe);
    $("h1").bind("click", mouseClick);
    $(".col-xs-3").css("background-color", "black");
    
    $("#replaceWText").bind("click", replaceWText);
    
    $("#randPara").bind("click", addAPara);

    $("#removePara").bind("click", removeAPara);
    
    
    $("#show").css("visibility", "hidden");
    
    $("#hide").bind("click", hideThePage);
    
    $("#show").bind("click", showThePage);


    
    $("#superHumans").accordion({header: "h2"});
    $("#superHumans").css("width", "400px");
    
    $("h2").css("background", "red");
    
});

//////changes the ttext when mouse hovers over it////
function mouseOverMe() {
    $("h1").html("GREATEST OF ALL TIME");
}

///when the mouse hovers away from prior text, the following is shown////
function mouseOutMe() {
    $("h1").html("LEBRON JAMES");
}

////when text is clicked the following text replaces the previous////
function mouseClick() {
    $("h1").html("FREAK OF NATURE");
}


////1) Add, 2) Remove, and 3) Change HTML Elements using JQuery////

function removeAPara(){
    $("#randPara p:last").remove();
}

////function causes the paragraph to add every time the key word is pressed////
function addAPara(){
    $("#randPara").append("<p>CLUTCH</p>");
}

////function replaces the text tht i spressed with the following text////
function replaceWText(){
    $("#replaceWText").text("Never Replaced!");
}



////hiding and showing my page////

function hideThePage(){
    $("#show").css("visibility", "visible");
    $("div").hide("explode", {}, 2500);
    $("#show").show("puff", {}, 2500);
}
   
function showThePage(){
    $("div").show("slide", {}, 2500);
    $("#show").hide("puff", {}, 2500);
}
