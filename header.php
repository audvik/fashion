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
              <a class="navbar-brand" href="/">
                  <img src="<?php echo get_template_directory_uri();?>/pictures/images/logo.png" width="292" alt="Logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item ms-lg-5 mx-auto">
                          <a class="nav-link fw-bold fs-6" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item ms-lg-5 mx-auto">
                          <a class="nav-link fw-bold fs-6" href="/start">Product</a>
                      </li>
                      <li class="nav-item ms-lg-5 mx-auto">
                          <a class="nav-link fw-bold fs-6" href="/start">Collection</a>
                      </li>
                      <li class="nav-item ms-lg-5 mx-auto">
                          <a class="nav-link fw-bold fs-6" href="/contact">Contact Us</a>
                      </li>
              </div>
          </div>
      </nav>
  </header>
  <!-- =================Navbar End==================== -->