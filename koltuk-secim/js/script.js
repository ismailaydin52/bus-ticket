var firstSeatLabel = 1
var bookedMan = !!localStorage.getItem("bookedMan")
  ? $.parseJSON(localStorage.getItem("bookedMan"))
  : []
var bookedWoman = !!localStorage.getItem("bookedWoman")
  ? $.parseJSON(localStorage.getItem("bookedWoman"))
  : []
$(document).ready(function () {
  var $cart = $("#selected-seats"),
    $counter = $("#counter"),
    $total = $("#total"),
    sc = $("#bus-seat-map").seatCharts({
      map: [
        "ee_ee",
        "ee_ee",
        "ee_ee",
        "ee_ee",
        "ee___",
        "ee_ee",
        "ee_ee",
        "ee_ee",
        "eeeee",
      ],
      seats: {
        e: {
          price: 50, //Veritabanından gelecek
          classes: "bos-koltuk", //your custom CSS class
          category: "Koltuk",
        },
      },
      naming: {
        top: false,
        getLabel: function (character, row, column) {
          return firstSeatLabel++
        },
      },
      legend: {
        node: $("#legend"),
        items: [
          ["f", "unavailablewoman", "Kadin"],
          ["m", "unavailableman", "Erkek"],
          ["e", "available", "Bos"],
        ],
      },
      click: function () {
        if (this.status() == "available") {
          //let's create a new <li> which we'll add to the cart items
          $(
            "<li>" +
              this.data().category +
              " # " +
              this.settings.label +
              ": <b>" +
              this.data().price +
              'TL</b> <a href="#" class="cancel-cart-item">[Iptal]</a></li>'
          )
            .attr("id", "cart-item-" + this.settings.id)
            .data("seatId", this.settings.id)
            .appendTo($cart)

          /*
           * Lets update the counter and total
           *
           * .find function will not find the current seat, because it will change its stauts only after return
           * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
           */
          $counter.text(sc.find("selected").length + 1)
          $total.text(recalculateTotal(sc) + this.data().price)

          return "selected"
        } else if (this.status() == "selected") {
          //update the counter
          $counter.text(sc.find("selected").length - 1)

          //and total
          $total.text(recalculateTotal(sc) - this.data().price)

          //remove the item from our cart
          $("#cart-item-" + this.settings.id).remove()

          //seat has been vacated
          return "available"
        } else if (this.status() == "unavailable") {
          //seat has been already booked
          return "unavailable"
        } else {
          return this.style()
        }
      },
    })

  //this will handle "[cancel]" link clicks
  $("#selected-seats").on("click", ".cancel-cart-item", function () {
    //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
    sc.get($(this).parents("li:first").data("seatId")).click()
  })

  //let's pretend some seats have already been booked
  // sc.get(['1_2', '4_1', '7_1', '7_2']).status('unavailable');
  sc.get(bookedWoman).status("unavailablewoman")
  sc.get(bookedMan).status("unavailableman")
})

function recalculateTotal(sc) {
  var total = 0

  //basically find every selected seat and sum its price
  sc.find("selected").each(function () {
    total += this.data().price
  })

  return total
}

$(function () {
  $("#checkout-button").click(function () {
    var items = $("#selected-seats li")
    if (items.length <= 0) {
      alert("Please select atleast 1 seat first.")
      return false
    }
    var selected = []
    items.each(function (e) {
      var id = $(this).attr("id")
      id = id.replace("cart-item-", "")
      selected.push(id)
    })
    if (localStorage.getItem("cinsiyet") == '"Erkek"') {
      Object.keys(bookedMan).map((k) => {
        selected.push(bookedMan[k])
      })
      localStorage.setItem("bookedMan", JSON.stringify(selected))
    } else if (localStorage.getItem("cinsiyet").toString() == '"Kadin"') {
      Object.keys(bookedWoman).map((k) => {
        selected.push(bookedWoman[k])
      })
      localStorage.setItem("bookedWoman", JSON.stringify(selected))
    }

    alert("Seats has been Reserved successfully.")
    location.reload()
  })
  $("#reset-btn").click(function () {
    if (confirm("are you sure to reset the reservation of the bus?") === true) {
      localStorage.removeItem("bookedMan")
      localStorage.removeItem("bookedWoman")
      alert("Seats has been Reset successfully.")
      location.reload()
    }
  })
})
