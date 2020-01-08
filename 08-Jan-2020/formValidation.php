<?php

$nameerror="";
$emailerror="";
$gendererror="";
$weberror="";

function dataFunction($data) {

	return $data;	
}

if (isset($_POST['submit'])) {
	if ( empty($_POST['name']) ) {
		$nameerror="Name is required";
	}else {
		$name=dataFunction($_POST['name']);
		 if (!preg_match("/^[A-Za-z. ]*$/",$name)){
                        $nameerror="Only Character Are Allowed";
                }
	}

	if ( empty($_POST['email']) ) { 
                $emailerror="Email ID is required";
        }else { 
                $email=dataFunction($_POST['email']);
        	 if (!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$email)){
                        $emailerror="Please Enter Valid Email ID";
                }



	}

	if ( empty($_POST['gender']) ) { 
                $gendererror="Gender is required";
        }else { 
                $gender=dataFunction($_POST['gender']);             
        }

	if ( empty($_POST['web']) ) { 
                $weberror="Web Address is required";
        }else { 
                $web=dataFunction($_POST['web']);             
		 if (!preg_match("/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/",$web)){
                        $webeerror="Please Enter Valid Web Address";
                }


        }



	if( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['web']) && !empty($_POST['comment'])){

		if( preg_match("/^[A-Za-z. ]*$/",$name)==true && preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$email)==true && preg_match("/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/",$web)==true){

		echo "<h2>Your Form Details : </h2>";
		echo "Name : {$_POST['name']}<br><br>";
		echo "Email ID : {$_POST['email']}<br><br>";
		echo "Gender : {$_POST['gender']}<br><br>";
		echo "Web Address : {$_POST['web']}<br><br>";
		echo "Comments : {$_POST['comment']}<br><br>";
		echo "<hr><br>";
	}
	}

}

?>




<html>
<body>

<form action="formValidation.php" method="POST">

Name : <input type="text" name="name"> *<?php echo $nameerror; ?> <br><br>
Email ID : <input type="text" name="email"> *<?php echo $emailerror; ?> <br><br>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female *<?php echo $gendererror; ?> <br><br>
Website Address : <input type="text" name="web"> *<?php echo $weberror; ?><br><br>
Comments : (Optional)<br><br>
<textarea rows="10" cols="30" name="comment"></textarea><br><br>
<input type="submit" name="submit">


</form>
</body>
</html>
