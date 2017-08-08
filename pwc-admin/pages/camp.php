<?php
	

	$action = "new-camp.php";

	if (isset($_GET["id"])) {
		$action = "update-camp.php";
		$id = base64_decode($_GET["id"]);
		$result = mysqli_query($conn, "SELECT * FROM camps WHERE camp_id = '".$id."'");
		$data = mysqli_fetch_assoc($result);
	}


?> 
        <h1><? 

	        if (isset($_GET["id"])) { 
	        	print("Update");
	        } else { 
	        	print("Add New");
	        } 

        ?> Camp</h1>
        <form method="post" action="<?=$base_url?>action/<?=$action?>">
	        <p>
	        	<input type="text" name="camp_title" placeholder="Camp title" value="<? if (isset($data)) { print($data["camp_title"]); } ?>">
	        </p>
	        <p>
	        	<input type="text" name="camp_scheduled_date" placeholder="Camp start date" value="<? if (isset($data)) { print(date("Y-m-d", strtotime($data["camp_scheduled_date"]))); } else { print(date("Y-m-d", strtotime("today"))); } ?>">
	        </p>
	        <p>
	        	<input type="text" name="camp_end_date" placeholder="Camp end date" value="<? if (isset($data)) { print(date("Y-m-d", strtotime($data["camp_end_date"]))); } else { print(date("Y-m-d", strtotime("tomorrow"))); } ?>">
	        </p>
	        <p>
	        	<input type="text" name="camp_city" placeholder="Camp city" value="<? if (isset($data)) { print($data["camp_city"]); } ?>">
	        </p>
	        <p>
		        <textarea name="camp_detail" placeholder="Camp details"><? if (isset($data)) { print($data["camp_detail"]); } ?></textarea>
	        </p>
	        <p>
	        	<input type="hidden" name="camp_id" value="<?=$_GET["id"]?>">
	        </p>
	        <p>
	        	<input type="submit" name="submit">
	        </p>
        </form>