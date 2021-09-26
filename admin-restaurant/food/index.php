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
          <h2 class="content ">Manager Food</h2>
          <div class="col-md-2">
          <button class="add-new-user">Add Food</button>
          </div>
        </div>
        <table class="table-section">
          <thead>
            <th>S.N</th>
            <th>Title</th>
            <th>Price</th>
            <th>Image</th>
            <th>Featured</th>
            <th>Active</th>
            <th>Actions</th>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>Dumplings Specials</td>
              <td>$5.00</td>
              <td><img class="img-td"  src="./img/menu-momo.jpg" alt="pizza"></td>
              <td>Yes</td>
              <td>Yes</td>
              <td><span class="update">Update Food</span><span class="delete">Delete Food</span></td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Best Burger</td>
              <td>$4.00</td>
              <td><img class="img-td"  src="./img/menu-burger.jpg" alt="pizza"></td>
              <td>Yes</td>
              <td>Yes</td>
              <td><span class="update">Update Food</span><span class="delete">Delete Food</span></td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Smoky BBQ Pizza</td>
              <td>$6.00</td>
              <td><img class="img-td"  src="./img/menu-pizza.jpg" alt="pizza"></td>
              <td>No</td>
              <td>Yes</td>
              <td><span class="update">Update Food</span><span class="delete">Delete Food</span></td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Sadeko Momo</td>
              <td>$6.00</td>
              <td><img class="img-td"  src="./img/menu-momo.jpg" alt="pizza"></td>
              <td>Yes</td>
              <td>Yes</td>
              <td><span class="update">Update Food</span><span class="delete">Delete Food</span></td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Mixed Pizza</td>
              <td>$10.00</td>
              <td><img class="img-td"  src="./img/menu-pizza.jpg" alt="pizza"></td>
              <td>Yes</td>
              <td>Yes</td>
              <td><span class="update">Update Food</span><span class="delete">Delete Food</span></td>
            </tr>
            <tr>
              <td>6.</td>
              <td>Sed ipsum cillum in</td>
              <td>$52.00</td>
              <td><img class="img-td"  src="" alt="Image not Added"></td>
              <td>No</td>
              <td>No</td>
              <td><span class="update">Update Food</span><span class="delete">Delete Food</span></td>
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