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


                <div class="clearfix"></div>
                <div class="down-page">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-content">Rezervari</div>
                            <div class="brake"><hr/></div>
                        </div>
                    </div>
                    <div class="contact-rezervari">
                        <b>
                            Campurile marcate cu <font color="red">*</font> sunt obligatorii.
                        </b>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-rezervari2 col-md-push-1">
                            <div class="form2">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleNume">Nume</label>
                                        <font color="red">*</font>
                                        <br>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="numeHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleNume">Prenume</label>
                                        <font color="red">*</font>
                                        <br>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="numeHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleNume">Localitate</label>
                                        <font color="red">*</font>
                                        <br>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="numeHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleNume">Telefon</label>
                                        <font color="red">*</font>
                                        <br>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="numeHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleNume">Email</label>
                                        <font color="red">*</font>
                                        <br>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="numeHelp" placeholder="">
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="col-md-6 text-rezervari2 col-md-push-1">
                            <div class="form2">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleNume">Numar Persoane</label>
                                        <font color="red">*</font>
                                        <br>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="numeHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleNume">Numarul de camere</label>
                                        <font color="red">*</font>
                                        <br>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="numeHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleNume">Data Sosirii</label>
                                        <font color="red">*</font>
                                        <br>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="numeHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleNume">Data Plecarii</label>
                                        <font color="red">*</font>
                                        <br>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="numeHelp" placeholder="">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <!--                 <div class="btn-group">
                                    <button id="butonRezervari" class="btn btn-default dropdown-toggle" type="submit" data-toggle="dropdown">Rezerva</button>
                                </div>-->
                <div class="row">
                    <div class="col-md-12 col-md-pull-1 text-center"> 
                        <button id="butonRezervari" class="btn btn-default dropdown-toggle" type="submit" data-toggle="dropdown">Rezerva</button> 
                    </div>
                </div>
                <?php
                include("footer.php");
                ?>
            </div>
        </main>

    </div>
</body>