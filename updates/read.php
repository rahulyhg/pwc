
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
    $result = mysqli_query($conn, "SELECT * FROM blog_post ORDER BY blog_created_time DESC");
    while ($row = mysqli_fetch_assoc($result)) { 
?>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <!--<img class="card-img-top img-fluid" src="http://placehold.it/750x300" alt="<?=$row['post_title']?>">-->
                    <div class="card-block">
                        <h2 class="card-title"><?=$row["blog_title"]?></h2>
                        <p class="card-text"><?

                        print(nl2br(trim(substr($row["blog_details"], 0, 300))));

                        if (strlen($row["blog_details"]) > 300) {
                            print("..");
                        }

                        ?></p>
                        <a href="<?=$base_url?>updates/article.php?id=<?=base64_encode($row["blog_id"])?>" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">Posted on <?=date("F j, Y, g:i a", strtotime($row["blog_created_time"]))?></div>
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
