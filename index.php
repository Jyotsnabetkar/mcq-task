<?php
    include "config.php";

    if(isset($_POST['but_submit'])){
 
    $username = mysqli_real_escape_string($con,$_POST['username']);
      $password = mysqli_real_escape_string($con,$_POST['password']); 

        $sql = " select * from  users where username='$username' and password='$password' ";
        $query = mysqli_query($con,$sql);
        $row = mysqli_num_rows($query);
       if ($row == 1) {           
                $_SESSION['username'] = $username;
                header('location:guest.php');
            }else{
                  echo "<script>alert('Something Went Wrong. Please try again');</script>";
            }

    }
//https://www.thapatechnical.com/2019/02/create-admin-login-and-logout-page.html
if(isset($_POST['guest_submit'])){


     // Validate name
     $input_name = $_POST["guest_name"];
      $query=mysqli_query($con, "insert into guest_details (guest_name) values('$input_name')");
    if ($query) {
         echo "<script>alert('You have successfully inserted the data');</script>";
      echo "<script type='text/javascript'> document.location ='mcq.php'; </script>";
  }
  else
    {
      mysqli_error();
    }
//     if(empty($input_name)){
//         $name_err = "Please enter a name.";
//     } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
//         $name_err = "Please enter a valid name.";
//     } else{
//         $guest_name = $input_name;
//     }
//     // Check input errors before inserting in database
//     if(empty($name_err)){
//         // Prepare an insert statement
//        $fname=$_POST['fname'];
// }

 // if(mysqli_stmt_execute($stmt)){
 //                // Records created successfully. Redirect to landing page
 //                header("location: mcq.php");
 //                exit();
 //            } else{
 //                echo "Oops! Something went wrong. Please try again later.";
 //            }
}
?>
<html>
    <head>
        <title>MCQ website</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <form method="post" action="">
                <div id="div_login">
                    <h1>Login For admins</h1>
                    
                    <div>
                        <input type="text" class="textbox" id="name" name="username" placeholder="Username" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="password" name="password" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="but_submit" id="but_submit" /> 
                    </div>
                </div>
            </form>
              </div>
             <div class="container">
            <form method="post" action="">
             <div id="div_login">
                    <h1>Login For Guest</h1>

                      <div>
                        <input type="text" class="textbox" id="guest_name" name="guest_name" placeholder="Enter your name" />
                    </div>
                <input type="submit" value="log in" name="guest_submit" id="guest_submit" />
                 </div>
        </div>
    </body>
</html>
