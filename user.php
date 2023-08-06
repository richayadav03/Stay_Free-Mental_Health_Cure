<?php
$email= $_POST["email"];

$database_connection = mysqli_connect("localhost", "root", "", "stay_free");
if (!$database_connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

$sql = "SELECT pFirstName, pLastName, p_mail, DaysLeft FROM patient WHERE p_mail = '$email'";
$result = mysqli_query($database_connection, $sql);

// Check if the query was successful and if a row was found
if ($result && mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    $FirstName = $row['pFirstName'];
    $LastName = $row['pLastName'];
    $Mail = $row['p_mail'];
    //$DaysLeft = $row['DaysLeft'];
    
    $sql = "SELECT start_datee FROM connect_p_t_plan WHERE PatientId = '$Mail'";

    $result = mysqli_query($database_connection, $sql);
    if ($result && mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $date1 = $row['start_datee'];
        $sql = "SELECT DATEDIFF(CURDATE(),'$date1') AS days_left";
        $result = mysqli_query($database_connection, $sql);
        if ($result && mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $days_left = $row['days_left'];
            if(75-$days_left<0)
            {
                $DaysLeft = 0;
            }
            else
            {
                $DaysLeft = 75-$days_left;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome, <?php echo $FirstName; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #C0D7FF ;/* Lavender background color */
            color: purple ;/* Dark lavender text color */
            margin: 0;
            padding: 0;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGssYxN6UP-HiNNCGeIvf_GO2PJ8BtO39nUw&usqp=CAU');
            background-size:100%;
            background-repeat: no-repeat;
        }

  
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fafafa; /* Set the background color of the container */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
        }

        h2 {
            text-align: center;

            color: #8e44ad; /* Dark lavender heading color */
        }

        p {
            margin: 20px 0;
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
        .profilephoto{
       
         margin-top:50px;
         height:150px;
                    

        }
        .profilephoto2{
       
       margin-top:5px;
       height:150px;
                  

      }
        .note{
            text-decoration:none;
            color:purple;
            font-size: 15px;

        }
    </style>
</head>
<body>

    <div class="container">
       <center><img class="profilephoto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK2qR52zYhXW-aX_eETdaC8cd9cGaJVNYJtA&usqp=CAU">
       </center>   <h1>Welcome, <?php echo $FirstName; ?></h1>
        <p>Email: <?php echo $Mail; ?></p>
        <p>Days Left: <?php echo $DaysLeft; ?></p>
        <!-- Display other user details as needed -->
        <p><a href="message.php " class="note">Click to see your notes!!</p> 
        <img class="profilephoto2" src="data:image/jpeg;base64,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"></a>
        <a>
        <p><a href="homepage.php" class="note"><<---Click to go to homepage</a></p>
        </div> <!-- Provide a link to logout.php to handle logout -->
    </div>    
</body>
</html>