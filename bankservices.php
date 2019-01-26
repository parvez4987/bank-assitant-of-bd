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
                                    $sel = 'SELECT * FROM bank';
                                    $qry = mysqli_query($con, $sel);
                                    while ($data = mysqli_fetch_array($qry)) {
                                ?>
                                <li><a href="bank_poilicyy.php?c=<?= $data['bank_id'] ?>"><?= $data['b_name']; ?><i class="fa fa-chevron-right"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </aside>
                    <aside>
                        <div class="col-sm-9 mb_dvice heading pr0">
                            <div class="col-sm-12 mb_dvice pr0">
                                <h2>BANK INFORMATION</h2>
                            </div>
                            
                            <?php
                                $selectt = 'SELECT * FROM bank_policy NATURAL JOIN bank NATURAL JOIN poilicy ORDER BY id DESC';
                                $querry = mysqli_query($con, $selectt);
                                while ($info = mysqli_fetch_array($querry)) {
                            ?>
                            <div class="col-md-4 col-sm-6 heading all_product text-center mb_dvice">
                                <a href="bank_service_details.php?d=<?= $info['id'] ?>">
                                    <figure>
                                        <img src="images/bank/<?= $info['b_photo']; ?>" class="img-responsive" alt="#">
                                        <figcaption>
                                            <h3><?= $info['poilicy_expiration']; ?> Years</h3>
                                            <h5><?= $info['poilicy_name']; ?><br><?= $info['amount']; ?></h5>
                                            <h4>more</h4>
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