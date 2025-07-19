<?php
include "connection.php"; // Assuming your database connection is in this file

$errors = [];
$responseMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = trim($_POST["name"] ?? '');
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $feedback = trim($_POST["feedback"] ?? '');

    // Validate Name
    if (empty($name)) {
        $errors['name'] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors['name'] = "Name can only contain letters and spaces.";
    } elseif (strlen($name) > 100) {
        $errors['name'] = "Name cannot exceed 100 characters.";
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

    // Validate Feedback
    if (empty($feedback)) {
        $errors['feedback'] = "Feedback is required.";
    } elseif (strlen($feedback) < 10) {
        $errors['feedback'] = "Feedback must be at least 10 characters long.";
    }

    if (empty($errors)) {
        // Use prepared statements to prevent SQL injection
        $query = "INSERT INTO feedback (name, email, feedback) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $feedback);
            $result = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            if ($result) {
                $responseMessage = "<div class='mt-6 text-center font-semibold text-green-600 bg-green-100 border border-green-600 rounded-md p-3'>Thank you for your feedback!</div>";
            } else {
                $responseMessage = "<div class='mt-6 text-center font-semibold text-red-600 bg-red-100 border border-red-600 rounded-md p-3'>Error submitting feedback. Please try again later.</div>";
            }
        } else {
            $responseMessage = "<div class='mt-6 text-center font-semibold text-red-600 bg-red-100 border border-red-600 rounded-md p-3'>Database error: " . mysqli_error($conn) . "</div>";
        }
    } else {
        $responseMessage = "<div class='mt-6 text-center font-semibold text-yellow-600 bg-yellow-100 border border-yellow-600 rounded-md p-3'>Please correct the following errors:<ul>";
        foreach ($errors as $error) {
            $responseMessage .= "<li>" . htmlspecialchars($error) . "</li>";
        }
        $responseMessage .= "</ul></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Donate Stuff</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@latest"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .good{
            color: purple;
        }

        .jama{
            margin-left: 34rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body class="bg-gray-100 font-inter">
    <header class="bg-purple-500 text-white py-4 flex justify-center items-center shadow-md sticky top-0 z-10 rounded-md">
        <h1 class="text-2xl font-semibold">Feedback</h1>
    </header>

    <main class="container mx-auto py-6 px-4">
        <section class = "good">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-blue-800 mb-4 text-center">Your Feedback Matters!</h2>
            <p class="text-blue-700 mb-4 text-center">Please help us improve our services by sharing your valuable feedback.</p>

            <form id="feedbackForm" class="space-y-4" method="POST">
                <div>
                    <label for="name" class="block text-blue-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Your Name">
                    <?php if (isset($errors['name'])): ?>
                        <p class="text-red-500 text-xs italic"><?php echo htmlspecialchars($errors['name']); ?></p>
                    <?php endif; ?>
                </div>

                <div>
                    <label for="email" class="block text-blue-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Your Email">
                    <?php if (isset($errors['email'])): ?>
                        <p class="text-red-500 text-xs italic"><?php echo htmlspecialchars($errors['email']); ?></p>
                    <?php endif; ?>
                </div>

                <div>
                    <label for="feedback" class="block text-blue-700 text-sm font-bold mb-2">Feedback:</label>
                    <textarea id="feedback" name="feedback" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32 resize-y" placeholder="Your Feedback (Minimum 10 characters)"></textarea>
                    <?php if (isset($errors['feedback'])): ?>
                        <p class="text-red-500 text-xs italic"><?php echo htmlspecialchars($errors['feedback']); ?></p>
                    <?php endif; ?>
                </div>

                <button type="submit" name="submit" class="bg-purple-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">Submit Feedback</button>
            </form>
          <section class  = "jama">
         <button class = "btn btn-primary "onclick = "window.location.href = 'bootstrap.php';"> Back to Home</></button>
         </section>
            <?php echo $responseMessage; ?>

        </div>
        </section>
    </main>

    <script>
        const feedbackForm = document.getElementById('feedbackForm');
        const responseMessageDiv = document.getElementById('responseMessage');

        feedbackForm.addEventListener('submit', function(event) {
            // No need for preventDefault here as the form will submit and the PHP will handle it.
            // The JavaScript part for simulating submission can be removed.
        });

        // The JavaScript to display a thank you message after a simulated submission
        // is no longer needed as the PHP will handle displaying a real response.
    </script>
</body>
</html>