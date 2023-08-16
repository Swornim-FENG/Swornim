const filterButton = document.querySelector(".filter-button");
      const filterModal = document.getElementById("filterModal");

      filterButton.addEventListener("click", () => {
        filterModal.style.display = "block";
      });

      // Close the modal when clicking outside the modal content
      window.addEventListener("click", (event) => {
        if (event.target === filterModal) {
          filterModal.style.display = "none";
        }
      });
      function toggleDropdown() {
        const headerButtons = document.querySelector(".header-buttons");
        headerButtons.classList.toggle("show-dropdown");
      }

      const signupButton = document.getElementById("signup");
      const signupPopup = document.querySelector(".signup-popup");

      signupButton.addEventListener("click", () => {
        signupPopup.style.display = "block";
      });

      // Close the popup when clicking outside the signup button and popup
      document.addEventListener("click", (event) => {
        if (
          !event.target.matches("#signup") &&
          !event.target.matches(".signup-popup")
        ) {
          signupPopup.style.display = "none";
        }
      });
      //
      document.addEventListener("DOMContentLoaded", function () {
        var filterButton = document.querySelector(".apply-filter-button");

        filterButton.addEventListener("click", function () {
          var checkedRanges = document.querySelectorAll(
            ".price input[type='checkbox']:checked"
          );

          var roomCards = document.querySelectorAll(".room-card");

          roomCards.forEach(function (card) {
            card.style.display = "none";
          });

          if (checkedRanges.length === 0) {
            roomCards.forEach(function (card) {
              card.style.display = "block";
            });
          } else {
            roomCards.forEach(function (card) {
              var priceElement = card.querySelector(".room-price");
              var price = parseInt(priceElement.textContent);

              var showCard = false;

              checkedRanges.forEach(function (range) {
                var rangeValues = range.value.split("-");
                var min = parseInt(rangeValues[0]);
                var max = parseInt(rangeValues[1]);

                if (range.value === "3000+" && price >= 3000) {
                  showCard = true;
                } else if (price >= min && price <= max) {
                  showCard = true;
                }
              });

              if (showCard) {
                card.style.display = "block";
              }
            });
          }
        });
      });