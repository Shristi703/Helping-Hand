<?php
include "connection.php";

$errors = [];

if (isset($_POST["submit"])) {
    $name = trim($_POST["name"] ?? '');
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $address = trim($_POST["address"] ?? '');
    $age = trim($_POST["age"] ?? '');
    $phone = trim($_POST["phoneNumber"] ?? '');
    $donation_type = trim($_POST["donation"] ?? '');

    // Validate Name
    if (empty($name)) {
        $errors['name'] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors['name'] = "Name can only contain letters and spaces.";
    } elseif (strlen($name) > 100) {
        $errors['name'] = "Name cannot exceed 100 characters.";
    }

    // Validate Phone Number
    if (empty($phone)) {
        $errors['phoneNumber'] = "Phone number is required.";
    } elseif (!preg_match("/^[4-9][0-9]{9}$/", $phone)) {
        $errors['phoneNumber'] = "Invalid phone number. It must be a 10-digit number and cannot start with 1, 2, 3, or 4.";
    }

    // Validate Age
    if (empty($age)) {
        $errors['age'] = "Age is required.";
    } elseif (!filter_var($age, FILTER_VALIDATE_INT) || $age <= 0 || $age > 110) {
        $errors['age'] = "Invalid age. Please enter a valid age.";
    }

    // Validate Address
    if (empty($address)) {
        $errors['address'] = "Address is required.";
    } elseif (strlen($address) > 255) {
        $errors['address'] = "Address cannot exceed 255 characters.";
    }

    // Validate Email
    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format.";
        } elseif (strlen($email) > 100) {
            $errors['email'] = "Email cannot exceed 100 characters.";
        }
        // You might want to add a check for email uniqueness in the database here
    }


    $allowed_donations = ['Books', 'Toys', 'Clothes'];
    // Validate Donation Type
    if (empty($donation_type)) {
        $errors['donation'] = "Donation type is required.";
    } elseif (!in_array($donation_type, $allowed_donations)) {
        $errors['donation'] = "Invalid donation type. Please select either 'Books', 'Toys', or 'Clothes'.";
    }
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 10;
            background-image: url("unnamed.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .registration-form {
            background-color: rgba(220, 240, 255, 0.78);
            padding: 10px;
            border-radius: 18px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .registration-form label {
            display: block;
            margin-bottom: 6px;
            font-size: 1.1rem;
            font-family: 'Times New Roman', Times, serif;
            padding: 0.5rem;
            font-weight: bold;
        }

        .registration-form input,
        .registration-form textarea,
        .registration-form select {
            width: calc(100% - 12px);
            padding: 7px;
            margin-bottom: 10px;
            border: 2px solid #ccccccdc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .registration-form button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 95%;
            margin-top: 1rem;
            font-size: 1rem;
        }

        .registration-form button:hover {
            background-color: goldenrod;
        }

        .registration-form .error {
            color: red;
            font-size: 0.8em;
            margin-top: -8px;
            margin-bottom: 5px;
        }

        h2 {
            text-align: center;
            padding-bottom: 0.5rem;
            color: gray;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        p {
            text-align: center;
            padding-bottom: rem;
            margin-top: 2rem;
        }

        .registration-form{
            font-family: 'Times New Roman', Times, serif;
        }

        .jama{
            margin-left: 23px;
        }
    </style>
</head>
<body background-img="unnamed.png">

<div class="registration-form">
    <h2>Registration</h2>
    <form id="registrationForm" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" placeholder="Enter Name" name="name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
        <div id="nameError" class="error"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></div>

        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" placeholder="Enter Phone Number" name="phoneNumber" required value="<?php echo isset($_POST['phoneNumber']) ? htmlspecialchars($_POST['phoneNumber']) : ''; ?>">
        <div id="phoneNumberError" class="error"><?php echo isset($errors['phoneNumber']) ? $errors['phoneNumber'] : ''; ?></div>

        <label for="age">Age:</label>
        <input type="number" id="age" placeholder="Age" name="age" required value="<?php echo isset($_POST['age']) ? htmlspecialchars($_POST['age']) : ''; ?>">
        <div id="ageError" class="error"><?php echo isset($errors['age']) ? $errors['age'] : ''; ?></div>

        <label for="address">Address:</label>
        <textarea id="address" placeholder="Enter Address" name="address" required><?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address']) : ''; ?></textarea>
        <div id="addressError" class="error"><?php echo isset($errors['address']) ? $errors['address'] : ''; ?></div>

        <label for="email">Email:</label>
        <input type="email" placeholder="Enter Email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
        <div id="emailError" class="error"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></div>

        <label for="donation">Donation Type:</label>
        <select id="donation" name="donation" required>
            <option value="" <?php echo !isset($_POST['donation']) ? 'selected' : ''; ?>>Select Donation Type</option>
            <option value="Books" <?php echo (isset($_POST['donation']) && $_POST['donation'] === 'Books') ? 'selected' : ''; ?>>Books</option>
            <option value="Toys" <?php echo (isset($_POST['donation']) && $_POST['donation'] === 'Toys') ? 'selected' : ''; ?>>Toys</option>
            <option value="Clothes" <?php echo (isset($_POST['donation']) && $_POST['donation'] === 'Clothes') ? 'selected' : ''; ?>>Clothes</option>
        </select>
        <div id="donationError" class="error"><?php echo isset($errors['donation']) ? $errors['donation'] : ''; ?></div>

        <button type="submit" name="submit">Submit</button>
    </form>
</div>


<section class  = "jama">
        <button class = "btn btn-success "onclick = "window.location.href = 'bootstrap.php';"> Back to Home</></button>
    </section>
</body>
</html>
<?php

if (empty($errors)) {
        $query = "INSERT INTO userinfo (`name`, `number`, `age`, `address`, `email`, `donation_type`) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        // Corrected the data type string to "ssisss" - 'i' for integer age
        mysqli_stmt_bind_param($stmt, "ssisss", $name, $phone, $age, $address, $email, $donation_type);
        $result = mysqli_stmt_execute($stmt);


        if ($result) {
            ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                swal({
                    title: "Successfully Registered",
                    text: "Great",
                    icon: "success",
                    button: "Done",
                });
                // Optionally, redirect the user after successful registration
                // setTimeout(function(){ window.location.href = "success_page.php"; }, 2000);
            </script>
            <?php
        } 
    }
?>

























