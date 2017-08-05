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
            <h1 class="display-1">404</h1>
            <p>The page you're looking for could not be found. Here are some helpful links to get you back on track:</p>
            <ul>
                <li>
                    <a href="<?=$base_url?>index.php">Home</a>
                </li>
                <li>
                    <a href="<?=$base_url?>about.php">About</a>
                </li>
                <li>
                    <a href="<?=$base_url?>services.php">Services</a>
                </li>
                <li>
                    <a href="<?=$base_url?>contact.php">Contact</a>
                </li>
                <li>
                    Portfolio
                    <ul>
                        <li>
                            <a href="<?=$base_url?>portfolio-1-col.php">1 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>portfolio-2-col.php">2 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>portfolio-3-col.php">3 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>portfolio-4-col.php">4 Column Portfolio</a>
                        </li>
                    </ul>
                </li>
                <li>
                    Blog
                    <ul>
                        <li>
                            <a href="<?=$base_url?>blog-home-1.php">Blog Home 1</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>blog-home-2.php">Blog Home 2</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>blog-post.php">Blog Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    Other Pages
                    <ul>
                        <li>
                            <a href="<?=$base_url?>full-width-page.php">Full Width Page</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>sidebar.php">Sidebar Page</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>faq.php">FAQ</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>404.php">404 Page</a>
                        </li>
                        <li>
                            <a href="<?=$base_url?>pricing-table.php">Pricing Table</a>
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
