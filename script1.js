
document.getElementById('myForm').addEventListener('submit', function (event) {
    event.preventDefault();
  
    emailjs.init("user_your_user_id");
  
    emailjs.sendForm('your_service_id', 'your_template_id', this)
      .then(function (response) {
        console.log('Sent successfully', response);
      }, function (error) {
        console.log('Failed to send', error);
      });
  });
  alert
  function login() {
    var firstname = document.getElementById("fname").value;
    var lastname = document.getElementById("lname").value;
    var password = document.getElementById("password").value;

    // Implement your login logic here
    // For simplicity, let's just check if both fields are non-empty
    if (fname && lname && password) {
        document.getElementById("Form1").style.display = "none";

    } else {
        alert("Please enter both username and password.");
    }
}
  