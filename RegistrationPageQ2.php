<?php

?>
<html>
  <head>
    <link rel="stylesheet" href="glassregister.css" /> <!-- links to CSS style sheet -->
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="RegistrationPageQ2.php" class="form">
        <div class="input-box">
          <label>Full Name</label> <!-- creating labels -->
          <input type="text" placeholder="Enter full name" required /><!-- creating text fields for user input -->
		</div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" required />
        </div>
		
		<div class="input-box">
          <label>Username </label>
          <input type="text" placeholder="Enter Username" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked /><!-- creates radio button -->
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
        </div>
        </div>
        <button>Submit</button> <!-- Creates submit button -->
      </form>
      <div class="login">
      <p>Already have an account? <a href="LoginPage.php">Login here</a></p> <!-- creates a link to the login page -->
    </div>
    </section>
  </body>
</html>
