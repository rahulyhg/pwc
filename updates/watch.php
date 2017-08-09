<?php

    require("../includes/head.php");

    $result = mysqli_query($conn, "SELECT * FROM videos ORDER BY video_created_time DESC");

?>
<body>
    <!-- Navigation -->
    <?php
    require("../includes/nav-top.php")
    ?>


    <!-- Page Content -->
    <div class="container">

        
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Watch <small>Updates</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=$base_url?>index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Watch</li>
        </ol>

        <div class="row">
            <div class="col-md-8">
                    <div class="row">
<?
    while ($row = mysqli_fetch_assoc($result)) { 
?>
            <div class="col-lg-6 portfolio-item">
                <div class="card h-100">
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/<?=getYouTubeId($row["video_uri"])?>" frameborder="0" allowfullscreen></iframe>
                    <div class="card-block">
                        <!--<h4 class="card-title">Video Title</h4>-->
                        <p class="card-text"><?=$row["video_description"]?></p>
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
