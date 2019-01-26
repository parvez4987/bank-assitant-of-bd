<?php
    require_once('functions/function.php');
    get_header();
    get_menubar();
    get_bread();
 
?>
        <section id="contact">
            <div class="container bgc">
                <div class="row">
                    <div class="col-sm-12 heading p0">
                       <h2>Analysis</h2>
                    
                    <div class="col-md-3"></div>
                    <div class="col-md-6 table2_cmp">
                        <div class="search_cmp">

                            <form class="navbar-form navbar-left" action="bank_analysis.php">
                            	<h1>For Bank</h1>
                                <div class="form-group">
                                  <select name="bankk">
                                    <?php
                                    $p_id=$_POST['bankk'];
                                        $sel = "SELECT * FROM bank_policy NATURAL JOIN bank NATURAL JOIN poilicy";
                                        $qqy = mysqli_query($con, $sel);
                                        while ($per = mysqli_fetch_array($qqy)){?>
                                        <option value="<?= $per['id']; ?>"><?= $per['b_name']; ?>,<?= $per['poilicy_name'] ?>,Amount: <?= $per['amount'] ?>                             
                                        </option>
                                        <?php } ?>
                                    </select>

                                    <select name="bankk2">
                                    <?php
                                    $p_id2=$_POST['bankk2'];
                                        $sel = "SELECT * FROM bank_policy NATURAL JOIN bank NATURAL JOIN poilicy";
                                        $qqy = mysqli_query($con, $sel);
                                        while ($per = mysqli_fetch_array($qqy)){?>
                                        <option value="<?= $per['id']; ?>"><?= $per['b_name']; ?>,<?= $per['poilicy_name'] ?>,Amount: <?= $per['amount'] ?>                             
                                        </option>
                                        <?php } ?>
                                    </select>
                                    <input type="submit" value="Select">
                            </form>


                            <form class="Insurance_analysis" action="insurance_analysis.php">
                            	<h1>For Insurance Company</h1>
                                <div class="form-group">
                                  <select name="insurance">
                                    <?php
                                    $p_id=$_POST['insurance'];
                                        $sel = "SELECT * FROM insurance_poilicy NATURAL JOIN insurance_company NATURAL JOIN poilicy";
                                        $qqy = mysqli_query($con, $sel);
                                        while ($per = mysqli_fetch_array($qqy)){?>
                                        <option value="<?= $per['id']; ?>"><?= $per['ins_com_name']; ?>,<?= $per['poilicy_name'] ?>, <?= $per['insurance_details'] ?>                             
                                        </option>
                                        <?php } ?>
                                    </select>

                                    <select name="insurance2">
                                    <?php
                                    $p_id2=$_POST['insurance2'];
                                        $sel = "SELECT * FROM insurance_poilicy NATURAL JOIN insurance_company NATURAL JOIN poilicy";
                                        $qqy = mysqli_query($con, $sel);
                                        while ($per = mysqli_fetch_array($qqy)){?>
                                        <option value="<?= $per['id']; ?>"><?= $per['ins_com_name']; ?>,<?= $per['poilicy_name'] ?>, <?= $per['insurance_details'] ?>                             
                                        </option>
                                        <?php } ?>
                                    </select>
                                    <input type="submit" value="Select">
                            </form>
                            
                        </div>           
                    </div>
                    </div>
                </div>
            </div>
        </section><!-- contact ends -->
       
        
        <?php
            get_footer();
        ?>