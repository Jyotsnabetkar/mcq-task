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
	echo "Question:".$mcq->question."<br/>";
	echo "<br />";
	
		?>

		<select>
			
			<option>
        	<?php 
        		$bucket = array();
  
        		$response_data = json_decode($json_data);
				$user_data = $response_data->results;
				$jsonobjnew = $mcq->correct_answer;
				$jsonobj = $mcq->incorrect_answers;
				array_push($jsonobj, $jsonobjnew);
				print_r($jsonobj);
		
        	?>
        	</option>

		</select>
	<?php } ?>

</html>
