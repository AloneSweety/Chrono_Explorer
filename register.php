<?php
session_start(); // Start the session

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Dummy validation and user data (You should replace this with database logic)
    $valid_email = $_POST['email'];
    $valid_password = $_POST['password'];

    // Here you would typically insert the data into your database
    // For simplicity, let's assume the registration is always successful
    $_SESSION['user_id'] = 1; // Assign a dummy user ID (in reality, this would come from the database)
    
    // After successful registration, redirect to home page
    header("Location: project.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Chrono Explorer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/6/65/AMH-6978-KB_The_Portuguese_Pedro_Lopez_welcomes_the_Empress_of_Ceylon%2C_Dona_Catharina.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }

        .register-card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            padding: 30px;
            width: 100%;
            max-width: 400px;
        }

        .register-card h3 {
            color: #4a2c2c;
            font-weight: bold;
            text-align: center;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            border-radius: 10px;
            background-color: #4a2c2c;
            border: none;
        }

        .btn-primary:hover {
            background-color: #6a3f3f;
        }

        .register-footer {
            text-align: center;
            margin-top: 10px;
        }

        .register-footer a {
            color: #4a2c2c;
            text-decoration: none;
        }

        .register-footer a:hover {
            text-decoration: underline;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="register-card">
            <h3 class="mb-4">Sign Up</h3>
            
            <!-- Registration Form -->
            <form action="register.php" method="post">
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group mb-3">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                <div class="register-footer mt-3">
                    <small>Already have an account? <a href="login.php">Login here</a></small>
                    <br>
                    <a href="index.php">Back to Home</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
