<?
$result = mysqli_query($conn, "SELECT * FROM camps ORDER BY camp_scheduled_date");
?>
        <h1>Camps list (<?=mysqli_num_rows($result)?>)</h1>
<?
while ($row = mysqli_fetch_assoc($result)) { 
?>
        <div class="div-row">
        <p>
                <?=$row["camp_title"]?>
        </p>
        <p>
                <?=$row["camp_city"]?> - <?=date("jS F, Y", strtotime($row["camp_scheduled_date"]))?>
        </p>
        <p class="text-align-right">
                <i style="float: left;">Posted on <?=$row["camp_created_time"]?></i>
                <a href="<?=$base_url?>action/delete-camp.php?id=<?=base64_encode($row["camp_id"])?>" class="fa fa-trash fa-2x"></a>
                <a href="<?=$base_url?>?view=camp&id=<?=base64_encode($row["camp_id"])?>" class="fa fa-pencil-square fa-2x"></a>
        </p>
        </div>
<?
}
?>    
