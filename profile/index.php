<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

    <title>Profile</title>
</head>

<body>
    <?php
    include('../config.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST["username"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $about = $_POST["about"];

        if (isset($_SESSION['userId'])) {
            $result = mysqli_query($db_con, "UPDATE users SET username='$username', firstname='$firstname', lastname='$lastname', phone='$phone', address='$address', about='$about'");
        }
    }

    if (isset($_SESSION['userId'])) {
        $userId = $_SESSION['userId'];

        $result = mysqli_query($db_con, "SELECT * FROM users WHERE id='$userId'");

        while ($row = mysqli_fetch_array($result)) {
            $username = $row["username"];
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $phone = $row["phone"];
            $address = $row["address"];
            $about = $row["about"];
        }
    } else {
        header("Location: http://localhost");
        exit;
    }
    ?>
    <nav>
        <input type="checkbox">
        <svg viewBox="0 0 24 24">
            <path fill="currentColor" d="M22 13C22 14.11 21.11 15 20 15H4C2.9 15 2 14.11 2 13S2.9 11 4 11H13L15.5 13L18 11H20C21.11 11 22 11.9 22 13M12 3C3 3 3 9 3 9H21C21 9 21 3 12 3M3 18C3 19.66 4.34 21 6 21H18C19.66 21 21 19.66 21 18V17H3V18Z" />
        </svg>

        <ul>
            <li><a href="/index.php"><span>logitech</span><span>G</span></a></li>
            <li><a href="/products/product.php">Products</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="./contact/contact.html">Contact</a></li>
            <li><a href="#">Community</a></li>

            <?php if (isset($_SESSION["username"])) {
                echo " <li class='last-nav-li hidden'><a style='text-decoration:none; color:white; font-weight: bold;' href='/profile/index.php'>Hello, ".$_SESSION['username']."</a></li>
                    <li class='last-nav-li hidden'><a href='/logout.php'>Logout</a></li>
                ";
            } else { ?>

                <li class="last-nav-li hidden"><a href="#" class="button-style-2">Sign Up</a></li>
                <li class="last-nav-li hidden"><a href="#" onclick="show('popup1')">Sign In</a></li>

            <?php } ?>
        </ul>

        <div>
            <?php if (isset($_SESSION["username"])) {
                echo "
                <a style='text-decoration:none; color:white; font-weight: bold;' href='/profile/index.php'>Hello, ".$_SESSION['username']."</a>
                <a href='/logout.php'>Logout</a>
                ";
            } else { ?>

                <a href="#" class="button-style-2">Sign Up</a>
                <a href="#" onclick="show('popup1')">Sign In</a>

            <?php } ?>
        </div>
    </nav>

    <h1>Hello, <?php echo $_SESSION["username"]; ?> </h1>
    <div class="container mt-5" style="max-width: 50%;">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" required value="<?php echo isset($username) ? $username : "" ?>">
            </div>

            <div class="row">
                <div class="col">
                    <label for="password1" class="form-label">First name</label>
                    <input type="text" class="form-control" name="firstname" aria-label="First name" required value="<?php echo isset($firstname) ? $firstname : "" ?>">
                </div>
                <div class="col">
                    <label for="password1" class="form-label">Last name</label>
                    <input type="text" class="form-control" name="lastname" aria-label="Last name" required value="<?php echo isset($lastname) ? $lastname : "" ?>">
                </div>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" required value="<?php echo isset($phone) ? $phone : "" ?>">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required value="<?php echo isset($address) ? $address : "" ?>">
            </div>

            <div class="mb-3">
                <label for="about" class="form-label">About</label>
                <input type="text" class="form-control" id="about" name="about" required value="<?php echo isset($about) ? $about : "" ?>">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>