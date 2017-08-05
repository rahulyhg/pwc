<?php
    include("includes/head.php");
?>
<body>
    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <?php
            if (isset($_SESSION["password"])) require("includes/sidebar.php");
        ?>        
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                <?php
                    if (isset($_SESSION["password"])) {
                ?>
                    <!-- Topbar -->
                    <div class="col-lg-12">
                <?php
                    require("includes/topbar.php");
                ?>  
                    </div>
                    <!-- Content -->
                    <div class="col-lg-12">
                <?php

                    if (isset($_GET["view"])) {

                        switch ($_GET["view"]) {
                            case "article":
                                require("pages/article.php");
                                break;
                            
                            case "articles-list":
                                require("pages/articles-list.php");
                                break;
                            
                            case "change-password":
                                require("pages/change-password.php");
                                break;
                            
                            case "course":
                                require("pages/course.php");
                                break;
                            
                            case "courses-list":
                                require("pages/courses-list.php");
                                break;
                            
                            case "video":
                                require("pages/video.php");
                                break;
                            
                            case "videos-list":
                                require("pages/videos-list.php");
                                break;
                            
                            default:
                                require("pages/welcome.php");
                                break;
                        }
    
                    } else {

                        require("pages/welcome.php");

                    }

                    ?>
                    </div>
                </div>
            
            <?php
                } else {
                    require("pages/login.php");
                }
            ?>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
<?php
    require("includes/foot.php")
?>        
</body>
</html>
