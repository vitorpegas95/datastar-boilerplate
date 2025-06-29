// If you're not using a module bundler, DataStar will be available globally as `DataStar`
// otherwise, you'd import it. For this simple setup, we'll assume global.

document.addEventListener("DOMContentLoaded", () => {
  // Initialize DataStar
  // DataStar automatically scans the DOM for its directives.
  // You might want to pass an options object if you have custom behaviors.
  DataStar.init();

  console.log("DataStar initialized!");

  // Example of custom vanilla JS (not directly DataStar related)
  const myButton = document.getElementById("my-button");
  if (myButton) {
    myButton.addEventListener("click", () => {
      alert("Vanilla JS button clicked!");
    });
  }
});
