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
 <option value="<? echo $key; ?>">
        	<?php 
		//$json_correct = $mcq->correct_answer[1];
		//$json_incorrect = $mcq->incorrect_answers[];
		//echo $mcq['results']['category'];							
        	foreach ($user_data as $correct_answers) {
	echo $correct_answers->correct_answer."<br/>".PHP_EOL;
		}
																			// foreach ($mcq['results'] as $correct_answer) {
																			// 	echo $correct_answer['correct_answer']."<br>";
																			// 	# code...
																			// }
		//print_r ($mcq);
		// decode json to array
// $array[] = json_decode($json_correct, true);
// $array[] = json_decode($json_incorrect, true);

// encode array to json
//$result = json_encode($array, JSON_PRETTY_PRINT);
	//echo $result;		
		?>
        		
        	</option>
		
</select>
	<?php } ?>

</html>
