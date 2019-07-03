function updatePrice() {
  var me = $(this);
  var priceHTML = me.parent();
  var id = priceHTML.data("id");
  var titleHTML = priceHTML.find("h1.title");

  var newPrice = prompt("Give me new price");

  $.ajax({

    url: "updatePagamentiByPrice.php",
    data: {
      id:id,
      price: newPrice
     },
    method: "POST",
    success: function(data) {

    printPendingPrice();
    }
  });
}

function priceClick() {

  var me = $(this);
  var id = me.data("id");

  $.ajax({

    url: "getPendingPrice.php",
    data: { id:id },
    method: "POST",
    success: function(data) {

      var created_at = JSON.parse(data);

      var created_atLi = me.find(".created_at");
      created_atLi.text(created_at[0])["created_at"];
    }
  });
}

function printPendingPrice() {


    $.ajax({

      url: "getPendingPrice.php",

      method: "GET",
      success: function(data) {

        var price =  JSON.parse(data);

        var template = $("#person-template").html();
        var compiled = Handlebars.compile(template);

        var priceCont = $(".prices");

        for (var i = 0; i < prices.length; i++) {

           var price = prices[i];

           var priceHTML = compile(price);
           priceCont.append(priceHTML);
        }
      }
    });
}

function deletePagamento() {

    var me = $(this);
    var priceHTML = me.parent();
    var id = priceHTML.data("id");

    $.ajax({

      url: "deleteByPagamenti.php",
      data: { id:id },
      method: "POST",
      success: function(data) {

        printPendingPrice();
      }
    });
}

function init() {
//printPendingPrice();

$(document).on("click", ".pagamenti", priceClick);
$(document).on("click", ".pagamenti .price", deletePagamento);
}

$(document).ready(init);
