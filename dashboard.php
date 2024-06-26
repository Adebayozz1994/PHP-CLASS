<?php
session_start();
require 'connect.php';
if (isset($_SESSION['userId'])) {
    $userid = $_SESSION['userId'];
    $query = "SELECT * FROM user_table WHERE user_id = $userid";
    $con = $connection->query($query);
    $user = $con->fetch_assoc();
    // print_r($user);
    $firstname = $user['firstname'];
    // echo $firstname;
    $profile_pic = $user['profile_picture'];
    // echo $_SESSION['userId'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>

<body>
    <div class="container mt-4 p-5 shadow">
    <a href="home.php" class="btn btn-primary">home</a>

        <div class="mx-auto col-5">WELCOME, <?php echo '<strong class="text-primary">' . $firstname . '</strong>' ?></div>
        <div class="row">
            <div class="col-7">
                <div class="mx-auto col-10 shadow">
                    <form action="profilepictureprocess.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="picture" class="form-control">
                        <input type="submit" class="btn btn-primary w-100 mt-3" name="submit" value="upload">
                    </form>
                </div>
                <div>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo '<div id="alert" class="text-center alert alert-success alert-dismissible fade show" role="alert">
                                ' . $_SESSION["msg"] . '
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                    }
                    unset($_SESSION['msg']);
                    ?>
                </div>

            </div>
            <div class="col-4">
                <img src="<?php echo 'pictures/' . $profile_pic ?>" alt="" width="200px" height="200px"
                    style="border-radius:100px">
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var alertElement = document.getElementById('alert');
                if (alertElement) {
                    alertElement.remove();
                }
            }, 2000);
        });
    </script>
</body>
</html>
