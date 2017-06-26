<?php
  include 'headers.php';
?>

  <div class="container">

    <div class="bg-faded p-4 my-4">
        <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0"><strong>Tafels</strong></h2>
        <hr class="divider">
        
        <div class="row">
            <?php foreach ($tafels as $tafel) { ?>
            
              <div class="col-lg-4">
                 <input type="hidden" value="<?= $tafel['id']; ?>">
                 <h3 style="text-align:left !important;" class="text-center text-lg text-uppercase my-0"><strong><?= $tafel['name']; ?></strong></h3>
                 <img style="cursor: pointer;" width="150" height="150" src="<?= $tafel['image']?>" alt="tafel" data-toggle="modal" data-target="#myModal-<?= $tafel['id']; ?>">
                 <p><?= $tafel['price']; ?></p>
              </div>
              
            <!-- Modal -->
            <div class="modal fade" id="myModal-<?= $tafel['id']; ?>" role="dialog">
                <div class="modal-dialog">
            <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><?= $tafel['name']; ?></h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                   <img class="img-fluid mb-4 mb-lg-0" src="<?= $tafel['image']; ?>" alt="stoel">
                                </div>
                                <div class="col-md-6">
                                    <p><?= $tafel['description'] ?></p>
                                    <p>€ <?= $tafel['price']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
            <?php } ?>
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