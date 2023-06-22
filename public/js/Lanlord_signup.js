const toggleButtons = document.querySelectorAll(".toggle-password");
      const passwordInputs = document.querySelectorAll(
        'input[type="password"]'
      );
toggleButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const targetId = button.getAttribute("data-target");
      const targetInput = document.getElementById(targetId);
      if (targetInput.type === "password") {
        targetInput.type = "text";
        button.classList.remove("fa-eye");
        button.classList.add("fa-eye-slash");
      } else {
        targetInput.type = "password";
        button.classList.remove("fa-eye-slash");
        button.classList.add("fa-eye");
      }
    });
  });