<?php get_header(); ?>
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
<?php get_footer(); ?>
