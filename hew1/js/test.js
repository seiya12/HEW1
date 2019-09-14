$(function() {
    var isDisplay = false;
    var TopBtn= $('#topback');    
    TopBtn.css('right', '-200px');
    var isDisplay = false;
    //スクロール位置が100でボタンを表示
    $(window).scroll(function() {



        if ($(this).scrollTop() > 100) {
            if (isDisplay == false) {
                isDisplay = true;
                TopBtn.stop().animate({'right' : '0px'}, 200);
            }
        } 
        else {
            if (isDisplay) {
                isDisplay = false;
                TopBtn.stop().animate({'right' : '-200px'}, 200); 
            }
        }
    });

});

$(function() {
    var isDisplay = false;
    var TopBtn= $('#leftnavi');    
    TopBtn.css('left', '-200px');
    var isDisplay = false;
    //スクロール位置が100でボタンを表示
    $(window).scroll(function() {



        if ($(this).scrollTop() > 230) {
            if (isDisplay == false) {
                isDisplay = true;
                TopBtn.stop().animate({'left' : '0px'}, 200);
            }
        } 
        else {
            if (isDisplay) {
                isDisplay = false;
                TopBtn.stop().animate({'left' : '-200px'}, 200); 
            }
        }
    });

});

$(function() {
    var isDisplay = false;
    var TopBtn= $('#leftnavi2');    
    TopBtn.css('left', '-200px');
    var isDisplay = false;
    //スクロール位置が100でボタンを表示
    $(window).scroll(function() {



        if ($(this).scrollTop() > 230) {
            if (isDisplay == false) {
                isDisplay = true;
                TopBtn.stop().animate({'left' : '0px'}, 200);
            }
        } 
        else {
            if (isDisplay) {
                isDisplay = false;
                TopBtn.stop().animate({'left' : '-200px'}, 200); 
            }
        }
    });

});

function Display(no){
 
   if(no == "no3"){
 
        document.getElementById("cal3").style.display = "block";
        document.getElementById("cal4").style.display = "none";
        document.getElementById("cal5").style.display = "none";
 
   }else if(no == "no4"){
 
        document.getElementById("cal3").style.display = "none";
        document.getElementById("cal4").style.display = "block";
        document.getElementById("cal5").style.display = "none";
   }else if(no == "no5"){

        document.getElementById("cal3").style.display = "none";
        document.getElementById("cal4").style.display = "none";
        document.getElementById("cal5").style.display = "block";
   }
 
}

function Display2(to){
 
   if(to == "topcon1"){
 
        document.getElementById("topcon1").style.display = "block";
        document.getElementById("topcon2").style.display = "none";
        document.getElementById("topcon3").style.display = "none";
 
   }else if(to == "topcon2"){
 
        document.getElementById("topcon1").style.display = "none";
        document.getElementById("topcon2").style.display = "block";
        document.getElementById("topcon3").style.display = "none";
   }else if(to == "topcom3"){

        document.getElementById("topcon1").style.display = "none";
        document.getElementById("topcon2").style.display = "none";
        document.getElementById("topcon3").style.display = "block";
   }
 
}

function hideopen(){
    document.getElementById("hideform").style.display ="block";
}




