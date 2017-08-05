<?
    $filename = basename($_SERVER['REQUEST_URI']);
?>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="<?=$base_url?>index.php">Pragya Wellness</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <? if ($filename == "chaitanya-guruji.php") { echo "active"; } ?>">
                        <a class="nav-link" href="<?=$base_url?>chaitanya-guruji.php">Guruji</a>
                    </li>
                    <li class="nav-item dropdown <? 

                    if ($filename == "read.php" || 
                        $filename == "watch.php" || 
                        $filename == "meet.php") 
                    { 
                        echo "active"; 
                    } 

                    ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Updates
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="<?=$base_url?>updates/read.php">Read</a>
                            <a class="dropdown-item" href="<?=$base_url?>updates/watch.php">Watch</a>
                            <a class="dropdown-item" href="<?=$base_url?>updates/meet.php">Meet</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown <? 

                    if ($filename == "omkar-sadhana.php" || 
                        $filename == "yog-nindra.php" || 
                        $filename == "samadhi.php") 
                    { 
                        echo "active"; 
                    } 

                    ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kriya
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="<?=$base_url?>kriya/omkar-sadhana.php">Omkar Sadhana</a>
                            <a class="dropdown-item" href="<?=$base_url?>kriya/yog-nindra.php">Yog Nidra</a>
                            <a class="dropdown-item" href="<?=$base_url?>kriya/samadhi.php">Samadhi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-item-last <? 

                    if ($filename == "about-center.php" || 
                        $filename == "contact.php" || 
                        $filename == "services.php" || 
                        $filename == "testimonials.php" || 
                        $filename == "faq.php") 
                    { 
                        echo "active"; 
                    } 

                    ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Center
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="<?=$base_url?>center/about-center.php">About</a>
                            <a class="dropdown-item" href="<?=$base_url?>center/contact.php">Contact</a>
                            <a class="dropdown-item" href="<?=$base_url?>center/services.php">Services</a>
                            <a class="dropdown-item" href="<?=$base_url?>center/testimonials.php">Testimonials</a>
                            <a class="dropdown-item" href="<?=$base_url?>center/faq.php">FAQ</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown <? if ($filename == "manoyog-sadhana.php") { echo "active"; } ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Outreach
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="<?=$base_url?>outreach/environment.php">Environment</a>
                            <a class="dropdown-item" href="<?=$base_url?>outreach/education.php">Education</a>
                            <a class="dropdown-item" href="<?=$base_url?>outreach/health.php">Health</a>
                            <a class="dropdown-item" href="<?=$base_url?>outreach/rural-development.php">Rural Development</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    