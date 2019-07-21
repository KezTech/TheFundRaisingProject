
<header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                   
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">

                            E-mail: <a href="#">Nepa_child_edu@gmail.com</a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>Phone: <span>+977-9823571726</span></p>
                        </div><!-- .header-bar-text -->

                    </div> <!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="#">Donate Now</a> <!--/Go to Donation page -->
                        </div><!-- .donate-btn -->
                        
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->





        <div class="nav-bar">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="site-branding d-flex align-items-center">
                                       <a class="d-block" href="home.php" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
                                    </div><!-- .site-branding -->
            
                         <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="index.php">Home</a></li>
                                <li><a href="about.php">About us</a></li>
                                <li><a href="Profiles.php">Child Profiles</a></li>
                                <li><a href="Donation.php">Donation</a></li>
                                <li><a href="TopDonors.php">Top-Doner</a></li>
                                <li><a href="Enterchild.php">Register Child</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                
                                <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
                                    {
                                    ?>
                                   <li>  <a href="logout.php">Logout</a></li>
                                        <?php }
                                        else{ ?>
                                      <li>      <a href="login.php">Login</a></li>
                                        <li>     <a href="singup.php">Register</a><li>
                                        <?php } ?>
                                        
                             </ul>

                         </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                        
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->

    