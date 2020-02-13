window.json =null;
$(document).ready(function() {
  $.post(
    ajaxurl,
    {
      "action":"getAll",
    },
    function(response){
      console.log(response);
      window.json = JSON.parse(response);
    }
  )
});
$("input").on("keyup",function(e){
console.log($(this).val());
// console.log(window.json);
});

window.onload =function(){
  var form = document.querySelector("#form");
  var Suggestion = document.querySelector("#Box_Suggestion");
  var mon_tableau = '';
  var P1 = document.querySelector("#Proposition_1");
  var P2 = document.querySelector("#Proposition_2");
  var P3 = document.querySelector("#Proposition_3");
  var Compteur = 0;
  form.addEventListener("focus", function() {AjoutBox(event.target)},true);
  form.addEventListener("blur", function() {RetirerBox(Suggestion)},true);
  form.addEventListener("keypress", function() {ChangerBox()},true);


  function ChangerBox(){
     P1.innerHTML = document.activeElement.name + " N°1";
     P2.innerHTML = document.activeElement.name + " N°2";
     P3.innerHTML = document.activeElement.name + " N°3";
  }

  function AjoutBox(e)
  {
    if (e.type == "text"){
      Suggestion.style.display = "block";
      Suggestion.style.top = e.offsetHeight+e.offsetTop+"px";
      Suggestion.style.width = e.offsetWidth+"px";
      console.log(e.name);
      console.log(window.json);
      // var test = window.json.Couleur.map(x => x);
      $.each(window.json, function(key, item){
        if(e.name==key){
          console.log(item);
        }
      })
      //
      // $.each(window.json, function(key, item){
      //   if(e.name==key){
      //     console.log(item);
      //     var test = item.map(obj => {
      //       return obj.Name;
      //     });
      //     console.log(test);
      //   }
      // })
      //
      // var test = window.json.e.name.map(obj => {
      //   return obj.Name;
      // });
      // console.log(test);
    }
    else {
      RetirerBox(Suggestion);
    }
  }
  function RetirerBox(e){
    e.style.display = "none";
  }
}
