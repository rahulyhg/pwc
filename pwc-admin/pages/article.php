<?php
	

	$action = "new-article.php";

	if (isset($_GET["id"])) {
		$action = "update-article.php";
		$id = base64_decode($_GET["id"]);
		$result = mysqli_query($conn, "SELECT * FROM blog_post WHERE blog_id = '".$id."'");
		$data = mysqli_fetch_assoc($result);
	}

	
?>
        <h1><? 

	        if (isset($_GET["id"])) { 
	        	print("Update");
	        } else { 
	        	print("Add New");
	        } 

        ?> Article</h1>
        <form method="post" action="<?=$base_url?>action/<?=$action?>">
	        <p>
	        	<input type="text" name="blog_title" placeholder="Post title" value="<? if (isset($data)) { print($data["blog_title"]); } ?>">
	        </p>
	        <p>
		        <textarea name="blog_details" placeholder="Post descricrtion"><? if (isset($data)) { print($data["blog_details"]); } ?></textarea>
	        </p>
	        <p>
		        <input type="hidden" name="blog_id" value="<?=$_GET["id"]?>">
	        </p>
	        <p>
	        	<input type="submit" name="submit" value="submit">
	        </p>
        </form>
    
