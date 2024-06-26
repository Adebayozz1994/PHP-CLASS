<?php

$picture_directory = 'pictures/';
$files = scandir($picture_directory);
$image_files = array_filter($files, function($file) {
    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    return in_array($extension, ['jpg', 'jpeg', 'png', 'gif']);
});

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Pictures</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .picture-container {
            padding: 20px;
        }

        .picture-item {
            margin-bottom: 20px;
        }

        .picture-item img {
            width: 100%;
            height: 200px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow position-sticky top-0">
        <div class="container">
            <a class="navbar-brand fw-bold fs-1 text-danger" href="#">PICS-WORLD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-danger fw-semibold" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger fw-semibold" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger fw-semibold" href="signin.php">Signin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger fw-semibold" href="signups.php">Signup</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Picture Gallery</h2>
        <div class="picture-container">
            <div class="row">
                <?php foreach ($image_files as $file) : ?>
                    <div class="col-lg-4 col-md-6 picture-item">
                        <img src="<?php echo $picture_directory . $file; ?>" alt="Picture" width="200px" height="200px" style="border-radius:20px ">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
