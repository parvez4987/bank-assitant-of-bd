<?php
    require_once('functions/function.php');
    get_header();
    get_menubar();
    get_bread();
?>

    <section id="products">
        <div class="container bgc">
            <div class="row">
                <div class="col-sm-12 side_tab p0">
                    <aside>
                        <div class="col-sm-3 heading as_left mb_dvice p0">
                            <h2>our services</h2>
                            <ul>
                                <?php
                                    $sel = 'SELECT * FROM insurance_company';
                                    $qry = mysqli_query($con, $sel);
                                    while ($data = mysqli_fetch_array($qry)) {
                                ?>
                                <li><a href="insurance_poilicyy.php?e=<?= $data['insurance_id'] ?>"><?= $data['ins_com_name'];?><i class="fa fa-chevron-right"></i></a></li>
                                <?php } ?>  
                            </ul>
                        </div>
                    </aside>
                    <aside>
                        <div class="col-sm-9 mb_dvice heading pr0">
                            <div class="col-sm-12 mb_dvice pr0">
                                <h2>Insurance Company Information</h2>
                            </div>
                            <?php
                                $selectt = 'SELECT * FROM insurance_poilicy NATURAL JOIN insurance_company NATURAL JOIN poilicy ORDER BY id DESC';
                                $querry = mysqli_query($con, $selectt);
                                while ($info = mysqli_fetch_array($querry)) {
                            ?>
                            <div class="col-md-4 col-sm-6 heading all_product text-center mb_dvice">
                                <a href="insurance_service_details.php?p=<?= $info['id'] ?>">
                                    <figure>
                                        <img src="images/insurance/<?= $infoo['ins_com_photo']; ?>" class="img-responsive" alt="">
                                        <figcaption>
                                            <h3>3 Years</h3>
                                            <h5>Installment</h5>
                                            <p>5% Interest per month</p>
                                            <h4>Minimum Amount 5000 tk</h4>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                                <?php } ?>
                            

                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <?php
        get_footer();
    ?>