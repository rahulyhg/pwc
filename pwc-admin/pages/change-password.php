        <h1>Change password</h1>
        <form method="post" action="<?=$base_url?>action/change-password.php">
	        <p>
	        	<input type="password" name="oldPassword" placeholder="Current password">
	        </p>
	        <p>
	        	<input type="password" name="newPassword" placeholder="New password">
	        </p>
	        <p>
	        	<input type="submit" name="submit">
	        </p>
        </form>