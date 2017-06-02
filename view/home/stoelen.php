<?php
  include 'headers.php';
?>

<div class="container">

    <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0"><strong>Stoelen</strong></h2>
        <hr class="divider">
        <div class="row">
                <?php foreach ($stoelen as $stoel) { ?>
      <div class="col-lg-4">
         <input type="hidden" value="<?= $stoel['id']; ?>">
         <h3 style="text-align:left !important;" class="text-center text-lg text-uppercase my-0"><strong><?= $stoel['name']; ?></strong></h3>
         <img width="150" height="150" src="<?= $stoel['image']?>" alt="stoel">
      <p><?= $stoel['price']; ?></p>
      </div>
    <?php } ?>
            </div>
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





