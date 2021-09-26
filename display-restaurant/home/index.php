<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Restaurant</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container-fluid">

    <!-- Begin header -->
    <div id="header">
      <div class="row w-80">
        <div class="col-md-6 ">
          <img src="./img/logo.png" alt="wow food" class="img-fluid ">
        </div>
        <div class="col-md-6 ">
          <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
              <!-- <a class="navbar-brand" href="#"></a> -->
              <button class="navbar-toggler ms-auto m-btn-nav " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item me-4">
                    <a class="nav-link  text-font  " href="#">Home</a>
                  </li>
                  <li class="nav-item me-4">
                    <a class="nav-link  text-font " href="#">Categories</a>
                  </li>
                  <li class="nav-item me-4">
                    <a class="nav-link  text-font " href="#">Food</a>
                  </li>
                  <li class="nav-item me-4">
                    <a class="nav-link  text-font " href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- End header -->

    <!-- Start Search Food -->
    <div class="row search">
      <nav class="navbar navbar-light ">
        <div class="container-fluid">
          <form class="d-flex w-50 m-auto search-form">
            <input class="form-control me-2 w-100" type="search" placeholder="Search For Food..." aria-label="Search">
            <button class="btn  search-btn " type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
    <!-- End Search Food -->

    <!-- Start Categories -->
    <div class="row w-80 t-center " id="categories">
      <div class="col-md-12 content-section ">
        <h2 class="content-categories">
          Explore Food
        </h2>
      </div>
      <div class="col-md-4">
        <img src="./img/pizza.jpg" alt="" class="img-category">
        <h3 class="text-img">Pizza</h3>
      </div>
      <div class="col-md-4">
        <img src="./img/burger.jpg" alt="" class="img-category">
        <h3 class="text-img">Burger</h3>
      </div>
      <div class="col-md-4">
        <img src="./img/momo.jpg" alt="" class="img-category">
        <h3 class="text-img">Momo</h3>
      </div>
    </div>
    <!-- End Categories -->

    <!-- Start Food Menu -->
    <div class="container-fluid " id="food">
      <div class="row w-80 t-center">
        <div class="col-md-12 content-section ">
          <h2 class="content-categories">
            Food Menu
          </h2>
        </div>
        <div class="row ">
          <div class="col-md-6 food-wrap">
            <img src="./img/menu-pizza.jpg" alt="pizza" class="img-food">
            <div class="body-food-description">
              <h4 class="name-food">Best Burger</h4>
              <h4 class="price-food">$4.00</h4>
              <p class="food-description">Burger with Ham, Pineapple and lots of Cheese</p>
              <a href="#"><button class="style-btn order-btn">Order Now</button></a>
            </div>
            <div class="clear"></div>
          </div>
          <!-- <div class="col-md-2"></div> -->
          <div class="col-md-6 food-wrap">
            <img src="./img/menu-momo.jpg" alt="pizza" class="img-food">
            <div class="body-food-description">
              <h4 class="name-food">Best Burger</h4>
              <h4 class="price-food">$4.00</h4>
              <p class="food-description">Burger with Ham, Pineapple and lots of Cheese</p>
              <a href="#"><button class="style-btn order-btn">Order Now</button></a>
            </div>
            <div class="clear"></div>
          </div>
        </div>

        <div class="row ">
          <div class="col-md-6 food-wrap">
            <img src="./img/menu-burger.jpg" alt="pizza" class="img-food">
            <div class="body-food-description">
              <h4 class="name-food">Best Burger</h4>
              <h4 class="price-food">$4.00</h4>
              <p class="food-description">Burger with Ham, Pineapple and lots of Cheese</p>
              <a href="#"><button class="style-btn order-btn">Order Now</button></a>
            </div>
            <div class="clear"></div>
          </div>
          <!-- <div class="col-md-2"></div> -->
          <div class="col-md-6 food-wrap">
            <img src="./img/menu-pizza.jpg" alt="pizza" class="img-food">
            <div class="body-food-description">
              <h4 class="name-food">Best Burger</h4>
              <h4 class="price-food">$4.00</h4>
              <p class="food-description">Burger with Ham, Pineapple and lots of Cheese</p>
              <a href="#"><button class="style-btn order-btn">Order Now</button></a>
            </div>
            <div class="clear"></div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12 text-color">See All Foods</div>
        </div>
      </div>
    </div>
    <!-- End Food Menu -->
    <!-- Start Social -->
    <div class="row" id="contact">
      <div class="col-md-12 social-icon">
        <a href="#"><i class="facebook-icon fab fa-facebook"></i></a>
        <a href="#"><i class="instagram-icon fab fa-instagram-square"></i></a>
        <a href="#"><i class="twitter-icon fab fa-twitter"></i></a>
      </div>
    </div>
    <!-- End Social -->

    <!-- Start Footer -->
    <div class="row" id="footer">
      <div class="col-md-12">
        <div class="container">
          <p>All rights reseverd. Designed By <a href="#">TheHuy.TLU</a></p>
        </div>
      </div>
    </div>
    <!-- End Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>