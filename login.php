<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
     <style>
        body {
            background: linear-gradient(135deg, #6B73FF 10%, #000DFF 100%);
            font-family: 'Arial', sans-serif;
        }

        .card {
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            background-color: white;
        }

        .card-title {
            font-weight: bold;
            color: #4B4B4B;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-primary {
            border-radius: 30px;
            background: linear-gradient(135deg, #6B73FF 10%, #000DFF 100%);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #000DFF 10%, #6B73FF 100%);
        }

     </style>
</head>
<body>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow-lg">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Login</h3>
                <form>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <p class="text-center mt-3">
                    <a href="#">Forgot your password?</a>
                </p>
                <p class="text-center">
                    <a href="#">Create an account</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>