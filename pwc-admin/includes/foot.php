<?
    if (isset($_SESSION["message"])) {
?>
<div class="alert-message" id="alertMessage">
    <p>
    <?
        print($_SESSION["message"]);
        unset($_SESSION["message"]);
    ?>  
    &nbsp;
    <i class="fa fa-window-close" aria-hidden="true"></i>
    </p>
</div>                            
<?
    }
?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $("#alertMessage i").click(function(e) {
        $("#alertMessage").remove()
    });
    </script>
