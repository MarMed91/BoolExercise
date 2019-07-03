function addElements() {
  var me = $(this);
  var name = me.text();

  $.ajax({

    url: "personById.php",
    method: "GET",
    data: {name:name},
    success: function(data) {

      var person = JSON.parse(data);

      var container = $(".container");

      var template = $("#box2-template").html();
      var compiled = Handlebars.compile(template);

      var div = compiled({
          id:person.id,
          age:person.age
        });
        me.append(div);

    },
    error: function() {}
  });
}

function printNames() {

  $.ajax({

    url: "fulldb.php",
    method:"GET",
    success: function(data) {

      var people = JSON.parse(data);
      var container = $(".container");

      var template = $("#box-template").html();
      var compiled = Handlebars.compile(template);

      for (var i = 0; i < people.length; i++) {
          var p = people[i];
          var name = p.name;

          var div = compiled({
            name:name
          });
       container.append(div);
      }
    },
    error: function() {}
  });
}

function init() {
  printNames();

  $(document).on("click", "div", addElements);
}

$(document).ready(init);
