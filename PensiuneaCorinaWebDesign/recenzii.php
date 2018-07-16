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
                        <img src="images/slide2.jpg" class="img-responsive center-block" alt="">
                    </center>
                </div>

                <div class="clearfix"></div>
                <div class="down-page">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-content">Recenzii Clienti</div>
                            <div class="brake"><hr/></div>
                        </div>
                    </div>

                    <p>
                        Daca te-ai simtit bine,tu,prietenii,familia lasa un rand pentru a impartasii impresile.
                    </p>
                    <div class="form2">
                        <form>
                            <div class="form-group">
                                <label for="exampleTextarea">Scrie un mesaj mai jos:</label>
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-md-pull-5 text-center"> 
                            <button id="butonRezervari" class="btn btn-default dropdown-toggle" type="submit" data-toggle="dropdown">Trimite!</button> 
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