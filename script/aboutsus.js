function validateEmail() {
    var email = document.getElementById("user-email").value;
    var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (email === "") {
      alert("Please enter your email.");
      return false;
    } else if (!email.match(emailRegex)) {
      alert("Please check your email.");
      return false;
    } else {
      alert("Thank you for signing up for our newsletter! We're thrilled to have you as part of our community.");
      return true;
    }
  }