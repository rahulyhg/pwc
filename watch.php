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

<?
    for ($i=0; $i<5; $i++) { 

?>
            <!-- Blog Post -->
            <div class="card mb-4">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="#">
                                <img class="img-fluid rounded" src="http://placehold.it/750x300" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="card-title">Video Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    Posted on January 1, 2017
                </div>
            </div>
<?
    }
?>

            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item"><a class="page-link" href="#">&larr; Older</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">Newer &rarr;</a></li>
            </ul>
            
        </div>

            <!-- Sidebar Widgets Column -->
            <?php
            require("includes/blog-sidebar.php")
            ?>
    </div>
    </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
    require("includes/footer.php")
    ?>

</body>

</html>
