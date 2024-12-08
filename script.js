document.getElementById("registrationForm").addEventListener("submit", function (e) {
    // Perform form validation
    const terms = document.querySelector('input[name="terms"]');
    if (!terms.checked) {
        alert("You must agree to the terms and conditions.");
        e.preventDefault();
    }
});
