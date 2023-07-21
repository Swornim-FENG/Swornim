document.addEventListener("DOMContentLoaded", function () {

    var filterButton = document.querySelector(".filter-section button");
  
  
    filterButton.addEventListener("click", function () {
  
      var checkedRanges = document.querySelectorAll(
        ".filter-section input[type='checkbox']:checked"
      );
  
      var selectedRanges = [];
  
      checkedRanges.forEach(function (checkbox) {
        selectedRanges.push(checkbox.value);
      });
  
      var roomCards = document.querySelectorAll(".room-card");
  
      roomCards.forEach(function (card) {
        card.style.display = "none";
      });
  
      if (selectedRanges.length === 0) {
        roomCards.forEach(function (card) {
          card.style.display = "block";
        });
      } else {
        selectedRanges.forEach(function (range) {
          roomCards.forEach(function (card) {
            var priceElement = card.querySelector("p:nth-child(3)");
            var price = parseInt(priceElement.textContent.split(":")[1]);
  
            if (range === "3000+" && price >= 3000) {
              card.style.display = "block";
            } else {
              var rangeValues = range.split("-");
              var min = parseInt(rangeValues[0]);
              var max = parseInt(rangeValues[1]);
  
              if (price >= min && price <= max) {
                card.style.display = "block";
              }
            }
          });
        });
      }
    });
  });