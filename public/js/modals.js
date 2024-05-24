var modal = document.getElementById("myModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Get all bid buttons
        var bidButtons = document.getElementsByClassName("bidButton");

        for (let i = 0; i < bidButtons.length; i++) {
            bidButtons[i].onclick = function() {
                var card = bidButtons[i].closest(".card");
                var cardId = card.getAttribute("data-id");
                var startingPrice = card.getAttribute("data-starting-price");
                var bidRange = document.getElementById("bidRange");
                var bidPrice = document.getElementById("bidPrice");

                // Retrieve the last bid price from localStorage
                var lastBidPrice = localStorage.getItem("lastBidPrice-" + cardId);
                if (lastBidPrice !== null) {
                    bidRange.value = lastBidPrice;
                    bidPrice.textContent = lastBidPrice;
                } else {
                    bidRange.value = startingPrice;
                    bidPrice.textContent = startingPrice;
                }

                // Set the starting price
                bidRange.min = startingPrice;

                // Display the modal
                modal.style.display = "block";

                // Update price display when range input changes
                bidRange.oninput = function() {
                    bidPrice.textContent = this.value;
                }
            }
        }

        // Get the submit bid button and success alert
        var submitBidButton = document.getElementById("submitBid");
        var successAlert = document.getElementById("successAlert");

        // When the user clicks the submit bid button, show the success alert
        submitBidButton.onclick = function() {
            var bidRange = document.getElementById("bidRange");
            var cardId = document.querySelector(".card[data-id]").getAttribute("data-id");
            
            // Save the bid price to localStorage
            localStorage.setItem("lastBidPrice-" + cardId, bidRange.value);

            // Close the modal
            modal.style.display = "none";

            // Show the success alert
            successAlert.classList.remove("hidden");
            setTimeout(function() {
                successAlert.classList.add("hidden");
            }, 3000); // Hide after 3 seconds
        }