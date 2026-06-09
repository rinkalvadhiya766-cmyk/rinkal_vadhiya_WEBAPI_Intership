<?php

$fname = $mname = $lname = $city = $email = "";
$contact = $gender = $adhar = $pan = $username = "";
$password = $confirm_password = "";

$fnameErr = $mnameErr = $lnameErr = $cityErr = "";
$emailErr = $contactErr = $genderErr = "";
$adharErr = $panErr = $usernameErr = "";
$passwordErr = $confirmPasswordErr = "";

$successMsg = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $valid = true;

    
    if(empty($_POST["fname"]))
    {
        $fnameErr = "First Name is required";
        $valid = false;
    }
    else
    {
        $fname = trim($_POST["fname"]);
    }

    
    if(empty($_POST["mname"]))
    {
        $mnameErr = "Middle Name is required";
        $valid = false;
    }
    else
    {
        $mname = trim($_POST["mname"]);
    }

    
    if(empty($_POST["lname"]))
    {
        $lnameErr = "Last Name is required";
        $valid = false;
    }
    else
    {
        $lname = trim($_POST["lname"]);
    }

    
    if(empty($_POST["city"]))
    {
        $cityErr = "City is required";
        $valid = false;
    }
    else
    {
        $city = trim($_POST["city"]);
    }

    
    if(empty($_POST["email"]))
    {
        $emailErr = "Email is required";
        $valid = false;
    }
    else
    {
        $email = trim($_POST["email"]);

        if(!preg_match("/^[\w\.-]+@[\w\.-]+\.\w+$/",$email))
        {
            $emailErr = "Invalid Email";
            $valid = false;
        }
    }

    
    if(empty($_POST["contact"]))
    {
        $contactErr = "Contact Number is required";
        $valid = false;
    }
    else
    {
        $contact = trim($_POST["contact"]);

        if(!preg_match("/^[6-9]\d{9}$/",$contact))
        {
            $contactErr = "Invalid Mobile Number";
            $valid = false;
        }
    }

    
    if(empty($_POST["gender"]))
    {
        $genderErr = "Select Gender";
        $valid = false;
    }
    else
    {
        $gender = $_POST["gender"];
    }

    
    if(empty($_POST["adhar"]))
    {
        $adharErr = "Adhar Number is required";
        $valid = false;
    }
    else
    {
        $adhar = trim($_POST["adhar"]);

        if(!preg_match("/^[0-9]{12}$/",$adhar))
        {
            $adharErr = "Invalid Adhar Number";
            $valid = false;
        }
    }

    
    if(empty($_POST["pan"]))
    {
        $panErr = "PAN Number is required";
        $valid = false;
    }
    else
    {
        $pan = strtoupper(trim($_POST["pan"]));

        if(!preg_match("/^[A-Z]{5}[0-9]{4}[A-Z]$/",$pan))
        {
            $panErr = "Invalid PAN Number";
            $valid = false;
        }
    }

    
    if(empty($_POST["username"]))
    {
        $usernameErr = "Username is required";
        $valid = false;
    }
    else
    {
        $username = trim($_POST["username"]);
    }

    
    if(empty($_POST["password"]))
    {
        $passwordErr = "Password is required";
        $valid = false;
    }
    else
    {
        $password = $_POST["password"];

        $pattern="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/";

        if(!preg_match($pattern,$password))
        {
            $passwordErr = "Password must contain uppercase, lowercase, number & special character";
            $valid = false;
        }
    }

    
    if(empty($_POST["confirm_password"]))
    {
        $confirmPasswordErr = "Confirm Password is required";
        $valid = false;
    }
    else
    {
        $confirm_password = $_POST["confirm_password"];

        if($password != $confirm_password)
        {
            $confirmPasswordErr = "Passwords do not match";
            $valid = false;
        }
    }

    if($valid)
    {
        $successMsg = "Registration Successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration Form</title>

<style>

body{
    font-family:Arial, sans-serif;
    background:#f4f4f4;
    margin:0;
    padding:20px;
}

.container{
    width:650px;
    margin:auto;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
}

label{
    display:block;
    margin-top:12px;
    font-weight:bold;
}

input[type=text],
input[type=password]{
    width:100%;
    padding:10px;
    margin-top:5px;
    border:1px solid #ccc;
    border-radius:5px;
    box-sizing:border-box;
}

.gender{
    margin-top:10px;
}

.error{
    color:red;
    font-size:14px;
}

.success{
    color:green;
    font-weight:bold;
    text-align:center;
    margin-top:15px;
}

input[type=submit]{
    width:100%;
    padding:12px;
    margin-top:20px;
    background:#007bff;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

input[type=submit]:hover{
    background:#0056b3;
}

</style>
</head>

<body>

<div class="container">

<h2>Registration Form</h2>

<form method="post">

<label>First Name</label>
<input type="text" name="fname" value="<?php echo htmlspecialchars($fname); ?>">
<span class="error"><?php echo $fnameErr; ?></span>

<label>Middle Name</label>
<input type="text" name="mname" value="<?php echo htmlspecialchars($mname); ?>">
<span class="error"><?php echo $mnameErr; ?></span>

<label>Last Name</label>
<input type="text" name="lname" value="<?php echo htmlspecialchars($lname); ?>">
<span class="error"><?php echo $lnameErr; ?></span>

<label>City</label>
<input type="text" name="city" value="<?php echo htmlspecialchars($city); ?>">
<span class="error"><?php echo $cityErr; ?></span>

<label>Email</label>
<input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
<span class="error"><?php echo $emailErr; ?></span>

<label>Contact Number</label>
<input type="text" name="contact" maxlength="10" value="<?php echo htmlspecialchars($contact); ?>">
<span class="error"><?php echo $contactErr; ?></span>

<label>Gender</label>
<div class="gender">
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
</div>
<span class="error"><?php echo $genderErr; ?></span>

<label>Adhar Number</label>
<input type="text" name="adhar" maxlength="12" value="<?php echo htmlspecialchars($adhar); ?>">
<span class="error"><?php echo $adharErr; ?></span>

<label>PAN Number</label>
<input type="text" name="pan" maxlength="10" value="<?php echo htmlspecialchars($pan); ?>">
<span class="error"><?php echo $panErr; ?></span>

<label>Username</label>
<input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
<span class="error"><?php echo $usernameErr; ?></span>

<label>Type Password</label>
<input type="password" name="password">
<span class="error"><?php echo $passwordErr; ?></span>

<label>Confirm Password</label>
<input type="password" name="confirm_password">
<span class="error"><?php echo $confirmPasswordErr; ?></span>

<input type="submit" value="Register">

</form>

<?php
if(!empty($successMsg))
{
    echo "<p class='success'>$successMsg</p>";
}
?>

</div>

</body>
</html>