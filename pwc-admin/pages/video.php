<?php
	

	$action = "new-video.php";

	if (isset($_GET["id"])) {
		$action = "update-video.php";
		$id = base64_decode($_GET["id"]);
		$result = mysqli_query($conn, "SELECT * FROM videos WHERE video_id = '".$id."'");
		$data = mysqli_fetch_assoc($result);
	}


?>    
	<h1><? 

        if (isset($_GET["id"])) { 
        	print("Update");
        } else { 
        	print("Add New");
        } 

    ?> Video</h1>
    <form method="post" action="<?=$base_url?>action/<?=$action?>">
        <p>
        	<input type="text" name="video_uri" placeholder="Youtube URL" value="<? if (isset($data)) { print($data["video_uri"]); } ?>">
        </p>
        <p>
	        <textarea name="video_description" placeholder="Video descricrtion"><? if (isset($data)) { print($data["video_description"]); } ?></textarea>
        </p>
        <p>
	        <input type="hidden" name="video_id" value="<?=$_GET["id"]?>">
        </p>
        <p>
        	<input type="submit" name="submit">
        </p>
    </form>
