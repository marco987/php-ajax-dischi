// Stampare a schermo una decina di dischi musicali
// (vedi screenshot) in due modi diversi:
// - Solo con l'utilizzo di PHP, che stampa
// direttamente i dischi in pagina: al caricamento
// della pagina ci saranno tutti i dischi.
// - Attraverso l'utilizzo di AJAX: al caricamento
// della pagina ajax chiederà attraverso una
// chiamata i dischi a php e li stamperà
// attraverso handlebars.

$(document).ready(function(){

// (2) Modo 2 ajax

var source   = document.getElementById("item-template").innerHTML;
var template = Handlebars.compile(source);

function getAlbum() {
  $.ajax({
    url: "api.php",
    method: "GET",
    success: function(data){
      printAlbum(data);
    },
    error: function(){
      alert("Errore");
    }
  });
}

function printAlbum(data) {
  for (var i = 0; i < data.length; i++) {
    var album = data[i];
    var context = {
      titolo: album.titolo,
      anno: album.anno
    };
    var html    = template(context);
    $("main").append(html);
  }
}

getAlbum();










});
