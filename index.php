<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<title>Document</title>
</head>

<body>
	<!-- <H2>A division table</H2>
	<TABLE BORDER=1> -->
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card my-3">
					<div class="card-header bg-dark">
						<h5 class="text-center text-white">Check which is best deal</h5>
					</div>
					<div class="card-body">
						<form action="" method="post">
							<label for="" class="form-label">Qunatity1</label>
							<input type="text" name="q1" class="form-control" required>
							<label for="" class="form-label">Price1</label>
							<input type="text" name="p1" class="form-control" required>
							<label for="" class="form-label">Qunatity2</label>
							<input type="text" name="q2" class="form-control" required>
							<label for="" class="form-label">Price2</label>
							<input type="text" name="p2" class="form-control" required> <br>
							<button class="btn bg-primary" name="button">Calculate</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
if(isset($_POST['button'])){
	$quantity1 = $_POST['q1'];
	$price1 = $_POST['p1'];
	$quantity2 = $_POST['q2'];
	$price2 = $_POST['p2'];
	$firstDeal = $quantity1 / $price1;
	$secondDeal = $quantity2 / $price2;
	if($firstDeal > $secondDeal){
		echo "<script>alert('First Deal is the Best');</script>";
	}else{
		echo "<script>alert('Second Deal is the Best');</script>";
	}
}




	// $start_num = 1;
	// $end_num = 10;
	// print("<TR>");
	// print("<TH> </TH>");
	// for ($count_1 = $start_num; $count_1 <= $end_num; $count_1++)
	// 	print("<TH>$count_1</TH>");
	// print("</TR>");

	// for ($count_1 = $start_num; $count_1 <= $end_num; $count_1++) {
	// 	print("<TR><TH>$count_1</TH>");
	// 	for ($count_2 = $start_num; $count_2 <= $end_num; $count_2++) {
	// 		$result = $count_1 / $count_2;
	// 		printf(
	// 			"<TD>%.3f</TD>",
	// 			$result
	// 		);  // see Chapter 108
	// 	}
	// 	print("</TR>\n");
	// }
	// for loop statement
	// $animal_list = array("Monkey","lion","Jurrasic","Cat","Dog","Mouse");
	// foreach($animal_list as $array_values){
	// 	echo $array_values."<br>";
	// }


	// array sample

	//  $persons = array("Romeo Rodemio" => "Male", "Justine Ambrad" => "Male", "April Grace" => "Female","Cristine Rubio" => "Female");
	// foreach($persons as $name => $value){
	// 	echo "$name is $value"."<br>";
	// }
	// asort($persons);
	// print_r($persons);
	// $movie = array(
	// 	"Action"=> array("Expendables","Resident Evil","Pear Harbor"),
	// 	"Comedies" => array("Tom and Jerry","balo","ako"),
	// );
	// print_r($movie["Action"]);


	// case statement

	// $today = "Monday";
	// switch($today){
	// 	case "Sunday":
	// 		echo "Happy Sunday";
	// 		break;
	// 	case "Monday":
	// 		echo "Yeahhh,,,whoooohohohho";
	// 		break;
	// 	case "Tuesday":
	// 		echo "Its Tuesday";
	// 		break;
	// 	case "Wednesday":
	// 		echo "Its Wednesday";
	// 		break;
	// 	case "Thursday":
	// 		echo "You Good";
	// 		break;
	// 	default:
	// }

	// if statement
	// 	$num = 20;
	// 	$num1 = 20.1;
	// if($num > (int)$num1){
	// 	echo "num";
	// }else{
	// 	echo "num1";
	// }



	// String 
	// $name = "romeo Rodemio Briones";
	// $password1 = sha1($name);
	// $password = "ROMEO";
	// $password2 = sha1($name);
	// echo lcfirst($name);
	// echo ucfirst($name);
	// echo str_word_count($name);
	// echo $password1."<br>";
	// echo $password2;
	// echo sha1($name);
	// $name_replace = str_replace("Romeo", "Borotoy",$name);
	// echo $name_replace;


	// echo substr($name,0,9)
	// $name_array = explode(",",$name);
	// echo $name_array[0];
	// echo strtoupper($name);
	// echo strlen($name);



	// 		$name = "Romeo Rodemio";
	// $lorem = <<<EOT
	// $name
	// Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut augue elit, feugiat quis nulla vitae, mollis viverra mauris. Vivamus ut enim libero. Donec facilisis molestie quam, et condimentum turpis porta vel. Etiam eget placerat tellus. Quisque imperdiet pellentesque mi, eget aliquam ligula posuere at. Aliquam dapibus nisl eget blandit lacinia. Phasellus euismod risus vitae quam iaculis lacinia. Vivamus dui nibh, laoreet sagittis volutpat cursus, eleifend et nibh. Aliquam eget malesuada mi. Vivamus finibus, odio consectetur facilisis eleifend, purus lacus tempor libero, et ultricies elit risus ut mauris.

	// Donec felis dolor, volutpat sed interdum non, commodo nec est. Aenean at lobortis tellus. Maecenas tempus augue in nulla vestibulum luctus. In et elementum risus. Ut vel magna nibh. Donec efficitur sit amet lorem vitae malesuada. Duis quis est iaculis, faucibus arcu facilisis, tincidunt nisl. Morbi non ornare nulla.

	// Nullam imperdiet vestibulum eros, ac laoreet leo ultricies ultrices. Donec eu pellentesque odio. Fusce tristique suscipit ex, in tincidunt eros imperdiet tincidunt. Donec ultrices tempus ultrices. Sed in turpis egestas, accumsan dui id, faucibus quam. Donec in dignissim sem. Curabitur aliquet suscipit nisl eget pharetra. Suspendisse bibendum posuere varius. Donec porttitor sodales justo id iaculis.

	// Pellentesque rhoncus volutpat diam, aliquam euismod lacus sodales sit amet. In consectetur ex sit amet felis maximus, bibendum vestibulum est ultrices. Nunc aliquam vehicula quam, at accumsan ex fringilla eget. In posuere eros sit amet convallis ullamcorper. Duis interdum mauris dui, laoreet consequat erat dapibus et. Nullam interdum, justo vel dictum rhoncus, ante libero tempor libero, vitae elementum dolor felis vel eros. Ut auctor rutrum nibh. In volutpat venenatis ante eget volutpat. Etiam eleifend sapien ac arcu accumsan, sed blandit turpis luctus. Sed a fermentum eros, ut condimentum arcu. Donec eget pharetra odio, in fermentum eros. Curabitur porttitor est sed turpis rutrum ultrices. Nullam placerat purus ut tortor luctus, in ultrices odio finibus. Suspendisse sit amet sapien efficitur, suscipit enim sed, eleifend sem. Phasellus vitae lacus ullamcorper, molestie tortor nec, volutpat urna.

	// Sed nunc neque, fermentum et interdum sed, rutrum a orci. Pellentesque dui libero, semper quis venenatis ut, fermentum ut elit. Maecenas dignissim, risus in pulvinar ultrices, orci purus venenatis eros, at imperdiet ipsum justo sed quam. Duis risus sem, tristique ut sollicitudin vitae, lacinia sit amet ligula. Nam nisi ligula, dignissim quis felis ut, pulvinar pharetra est. Morbi pellentesque pharetra semper. Sed ut ultricies lacus, sit amet scelerisque libero. Phasellus feugiat nec mi in ornare. Integer vitae tellus scelerisque tortor bibendum vestibulum non eget urna. Aliquam euismod risus ut nulla ullamcorper, nec egestas ante sollicitudin. Morbi tincidunt ac erat sed fringilla. Quisque ullamcorper libero ullamcorper rhoncus feugiat. Cras a aliquam ipsum. Ut non risus odio. Morbi ante nisi, venenatis at lacinia vel, interdum vel mauris. Etiam nec pretium odio.
	// EOT;
	// echo str_word_count($lorem);



	// $password = "p@s\$word";
	// echo $password;





	// $first = 1;
	// $second = "1";
	// echo $first == $second;
	// $name = "Romeo";
	// echo 'I\'ll be back,'.$name;
	// // echo "I'll be back,$name";






	// define("password","RRcamote");
	// echo password;
	// $first = 1;
	// echo var_dump($first);
	// $second = 1.1;
	// $total = $first + (int) $second;
	// echo var_dump($second);
	// echo $total;
	// echo var_dump($total);
	?>
