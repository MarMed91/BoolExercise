function printOspiti() {

  $.ajax({
    url:"getAllOspiti.php",
    method: "GET",
    success: function(data) {

      var ospiti = JSON.parse(data);

      var template = $("#person-template").html();
      var compiled = Handlebars.compile(template);

      var container = $(".ospiti");
      for (var i = 0; i < ospiti.length; i++) {
        var ospite = ospiti[i];

        var finalHTML = compiled(ospite);
        container.append(finalHTML);
      }
    }
  });
}

function init() {
  printOspiti();
}

$(document).ready(init);
