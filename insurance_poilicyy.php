<?php
    require_once('functions/function.php');
    get_header();
    get_menubar();
    get_bread();
        $id=$_GET['e'];
        $sele="SELECT * FROM insurance_company WHERE insurance_id='$id'";
        $qrry=mysqli_query($con,$sele);
        $dataa=mysqli_fetch_array($qrry);
?>

    <section id="products">
        <div class="container bgc">
            <div class="row">
                <div class="col-sm-12 side_tab p0">
                    <aside>
                        <div class="col-sm-3 heading as_left mb_dvice p0">
                            <h2>Insurance services</h2>
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
                                <h2><?= $dataa['ins_com_name'] ?></h2>
                            </div>
                            
                            <?php
                                $selectt = "SELECT * FROM insurance_poilicy NATURAL JOIN insurance_company NATURAL JOIN poilicy WHERE insurance_id='$id'";
                                $querry = mysqli_query($con, $selectt);
                                while ($info = mysqli_fetch_array($querry)) {
                            ?>
                            <div class="col-md-4 col-sm-6 heading all_product text-center mb_dvice">
                                <a href="insurance_service_details.php?p=<?= $info['id'] ?>">
                                    <figure>
                                        <img src="images/insurance/<?= $info['ins_com_photo']; ?>" class="img-responsive" alt="#">
                                        <figcaption>
                                            <h3>5 Years</h3>
                                            <h5>Fix Deposit<br>Minimum 3 lakh tk</h5>
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