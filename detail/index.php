<?php
  session_start();
  include '../config.php';
  // add 2 table
  // product_img (id, img_link)
  // product_spec (id, )
  $test_id = 8;
  if(true){
    $id = $test_id;
    $query = "SELECT * FROM products_img WHERE proc_id=$id";
    $res = mysqli_query($db_con, $query);
    if(!$res) echo "<script> alert('Cant find this product!') </script>";  
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/nav-bar.css">
    <style>
        #cart {
            position: fixed;
            top: 5rem;
            right: 5rem;
            background-color: #0275d8;
            width: 5rem;
            height: 5rem;
            border-radius: 50%;
            box-shadow: 0 1px 1rem 5px #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        #cart>i {
            transform: scale(2);
            color: white;
        }

        #cart>p {
            position: absolute;
            top: 0px;
            right: 0px;
            width: 2rem;
            height: 2rem;
            background-color: red;
            border-radius: 50%;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
    </style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Details</title>
</head>
<body>
<nav>
        <input type="checkbox">
        <svg viewBox="0 0 24 24">
            <path fill="currentColor" d="M22 13C22 14.11 21.11 15 20 15H4C2.9 15 2 14.11 2 13S2.9 11 4 11H13L15.5 13L18 11H20C21.11 11 22 11.9 22 13M12 3C3 3 3 9 3 9H21C21 9 21 3 12 3M3 18C3 19.66 4.34 21 6 21H18C19.66 21 21 19.66 21 18V17H3V18Z" />
        </svg>

        <ul>
            <li><a href="/index.php"><span>logitech</span><span>G</span></a></li>
            <li><a href="/products/product.php">Products</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="./contact/contact.php">Contact</a></li>
            <li><a href="#">Community</a></li>

            <?php if (isset($_SESSION["username"])) {
                echo " <li class='last-nav-li hidden'><a href='/profile/index.php'>Hello, ".$_SESSION['username']."</a></li>
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
                <a href='/profile/index.php'>Hello, ".$_SESSION['username']."</a>
                <a href='/logout.php'>Logout</a>
                ";
            } else { ?>

                <a href="#" class="button-style-2">Sign Up</a>
                <a href="#" onclick="show('popup1')">Sign In</a>

            <?php } ?>
        </div>
    </nav>
    <a id="cart" href="/cart/index.php"><i class="fas fa-shopping-cart"></i>
        <p>0</p>
    </a>
    <div class="container">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide col-6" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner bg-secondary">
                  <?php
                    $row = mysqli_fetch_assoc($res);?>
                    
                    <div class="carousel-item active">                  
                    <img src="<?php echo $row['img_link']?>" class="d-block w-100" alt="...">
                    </div>
                    
                  <?php 
                    $row = mysqli_fetch_assoc($res);
                    while($row){                      
                  ?>
                        <div class="carousel-item">     
                        <img src="<?php echo $row['img_link']?>" class="d-block w-100" alt="...">
                        </div>                       
                  <?php  
                        $row = mysqli_fetch_assoc($res);
                    }
                  ?>
                  <!-- <div class="carousel-item active">                  
                     Thay đổi hình của sản phẩm -->
                    <!-- <img src="../products/imgs/mouses/G series/G304 (NEW, WIRELESS LIGHTSPEED).webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../products/imgs/mouses/G series/G304 (NEW, WIRELESS LIGHTSPEED).webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../products/imgs/mouses/G series/G304 (NEW, WIRELESS LIGHTSPEED).webp" class="d-block w-100" alt="...">
                  </div> -->  
                </div>
                <!-- Giữ nguyên 2 button -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
    
            <!-- Thay đổi tùy mặt hàng các giá trị dưới đây -->
            <?php
              $id = $test_id;

              $query = "SELECT * FROM products WHERE id=$id";
              $res = mysqli_query($db_con, $query);
              $row = mysqli_fetch_assoc($res);

              $series = "Switch";
              if($row['name'][0] == 'G')
                    $series = "G series";
              else if($row['name'][0] == 'P')
                    $series = "PRO series";

              $proc_name = $row['name'];
              $status = $row['status'];

              $query = "SELECT * FROM products_spec WHERE proc_id=$id";
              $res = mysqli_query($db_con, $query);
              $row = mysqli_fetch_assoc($res);
            ?>
            <div class="details col-6">
                <h4 class="text-primary"><?php if($series == "G series") echo "NEW";?></h4>
                <h1><?php echo $proc_name; ?></h1>
                <h4 class="text-muted"><?php echo $series; ?></h4>
                <h4 class="text-muted"><?php echo $status; ?></h4>
                
                <div class="technical mt-5">
                    <div class="left">
                        <p><?php echo $row['spec1_key'];?></p>
                        <p><?php echo $row['spec1_value'];?></p>
                    </div>
                    <div class="middle">
                        <p><?php echo $row['spec2_key'];?></p>
                        <p><?php echo $row['spec2_value'];?></p>
                    </div>
                    <div class="right">
                        <p><?php echo $row['spec3_key'];?></p>
                        <p><?php echo $row['spec3_value'];?></p>
                    </div>
                </div>

                <h3 class="mt-2">1.099.000 ₫</h3>

                <!-- Phần dưới này giữ nguyên -->
                <div class="input-group flex-nowrap mt-3">
                    <span class="input-group-text" id="addon-wrapping">Quantity</span>
                    <input id="preferedinput" type="number" min="1" value="1" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                    <p id="hidden_id" style="display:none;"><?php echo $id ?></p>
                </div>
                <a href="#/" id="add-to-cart" class="mt-3 btn btn-primary btn-lg">Add to cart</a>
            </div>
        </div>
        
    </div>

    <script>
        const addToCart = document.querySelector("#add-to-cart");
        const quantity = document.querySelector("#preferedinput");
        const numItems = document.querySelector("#cart > p");

        addToCart.addEventListener("click", (e) => {
            numItems.textContent = (parseInt(numItems.textContent) + parseInt(quantity.value)).toString();
            const hiddenId = document.querySelector("#hidden_id");        
            $.ajax({
                url: "add_to_cart.php",
                type: "POST",
                data: {"productId": parseInt(hiddenId.textContent) , "quantity":parseInt(quantity.value)},
                dataType: "html",
                success: function(response) {
                                // Re-show the table cars from database
                                //showTable();
                                console.log(response)
                            }
            })
        })
        
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</body>
</html>