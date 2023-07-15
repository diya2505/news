// Get the modal
var modal = document.getElementById("reportModal");

// Get the button that opens the modal
var btn = document.getElementById("reportButton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

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
document.getElementById("reportForm").addEventListener("submit", function(event)
{
  event.preventDefault();
  // Retrieve the reason for reporting
  var reportReason = document.getElementById("reportReason").value;
  
  // Perform further actions like submitting the report via an API call
  // You can use JavaScript fetch() or any AJAX library to send the report data to the server
  
});




// javascript backend code
// const express = require('express');
// const app = express();

// Endpoint for search request
// app.get('/search', (req, res) => {
//   const searchTerm = req.query.term;
//   // Implement your search logic here, e.g., using an API or database query
//   const searchResults = searchNews(searchTerm);
//   res.json(searchResults);
// });

// Dummy search function for demonstration purposes
// function searchNews(searchTerm) {
//   // Replace this with your actual news search implementation
//   const results = [
//     { title: 'News article 1', url: 'https://example.com/article1' },
//     { title: 'News article 2', url: 'https://example.com/article2' },
//     { title: 'News article 3', url: 'https://example.com/article3' }
//   ];
//   return results;
// }

// // Start the server
// app.listen(3000, () => {
//   console.log('Server listening on port 3000');
// });
