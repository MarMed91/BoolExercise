function removeBackground(me) {

  me.removeClass("green");
  me.removeClass("red");
}

function boolBoxes() {

  var me = $(this);

  $.ajax({

    url: "getRandomBool.php",
    method: "GET",
    success: function(data) {

      var bool = JSON.parse(data);

      if (bool) {

        removeBackground(me);
        me.addClass("green");
      } else {
        
        removeBackground(me);
        me.addClass("red");
      }
    },
    error: function() {}
  });
}

function getBoxes() {

  $.ajax({

    url: "getRandomInt.php",
    method: "GET",
    success: function(data) {

      var value = JSON.parse(data);

      var container = $(".container");

      var template = $("#box-template").html();
      var compiled = Handlebars.compile(template);

      var box = {
        num: value
      };

      var finalHTML = compiled(box);
      container.append(finalHTML);
    },
    error: function() {}
  });
}

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
  //getNames();
  for (var i = 0; i < 5; i++) {
    getBoxes();
  }

  $(document).on("click", ".box", boolBoxes);
}

$(document).ready(init);
