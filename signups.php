<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <a href="home.php" class="btn btn-primary mb-3">Home</a>
    <div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
        <form action="signup.php" method="post">
            <div class="form-group">
                <input type="text" name="firstname" class="form-control form-input" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <input type="text" name="lastname" class="form-control form-input" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control form-input" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control form-input" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="text" name="address" class="form-control form-input" placeholder="Address">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</body>
</html>