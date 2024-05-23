var imgPath = '/grad-project/pages/admin/Map/images/';
$(document).ready(function(){
  $(".nav li").click(function(event) { 
    $(".nav li ").removeClass("active"); //Remove any "active" class 
    $(this).addClass("active"); //Add "active" class to selected tab // 
    // $(activeTab).show(); //Fade in the active content 
  });
  $("#floor4,#tfloor4").css('background','#09f507');
})
$(".floor").click(function(){
    var idFloor =$(this).attr('id');
    if(idFloor == 'floor1'){
      $(this).css('background','#09f507');
      $("#floor2").css('background','#1181fe');
      $("#floor3").css('background','#1181fe');
      $("#floor4").css('background','#1181fe');
      $("#floorPicDiv").attr("src", imgPath+"mainCampusFirstFloor.png");
    }else if(idFloor == 'floor2'){
      $(this).css('background','#09f507');
      $("#floor1").css('background','#1181fe');
      $("#floor3").css('background','#1181fe');
      $("#floor4").css('background','#1181fe');
      $("#floorPicDiv").attr("src", imgPath+"mainCampusSecondFloor.png");
    }else if(idFloor == 'floor3'){
      $(this).css('background','#09f507');
      $("#floor1").css('background','#1181fe');
      $("#floor2").css('background','#1181fe');
      $("#floor4").css('background','#1181fe');
      $("#floorPicDiv").attr("src", imgPath+"mainCampusThirdFloor.png");
    }else if(idFloor == 'floor4'){
      $(this).css('background','#09f507');
      $("#floor1").css('background','#1181fe');
      $("#floor2").css('background','#1181fe');
      $("#floor3").css('background','#1181fe');
      $("#floorPicDiv").attr("src", imgPath+"mainCampusGroundFloor.png");
    }
  
});

$(".tfloor").click(function(){
  var idFloor =$(this).attr('id');
  if(idFloor == 'tfloor1'){
    $(this).css('background','#09f507');
    $("#tfloor2").css('background','#1181fe');
    $("#tfloor3").css('background','#1181fe');
    $("#tfloor4").css('background','#1181fe');
    $("#tfloorPicDiv").attr("src", imgPath+"tuwaiqFirst.png");
  }else if(idFloor == 'tfloor2'){
    $(this).css('background','#09f507');
    $("#tfloor1").css('background','#1181fe');
    $("#tfloor3").css('background','#1181fe');
    $("#tfloor4").css('background','#1181fe');
    $("#tfloorPicDiv").attr("src", imgPath+"tuwaiqSecond.png");
  }else if(idFloor == 'tfloor3'){
    $(this).css('background','#09f507');
    $("#tfloor1").css('background','#1181fe');
    $("#tfloor2").css('background','#1181fe');
    $("#tfloor4").css('background','#1181fe');
    $("#tfloorPicDiv").attr("src", imgPath+"tuwaiqThird.png");
  }else if(idFloor == 'tfloor4'){
    $(this).css('background','#09f507');
    $("#tfloor1").css('background','#1181fe');
    $("#tfloor2").css('background','#1181fe');
    $("#tfloor3").css('background','#1181fe');
    $("#tfloorPicDiv").attr("src", imgPath+"tuwaiqGround.png");
  }

});

function showModal(modalId) {
  $("#" + modalId).modal('show');
}


$("#showResModalBtn").click(function() {
  showModal('resModal');
});

$("#showClassOrientationModalBtn").click(function() {
  showModal('classOrientationModal');
});

function goBack(){
  window.location = '/grad-project/pages/admin/Map/landingPage.php';
}