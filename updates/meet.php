<?php

    require("../includes/head.php");
    $result = mysqli_query($conn, "SELECT * FROM camps ORDER BY camp_scheduled_date DESC, camp_created_time DESC");

?>
<body>

    <!-- Navigation -->
    <?php
    require("../includes/nav-top.php")
    ?>

    <!-- Page Content -->
    <div class="container">


        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Meet <small>Upcoming courses</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=$base_url?>index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Meet</li>
        </ol>

        <div class="row">
        <div class="col-md-8">
<?
    while ($row = mysqli_fetch_assoc($result)) { 
?>
            <!-- Blog Post -->
            <div class="card mb-4">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-6 text-align-right">
                            <p class="card-text"><?=$row["camp_detail"]?></p>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?=$base_url?>center/courses.php" class="btn btn-primary" style="float: right" >Join now</a>
                            <h2 class="card-title"><?=$row["camp_city"]?></h2>
                            <p><?=$row["camp_title"]?> from <b><?=date("F j, Y", strtotime($row["camp_scheduled_date"]))?></b> to <b><?=date("F j, Y", strtotime($row["camp_end_date"]))?></b></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted text-align-right">
                    Posted on <?=date("F j, Y, g:i a", strtotime($row["camp_created_time"]))?>
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
            require("../includes/blog-sidebar.php")
            ?>
    </div>
    </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
    require("../includes/footer.php")
    ?>

</body>

</html>
