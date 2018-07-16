<?php
include('header.php');
?>

<body>
    <div class="container">
        <main>
            <!-- start content -->
            <div class="box">
                <div class="">
                    <div class="clearfix"></div>
                    <!--                    <div class="row">-->

                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header"> 
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!--                                    <a class="navbar-brand" href="#">Project name</a>-->
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php">ACASA</a></li>
                                    <li><img src="images/star.jpg" alt=""/></li>
                                    <li><a href="despreNoi.php">DESPRE NOI</a></li>
                                    <li><img src="images/star.jpg" alt=""/></li>
                                    <li><a href="rezervari.php">REZERVARI</a></li>
                                    <li><img src="images/star.jpg" alt=""/></li>
                                    <li><a href="recenzii.php">RECENZII CLIENTI</a></li>
                                    <li><img src="images/star.jpg" alt=""/></li>
                                    <li><a href="galerie.php">GALERIE</a></li>
                                    <li><img src="images/star.jpg" alt=""/></li>
                                    <li><a href="contact.php">CONTACT</a></li>
                            </div><!--/.nav-collapse -->
                        </div><!--/.container-fluid -->
                    </nav>

                    <center>
                        <img src="images/slide.jpg" class="img-responsive center-block" alt="">
<!--                        <img src="images/slide3.jpg" alt=""/>-->
                    </center>


                </div>

                <div class="down-page">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title-content">Contact</div>
                            <div class="brake"><hr/></div>
                            <div class="text-content">
                                <p>Telefon: <span>0767.918.601</span></p>						
                                <p>Email: office@pensiuneacorina.ro</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--                        <div class="col-md-6">
                                                    <div class="titlecontent">Unde ne gasiti</div>
                                                    <div class="brake"><hr/></div>
                                                    <div class="textcontent">
                        
                                                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2855.1799544407263!2d23.795123!3d44.306729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4752d7bc716ac091%3A0x98e694eee43462f7!2sStrada+Independen%C8%9Bei!5e0!3m2!1sro!2sro!4v1402316318959"></iframe></p>
                        
                        
                                                    </div>
                        
                                                </div>-->
                        <div class="col-md-6">
                            <div class="titlecontent">Unde ne gasiti</div>
                            <div class="brake">
                                <hr />
<!--                                    <img src="images/brake.jpg" alt="">-->
<!--                                        <img src="images/brake.jpg" class="figure-img img-fluid" alt="">-->
                            </div>
                            <div class="textcontent">
<!--                                    <p><iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2855.1799544407263!2d23.795123!3d44.306729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4752d7bc716ac091%3A0x98e694eee43462f7!2sStrada+Independen%C8%9Bei!5e0!3m2!1sro!2sro!4v1402316318959"></iframe></p>-->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2855.1799544407263!2d23.795123!3d44.306729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4752d7bc716ac091%3A0x98e694eee43462f7!2sStrada+Independen%C8%9Bei!5e0!3m2!1sro!2sro!4v1402316318959" allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>



                    </div>




                </div>




                <?php
                include("footer.php");
                ?>
            </div>
        </main>
    </div>
</body>