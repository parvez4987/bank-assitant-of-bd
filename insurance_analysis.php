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
                    
                    <!--<div class="col-md-1"></div>-->
                    <div>
                        <div class="search_cmp">
                            
                            <div class="onee">
                            	<table class="table table-hover table-striped table-responsive view_table_cus">
                            <?php
                            	


                            	$p_id=$_GET['insurance'];
                                $selectt = "SELECT * FROM insurance_poilicy NATURAL JOIN insurance_company NATURAL JOIN poilicy WHERE id='$p_id'";
                                $querry = mysqli_query($con, $selectt);
                                while ($info = mysqli_fetch_array($querry)) {
                            ?>
                            <tr>
                                <td>Bank Name</td>
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
                                <td>Poilicy Time</td>
                                <td>:</td>
                                <td>
                                    <?=$info['insurance_details'] ?>
                                </td>
                            </tr>
                            
                                <?php } ?>
                        </table>
                            </div>         

                            <div class="twoo">
                                <table class="table table-hover table-striped table-responsive view_table_cus">
                            <?php
                                


                                $p_id2=$_GET['insurance2'];
                                $select = "SELECT * FROM insurance_poilicy NATURAL JOIN insurance_company NATURAL JOIN poilicy WHERE id='$p_id2'";
                                $querry = mysqli_query($con, $select);
                                while ($infoo = mysqli_fetch_array($querry)) {
                            ?>
                            <tr>
                                <td>Bank Name</td>
                                <td>:</td>
                                <td>
                                    <?=$infoo['ins_com_name'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Poilicy Type</td>
                                <td>:</td>
                                <td>
                                    <?=$infoo['poilicy_name'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Poilicy Time</td>
                                <td>:</td>
                                <td>
                                    <?=$infoo['insurance_details'] ?>
                                </td>
                            </tr>
                            
                                <?php } ?>
                        </table>
                            </div>       



                        </div>           
                    </div>
                    </div>
                </div>
            </div>
        </section><!-- contact ends -->
       
        
        <?php
            get_footer();
        ?>