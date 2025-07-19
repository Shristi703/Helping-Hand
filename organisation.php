<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization Links</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgba(0, 0, 255, 0.115); /* Light background */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .org-links-container {
            background-color:plum;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            max-width: 800px;
            width: 95%;
        }

        .org-links-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .org-links-header h1 {
            color: #2c3e50; /* Darker heading */
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .org-links-header p {
            color: #667;
            font-size: 16px;
            line-height: 1.6;
        }


        .org-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .org-list li {
            margin-bottom: 15px;
            border-bottom: 1px solid #eee; /* Light border */
            padding-bottom: 15px;
        }

        .org-list li:last-child {
            border-bottom: none; /* Remove border from last item */
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .org-list li a {
            color: #0078d7; /* Microsoft blue */
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
            transition: color 0.3s ease; /* Smooth transition */
            display: inline-flex; /* For icon alignment */
            align-items: center; /* Vertically center icon and text */
            gap: 8px; /* Space between text and icon */
        }

        .org-list li a:hover {
            color: #0056b3; /* Darker blue on hover */
        }

        /* Styling for the icon (using a simple square) */
        .org-list li a::before {
            content: ""; /* Empty content, the icon is created with CSS */
            display: inline-block;
            width: 10px; /* Icon size */
            height: 10px;
            background-color: #0078d7; /* Icon color */
            border-radius: 2px; /* Slightly rounded corners */
            margin-right: 8px; /* Space between icon and text (already set with gap, but kept for clarity) */
        }


        .footer {
            text-align: center;
            margin-top: 30px;
            color: #888;
            font-size: 14px;
        }
        .footer a{
             color: #0078d7; /* Microsoft blue */
        }
        .footer a:hover {
             color: #0056b3; /* Darker blue on hover */
        }

        @media (max-width: 600px) {
            .org-links-container {
                padding: 20px;
            }
            .org-links-header h1{
               font-size: 24px;
            }
             .org-links-header p{
                font-size: 14px;
            }
            .org-list li a {
                font-size: 16px;
            }
        }

.jada{
    margin-left: 23px;
}


.kam{
    margin-right: 23px;
}


    </style>
</head>
<body background="Gemini_Generated_Image_nmxm7inmxm7inmxm.png">
<section class = "kam">
            <button class = "btn btn-success "onclick = "window.location.href = 'bootstrap.php';">Back to Home </></button>
</section>

    <div class="org-links-container">
        <header class="org-links-header">
                    <h1><marquee class = "marqu"  direction = " right">Top Organisation</marquee></h1>

        </header>
        <ul class="org-list">
            <li><a href="organisationi1.php">Muskaan Dream Creative Organisation</a></li>
            <li><a href=" organisation2.php">Think & Support Foundation</a></li>
            <li><a href="organisation3.php">Social Welfare Organisation </a></li>
        </ul>

        <footer class = "footer">
            <p>&copy; 2025 [Donation Assistant]. All rights reserved.</p>
        </footer>
    </div>
    <section class = "jada">
                    <button class = "btn btn-success "onclick = "window.location.href = 'donate.php';">Back to Donate </></button>
    </section>
    
</body>
</html>