</body>

</html>


<!-- <!DOCTYPE html>
<html>
<head>
	<title>Eco-Shield</title>
	<link rel="stylesheet" type="text/css" href="../new/style (1).css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<header>
	<div>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="#">"Eco"</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
					  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="basicExampleNav">
					  <ul class="navbar-nav mr-auto">
						<li class="nav-item active">
						  <a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#">Services</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item dropdown">
						  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">About</a>
						  <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Team</a>
							<a class="dropdown-item" href="#">Location</a>
							<a class="dropdown-item" href="#">Accredition</a>
						  </div>
						</li>
				  
					  </ul>
				  
					  <form class="form-inline">
						<div class="md-form my-0">
						  <input class="form-control mr-sm-2" type="email" placeholder="Email" aria-label="Email">
						  <input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password">
						  <button type="button" class="btn btn-success">Sign In</button>
						</div>
					  </form>
					</div>
					</nav>
					<br>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLoginForm">
					Sign Up to learn More
				  </button>
				  <div id="ModalLoginForm" class="modal fade">
					  <div class="modal-dialog" role="document">
						  <div class="modal-content">
							  <div class="modal-header">
								  <h1 class="modal-title">Sign Up</h1>
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  </div>
							  <div class="modal-body">
								  <form role="form" method="POST" action="">
									  <input type="hidden" name="_token" value="">
									  <div class="form-group">
										  <label class="control-label">Name</label>
										  <div>
											  <input type="text" class="form-control input-lg" name="name" value="">
										  </div>
									  </div>
									  <div class="form-group">
										  <label class="control-label">Email</label>
										  <div>
											  <input type="email" class="form-control input-lg" name="email" value="">
										  </div>
									  </div>
									  <div class="form-group">
										  <label class="control-label">Password</label>
										  <div>
											  <input type="password" class="form-control input-lg" name="password">
										  </div>
									  </div>
									  <div class="form-group">
										  <label class="control-label">Confirm Password</label>
										  <div>
											  <input type="password" class="form-control input-lg" name="password_confirmation">
										  </div>
									  </div>
									  <div class="form-group text-right">
										  <div>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											  <button type="submit" class="btn btn-success">
												  Save Changes
											  </button>
										  </div>
									  </div>
								  </form>
							  </div>
						  </div>
					  </div>
				  </div>
	</div>
		<div class="logo">
			<img src="../new/logo.png" class="img-fluid" alt="Responsive image">
		</div>
		<div class="title">
				<a href="index.html" class="badge badge-danger">Prevention</a>				
    </div>
</header>
<div class="jumbotron jumbotron-fluid">
	<hr>
	<div class="container">
		​<div class="text-center">
  <img src="../new/hero-img.png" class="img-fluid" alt="img">
        </div>
        <hr>
        <div class="touch"><button type="button" class="btn btn-outline-success">Success</button></div>
	</div>
</div>
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
	for ($i = 0; $i <= 100; $i++) {
		if ($i % 3 == 0 && $i % 5 == 0) {
			echo 'Fizzbuzz';
			echo '<br>';
		} elseif ($i % 3 == 0) {
			echo 'fizz';
			echo '<br>';
		} elseif ($i % 5 == 0) {
			echo 'buzz';
			echo '<br>';
		} else {
			echo $i;
			echo '<br>';
		}
	}
	?>
</body>
</html> -->