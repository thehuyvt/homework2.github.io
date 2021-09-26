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
          <h2 class="content ">Manager Category</h2>
          <div class="col-md-2">
          <button class="add-new-user">Add Category</button>
          </div>
        </div>
        <table class="table-section">
          <thead>
            <th>S.N</th>
            <th>Title</th>
            <th>Image</th>
            <th>Featured</th>
            <th>Active</th>
            <th>Actions</th>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>Pizza</td>
              <td><img class="img-td"  src="./img/pizza.jpg" alt="pizza"></td>
              <td>Yes</td>
              <td>Yes</td>
              <td><span class="update">Update Category</span><span class="delete">Delete Category</span></td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Burger</td>
              <td><img class="img-td"  src="./img/burger.jpg" alt="pizza"></td>
              <td>Yes</td>
              <td>Yes</td>
              <td><span class="update">Update Category</span><span class="delete">Delete Category</span></td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Mo Mo</td>
              <td><img class="img-td" src="./img/pizza.jpg" alt="pizza"></td>
              <td>Yes</td>
              <td>Yes</td>
              <td><span class="update">Update Category</span><span class="delete">Delete Category</span></td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Pizza</td>
              <td><img class="img-td" src="./img/pizza.jpg" alt="pizza"></td>
              <td>No</td>
              <td>Yes</td>
              <td><span class="update">Update Category</span><span class="delete">Delete Category</span></td>
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