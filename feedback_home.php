<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
        input[type="text"],
        input[type="email"],
        input[type="number"],
        select {
            margin: 10px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid gray;
            width: 250px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #DFCCF1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width:550px;
            width: 100%;
        }

        .form-container label,
        .form-container input,
        .form-container textarea,
        .form-container button {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            background-color: #f0f0f0;
            color: #333;
        }

        .form-container button {
            background-color: #F5D2D3;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #DFCCF1;
        }
    </style>
</head>
<body>
<?php
// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stay_free";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $message = $_POST['Message'];
    $star = $_POST['star'];

    $check_sql = "SELECT NtId, UtId FROM connect_p_t_plan WHERE PatientId = '$email' LIMIT 1";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['NtId'] !== NULL) {
            $pn_nt_mail = $row['NtId'];
            $pn_planId = 1;
            $query = "INSERT INTO feedback (p_mail_Id, NtMail, PlanId, Feedback, Star) VALUES ('$email','$pn_nt_mail','$pn_planId','$message','$star')";
        } elseif ($row['UtId'] !== NULL) {
            $pn_ut_mail = $row['UtId'];
            $pn_planId = 2;
            $query = "INSERT INTO feedback (p_mail_Id, utMail, PlanId, Feedback, Star) VALUES ('$email','$pn_ut_mail','$pn_planId','$message','$star')";
        } else {
            echo "Error: No plan_id or therapist_id found for the email address: " . $email;
            exit;
        }

        if ($conn->query($query) === TRUE) {
            echo "Message saved successfully for the email address: " . $email;
        } else {
            echo "Error: Unable to save the message. " . $conn->error;
        }
    } else {
        echo "Error: The entered email address does not exist in the 'connect_p_t_plan' table.";
    }
}

// Close the database connection
$conn->close();
?>

    <div class="form-container">
        <form method="post">
            <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
                <tr>
                    <td align='left'><b>Email id : </b></td>
                    <td><input type="text" placeholder="Enter your email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                 <tr>
                    <td align='left'><b>Ratings</b></td>
                    <td><input type="number" min="1" max="5" placeholder="Provide Ratings (1-5)" name="star" id="star"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align='left'><b>FeedBack : </b></td>
                    <td><textarea name="Message" id="Message" required></textarea></td>
                </tr> 
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan='2' align='center'>
                        <button type="submit" name="submit">Submit your feedback</button> 
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>