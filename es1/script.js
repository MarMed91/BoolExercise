function getNames() { //lo script andrà in getDatabase.php recupererà array $names tradurlo in modo da averlo in JS invece che PHP
//l'unico ad occuparsi del html;
  $.ajax ({

    url: "getDatabase.php",
    method: "GET",
    success: function(data) {//echo finisce quì;

      var names = JSON.parse(data); // andiamo a trasformare i data in un oggetto di tipo JS(JSON);

      var cont = $(".names");

      var template = $("#box-template").html();
      var compiled = Handlebars.compile(template);

      for (var i = 0; i < names.length; i++) {
        var name = (names[i]);
        var li = compiled({
          name:name
        });
        cont.append(li);
      }

    },
    error: function() {}
  });
}

function init() {
  getNames();
}

$(document).ready(init);
