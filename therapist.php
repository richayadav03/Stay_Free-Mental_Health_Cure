<?php
// Start the session to access user information
//session_start();

// Check if the therapist is logged in. If not, redirect to the login page.
// if (!isset($_SESSION['email'])) {
//     header("Location: therapist_login.php");
//     exit();
// }

// if(!isset($_GET['email'])){
//     $email=$_GET['email'];
// }
// else{
//     header("Location: therapist_login.php");
//     exit();
// }
$email= $_POST["email"];
// Assuming you have a database connection established
// Replace "your_database_connection" with the actual database connection
// and "therapist_profiles" with the table name where therapist profiles are stored
$database_connection = mysqli_connect("localhost", "root", "", "stay_free");
if (!$database_connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Fetch the therapist's profile information based on the email stored in the session
// $email = $_SESSION['email'];
$sql = "SELECT FirstName, LastName, FtMail, Ratings, Fee FROM freetharapist WHERE FtMail = '$email'";
$result = mysqli_query($database_connection, $sql);

// Check if the query was successful and if a row was found
if ($result && mysqli_num_rows($result) > 0) {
    // Fetch the profile data
    $row = mysqli_fetch_assoc($result);
    $FirstName = $row['FirstName'];
    $LastName = $row['LastName'];
    $Mail = $row['FtMail'];
    $Rating = $row['Ratings'];
    $Fees = $row['Fee'];
    $Therapist = 'Free Session Therapist';
}
else
{
    $sql = "SELECT NtFirstName, NtLastName, NtMail, NtRatings, NtFee FROM nominaltherapist WHERE NtMail = '$email'";
    $result = mysqli_query($database_connection, $sql);
    if ($result && mysqli_num_rows($result) > 0)
    {
    // Fetch the profile data
    $row = mysqli_fetch_assoc($result);
    $FirstName = $row['NtFirstName'];
    $LastName = $row['NtLastName'];
    $Mail = $row['NtMail'];
    $Rating = $row['NtRatings'];
    $Fees = $row['NtFee'];
    $Therapist = 'Standard Session Therapist';
    }
    else
    {
        $sql = "SELECT UtFirstName, UtLastName, UtMail, UtRatings, UtFee FROM ultimatetherapist WHERE UtMail = '$email'";
        $result = mysqli_query($database_connection, $sql);
        if ($result && mysqli_num_rows($result) > 0)
        {
        // Fetch the profile data
        $row = mysqli_fetch_assoc($result);
        $FirstName = $row['UtFirstName'];
        $LastName = $row['UtLastName'];
        $Mail = $row['UtMail'];
        $Rating = $row['UtRatings'];
        $Fees = $row['UtFee'];
        $Therapist = 'Exclusive Session Therapist';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Therapist Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f3fc; /* Lavender background color */
            color: #8e44ad; /* Dark lavender text color */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff; /* Set the background color of the container */
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            color: #8e44ad; /* Dark lavender heading color */
        }

        p {
            margin: 10px 0;
        }

        strong {
            font-weight: bold;
        }

        form {
            text-align: center;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #8e44ad; /* Dark lavender background color for the button */
            color: #ffffff; /* Set the text color of the button */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #9b59b6; /* Light lavender hover background color for the button */
        }
    </style>    
</head>
<body>
<?php require '<partials/_nav.php' ?>
    <div class="container">
        <h2>Therapist Profile</h2>
        <p><strong>First Name:</strong> <?php echo $FirstName; ?></p>
        <p><strong>Last Name:</strong> <?php echo $LastName; ?></p>
        <p><strong>Email:</strong> <?php echo $Mail; ?></p>
        <p><strong>Rating:</strong> <?php echo $Rating; ?></p>
        <p><strong>Fees:</strong> <?php echo $Fees; ?> / session</p>
        <p><strong>Plan:</strong> <?php echo $Therapist; ?></p>
        <!-- Add a link to update the profile -->
        <!-- <a href="update_profile.php">Update Profile</a> -->
        <!-- Add logout option to destroy the session -->
        <form action="homepage.php" method="post">
            <input type="submit" value="Logout">
        </form>
    </div>
</body>
</html>