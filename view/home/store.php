<?php
  include 'headers.php';
?>

<div class="container">

    <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0"><strong>Store</strong></h2>
        <hr class="divider">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="text-center text-lg text-uppercase my-0"><strong><a href="<?= URL ?>home/stoelen">Stoelen</a></strong></h3>
                <img width="304" height="130" src="<?= URL ?>img/stoel-show.jpg" alt="">
            </div>
            <div class="col-lg-4">
               <h3 class="text-center text-lg text-uppercase my-0"><strong><a href="<?= URL ?>home/tafels">Tafels</a></strong></h3>
                <img width="304" height="130" src="<?= URL ?>img/tafel-show.jpg" alt="">
            </div>
            <div class="col-lg-4">
               <h3 class="text-center text-lg text-uppercase my-0"><strong><a href="<?= URL ?>home/verlichtingen">Verlichting</a></strong></h3>
                <img width="304" height="130" src="<?= URL ?>img/lamp-show.jpg" alt="">
            </div>
            <div class="col-lg-4">
               <h3 class="text-center text-lg text-uppercase my-0"><strong><a href="<?= URL ?>home/diverse">Diverse</a></strong></h3>
                <img width="304" height="130" src="<?= URL ?>img/diverse-show.jpg" alt="">
            </div>
        </div>
    </div>
</div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<?php
  include 'footers.php';
?>





