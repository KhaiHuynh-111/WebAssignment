<?php
  include '../config.php';
  if(isset($_GET['transaction_id'])){
    $id = $_GET['transaction_id'];
    $query = "SELECT * FROM tran_products WHERE id=$id";
    $res = mysqli_query($db_con, $query);
    if(!res) echo "<script> alert('Cant find this transaction')</script>";

    // CREATE TABLE `products` (
    //   `id` int(11) NOT NULL,
    //   `name` varchar(45) NOT NULL,
    //   `imgURL` varchar(200) DEFAULT NULL,
    //   `status` varchar(45) NOT NULL,
    //   `quantity` int(11) NOT NULL,
    //   `unit` varchar(45) DEFAULT NULL,
    //   `price` varchar(45) NOT NULL,
    //   `type` varchar(45) NOT NULL,
    //   `about` varchar(500) DEFAULT NULL
    // ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    // CREATE TABLE `transactions` (
    //   `id` int(11) NOT NULL,
    //   `date_created` datetime DEFAULT NULL,
    //   `address` varchar(45) DEFAULT NULL,
    //   `status` varchar(45) NOT NULL,
    //   `date_completed` datetime DEFAULT NULL,
    //   `money` int(11) DEFAULT NULL,
    //   `about` varchar(500) DEFAULT NULL,
    //   `userid` int(11) NOT NULL
    // ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    // CREATE TABLE `tran_products` (
    //   `tran_id` int(11) NOT NULL,
    //   `pro_id` int(11) NOT NULL,
    //   `quantity` int(11) NOT NULL
    // ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    
    $list_proc = array();
    $row = mysqli_fetch_assoc($res);
    while($row){
      if (@!$list_proc[$row['pro_id']]){
        $list_proc[$row['pro_id']] = $row['quantity'];
      }
      else{
        $list_proc[$row['pro_id']] += $row['quantity'];
      }
    }
    $list_key = array_keys($list_proc);

  }
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
              $totalPrice = 0;
              for($i = 0; $i < count($list_proc); $i++){
                $query = "SELECT * FROM products WHERE id = $list_key[$i]";
                $res = mysqli_query($db_con, $query);
                if (@!$res) continue;
                $row = mysqli_fetch_assoc($res);
              
            ?>
            <div class="col-lg-6">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img
                      src="https://photo-1-baomoi.zadn.vn/w720x480/2020_03_05_119_34191826/4af6afa0b0e359bd00f2.jpg"
                      class="card-img w-100 h-100"
                      alt="..."
                    />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">
                        <?php $row['name']?>
                        Bánh mì
                        <button type="button" class="close">
                          <span>&times;</span>
                        </button>
                      </h5>
                      <p class="card-text">
                      <?php echo $row['price'];?>
                        Price: 20,000
                      </p>
                      <div class="form-group">
                        <input
                          type="number"
                          min="0"
                          max="10"
                          class="form-control"
                          placeholder= <?php echo $list_proc[$list_key[$i]];?>
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
              $totalPrice += $list_proc[$list_key[$i]] * $row['price'];
              $VAT = "10%";
              $VAT_Price = intval($totalPrice) * 0.1;
              $final_Price = intval($totalPrice) * 1.1;
              }
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

    <script src="script.js"></script>
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
