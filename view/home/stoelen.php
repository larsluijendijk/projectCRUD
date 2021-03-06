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
                 <img style="cursor: pointer;" width="150" height="150" src="<?= $stoel['image']?>" alt="stoel" data-toggle="modal" data-target="#myModal-<?= $stoel['id']; ?>">
                 <p><?= $stoel['price']; ?></p>
              </div>
              
            <!-- Modal -->
            <div class="modal fade" id="myModal-<?= $stoel['id']; ?>" role="dialog">
                <div class="modal-dialog">
            <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><?= $stoel['name']; ?></h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                   <img class="img-fluid mb-4 mb-lg-0" src="<?= $stoel['image']; ?>" alt="stoel">
                                </div>
                                <div class="col-md-6">
                                    <p><?= $stoel['description'] ?></p>
                                    <p>€ <?= $stoel['price']; ?></p>
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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css%22%3E"></link>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js%22%3E"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js%22%3E"></script>

<?php
  include 'footers.php';
?>