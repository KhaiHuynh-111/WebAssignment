<?php
  // include '../config.php';

  // if(isset($_GET['pro_id'])){}
  // $query = "SELECT * FROM ad WHERE *";
  // mysqli_close($db_con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Details</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide col-6" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner bg-secondary">
                  <div class="carousel-item active">
                    <!-- Thay đổi hình của sản phẩm -->
                    <img src="../products/imgs/mouses/G series/G304 (NEW, WIRELESS LIGHTSPEED).webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../products/imgs/mouses/G series/G304 (NEW, WIRELESS LIGHTSPEED).webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../products/imgs/mouses/G series/G304 (NEW, WIRELESS LIGHTSPEED).webp" class="d-block w-100" alt="...">
                  </div>
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
            <div class="details col-6">
                <h4 class="text-primary">NEW</h4>
                <h1>G304</h1>
                <h4 class="text-muted">G series</h4>
                <h4 class="text-muted">WIRELESS LIGHTSPEED</h4>
                
                <div class="technical mt-5">
                    <div class="left">
                        <p>12.000</p>
                        <p>DPI TỐI ĐA</p>
                    </div>
                    <div class="middle">
                        <p>LAM</p>
                        <p>MƯỢT, TĂNG TỐC, LỌC</p>
                    </div>
                    <div class="right">
                        <p>1ms</p>
                        <p>TỐC ĐỘ BÁO CÁO</p>
                    </div>
                </div>

                <h3 class="mt-2">1.099.000 ₫</h3>

                <!-- Phần dưới này giữ nguyên -->
                <div class="input-group flex-nowrap mt-3">
                    <span class="input-group-text" id="addon-wrapping">Quantity</span>
                    <input type="number" min="1" value="1" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <a href="#" class="mt-3 btn btn-primary btn-lg">Add to cart</a>
            </div>
        </div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>