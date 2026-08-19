// Wait for DOM to fully load
document.addEventListener("DOMContentLoaded", function () {
    
    // 1. Password & Confirm Password Match Validation (Sign Up Page)
    const signupForm = document.getElementById("signupForm");
    if (signupForm) {
        signupForm.addEventListener("submit", function (e) {
            const password = document.getElementById("password");
            const confirmPassword = document.getElementById("confirm_password");

            if (password && confirmPassword && password.value !== confirmPassword.value) {
                e.preventDefault(); // Stop form submission
                alert("Passwords do not match! Please check and try again.");
                confirmPassword.focus();
                return false;
            }
        });
    }

    // 2. Bootstrap 5 Custom Native Form Validation
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

});