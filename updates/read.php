
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
        <h1 class="mt-4 mb-3">Read <small>Articles</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=$base_url?>index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Articles</li>
        </ol>

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

<?
    for ($i=0; $i<6; $i++) { 
?>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <!--<img class="card-img-top img-fluid" src="http://placehold.it/750x300" alt="<?=$row['post_title']?>">-->
                    <div class="card-block">
                        <h2 class="card-title">Sample articles title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. </p>
                        <a href="<?=$base_url?>blog-post.php" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">Posted on January 1, 2017</div>
                </div>

<?php

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
            require("../includes/blog-sidebar.php")
            ?>

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
