<?php
  include 'headers.php';
?>

    <div class="container">

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Contact <strong>Business Casual</strong></h2>
            <hr class="divider">
            <div class="row">
                <div class="col-lg-8">
                    <div class="embed-responsive embed-responsive-16by9 map-container mb-4 mb-lg-0">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="mb-0">Phone:</h5>
                    <div class="mb-4">123.456.7890</div>
                    <h5 class="mb-0">Email:</h5>
                    <div class="mb-4"><a href="mailto:name@example.com">name@example.com</a></div>
                    <h5 class="mb-0">Address:</h5>
                    <div class="mb-4">
                        3481 Melrose Place
                        <br> Beverly Hills, CA 90210
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Contact <strong>Form</strong></h2>
            <hr class="divider">
            <form>
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label class="text-heading">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-lg-4">
                        <label class="text-heading">Email Address</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group col-lg-4">
                        <label class="text-heading">Phone Number</label>
                        <input type="tel" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                        <label class="text-heading">Message</label>
                        <textarea class="form-control" rows="6"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
        <div class="container">
            <p class="m-0">Copyright &copy; Your Website 2017</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Zoom when clicked function for Google Map -->
    <script>
    $('.map-container')
        .click(function() {
            $(this).find('iframe').addClass('clicked')
        })
        .mouseleave(function() {
            $(this).find('iframe').removeClass('clicked')
        });
    </script>
<?php
  include 'footers.php';
?>