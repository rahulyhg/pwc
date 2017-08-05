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
        <h1 class="mt-4 mb-3">Sidebar Page <small>Subheading</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=$base_url?>index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">About</li>
        </ol>

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <?php
            require("../includes/sidebar.php")
            ?>
            <!-- Content Column -->
            <div class="col-lg-9 mb-4">
                <h2>Section Heading</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>
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
