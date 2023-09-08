<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Retrieve and process the form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    $_SESSION["username"] = "JohnDoe"; // Stores a username in the session

    header("Location: welcome.php"); // Retrieve and process the form data
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="LoginPage.css">
</head>
<body>
  <div class="wrapper">
    <form action="LoginPage.php" method="POST"> <!-- Specify the method as POST -->
      <h2>Login</h2>
      <div class="input-field">
        <input type="text" name="email" required> <!-- Add name attribute for form submission -->
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required> <!-- Add name attribute for form submission -->
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="RegistrationPageQ2.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
