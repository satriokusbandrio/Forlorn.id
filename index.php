<?php include("connect.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FORLORN.ID | Company Profile</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"> <img src="assets/img/logo.png" alt="" /> </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#products">Products</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#history">History</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Login</a></li>
                        <span class="ikon" onclick="setDark(true)"><img src="assets/img/moon.png" width="15px" height="15px"></span>
                        <span class="ikon1" onclick="setDark(false)"><img src="assets/img/sun.png" width="15px" height="15px"></span>
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            #malam {
               background-color:rgb(17, 17, 17);
               color: #fff;
            }
            #malam .bg-light{
                background-color:rgb(27, 27, 27) !important;
            }

            #malam a.bg-light:hover, a.bg-light:focus,
            button.bg-light:hover,
            button.bg-light:focus {
                background-color: rgb(27, 27, 27) !important;
            }
            #malam .footer {
                background-color:rgb(27, 27, 27);
            }

            #malam .modal-content {
                background-color: rgb(27, 27, 27);
            }

            #malam #products .products-item .products-caption {
                background-color: rgb(17, 17, 17);
            }

         </style>
   
         <script>
   
            if(localStorage.getItem('stay') == 'dark')
               setDark(true)
   
            function setDark(isDark){
   
               if(isDark){
                  document.body.setAttribute('id', 'malam')
                  localStorage.setItem('stay', 'dark')
               }else{
                  document.body.setAttribute('id', '')
                  localStorage.removeItem('stay')
               }
   
            }
         </script>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase">FORLORN.ID</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#products">MORE.</a>
            </div>
        </header>
                <!-- About-->
                <section class="page-section" id="about">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="section-heading text-uppercase">About Us</h2>
                            <br />
                            <h3 class="section-subheading text-muted">FORLORN.ID adalah Brand lokal yang berbasis di Serang,Banten. Dibangun oleh 2 insan muda yang berteman sejak SMA. Arya (Founder) dan Satrio (Co-Founder) mereka merintis bisnis ini sejak kuliah. Modal nekat dan minim pengalaman mereka membangun FORLORN.ID. Produk yang dijual bisnis ini ialah produk pakaian pria maupun wanita. Seperti Baju, Hoodie, dan Sweater.</h3>
                        </div>
                    </div>
                </section>
        <!-- Products-->
        <section class="page-section bg-light" id="products">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Products</h2>
                    <h3 class="section-subheading text-muted">Berikut beberapa produk kita!</h3>
                </div>
                <div class="row">
                    
					<?php $result = mysqli_query($mysqli, "select * from content"); 
									while ($row = $result->fetch_assoc()) { ?>
					<div class="col-lg-4 col-sm-6 mb-4">
                        <div class="products-item">
                            <a class="products-link" data-toggle="modal" href="#productsModal<?php echo $row['id'];?>">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="uploads/<?php echo $row['url_pic'] ?>" alt="" />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading"><?php echo $row['heading']; ?></div>
                                <div class="products-caption-subheading text-muted"><?php echo $row['subheading']; ?></div>
                            </div>
                        </div>
                    </div>
					<?php } ?>
                   
                </div>
            </div>
        </section>
        <!-- History-->
        <section class="page-section" id="history">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">History</h2>
                    <h3 class="section-subheading text-muted">Sejarah Singkat FORLORN.ID</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/pertama.jpeg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>13 MAY 2020</h4>
                                <h4 class="subheading">Our Journey Begins</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">FORLORN.ID dibangun oleh 2 Mahasiswa rantau. Arya(Founder) & Satrio(Co-Founder) berteman sejak SMA dan membangun bisnis ini ketika mereka bertemu ditempat Makan cepat saji didaerah rantauan mereka. Dengan modal nekat dan minim pengalaman,mereka memulai bisnis ini.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/kedua.jpeg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>03 June 2020</h4>
                                <h4 class="subheading">Start Production</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">3 Minggu setelah bertemu, mereka menggunakan waktu 3 minggu berlalu itu untuk memikirkan konsep dan tema yang dibuat, dan akhirnya mereka siap produksi. Menggunakan sistem Pre-Order mereka memulainya.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/ketiga.jpeg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>04 July 2020</h4>
                                <h4 class="subheading">Spread The Love</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Setelah sebulan memulai Pre-Order pertama, produk FORLORN.ID terjual dan tersebar luas ke berbagai daerah di indonesia!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/keempat.jpeg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Present.</h4>
                                <h4 class="subheading">Well received</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Sampai saat ini, Produk FORLORN.ID diterima dengan baik di indonesia. "Live the Life you Love" - Forlorn.id </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                <br />
                                Join Us!
                                <br />
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Team</h2>
                    <h3 class="section-subheading text-muted">Get to know us!</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/pertama.jpeg" alt="" />
                            <h4>Satrio Kusbandrio</h4>
                            <p class="text-muted">as Co-Founder & Front-end Dev.</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/saaatrio/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/kedua.jpeg" alt="" />
                            <h4>Satyawira Adhyoga</h4>
                            <p class="text-muted">as Back-end Dev.</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/adhyoooga/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/ketiga.jpeg" alt="" />
                            <h4>Sachril Sofyan</h4>
                            <p class="text-muted">as Admin.</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/schrl__sfyn/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">"Lo harus cari kerjaan yang lo ngerjainnya kaya main-main, tapi orang lain ngeliat lo itu kaya lagi kerja."</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/dana.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://shopee.co.id/forlorn.id"><img class="img-fluid d-block mx-auto" src="assets/img/logos/shopee.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.tokopedia.com/forlornid"><img class="img-fluid d-block mx-auto" src="assets/img/logos/tokopedia.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/gopay.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <br>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Phone" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © FORLORN.ID 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/forlorn.id/"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Product Modals-->
        <!-- Modal 1-->
		<?php $result = mysqli_query($mysqli, "select * from content"); 
			while ($row = $result->fetch_assoc()) { ?>
        <div class="products-modal modal fade" id="productsModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $row['heading']; ?></h2>
                                    <p class="item-intro text-muted"><?php echo $row['subheading']; ?></p>
                                    <img class="img-fluid d-block mx-auto" src="uploads/<?php echo $row['url_pic']; ?>" alt="" />
                                    <ul class="list-inline">
                                        <li>Size: <?php echo $row['size']; ?></li>
                                        <li>Color: <?php echo $row['color']; ?></li>
                                        <li>Price: <?php echo $row['price']; ?></li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
			<?php } ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>