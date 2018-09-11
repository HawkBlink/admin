$(document).ready(function(){
  var minlength = 2;
  $("#nom").keyup(function(){
      if($("#nom").val() != "" && $("#nom").val().length > minlength){
        $("#prepend-nom").css({color: "#59af31", border: "solid 1px #59af31"});
        $("#nom").css({border: "solid 1px #59af31"});
        valid = true;
        return valid;
        }else{
          $("#prepend-nom").css({color: "#FF0000", border: "solid 1px #FF0000"});
          $("#nom").css({border: "solid 1px #FF0000"});
          valid = false;
          return valid;
      }
    });
    $("#prenom").keyup(function(){
      if($("#prenom").val() != "" && $("#prenom").val().length > minlength){
          $("#prepend-prenom").css({color: "#59af31", border: "solid 1px #59af31"});
          $("#prenom").css({border: "solid 1px #59af31"});
          valid = true;
          return valid;
        }else{
          $("#prepend-prenom").css({color: "#FF0000", border: "solid 1px #FF0000"});
          $("#prenom").css({border: "solid 1px #FF0000"});
          valid = false;
          return valid;
        }
    });
    $("#email").keyup(function(){
      if($("#email").val() == ""){
          $("#email").css({border: "solid 1px #FF0000"});
          valid = false;
          return valid;
        }
    });
    $("#subject").keyup(function(){
      if($("#subject").val() != "" && $("#subject").val().length > minlength){
          $("#subject").css({border: "solid 1px #59af31"});
          valid = true;
          return valid;
        }else{
          $("#subject").css({border: "solid 1px #FF0000"});
          valid = false;
          return valid;
        }
    });
    $("#text").keyup(function(){
      if($("#text").val() != "" && $("#text").val().length > minlength){
          $("#text").css({border: "solid 1px #59af31"});
          valid = true;
          return valid;
        }else{
          $("#text").css({border: "solid 1px #FF0000"});
          valid = false;
          return valid;
        }
    });
    $("#envoyer").click(function(){
      if(valid != true){
        return false;
      }else{
        return true;
      }  
    });
});