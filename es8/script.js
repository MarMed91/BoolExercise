
function getPeople() {// lettura informazione

  $.ajax({

    url: "fulldb.php",
    method: "GET",
    success: function(data) {

      var people = JSON.parse(data);

      var container = $(".container");

      var template = $("#person-template").html();
      var compiled = Handlebars.compile(template);

      for (var i = 0; i < people.length; i++) {

        var person = people[i];

        var divElem = compiled({
          name: person["name"],
          id: person["id"],
          age: person["age"]
        });
        container.append(divElem);
      }
    },
    error: function() {}
  });
}

function showIncoming() {

  var me = $(this);
  var meId = me.attr("data-id"); //me.data("id"); alternativa;

  $.ajax({

    url: "getPersonById.php",
    method: "GET",
    data: { id: meId },
    success: function(data) {

       var income = JSON.parse(data);

       me.find(".inc").remove();
       me.find("ul").append("<li class='inc'>Incoming :" +income+ "</li>");
    },
    error : function() {}
  });
};

function getincChart() {

  $.ajax({

    url: "getChartData.php",
    method: "GET",
    success: function(data) {

      var chart = JSON.parse(data);

      var name = chart[0];
      var inc = chart[1];


      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
        // The type of chart we want to create
      type: 'pie',

      // The data for our dataset
      data: {
          labels: name,
          datasets: [{
              label: 'Income',
              backgroundColor: [
                'red', 'blue',  'yellow'
              ],
              borderColor:  [
                'red', 'blue', 'yellow'
              ],
              data: inc
            }]
          },
          options:{}
        });
          },
          error: function() {}
        });
}

function getincChart2() {
  $.ajax({

    url: "getChartData2.php",
    method: "GET",
    success: function(data) {

      var parse = JSON.parse(data);

      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, parse);
    }
 });
}

function init() {
  getPeople();

  $(document).on("click", ".people", showIncoming);

  //getincChart();

  getincChart2();
}

$(document).ready(init);
