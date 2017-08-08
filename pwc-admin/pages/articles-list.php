<?
$result = mysqli_query($conn, "SELECT * FROM blog_post ORDER BY blog_created_time DESC");
?>
        <h1>Articles list (<?=mysqli_num_rows($result)?>)</h1>
<?
while ($row = mysqli_fetch_assoc($result)) { 
?>
        <div class="div-row">
        <p>
                <?=$row["blog_title"]?>
        </p>
        <p class="text-align-right">
                <i style="float: left;">Posted on <?=$row["blog_created_time"]?></i>
                <a href="<?=$base_url?>action/delete-article.php?id=<?=base64_encode($row["blog_id"])?>" class="fa fa-trash fa-2x"></a>
                <a href="<?=$base_url?>?view=article&id=<?=base64_encode($row["blog_id"])?>" class="fa fa-pencil-square fa-2x"></a>
        </p>
        </div>
<?
}
?>    
