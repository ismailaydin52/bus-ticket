<!DOCTYPE html>
<html>
  <head>
    <title>Umuttepe Turizm</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <script>
      (function ($) {
        //'use strict';

        $.fn.seatCharts = function (setup) {
          if (this.data("seatCharts")) {
            return this.data("seatCharts");
          }

          var fn = this,
            seats = {},
            seatIds = [],
            legend,
            settings = {
              animate: false,
              naming: {
                top: true,
                left: true,
                getId: function (character, row, column) {
                  return row + "_" + column;
                },
                getLabel: function (character, row, column) {
                  return column;
                },
              },
              legend: {
                node: null,
                items: [],
              },
              click: function () {
                if (this.status() == "available") {
                  return "selected";
                } else if (this.status() == "selected") {
                  return "available";
                } else {
                  return this.style();
                }
              },
              focus: function () {
                if (this.status() == "available") {
                  return "focused";
                } else {
                  return this.style();
                }
              },
              blur: function () {
                return this.status();
              },
              seats: {},
            },
            //seat will be basically a seat object which we'll when generating the map
            seat = (function (seatCharts, seatChartsSettings) {
              return function (setup) {
                var fn = this;

                fn.settings = $.extend(
                  {
                    status: "available", //available, unavailable, selected
                    style: "available",
                    //make sure there's an empty hash if user doesn't pass anything
                    data: seatChartsSettings.seats[setup.character] || {},
                    //anything goes here?
                  },
                  setup
                );

                fn.settings.$node = $("<div></div>");

                fn.settings.$node
                  .attr({
                    id: fn.settings.id,
                    role: "checkbox",
                    "aria-checked": false,
                    focusable: true,
                    tabIndex: -1, //manual focus
                  })
                  .text(fn.settings.label)
                  .addClass(
                    ["seatCharts-seat", "seatCharts-cell", "available"]
                      .concat(
                        fn.settings.classes,
                        typeof seatChartsSettings.seats[
                          fn.settings.character
                        ] == "undefined"
                          ? []
                          : seatChartsSettings.seats[fn.settings.character]
                              .classes
                      )
                      .join(" ")
                  );

                fn.data = function () {
                  return fn.settings.data;
                };

                fn.char = function () {
                  return fn.settings.character;
                };

                fn.node = function () {
                  return fn.settings.$node;
                };

                fn.style = function () {
                  return arguments.length == 1
                    ? (function (newStyle) {
                        var oldStyle = fn.settings.style;

                        //if nothing changes, do nothing
                        if (newStyle == oldStyle) {
                          return oldStyle;
                        }

                        //focused is a special style which is not associated with status
                        fn.settings.status =
                          newStyle != "focused" ? newStyle : fn.settings.status;
                        fn.settings.$node.attr(
                          "aria-checked",
                          newStyle == "selected"
                        );

                        //if user wants to animate status changes, let him do this
                        seatChartsSettings.animate
                          ? fn.settings.$node.switchClass(
                              oldStyle,
                              newStyle,
                              200
                            )
                          : fn.settings.$node
                              .removeClass(oldStyle)
                              .addClass(newStyle);

                        return (fn.settings.style = newStyle);
                      })(arguments[0])
                    : fn.settings.style;
                };

                //either set or retrieve
                fn.status = function () {
                  return (fn.settings.status =
                    arguments.length == 1
                      ? fn.style(arguments[0])
                      : fn.settings.status);
                };

                (function (seatSettings, character, seat) {
                  //attach event handlers
                  $.each(
                    ["click", "focus", "blur"],
                    function (index, callback) {
                      //we want to be able to call the functions for each seat object
                      fn[callback] = function () {
                        if (callback == "focus") {
                          //if there's already a focused element, we have to remove focus from it first
                          if (
                            seatCharts.attr("aria-activedescendant") !==
                            undefined
                          ) {
                            seats[
                              seatCharts.attr("aria-activedescendant")
                            ].blur();
                          }
                          seatCharts.attr(
                            "aria-activedescendant",
                            seat.settings.id
                          );
                          seat.node().focus();
                        }

                        return fn.style(
                          typeof seatSettings[character][callback] ===
                            "function"
                            ? seatSettings[character][callback].apply(seat)
                            : seatChartsSettings[callback].apply(seat)
                        );
                      };
                    }
                  );
                  //the below will become seatSettings, character, seat thanks to the immediate function
                })(seatChartsSettings.seats, fn.settings.character, fn);

                fn.node()
                  //the first three mouse events are simple
                  .on("click", fn.click)
                  .on("mouseenter", fn.focus)
                  .on("mouseleave", fn.blur)

                  //keydown requires quite a lot of logic, because we have to know where to move the focus
                  .on(
                    "keydown",
                    (function (seat, $seat) {
                      return function (e) {
                        var $newSeat;

                        //everything depends on the pressed key
                        switch (e.which) {
                          //spacebar will just trigger the same event mouse click does
                          case 32:
                            e.preventDefault();
                            seat.click();
                            break;
                          //UP & DOWN
                          case 40:
                          case 38:
                            e.preventDefault();

                            $newSeat = (function findAvailable(
                              $rows,
                              $seats,
                              $currentRow
                            ) {
                              var $newRow;

                              //let's determine which row should we move to

                              if (!$rows.index($currentRow) && e.which == 38) {
                                //if this is the first row and user has pressed up arrow, move to the last row
                                $newRow = $rows.last();
                              } else if (
                                $rows.index($currentRow) == $rows.length - 1 &&
                                e.which == 40
                              ) {
                                //if this is the last row and user has pressed down arrow, move to the first row
                                $newRow = $rows.first();
                              } else {
                                //using eq to get an element at the desired index position
                                $newRow = $rows.eq(
                                  //if up arrow, then decrement the index, if down increment it
                                  $rows.index($currentRow) +
                                    (e.which == 38 ? -1 : +1)
                                );
                              }

                              //now that we know the row, let's get the seat using the current column position
                              $newSeat = $newRow
                                .find(".seatCharts-seat,.seatCharts-space")
                                .eq($seats.index($seat));

                              //if the seat we found is a space, keep looking further
                              return $newSeat.hasClass("seatCharts-space")
                                ? findAvailable($rows, $seats, $newRow)
                                : $newSeat;
                            })(
                              $seat
                                //get a reference to the parent container and then select all rows but the header
                                .parents(".seatCharts-container")
                                .find(
                                  ".seatCharts-row:not(.seatCharts-header)"
                                ),
                              $seat
                                //get a reference to the parent row and then find all seat cells (both seats & spaces)
                                .parents(".seatCharts-row:first")
                                .find(".seatCharts-seat,.seatCharts-space"),
                              //get a reference to the current row
                              $seat.parents(
                                ".seatCharts-row:not(.seatCharts-header)"
                              )
                            );

                            //we couldn't determine the new seat, so we better give up
                            if (!$newSeat.length) {
                              return;
                            }

                            //remove focus from the old seat and put it on the new one
                            seat.blur();
                            seats[$newSeat.attr("id")].focus();
                            $newSeat.focus();

                            //update our "aria" reference with the new seat id
                            seatCharts.attr(
                              "aria-activedescendant",
                              $newSeat.attr("id")
                            );

                            break;
                          //LEFT & RIGHT
                          case 37:
                          case 39:
                            e.preventDefault();

                            $newSeat = (function ($seats) {
                              if (!$seats.index($seat) && e.which == 37) {
                                return $seats.last();
                              } else if (
                                $seats.index($seat) == $seats.length - 1 &&
                                e.which == 39
                              ) {
                                return $seats.first();
                              } else {
                                return $seats.eq(
                                  $seats.index($seat) +
                                    (e.which == 37 ? -1 : +1)
                                );
                              }
                            })(
                              $seat
                                .parents(".seatCharts-container:first")
                                .find(".seatCharts-seat:not(.seatCharts-space)")
                            );

                            if (!$newSeat.length) {
                              return;
                            }

                            //handle focus
                            seat.blur();
                            seats[$newSeat.attr("id")].focus();
                            $newSeat.focus();

                            seatCharts.attr(
                              "aria-activedescendant",
                              $newSeat.attr("id")
                            );
                            break;
                          default:
                            break;
                        }
                      };
                    })(fn, fn.node())
                  );
                //.appendTo(seatCharts.find('.' + row));
              };
            })(fn, settings);

          fn.addClass("seatCharts-container");

          $.extend(true, settings, setup);

          settings.naming.rows =
            settings.naming.rows ||
            (function (length) {
              var rows = [];
              for (var i = 1; i <= length; i++) {
                rows.push(i);
              }
              return rows;
            })(settings.map.length);

          settings.naming.columns =
            settings.naming.columns ||
            (function (length) {
              var columns = [];
              for (var i = 1; i <= length; i++) {
                columns.push(i);
              }
              return columns;
            })(settings.map[0].split("").length);

          if (settings.naming.top) {
            var $headerRow = $("<div></div>").addClass(
              "seatCharts-row seatCharts-header"
            );

            if (settings.naming.left) {
              $headerRow.append($("<div></div>").addClass("seatCharts-cell"));
            }

            $.each(settings.naming.columns, function (index, value) {
              $headerRow.append(
                $("<div></div>").addClass("seatCharts-cell").text(value)
              );
            });
          }

          fn.append($headerRow);

          $.each(settings.map, function (row, characters) {
            var $row = $("<div></div>").addClass("seatCharts-row");

            if (settings.naming.left) {
              $row.append(
                $("<div></div>")
                  .addClass("seatCharts-cell seatCharts-space")
                  .text(settings.naming.rows[row])
              );
            }

            $.each(
              characters.match(
                /[a-z_]{1}(\[[0-9a-z_]{0,}(,[0-9a-z_ ]+)?\])?/gi
              ),
              function (column, characterParams) {
                var matches = characterParams.match(
                    /([a-z_]{1})(\[([0-9a-z_ ,]+)\])?/i
                  ),
                  //no matter if user specifies [] params, the character should be in the second element
                  character = matches[1],
                  //check if user has passed some additional params to override id or label
                  params =
                    typeof matches[3] !== "undefined"
                      ? matches[3].split(",")
                      : [],
                  //id param should be first
                  overrideId = params.length ? params[0] : null,
                  //label param should be second
                  overrideLabel = params.length === 2 ? params[1] : null;

                $row.append(
                  character != "_"
                    ? //if the character is not an underscore (empty space)
                      (function (naming) {
                        //so users don't have to specify empty objects
                        settings.seats[character] =
                          character in settings.seats
                            ? settings.seats[character]
                            : {};

                        var id = overrideId
                          ? overrideId
                          : naming.getId(
                              character,
                              naming.rows[row],
                              naming.columns[column]
                            );
                        seats[id] = new seat({
                          id: id,
                          label: overrideLabel
                            ? overrideLabel
                            : naming.getLabel(
                                character,
                                naming.rows[row],
                                naming.columns[column]
                              ),
                          row: row,
                          column: column,
                          character: character,
                        });

                        seatIds.push(id);
                        return seats[id].node();
                      })(settings.naming)
                    : //this is just an empty space (_)
                      $("<div></div>").addClass(
                        "seatCharts-cell seatCharts-space"
                      )
                );
              }
            );

            fn.append($row);
          });

          settings.legend.items.length
            ? (function (legend) {
                var $container = (
                  legend.node || $("<div></div").insertAfter(fn)
                ).addClass("seatCharts-legend");

                var $ul = $("<ul></ul>")
                  .addClass("seatCharts-legendList")
                  .appendTo($container);

                $.each(legend.items, function (index, item) {
                  $ul.append(
                    $("<li></li>")
                      .addClass("seatCharts-legendItem")
                      .append(
                        $("<div></div>").addClass(
                          ["seatCharts-seat", "seatCharts-cell", item[1]]
                            .concat(
                              settings.classes,
                              typeof settings.seats[item[0]] == "undefined"
                                ? []
                                : settings.seats[item[0]].classes
                            )
                            .join(" ")
                        )
                      )
                      .append(
                        $("<span></span>")
                          .addClass("seatCharts-legendDescription")
                          .text(item[2])
                      )
                  );
                });

                return $container;
              })(settings.legend)
            : null;

          fn.attr({
            tabIndex: 0,
          });

          fn.focus(function () {
            if (fn.attr("aria-activedescendant")) {
              seats[fn.attr("aria-activedescendant")].blur();
            }

            fn.find(".seatCharts-seat:not(.seatCharts-space):first").focus();
            seats[seatIds[0]].focus();
          });

          //public methods of seatCharts
          fn.data("seatCharts", {
            seats: seats,
            seatIds: seatIds,
            //set for one, set for many, get for one
            status: function () {
              var fn = this;

              return arguments.length == 1
                ? fn.seats[arguments[0]].status()
                : (function (seatsIds, newStatus) {
                    return typeof seatsIds == "string"
                      ? fn.seats[seatsIds].status(newStatus)
                      : (function () {
                          $.each(seatsIds, function (index, seatId) {
                            fn.seats[seatId].status(newStatus);
                          });
                        })();
                  })(arguments[0], arguments[1]);
            },
            each: function (callback) {
              var fn = this;

              for (var seatId in fn.seats) {
                if (false === callback.call(fn.seats[seatId], seatId)) {
                  return seatId; //return last checked
                }
              }

              return true;
            },
            node: function () {
              var fn = this;

              return $("#" + fn.seatIds.join(",#"));
            },

            find: function (query) {
              var fn = this;

              var seatSet = fn.set();

              return query.length == 1
                ? (function (character) {
                    fn.each(function () {
                      if (this.char() == character) {
                        seatSet.push(this.settings.id, this);
                      }
                    });

                    return seatSet;
                  })(query)
                : (function () {
                    return query.indexOf(".") > -1
                      ? (function () {
                          var parts = query.split(".");

                          fn.each(function (seatId) {
                            if (
                              this.char() == parts[0] &&
                              this.status() == parts[1]
                            ) {
                              seatSet.push(this.settings.id, this);
                            }
                          });

                          return seatSet;
                        })()
                      : (function () {
                          fn.each(function () {
                            if (this.status() == query) {
                              seatSet.push(this.settings.id, this);
                            }
                          });

                          return seatSet;
                        })();
                  })();
            },
            set: function set() {
              var fn = this;

              return {
                seats: [],
                seatIds: [],
                length: 0,
                status: function () {
                  var args = arguments,
                    that = this;

                  return this.length == 1 && args.length == 0
                    ? this.seats[0].status()
                    : (function () {
                        $.each(that.seats, function () {
                          this.status.apply(this, args);
                        });
                      })();
                },
                node: function () {
                  return fn.node.call(this);
                },
                each: function () {
                  return fn.each.call(this, arguments[0]);
                },
                get: function () {
                  return fn.get.call(this, arguments[0]);
                },
                find: function () {
                  return fn.find.call(this, arguments[0]);
                },
                set: function () {
                  return set.call(fn);
                },
                push: function (id, seat) {
                  this.seats.push(seat);
                  this.seatIds.push(id);
                  ++this.length;
                },
              };
            },

            get: function (seatsIds) {
              var fn = this;

              return typeof seatsIds == "string"
                ? fn.seats[seatsIds]
                : (function () {
                    var seatSet = fn.set();

                    $.each(seatsIds, function (index, seatId) {
                      if (typeof fn.seats[seatId] === "object") {
                        seatSet.push(seatId, fn.seats[seatId]);
                      }
                    });

                    return seatSet;
                  })();
            },
          });

          return fn.data("seatCharts");
        };
      })(jQuery);

      var firstSeatLabel = 1;
      var bookedMan = !!localStorage.getItem("bookedMan")
        ? $.parseJSON(localStorage.getItem("bookedMan"))
        : [];
      var bookedWoman = !!localStorage.getItem("bookedWoman")
        ? $.parseJSON(localStorage.getItem("bookedWoman"))
        : [];
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
                classes: "bos-koltuk",
                category: "Koltuk",
              },
            },
            naming: {
              top: false,
              getLabel: function (character, row, column) {
                return firstSeatLabel++;
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
                  .appendTo($cart);

                $counter.text(sc.find("selected").length + 1);
                $total.text(recalculateTotal(sc) + this.data().price);

                return "selected";
              } else if (this.status() == "selected") {
                //update the counter
                $counter.text(sc.find("selected").length - 1);

                //and total
                $total.text(recalculateTotal(sc) - this.data().price);

                //remove the item from our cart
                $("#cart-item-" + this.settings.id).remove();

                return "available";
              } else if (this.status() == "unavailable") {
                return "unavailable";
              } else {
                return this.style();
              }
            },
          });

        $("#selected-seats").on("click", ".cancel-cart-item", function () {
          sc.get($(this).parents("li:first").data("seatId")).click();
        });

        sc.get(bookedWoman).status("unavailablewoman");
        sc.get(bookedMan).status("unavailableman");
      });

      function recalculateTotal(sc) {
        var total = 0;

        sc.find("selected").each(function () {
          total += this.data().price;
        });

        return total;
      }

      $(function () {
        $("#checkout-button").click(function () {
          var items = $("#selected-seats li");
          if (items.length <= 0) {
            alert("Please select atleast 1 seat first.");
            return false;
          }
          var selected = [];
          items.each(function (e) {
            var id = $(this).attr("id");
            id = id.replace("cart-item-", "");
            selected.push(id);
          });
          if (localStorage.getItem("cinsiyet") == '"Erkek"') {
            Object.keys(bookedMan).map((k) => {
              selected.push(bookedMan[k]);
            });
            localStorage.setItem("bookedMan", JSON.stringify(selected));
          } else if (localStorage.getItem("cinsiyet").toString() == '"Kadin"') {
            Object.keys(bookedWoman).map((k) => {
              selected.push(bookedWoman[k]);
            });
            localStorage.setItem("bookedWoman", JSON.stringify(selected));
          }

          alert("Seats has been Reserved successfully.");
          location.reload();
        });
        $("#reset-btn").click(function () {
          if (
            confirm("are you sure to reset the reservation of the bus?") ===
            true
          ) {
            localStorage.removeItem("bookedMan");
            localStorage.removeItem("bookedWoman");
            alert("Seats has been Reset successfully.");
            location.reload();
          }
        });
      });
    </script>
    <style>
      div.seatCharts-container {
        /*min-width: 700px;*/
      }
      div.seatCharts-cell {
        height: 16px;
        width: 16px;
        margin: 3px;
        float: left;
        text-align: center;
        outline: none;
        font-size: 13px;
        line-height: 16px;
        color: blue;
      }
      div.seatCharts-seat {
        background-color: green;
        color: white;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        cursor: default;
      }
      div.seatCharts-seat:focus {
        border: none;
      }
      /*
    .seatCharts-seat:focus {
        outline: none;
    }
    */

      div.seatCharts-space {
        background-color: white;
      }
      div.seatCharts-row {
        height: 50px;
      }

      div.seatCharts-row:after {
        clear: both;
      }

      div.seatCharts-seat.selected {
        background-color: aqua;
      }

      div.seatCharts-seat.focused {
        background-color: #6db131;
      }

      div.seatCharts-seat.available {
        background-color: green;
      }

      div.seatCharts-seat.unavailable {
        background-color: red;
        cursor: not-allowed;
      }

      ul.seatCharts-legendList {
        list-style: none;
      }
      li.seatCharts-legendItem {
        margin-top: 10px;
        line-height: 2;
      }

      html,
      body {
        height: 100%;
        width: 100%;
      }

      body {
        max-height: 100%;
        overflow: auto;
        background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);

        /* Yeni arka plan resmi */
        background-image: url("arkaplan.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: #e5e3e3;
        overflow-x: hidden;
      }

      a {
        color: #b71a4c;
      }

      .wrapper {
        width: 100%;
        text-align: center;
      }

      .container {
        margin: 0 auto;
        width: 40%;
        text-align: left;
      }

      .booking-details {
        text-align: left;
        font-size: 12px;
        padding: 4.5em;
        margin-top: 4em;
      }

      .booking-details h2 {
        margin: 25px 0 20px 0;
        font-size: 17px;
      }

      .booking-details h3 {
        margin: 5px 5px 0 0;
        font-size: 14px;
      }

      div.seatCharts-cell {
        color: #1a1c1e;
        height: 3em;
        width: 3em;
        line-height: 0.5em;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 17px;
      }

      div.seatCharts-seat {
        color: #ffffff;
        cursor: pointer;
      }

      div.seatCharts-row {
        height: 5em;
      }

      div.seatCharts-seat.available {
        background: rgb(156, 195, 222);
      }

      div.seatCharts-seat.available.first-class {
        background: rgb(178, 64, 212);
        background: radial-gradient(
          circle,
          rgba(178, 64, 212, 1) 0%,
          rgba(137, 26, 158, 1) 25%,
          rgba(118, 12, 149, 1) 50%,
          rgba(126, 17, 149, 1) 75%,
          rgba(94, 2, 121, 1) 100%
        );
      }

      div.seatCharts-seat.focused {
        background: rgb(219, 215, 215);
        background: radial-gradient(
          circle,
          rgba(219, 215, 215, 1) 0%,
          rgba(205, 205, 205, 1) 25%,
          rgba(195, 192, 192, 1) 50%,
          rgba(204, 204, 204, 1) 75%,
          rgba(207, 207, 207, 1) 100%
        );
        color: #1a1c1e;
      }

      div.seatCharts-seat.selected {
        background-color: #85ffbd;
        background-image: linear-gradient(45deg, #85ffbd 0%, #fffb7d 100%);
        text-shadow: 2px 2px 5px #000;
      }

      div.seatCharts-seat.unavailable {
        background: rgb(252, 121, 121);
        background: radial-gradient(
          circle,
          rgba(252, 121, 121, 1) 0%,
          rgba(249, 81, 81, 1) 25%,
          rgba(231, 53, 53, 1) 50%,
          rgba(255, 24, 24, 1) 75%,
          rgba(217, 6, 6, 1) 100%
        );
      }

      div.seatCharts-seat.unavailablewoman {
        background: rgb(252, 121, 121);
      }

      div.seatCharts-seat.unavailableman {
        background: blue;
      }

      div.seatCharts-legend {
        padding-left: 0px;
        bottom: 16px;
      }

      ul.seatCharts-legendList {
        padding-left: 0px;
      }

      span.seatCharts-legendDescription {
        margin-left: 5px;
        line-height: 30px;
      }

      #selected-seats {
        min-height: 10em;
        overflow-y: scroll;
        background: #fff;
        padding: 0.5em 1em;
        overflow: auto;
      }

      ul#selected-seats:empty:after {
        content: "Lutfen koltuk secimi yapiniz";
        color: #6c6c6c;
      }

      ul#selected-seats > li {
        color: #000;
        list-style: none;
      }

      .text-muted {
        color: rgb(255 252 252);
        text-shadow: 2px 2px 5px #000;
      }

      .text-center {
        text-align: center;
        align-items: center;
        justify-content: center;
      }

      .fw-bold {
        font-weight: bold;
      }

      .fw-bolder {
        font-weight: bolder;
      }

      .row {
        --bs-gutter-x: 0.5rem;
        --bs-gutter-y: 0.5rem;
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(-1 * var(--bs-gutter-y));
        margin-right: calc(-0.5 * var(--bs-gutter-x));
        margin-left: calc(-0.5 * var(--bs-gutter-x));
      }

      .grid-30 {
        flex: 0 0 auto;
        width: 30%;
      }

      div.seatCharts-space {
        background-color: transparent;
        color: #fff !important;
      }

      li.seatCharts-legendItem {
        margin-top: 10px;
        font-size: 15px;
        line-height: 5em;
      }

      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
      }

      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        display: flex;
        flex-direction: column;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
      }

      /* The Close Button */
      .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
      }
    </style>
  </head>

  <body class="bg-gray-600">
    <!-- The Modal -->
    <div id="myModal" class="modal">
      <div class="modal-content gap-y-4 w-64 h-64">
        <span class="close">&times;</span>
        <p class="text-black self-center">Cinsiyetinizi Seciniz</p>
        <button id="btnMan" class="bg-blue-600 px-4 py-2 rounded-lg">
          Erkek
        </button>
        <button id="btnWoman" class="bg-red-600 px-4 py-2 rounded-lg">
          Kadin
        </button>
      </div>
    </div>
    <div class="wrapper w-screen h-screen justify-center items-center">
      <p class="text-2xl pt-6 absolute ml-16 mt-8">Koltuk Secimi</p>
      <div class="container">
        <div class="row self-center justify-center pt-6">
          <div class="grid-30">
            <div id="seat-map">
              <h4
                class="text-muted fw-bold text-center"
                style="padding-left: 3em; margin: 0.5em"
              >
                Otobusun Baslangici
              </h4>
              <div
                id="bus-seat-map"
                class="bg-gray-700 border border-2 border-gray-900 rounded-lg pt-6"
              ></div>
              <h4
                class="text-muted fw-bold text-center"
                style="padding-left: 3em; margin: 0.5em"
              >
                Otobusun Sonu
              </h4>
            </div>
          </div>
          <div class="grid-50">
            <div class="booking-details flex flex-col gap-y-4">
              <form action="" method="post">
                <ul id="selected-seats"></ul>
                <h2>
                  Toplam: <b><span id="total">0</span>TL</b>
                </h2>
                 <a href="http://localhost/myci5/public/odeme"> 
                <button
                  type="button"
                  id="checkout-button"
                  class="px-4 py-4 rounded-lg bg-green-600 w-full"
                >
                  Satin Al
                </button></a>
              </form>

              <div id="legend" class="absolute w-1/3"></div>

              <button
                id="reset-btn"
                class="px-4 py-4 bg-red-600 rounded-lg w-full"
                type="button"
              >
                Secimi sifirla
              </button>
              <button id="myBtn" class="px-4 py-4 bg-slate-900 rounded-lg mt-6">
                Cinsiyet Seciniz
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="./js/script.js"></script>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal
      btn.onclick = function () {
        modal.style.display = "block";
      };

      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal.style.display = "none";
      };

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };

      var btnMan = document.getElementById("btnMan");
      var btnWoman = document.getElementById("btnWoman");

      btnMan.onclick = function () {
        localStorage.setItem("cinsiyet", JSON.stringify("Erkek"));
        modal.style.display = "none";
      };

      btnWoman.onclick = function () {
        localStorage.setItem("cinsiyet", JSON.stringify("Kadin"));
        modal.style.display = "none";
      };
    </script>
  </body>
</html>
