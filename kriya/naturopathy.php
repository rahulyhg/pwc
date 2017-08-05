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
        <h1 class="mt-4 mb-3">Naturopathy <small>treatments with the use herbs and nutrition</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=$base_url?>index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Naturopathy</li>
        </ol>

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <?php
            require("../includes/sidebar.php")
            ?>
            <!-- Content Column -->
            <div class="col-lg-9 mb-4">
                <h2>Introduction</h2>
                <p><i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true"></i>
                    Naturopathic medicine is not a type of treatment, it is a philosophy.  It isn't herbs or nutrition, it is a therapeutic order where herbs and nutrition and the like are used first, but pharmaceutical drugs and surgery are okey when necessary.  Antibiotics save lives, but they are way overused.  It's about knowing when they are necessary and when they aren't.  Also, most importantly, it is about treating the whole person with what they need right now and where they are in their individual healing process.  In the US, we have a national association for Naturopathic Physicians.
                </p>
                <h2>Here is our philosophy:</h2>
                <p>
                    <b>The Healing Power of Nature:</b> Naturopathic medicine recognizes an inherent self-healing process in people that is ordered and intelligent. Naturopathic physicians act to identify and remove obstacles to healing and recovery, and to facilitate and augment this inherent self-healing process.
                </p>
                <p>
                    <b>Identify and Treat the Causes:</b> The naturopathic physician seeks to identify and remove the underlying causes of illness rather than to merely eliminate or suppress symptoms.
                </p>
                <p>
                    <b>First Do No Harm:</b> Naturopathic physicians follow three guidelines to avoid harming the patient: Utilize methods and medicinal substances which minimize the risk of harmful side effects, using the least force necessary to diagnose and treat; Avoid when possible the harmful suppression of symptoms; andAcknowledge, respect, and work with individuals’ self-healing process.
                </p>
                <p>
                    <b>Doctor as Teacher:</b> Naturopathic physicians educate their patients and encourage self-responsibility for health. They also recognize and employ the therapeutic potential of the doctor-patient relationship.
                    Treat the Whole Person: Naturopathic physicians treat each patient by taking into account individual physical, mental, emotional, genetic, environmental, social, and other factors. Since total health also includes spiritual health, naturopathic physicians encourage individuals to pursue their personal spiritual development.
                </p>
                <p>
                    <b>Prevention:</b> Naturopathic physicians emphasize the prevention of disease by assessing risk factors, heredity and susceptibility to disease, and by making appropriate interventions in partnership with their patients to prevent illness.
                </p>
                <p><b>Copied article, need to update later</b></p>
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
