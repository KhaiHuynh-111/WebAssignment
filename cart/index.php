<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    
    <div class="container mt-3">
      <div class="row">
        <div class="container col-8">
          <div class="row">

            

            <!-- Dùng vòng for, trong mỗi lần lặp in tương ứng mỗi mặt hàng sẽ in ra hết đoạn code dưới đây thay đổi tên và giá bán-->
            <?php          
              
              include '../config.php';
              // var_dump($_SESSION);
              $totalPrice = 0;
              foreach ($_SESSION['cart'] as $key => $value) {
                // $arr[3] will be updated with each value from $arr...
                //echo "{$key} => {$value} ";
                // print_r($arr);
                $result = mysqli_query($db_con, "SELECT name, imgURL, price FROM products WHERE id='$key'");
                while ($row = mysqli_fetch_array($result)) {
                  $imgURL = $row['imgURL'];
                  $price = $row['price'];
                  $name = $row['name'];
                }
                $quantity = $_SESSION['cart'][$key];     
             
              
            ?>
            <div class="col-lg-6">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img
                      src="<?php echo $imgURL;?>"
                      class="card-img w-100 h-100"
                      alt="..."
                    />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">
                        <?php echo $name;?>
                        <button type="button" class="close">
                          <span>&times;</span>
                        </button>
                      </h5>
                      <p class="card-text">                      
                        Price: <?php echo $price;?>
                      </p>
                      <div class="form-group">
                        <input
                          type="number"
                          min="0"
                          value="<?php echo $quantity; ?>"                          
                          class="form-control"
                          placeholder= <?php //echo $list_proc[$list_key[$i]];?>
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
              $real_price = intval(str_replace('.','',$price));
              $totalPrice += $quantity * $real_price;
            }
              $VAT = "10%";
              function numberToString($num){
                $temp = 1;
                $res = "";
                $str = strval($num);
                for($i = strlen($str) - 1; $i >=0 ; $i--){
                  if($temp % 3 == 0){
                    $res = '.'.$str[$i].$res;
                    $temp = 1;
                  }
                  else{
                    $res = $str[$i].$res;
                    $temp++;
                  }
                }
                return $res;
              }
              $VAT_Price = numberToString(intval($totalPrice * 0.1));
              $final_Price = numberToString(intval($totalPrice * 1.1));
              $totalPrice = numberToString(intval($totalPrice));

              
            ?>
            <!-- End for -->

            

          </div>
        </div>

        <!-- Tính toán tổng số tiền tùy theo mặt hàng vá số lượng -->
        <div class="col-4 mb-3">
          <div class="jumbotron">
            <h1 class="display-4">Receipt</h1>
            <p>Sum: <?php echo $totalPrice; ?></p>
            <p>VAT: <?php echo $VAT_Price; ?> (10%)</p>
            <p>Discount: 0 (0%)</p>
            <hr class="my-4" />
            <p class="lead">Total: <?php echo $final_Price; ?>.</p>
            <a class="btn btn-primary" href="#" role="button">Checkout</a>
            <br>
            <a href="#" class="btn pt-3 p-0">Continue Shopping</a>
          </div>
        </div>
      </div>
    </div>

    <!-- <script src="script.js"></script> -->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<!-- <button
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#myModal"
            >
                Detail
            </button>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Here are the details.</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">Lorem, ipsum dolor.</div>
                    <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">
                        Cancel
                    </button>
                    </div>
                </div>
                </div>
            </div>

            <form action="">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" />
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" />
                </div>
                </div>

                <div class="row">
                <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                </div>
            </form>

            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                Homepage
                </a>
                <a
                href="#"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                >
                Notification
                <span class="badge badge-primary badge-pill">3</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                About
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                Contact
                </a>
            </div>

            <div class="card">
                <img src="" alt="">
                <div class="card-body">
                <h5 class="card-title">Card Title</div>
                    <p class="card-text">Lorem, ipsum dolor.</p>
                    <a href="#" class="btn btn-primary">Button One</a>
                    <a href="#" class="btn btn-primary">Button Two</a>
                </div>
            </div> -->

<!-- <table class="table table-hover">
                <caption class="text-center">
                Vendor Statistcs
                </caption>
                <thead>
                <tr>
                    <th>Vendor</th>
                    <th>Income</th>
                    <th>Yield</th>
                    <th>Growth</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>A</td>
                    <td>500,000,000VND</td>
                    <td>100,000,000VND</td>
                    <td>2%</td>
                </tr>
                <tr>
                    <td>B</td>
                    <td>700,000,000VND</td>
                    <td>400,000,000VND</td>
                    <td>15%</td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>200,000,000VND</td>
                    <td>50,000,000VND</td>
                    <td>0.4%</td>
                </tr>
                </tbody>
            </table> -->

<!-- <div class="alert alert-warning">
                We are so sorry that the product is out-of-order. Feel free to choose
                the others.
                <button class="close" data-dismiss="alert">&times</button>
            </div>
            <div class="alert alert-info">
                Your order is ready to serve. Thanks for using our servies.
                <button class="close" data-dismiss="alert">&times</button>
            </div> -->
