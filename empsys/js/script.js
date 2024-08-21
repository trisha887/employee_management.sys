document.addEventListener("DOMContentLoaded", function() {
    const infoBox = document.getElementById("info-box");
    const toggleButton = document.getElementById("toggleButton");

    toggleButton.addEventListener("click", function() {
        if (infoBox.style.display === "none") {
            infoBox.style.display = "block";
        } else {
            infoBox.style.display = "none";
        }
    });
});
