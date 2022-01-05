<html>
<?php

// Read JSON file
$json_data = file_get_contents("https://opentdb.com/api.php?amount=10");
// Decode JSON data into PHP array
 $response_data = json_decode($json_data);
 // All user data exists in 'data' object
 $user_data = $response_data->results;
//print_r($user_data);
//Traverse array and display user data
foreach ($user_data as $mcq) {
	echo "Question: ".$mcq->question;
	echo "<br />";
	// echo "Options: ".$mcq->incorrect_answers;
	// echo "<br /> <br />";
		?>

		<select>

		<?  
		$option_answer = $mcq->incorrect_answers;
		print_r($option_answer);
		foreach($option_answer as $key => $value){?>

        <option value="<? echo $key; ?>">
        	<? echo $value; ?>
        		
        	</option>

    <?  }   ?>
</select>
	<?php } ?>

</html>
