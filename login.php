
<?php
include "connection.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donate Your Items</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <style>

   body {
    font-family: sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    /* background-color: rgba(5, 4, 4, 0.34); */
    /* background-image: url('img_girl.jpg'); */
    background-image: url("unnamed.png");
    background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; 
  min-height: 100vh; /* Ensure the body takes at least the full viewport height */
            margin: 0; 
            }
    
            .login-container {
                background-color: rgba(220, 240, 255, 0.78);
                padding: 4rem;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                width: 250px;
            }
    
            .login-container h2 {
                text-align: center;
                margin-bottom: 5.5rem;
            }
    
            .form-group {
                margin-bottom: 0.5rem;
            }
    
            .form-group label {
                display: block;
                margin-bottom: 0.5rem;
            }
    
            .form-group input {
                width: 100%;
                padding: 0.5rem;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
    
            .form-group button {
                background-color: #4CAF50;
                color: white;
                padding: 0.75rem 1rem;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 100%;
            }
    
            .form-group button:hover {
                background-color: #3e8e41;
            }
    
            .signup-link {
                text-align: center;
                margin-top: 1rem;
            }
    
        </style>
    </head>
       <body background = "unnamed.png">

        <div class="login-container">
            <h2>Login</h2>
            <form id ="loginForm" method ="POST">
                <div class="form-group">
                    <label for="username">Username/Email</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" name = "submit">Login</button>
                </div>
            </form>
            <div class="signup-link">
                <p>New user? <a href="/signup">Sign up</a></p>
            </div>
        </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if(isset($_POST["submit"])){
    
    $email=$_POST["username"];
    $password=$_POST["password"];
    
    $query="insert into admin (email,password) values ('$email','$password')";
    $result=mysqli_query($conn,$query);
    
    if($query){
        ?>
        <script>
          swal({
          title: "Welcome",
          text: "To the Design of Donation Assistant",
          icon: "success",
         });
        </script>
       
    <?php
    }
    }
        ?>
    