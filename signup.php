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


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Sign Up now!</title>
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


  </style>
</head>
<body>

  <div class="container">
  <?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have a database connection established
    // Replace 'your_db_host', 'your_db_username', 'your_db_password', and 'your_db_name' with actual database credentials
    $conn = mysqli_connect('localhost', 'root', '', 'stay_free');

    // Check if the database connection is successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Retrieve the form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $contact = $_POST['contact'];
    $age = $_POST['age'];
    //$email = $_POST['username'];
    $cpassword = $_POST['c_password'];
    //$confirmPassword = $_POST['confirm_password'];

    //Perform basic data validation
    if ($password!= $cpassword) {
        // Handle password mismatch
        echo "Passwords do not match.";
     } 
     else {
        // Password and confirm password match, proceed to save data to the database
        // In a real application, you should hash the password before saving it.
        // Avoid using MD5 and prefer more secure options like password_hash() function.
        // Save the email and hashed password to the database (you can add more fields as needed)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO patient (p_mail, p_password, pFirstName, pLastName, pContactNo, age) VALUES ('$email', '$password', '$first','$last','$contact','$age')";

        if (mysqli_query($conn, $query)) {
            echo "Sign-up successful!"; // Or redirect to a success page
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        
    }
    //$hashedPassword = md5($password);
      // Save the email and hashed password to the database (you can add more fields as needed)
    // Close the database connection
    mysqli_close($conn);
}
?>

     <div class="login-form">
    <h2><?php echo isset($_POST['login']) ? 'Login' : 'Sign Up'; ?></h2>
    <?php if (isset($_POST['login'])) : ?>
      <!-- Login Form -->
      <form action="#" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
      </form>
      <p>Don't have an account? <a href="/stayfree/signup.php">Sign Up</a></p>
    <?php else : ?>
      <!-- Sign Up Form -->
      <form action="#" method="post">
      <input type="text" name="first" placeholder="Enter First Name" required>
      <input type="text" name="last" placeholder="Enter Last Name">
      <input type="phonenumber" name="contact" placeholder="Enter Contact Details">
      <input type="number" name="age" placeholder="Enter Your Age" required>
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type="password" name="c_password" placeholder="Confirm Your Password" required>
        <button type="submit" onclick="navigateToSignup()">Signup</button>
    <script>
        function navigateToSignup() {
                    console.log("hey")
                    window.location.href = "/stayfree_final/homepage.php";
          }
      </script>
      </form>
      <p>Already have an account? <a href="/stayfree_final/login.php">Login</a></p>
    <?php endif; ?>
  </div>
  </div>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
