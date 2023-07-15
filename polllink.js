// Get the modal
var modal = document.getElementById("reportModal");

// Get the button that opens the modal
var btn = document.getElementById("reportButton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Get the report confirmation element
var reportConfirmation = document.getElementById("reportConfirmation");

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// Handle form submission
document.getElementById("reportForm").addEventListener("submit", function(event) {
  event.preventDefault();
  // Retrieve the reason for reporting
  var reportReason = document.getElementById("reportReason").value;
  
  // Perform further actions like submitting the report via an API call
  
  // Display the report confirmation message
  modal.style.display = "none";
  reportConfirmation.style.display = "block";
});
