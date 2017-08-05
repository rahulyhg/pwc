<?php
require("../includes/head.php")
?>


<body>

    <!-- Navigation -->
    <?php
    require("../includes/nav-top.php")
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Courses <small>Pricing</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=$base_url?>index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Courses</li>
        </ol>

        <!-- Content Row -->
        <div class="row">

            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h3 class="card-header">4-Day Basic Course</h3>
                    <div class="card-block">
                        <div class="display-4">&#8377;1000</div>
                        <div class="font-italic">4 days | 2 hours in Morning or Evening</div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Pay Now</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card card-outline-primary h-100">
                    <h3 class="card-header bg-primary text-white">4-Day Advance Course</h3>
                    <div class="card-block">
                        <div class="display-4">&#8377;3000</div>
                        <div class="font-italic">4 days residential</div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Pay Now</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h3 class="card-header">10-Day Advance Course</h3>
                    <div class="card-block">
                        <div class="display-4">&#8377;6000.00</div>
                        <div class="font-italic">10 days residential</div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Pay Now</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h3 class="card-header">Living Together Program</h3>
                    <div class="card-block">
                        <div class="display-4">&#8377;3500.00</div>
                        <div class="font-italic">3 days residential</div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Pay Now</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

   <!-- Footer -->
    <?php
    require("../includes/footer.php")
    ?>

</body>

</html>
