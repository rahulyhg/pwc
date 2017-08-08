        <h1><? 

	        if (isset($_GET["id"])) { 
	        	print("Update");
	        } else { 
	        	print("Add New");
	        } 

        ?> Course</h1>
        <form method="post">
	        <p>
	        	<input type="text" name="title" placeholder="Course title">
	        </p>
	        <p>
	        	<input type="text" name="title" placeholder="Course date">
	        </p>
	        <p>
	        	<input type="text" name="title" placeholder="Course city">
	        </p>
	        <p>
		        <textarea name="descricrtion" placeholder="Course details"></textarea>
	        </p>
	        <p>
	        	<input type="submit" name="submit">
	        </p>
        </form>