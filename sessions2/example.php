<?php
	$name = $email = $gender = $comment = $website = "";
	if($_sever["request_method"] == "post"){
		$name = test_input($_post["name"]);
		$email = test_input($_post["email"]);
		$website = test_input($_post["website"]);
		$comment = test_input($_post["comment"]);
		$gender = test_input($_post["gender"]);
	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<h2>Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_sever["php_self"]);
?>">
<label>name:</label>  <input type="text" name="name"><br>
<label>e-mail:</label> <input type="email" name="email"><br>
<label>website:</label> <input type="text" name="website"><br>
<label>comment:</label>	<textarea name="comment" row="5" cols="40"></textarea><br>
<label>gender:</label>	<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male<br>	
</form>