<?
$result = mysqli_query($conn, "SELECT * FROM videos ORDER BY video_created_time DESC");
?>
        <h1>Videos list (<?=mysqli_num_rows($result)?>)</h1>
<?
while ($row = mysqli_fetch_assoc($result)) { 
?>
        <div class="div-row">
        <p>
                <a href="<?=$row["video_uri"]?>" target="_blank"><?=$row["video_uri"]?></a>
        </p>
        <p class="text-align-right">
                <i style="float: left;">Posted on <?=$row["video_created_time"]?></i>
                <a href="<?=$base_url?>action/delete-video.php?id=<?=base64_encode($row["video_id"])?>" class="fa fa-trash fa-2x"></a>
                <a href="<?=$base_url?>?view=video&id=<?=base64_encode($row["video_id"])?>" class="fa fa-pencil-square fa-2x"></a>
        </p>
        </div>
<?
}
?>    
