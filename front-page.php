<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap CSS v5.1.3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <!-- CSS file -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/styles.css">
    <title>Soft Wear</title>
  </head>
  <body>
    <!-- nav bar  -->
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
          <div class="container">
              <a class="navbar-brand" href="#">
                  <img src="<?php echo get_template_directory_uri();?>/pictures/images/logo.png" width="292" alt="Logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item ms-lg-5 mx-auto">
                          <a class="nav-link fw-bold fs-6" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item ms-lg-5 mx-auto">
                          <a class="nav-link fw-bold fs-6" href="#">Product</a>
                      </li>
                      <li class="nav-item ms-lg-5 mx-auto">
                          <a class="nav-link fw-bold fs-6" href="#">About Us</a>
                      </li>
                      <li class="nav-item ms-lg-5 mx-auto">
                          <a class="nav-link fw-bold fs-6" href="#">Contact Us</a>
                      </li>
              </div>
          </div>
      </nav>
  </header>
  <!-- =================Navbar End==================== -->
  <section class="banner h-100 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                    <div class="banner-left d-flex flex-column justify-content-center h-100">
                        <h1 class="display-3 fw-bold text-uppercase lh-1"><span class="d-block" style="color: var(--secondery);">SOFTWEAR fashion</span> Now in Nepal</h1>
                        <small class="w-75 d-inline-block my-3 custom-line-height">SOFTWEAR fashion - a modern collection for urban youth ! Make your choice. Collect softwear Now.</small>
                        <div class="button">
                            <button type="button" onclick="window.location.href='/start';" class="btn btn-sm px-3 py-2 d-block text-white " id="button">
                                <img width="24" src="<?php echo get_template_directory_uri();?>/pictures/icons/shopping-cart 1.png" alt="">
                                Get Set Go
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="banner-img mt-sm-5">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/pictures/images/model.png" alt="">
                    </div>
                </div>
        </div>
    </div>
</section>
<!-- ===========Banner End================ -->
<!-- product.html-->
<!-- customer facility section start  -->
<section class="facility-section my-5 py-5">
  <div class="container">
      <div class="row justify-content-between align-items-center custom-order gy-sm-5">
          <div class="col-md-5 col-sm-12 col-12 gy-5">
              <div class="row gy-4 gx-sm-5">
                  <div class="w-100 d-flex justify-content-between align-items-center">
                      <div class="col-md-2">
                          <img  width="78" src="<?php echo get_template_directory_uri();?>/pictures/images/house.png" alt="">
                      </div>
                      <div class="col-md-8 ms-3">
                          <h4 class="fw-bold text-nowrap">Find the Perfect Fit</h4>
                          <small class="d-inline-block my-1 custom-line-height text-muted fw-normal">Everybody is different, which is why we offer styles for every body.</small>
                      </div>
                  </div>
                  <div class="w-100 d-flex justify-content-between align-items-center">
                      <div class="col-md-2">
                          <img  width="78" src="<?php echo get_template_directory_uri();?>/pictures/images/box.png" alt="">
                      </div>
                      <div class="col-md-8 ms-3">
                          <h4 class="fw-bold text-nowrap">Free Exchanges</h4>
                          <small class="d-inline-block my-1 custom-line-height text-muted fw-normal">Everybody is different, which is why we offer styles for every body.</small>
                      </div>
                  </div>
                  <div class="w-100 d-flex justify-content-between align-items-center">
                      <div class="col-md-2">
                          <img  width="78" src="<?php echo get_template_directory_uri();?>/pictures/images/question.png" alt="">
                      </div>
                      <div class="col-md-8 ms-3">
                          <h4 class="fw-bold text-nowrap">Contact Our Seller</h4>
                          <small class="d-inline-block my-1 custom-line-height text-muted fw-normal">Everybody is different, which is why we offer styles for every body.</small>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-sm-12 col-12">
              <div class="img">
                  <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/pictures/images/shopping.png" alt="">
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ==================Customer Facility section end===================== -->
<!-- footer section  -->
<footer class="text-center py-4 mt-5" style="background-color: var(--txt-color);" >
  <small class="text-white fw-bold">&copy; 2022 All rights reserved. Greenfly Garments Pvt. Ltd. Kathmandu, Nepal. +977-9844408888</small>
</footer>
<!-- footer end  -->

    <!-- bootstrap js file integration  -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
