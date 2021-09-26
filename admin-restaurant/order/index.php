<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <div class="container-fluid">
    <div id="header">
      <div class="row">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link text-font" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-font" href="#">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-font" href="#">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-font" href="#">Food</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-font" href="#">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-font" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Start body -->
    <div id="body">
      <div class="row w-80 ">
        <div class="row">
          <h2 class="content ">Manager Order</h2>
        </div>
        <table class="table-section">
          <thead>
            <th>S.N.</th>
            <th>Food</th>
            <th>Price</th>
            <th>Qty.</th>
            <th>Total</th>
            <th>Order Date</th>
            <th>Status</th>
            <th>Customer Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
            <th>Actions</th>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>Mixed Pizza</td>
              <td>10.00</td>
              <td>2</td>
              <td>20.00</td>
              <td>2020-11-30 <br>04:07:17</td>
              <td><p class="t-color">Delivered</p></td>
              <td>Pham The Huy</td>
              <td>+1 (562) <br>101-2028</td>
              <td>thehuyat@gmail.com</td>
              <td>Vinh Phuc</td>
              <td><span class="update">Update Order</span></td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Best Burger</td>
              <td>4.00</td>
              <td>4</td>
              <td>16.00</td>
              <td>2020-11-30 <br>3:52:43</td>
              <td><p class="t-color">Delivered</p></td>
              <td>Nguyen Van Son</td>
              <td>+1 (562) <br>101-2028</td>
              <td>sonhuyat@gmail.com</td>
              <td>Ninh Binh</td>
              <td><span class="update">Update Order</span></td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Sadeko Momo</td>
              <td>6.00</td>
              <td>3</td>
              <td>18.00</td>
              <td>2020-11-30 <br>3:52:43</td>
              <td><p class="cancel-color">Cancelled</p></td>
              <td>Nguyen Van Son</td>
              <td>+1 (562) <br>101-2028</td>
              <td>sonhuyat@gmail.com</td>
              <td>Ninh Binh</td>
              <td><span class="update">Update Order</span></td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
    <!-- end body -->
    <!-- start footer -->
    <div class="row" id="footer">
      <div class="col-md-12">
        <div class="container">
          <p>2020 All rights reserved, Food House. Developed By - <a href="#">TheHuy.TLU</a></p>
        </div>
      </div>
    </div>
    <!-- end footer -->
  </div>
</body>

</html>