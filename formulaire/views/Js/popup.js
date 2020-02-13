var fond = document.querySelector(".bg_modal");
var Anonyme = document.querySelector("#div_anonyme");
var fermeture = document.querySelector(".croix");
var background = document.querySelector("#vide");
background.addEventListener("click", function() {enleverModal()},true);
fermeture.addEventListener("click", function() {enleverModal()},true);

function afficher(el){
  el.classList.add('show');
  el.classList.remove('hide');
}

function disparaitre(el){
  el.classList.add('hide');
  el.classList.remove('show');
}

function displayflex(el){
  el.style.display='flex';
}

function displaynone(el){
  el.style.display='none';
}

function displayblock(el){
  el.style.display='block';
}
// =============================================================================================================================
function affichermodal(){
  displaynone(Anonyme);
  document.querySelector("#inputMail").required = true;
  document.querySelector("#inputPassword1").required = true;
  document.querySelector("#anoNom").required = false;
  document.querySelector("#anoPrenom").required = false;
  document.querySelector("#anoMail").required = false;
  document.querySelector("#inputMail").style.borderColor = "";
  document.querySelector("#inputMail").style.borderWidth = "1px";
  document.querySelector("#inputPassword1").style.borderColor = "";
  document.querySelector("#inputPassword1").style.borderWidth = "1px";
  document.querySelector("#anoNom").value = "";
  document.querySelector("#anoPrenom").value = "";
  document.querySelector("#anoMail").value = "";
  displayflex(fond);
  setTimeout(function(){
    afficher(fond);
  },1)
  document.getElementById("inputMail").focus();
}

function enleverModal()
{
  disparaitre(fond);
  setTimeout(function(){
    displaynone(fond);
  },1000)
  document.querySelector("#inputMail").required = false;
  document.querySelector("#inputPassword1").required = false;
  document.querySelector("#inputMail").value = "";
  document.querySelector("#inputPassword1").value = "";
}
// =============================================================================================================================
// selection.style.borderWidth = "1px";
// selection.style.borderColor = "";

function anonyme() {
  document.querySelector("#anoNom").style.borderColor = "";
  document.querySelector("#anoPrenom").style.borderColor = "";
  document.querySelector("#anoMail").style.borderColor = "";
  displayblock(Anonyme);
  document.querySelector("#anoNom").required = true;
  document.querySelector("#anoPrenom").required = true;
  document.querySelector("#anoMail").required = true;
}

// =============================================================================================================================

function estproprio(){
 document.getElementById("checkboxNonProprio").checked = false;
 displaynone(document.querySelector("#div_proprio"));
 document.querySelector("#NomProprio").required = false;
 document.querySelector("#PrenomProprio").required = false;
 document.querySelector("#MailProprio").required = false;
 document.querySelector("#TelephoneProprio").required = false;
 document.querySelector("#NomProprio").value = "";
 document.querySelector("#PrenomProprio").value = "";
 document.querySelector("#MailProprio").value = "";
 document.querySelector("#TelephoneProprio").value = "";
 document.querySelector("#NomProprio").style.borderColor = "";
 document.querySelector("#NomProprio").style.borderWidth = "1px";
 document.querySelector("#PrenomProprio").style.borderColor = "";
 document.querySelector("#PrenomProprio").style.borderWidth = "1px";
 document.querySelector("#MailProprio").style.borderColor = "";
 document.querySelector("#MailProprio").style.borderWidth = "1px";
 document.querySelector("#TelephoneProprio").style.borderColor = "";
 document.querySelector("#TelephoneProprio").style.borderWidth = "1px";

}

function estpasproprio(){
 document.getElementById("checkboxProprio").checked = false;
 displayblock(document.querySelector("#div_proprio"));
 document.querySelector("#NomProprio").required = true;
 document.querySelector("#PrenomProprio").required = true;
 document.querySelector("#MailProprio").required = true;
 document.querySelector("#TelephoneProprio").required = true;
}
