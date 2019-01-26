<?php
    require_once('functions/function.php');
    get_header();
    get_menubar();
    get_bread();
    
    
    if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $insert = "INSERT INTO messages(name,email,message) VALUES('$name','$email','$msg')";
    if (mysqli_query($con, $insert)) {
        echo "<script type='text/javascript'>alert('Message Send successfully!')</script>";
    } else {
        echo "<script type='text/javascript'>alert('Message Send Failed!')</script>";
    }
}
?>
        <section id="contact">
            <div class="container bgc">
                <div class="row">
                    <div class="col-sm-12 heading p0">
                       <h2>Contact Us</h2>
                       <div id="googleMap"></div> 
                    </div>
                    <aside>
                        <div class="col-sm-3 heading paragraph mb_dvice p0">
                            <h2>Head Office</h2>
                            <p>Daffodil Tower<br>
                                danmondi 28, Opposite of Sobhanbag Jame Mosque.<br>Dhaka 1207, Bangladesh.<br><br>+880 2-8833151-60, +880<br> 2-9863219-20, +880 2-9862370.
                                <br>
                                Customer Care: 0900000000
                                Bankassitant@gmail.com</p>
                        </div>
                    </aside>
                    <aside>
                        <div class="col-sm-8 col-sm-offset-1 mb_dvice p0">
                            <h2>Just send a message we’ll reach to you</h2>
                            <form action="" method="post">
                                <input type="text" class="text-input" id="" name="name" placeholder="Name">
                                <input type="email" class="text-input" id="" name="email" placeholder="Email">
                                <textarea class="text-message" id="" name="message" placeholder="Message"></textarea>
                                <input type="submit" value="SEND" class="sub-btn" id="" name="">
                            </form>
                            
                        </div>
                    </aside>
                </div>
            </div>
        </section><!-- contact ends -->
        
        
        <?php
            get_footer();
        ?>