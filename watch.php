<?php
require("includes/head.php")
?>


<body>
    <!-- Navigation -->
    <?php
    require("includes/nav-top.php")
    ?>


    <!-- Page Content -->
    <div class="container">

        
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Watch <small>Updates</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Watch</li>
        </ol>

        <div class="row">
            <div class="col-md-8">
                    <div class="row">
<?
    for ($i=0; $i<3; $i++) { 
?>
            <div class="col-lg-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-block">
                        <h4 class="card-title">Video Title</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
<?
    }
?>
            </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>

            </div>
            <!-- Sidebar Widgets Column -->
        <?php
        require("includes/blog-sidebar.php")
        ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

   <!-- Footer -->
    <?php
    require("includes/footer.php")
    ?>

</body>

</html>
