<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <style>
        input[type="text"],
        input[type="email"],
        input[type="password"],
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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stay_free";


$conn = new mysqli($servername, $username, $password, $dbname);

 if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $message = $_POST['message'];

    // Check if the entered email exists in the "connect" table and fetch related details
    $check_sql = "SELECT NtId, UtId FROM connect_p_t_plan WHERE PatientId = '$email' LIMIT 1";
    $result=mysqli_query($conn,$check_sql);
if($result){
              $row = mysqli_fetch_assoc($result);
	      
              // Fetch the plan_id and therapist_id based on the availability of NtId or UtId
        if ($row['NtId'] !== NULL) {
            $pn_nt_mail= $row['NtId'];
            //$pn_therapist_id = NULL;
             $pn_planId=1;
             $query = "INSERT INTO patientnotes (p_mail_pn,pn_nt_mail,pn_planId, mmessage) VALUES ('$email' ,'$pn_nt_mail','$pn_planId','$message')";
        } elseif ($row['UtId'] !== NULL) {
             $pn_ut_mail= $row['UtId'];
            //$pn_therapist_id = NULL;
              $pn_planId=2;
              $query = "INSERT INTO patientnotes (p_mail_pn, pn_ut_mail,pn_planId, mmessage) VALUES ('$email','$pn_ut_mail','$pn_planId','$message')";
        } 
        else {
               
            echo "Error: No plan_id or therapist_id found for the email address: " .      $email;
       
            exit;
        }
        echo "Your notes have been saved!";
           }

        // Save the message and associated details to the "patientnotes" table
        if ($conn->query($query)) {
            //echo "Message saved successfully for the email address: " . $email;
        } else {
            echo "Error: Unable to save the message.";
        }
    } else {
        echo "";
    }

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
                    <td align='left'><b>Notes : </b></td>
                    <td><textarea name="message" id="message" required></textarea></td>
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
                        <button type="submit" name="submit">Save Your Notes</button> 
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>