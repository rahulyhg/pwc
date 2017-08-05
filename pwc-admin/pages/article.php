<?php

 $action = "new-article.php";

if (isset($_GET["article"])) {
	$action = "update-article.php";
	$article_id = base64_decode($_GET["article"]);
	$result = mysqli_query($conn, "SELECT * FROM blog_post WHERE blog_id = '".$article_id."'");
	$data = mysqli_fetch_assoc($result);
}

?>

        <h1>Article</h1>
        <form method="post" action="<?=$base_url?>action/<?=$action?>">
	        <p>
	        	<input type="text" name="blog_title" placeholder="Post title" value="<? if (isset($data)) { print($data["blog_title"]); } ?>">
	        </p>
	        <p>
		        <textarea name="blog_details" placeholder="Post descricrtion"><? if (isset($data)) { print($data["blog_details"]); } ?></textarea>
	        </p>
	        <p>
		        <input type="hidden" name="blog_id" value="<?=$_GET["article"]?>">
	        </p>
	        <p>
	        	<input type="submit" name="submit" value="submit">
	        </p>
        </form>
    
