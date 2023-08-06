<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html> -->
<?php

session_start();

// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stay_free";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start a session to store user data (if needed)
// session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get email and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];
    //$type= $_POST["type"];
    if (isset($_POST['type'])) {
        $selectedSession = $_POST['type']; // This will contain either "free", "nominal", or "ultimate"
        
        // Now you can use $selectedSession in your PHP code as needed.
        // For example, you can use it in conditional statements to perform different actions based on the selected session.
        if ($selectedSession === "free") {
            // Perform actions for "Free Session"
            $sql = "SELECT * FROM freetharapist WHERE FtMail = '$email' AND FtPassword = '$password'";
        } elseif ($selectedSession === "nominal") {
            // Perform actions for "Nominal Session"
            $sql = "SELECT * FROM nominaltherapist WHERE NtMail = '$email' AND NtPassword = '$password'";
        } elseif ($selectedSession === "ultimate") {
            // Perform actions for "Ultimate Session"
            $sql = "SELECT * FROM  ultimatetherapist WHERE UtMail = '$email' AND UtPassword = '$password'";
         } //else {
        //     // Handle any other cases or errors
        // }
        //header("Location: therapist.php?email=", urlencode($email));
        //exit();
        if(!isset($_POST['submit']))
        {
          $email=$_POST['submit'];
        }

    } else {
        // Handle the case when no radio button is selected
        // This could be useful for validation or providing a default value.
    }
    // Query the database to check if the email exists and the password is correct
    


    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // Email and password are correct
        // Redirect to the user page or perform further actions
        // $_SESSION["email"] = $email; // Store email in the session (optional)

        // Redirect to the user page
        //header("Location: therapist.php");
        //exit();
    } else {
        // Email and password don't match any records
        echo "Invalid email or password.";
    }
}


// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Login now!</title>
  <style>
    /* Basic CSS for styling the login/sign-up page */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f1c40f; /* Lighter background color (yellow) */
      color: #9b59b6; /* Set the text color (darker shade of lavender) */
    }

    /* Set the navbar styles */
    nav {
      background-color: #8e44ad; /* Darker background color (purple) */
      padding: 10px;
      width: 100%;
    }

    nav a {
      color: #ffffff; /* Set the link color (white) */
      text-decoration: none;
      margin-right: 10px;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }

    .login-form {
      width: 300px;
      margin: 20px;
      padding: 20px;
      background-color: #ffffff; /* Set the background color of the form */
      border-radius: 5px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #9b59b6; /* Set the border color (darker shade of lavender) */
      border-radius: 5px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #9b59b6; /* Set the background color of the button (darker shade of lavender) */
      color: #ffffff; /* Set the text color of the button */
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #8e44ad; /* Set the hover background color of the button (a slightly darker shade of lavender) */
    }

    p {
      margin-top: 10px;
      text-align: center;
    }

    p a {
      color: #9b59b6; /* Set the color of the link (darker shade of lavender) */
      text-decoration: none;
    }

    p a:hover {
      text-decoration: underline;
    }

    /* Custom styles for the login/sign-up page */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f8f3fc; /* Lavender background color */
  color: #8e44ad; /* Dark lavender text color */
}

.login-form {
  width: 300px;
  margin: 20px;
  padding: 20px;
  background-color: #ffffff; /* Set the background color of the form */
  border-radius: 5px;
}

input {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #8e44ad; /* Dark lavender border color */
  border-radius: 5px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #8e44ad; /* Dark lavender background color for the button */
  color: #ffffff; /* Set the text color of the button */
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #9b59b6; /* Light lavender hover background color for the button */
}

p {
  margin-top: 10px;
  text-align: center;
}

p a {
  color: #9b59b6; /* Light lavender color for the link */
  text-decoration: none;
}

p a:hover {
  text-decoration: underline;
}

input[type="radio"] {
    display: inline;
    margin-right: 10px;
}


  </style>
</head>
<body>


<div class="container">
    <div class="login-form">
        <h2><b>Login</b></h2>
        <form action="therapist.php" method="post">
            <input type="text" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="radio" id="free" name="type" value="free">
            <label for="free">Free Session</label>
            <input type="radio" id="nominal" name="type" value="nominal">
            <label for="nominal">Nominal Session</label>
            <input type="radio" id="ultimate" name="type" value="ultimate">
            <label for="ultimate">Ultimate Session</label><br><br>
            <input type="submit" value="submit" name="submit" ></input>
        </form>
        <!-- <p>Don't have an account? <a href="/stayfree_final/signup.php">Sign Up</a></p> -->
    </div>
</div>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
