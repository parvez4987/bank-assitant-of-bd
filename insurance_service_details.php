<?php
    require_once('functions/function.php');
    get_header();
    get_menubar();
    get_bread();
        $id=$_GET['p'];
        $sele="SELECT * FROM insurance_poilicy WHERE id='$id'";
        $qrry=mysqli_query($con,$sele);
        $dataa=mysqli_fetch_array($qrry);
?>

        
    <section id="comparison">
            <div class="container cmp">
                <div class="row">
                    <div class="col-sm-12 heading mb_dvice p0 headddd">
                        <h2>Policy Details</h2>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-md-8 table1_dtls">
                        <div class="search_cmp">
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                  <!--<input type="text" class="form-control" placeholder="Bank/Insurance">
                                  <input type="text" class="form-control" placeholder="Bank/Insurance">-->
                                </div>
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <table class="table table-hover table-striped table-responsive view_table_cus">
                            <?php
                                $selectt = "SELECT * FROM insurance_poilicy NATURAL JOIN insurance_company NATURAL JOIN poilicy WHERE id='$id'";
                                $querry = mysqli_query($con, $selectt);
                                while ($info = mysqli_fetch_array($querry)) {
                            ?>
                            <tr>
                                <td>Insurance Company Name</td>
                                <td>:</td>
                                <td>
                                    <?=$info['ins_com_name'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Poilicy Type</td>
                                <td>:</td>
                                <td>
                                    <?=$info['poilicy_name'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Interest</td>
                                <td>:</td>
                                <td>
                                    <?=$info['insurance_details'] ?>
                                </td>
                            </tr>
                                <?php } ?>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section><!--  ends -->
        
        <?php
            get_footer();
        ?>