
<?php

    //aws
   $dbhost = 'gst.cnfsfalsf8z0.ap-south-1.rds.amazonaws.com:3306';
   $dbuser = 'gst';
   $dbpass = 'gstpwc123';
   
   // //localhost
   // $dbhost = 'localhost';
   // $dbuser = 'root';
   // $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   mysql_select_db('gst');


   $sql = 'SELECT * FROM gst_blog_post';
   $retval = mysql_query( $sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

   mysql_close($conn);

?>

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
        <h1 class="mt-4 mb-3">Read <small>Articles</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Articles</li>
        </ol>

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

<?php

   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

?>
                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top img-fluid" src="http://placehold.it/750x300" alt="<?=$row['post_title']?>">
                    <div class="card-block">
                        <h2 class="card-title"><?=$row['post_title']?></h2>
                        <p class="card-text"><?=$row['post_desc']?></p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on <? 
                        
                        $timestamp = strtotime($row['post_create_date']);
                        print date("m-d-Y", $timestamp);

                        ?>
                    </div>
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
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card mb-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-block">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">HTML</a></li>
                                    <li><a href="#">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">JavaScript</a></li>
                                    <li><a href="#">CSS</a></li>
                                    <li><a href="#">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-block">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                    </div>
                </div>

            </div>

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
