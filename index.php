<?php
    require_once('functions/function.php');
    get_header();
    get_menubar();
?>
    
        <section id="banner-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 p0">
                        <div id="myCarousel" class="carousel slide slidering_first" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                          </ol>
                        <div class="carousel-inner" role="listbox">
                          <?php
                            $sel = 'SELECT * FROM banner ORDER BY id DESC LIMIT 0,4';
                            $qry = mysqli_query($con, $sel);
                            while ($data = mysqli_fetch_array($qry)) {
                          ?>
                            <div class="item <?php if($data['status']==1){echo 'active';} ?>">
                              <img src="images/banner/<?= $data['photo']; ?>" class="img-responsive" alt="banner.jpg">
                            </div>
                          <?php } ?>
                        </div>
                        <!-- Left and right controls -->
                          <a class="left btn-arrow-left hidden-xs" href="#myCarousel" role="button" data-slide="prev">
                            <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right btn-arrow-right hidden-xs" href="#myCarousel" role="button" data-slide="next">
                            <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- banner-part ends -->
        <section id="our-product">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 h_brdr heading p0">
                        <div class="col-sm-11 p0">
                            <h2>RECENT BANK UPDATE</h2>
                        </div>
                        <div class="col-sm-1 text-right p0">
                            <a class="view-all" href="bankservices.php">View all<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-12 product mb_dvice p0">
                        <?php
                            $selectt = 'SELECT * FROM bank_policy NATURAL JOIN bank NATURAL JOIN poilicy ORDER BY id DESC LIMIT 0,4';
                            $querry = mysqli_query($con, $selectt);
                            while ($info = mysqli_fetch_array($querry)) {
                        ?>
                        <div class="col-sm-3 heading all_product text-center pl0">
                            <a href="bank_service_details.php?d=<?= $info['id'] ?>"><figure> 
                                <img src="images/bank/<?= $info['b_photo']; ?>" class="img-responsive" alt="sofaset">
                                <figcaption>
                                    <h3><?= $info['poilicy_expiration']; ?> Years</h3>
                                    <h5><?= $info['poilicy_name']; ?><br>Any amount</h5>
                                    <h4>more</h4>                           
                                </figcaption> 
                            </figure></a>
                        </div>
                        <?php } ?>                        
                    </div>                    
                    <div class="col-sm-12 h_brdr heading p0">
                        <div class="col-sm-11 p0">
                            <h2>RECENT INSURANCE UPDATE</h2>
                        </div>
                        <div class="col-sm-1 text-right p0">
                            <a class="view-all" href="insuranceservices.php">View all<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-12 product-2 mb_dvice p0">
                        <?php
                            $selec = 'SELECT * FROM insurance_poilicy NATURAL JOIN insurance_company NATURAL JOIN poilicy ORDER BY id DESC LIMIT 0,4';
                            $querryy = mysqli_query($con, $selec);
                            while ($infoo = mysqli_fetch_array($querryy)) {
                        ?>
                        <div class="col-sm-3 heading all_product text-center mb_dvice pl0">
                            <a href="insurance_service_details.php?p=<?= $infoo['id'] ?>"><figure>
                                <img src="images/insurance/<?= $infoo['ins_com_photo']; ?>" class="img-responsive" alt="bed-2">
                                <figcaption>
                                    <h3><?= $infoo['insurance_id']; ?> Years</h3>
                                    <h5><?= $infoo['poilicy_name']; ?></h5>
                                    <p>5% Interest per month</p>
                                    <h4>MORE</h4>
                                </figcaption>
                            </figure></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section><!-- our-product ends -->
        
        <section id="suggest">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 s_bg text-center heading p0">
                        <img src="images/like.png" class="img-responsive" alt="like.png">
                        <h3>BEST CHOICE</h3>
                    </div>
                    <div class="col-sm-4 s_bg text-center heading p0">
                        <img src="images/check.png" class="img-responsive" alt="check.png">
                        <h3>Company/Bank Guarantee</h3>
                    </div>
                    <div class="col-sm-4 s_bg text-center heading p0">
                        <img src="images/head-phone.png" class="img-responsive" alt="head-phone.png">
                        <h3>online support</h3>
                    </div>
                </div>
            </div>
        </section><!-- suggest part ends -->
        
        <?php
            get_footer();
        ?>
        
  
