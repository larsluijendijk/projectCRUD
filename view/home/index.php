<?php
  include 'headers.php';
?>
    <div class="container">
        <div class="bg-faded p-4 my-4">
            <!-- Image Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid w-100" src="<?= URL ?>img/slide-3.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-shadow">Vintage Design</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid w-100" src="<?= URL ?>img/slide-2.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-shadow">Vintage Design</h3>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Welcome Message -->
            <div class="text-center mt-4">
                <div class="text-heading text-muted text-lg">Welkom bij</div>
                <h1 class="my-2">Jenk</h1>
            </div>
        </div>

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0"><strong>Introductie</strong></h2>
            <hr class="divider">
            <img class="img-fluid float-left hidden-md-down mr-lg-4" src="<?= URL ?>img/intro-pic.jpg" alt="">
            <p>In het historisch havengebied van Dordrecht, niet ver van de grote kerk is Jenk gevestigd. Jenk is een bijzondere winkel waar u naast van alles uit de sixties en seventies, ook vintage en hedendaags design kunt vinden.</p>
            <br>
            <br>
            <br>
        </div>
    </div>
    <!-- /.container -->
<?php
  include 'footers.php';
?>