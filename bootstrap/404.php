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
        <h1 class="mt-4 mb-3">404 <small>Page Not Found</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=$base_url?>index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">404</li>
        </ol>

        <div class="jumbotron">
            <p>The page you're looking for could not be found. Here are some helpful links to get you back on track:</p>
            <ul>
                <li>
                    <a href="<?=$base_url?>bootstrap/about.php">About</a>
                </li>
                <li>
                    Portfolio
                    <ul>
                        <li>
                            <a href="<?=$base_url?>bootstrap/portfolio-1-col.php">1 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>bootstrap/portfolio-2-col.php">2 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>bootstrap/portfolio-3-col.php">3 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>bootstrap/portfolio-4-col.php">4 Column Portfolio</a>
                        </li>
                    </ul>
                </li>
                <li>
                    Blog
                    <ul>
                        <li>
                            <a href="<?=$base_url?>bootstrap/blog-home-1.php">Blog Home 1</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>bootstrap/blog-home-2.php">Blog Home 2</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>bootstrap/blog-post.php">Blog Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    Other Pages
                    <ul>
                        <li>
                            <a href="<?=$base_url?>bootstrap/full-width.php">Full Width Page</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>bootstrap/sidebar.php">Sidebar Page</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>bootstrap/pricing.php">Pricing Table</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.jumbotron -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
    require("../includes/footer.php")
    ?>

</body>

</html>
