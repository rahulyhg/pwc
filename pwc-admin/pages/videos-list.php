<?
$result = mysqli_query($conn, "SELECT * FROM videos ORDER BY video_created_time DESC");
?>
        <h1>Videos list (<?=mysqli_num_rows($result)?>)</h1>
<?
while ($row = mysqli_fetch_assoc($result)) { 
?>
        <div class="row">

        <div class="col-md-4">
        <a href="<?=$row["video_uri"]?>" target="_blank"><img width="100%" src="https://img.youtube.com/vi/<?=getYouTubeId($row["video_uri"])?>/mqdefault.jpg"></a>
        </p>
        </div>
        <div class="col-md-8">
        <p>
                <?=$row["video_description"]?>
        </p>
        <p class="text-align-right">
                <i style="float: left;">Posted on <?=$row["video_created_time"]?></i>
                <a href="<?=$base_url?>action/delete-video.php?id=<?=base64_encode($row["video_id"])?>" class="fa fa-trash fa-2x"></a>
                <a href="<?=$base_url?>?view=video&id=<?=base64_encode($row["video_id"])?>" class="fa fa-pencil-square fa-2x"></a>
        </p>
        </div>
        </div>
<?
}
?>    
