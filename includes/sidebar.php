<?
    $filename = basename($_SERVER['REQUEST_URI']);
?>
<div class="col-lg-3 mb-4">
    <div class="list-group">
        <a href="manoyog-sadhana.php" class="list-group-item <? if ($filename == "manoyog-sadhana.php") { echo "active"; } ?>">Manoyog Sadhana</a>
        <a href="omkar-sadhana.php" class="list-group-item <? if ($filename == "omkar-sadhana.php") { echo "active"; } ?>">Omkar Sadhana</a>
        <a href="yoga-nindra.php" class="list-group-item <? if ($filename == "yoga-nindra.php") { echo "active"; } ?>">Yoga Nindra</a>
        <a href="samadhi.php" class="list-group-item <? if ($filename == "samadhi.php") { echo "active"; } ?>">Samadhi</a>
        <a href="naturopathy.php" class="list-group-item <? if ($filename == "naturopathy.php") { echo "active"; } ?>">Naturopathy</a>

    </div>
</div>