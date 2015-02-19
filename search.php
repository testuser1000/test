<html>
<head>
	<title>PHP Task</title>
</head>
<body>



 	 <h3>Universal Search</h3>  <?php echo  $_POST["usearch"];?>
 	 
 	<br> 

<?php $search = $_POST["usearch"];
	
	$movie = array("movie1"=>"moviedetail1", "movie2"=>"moviedetail2", "movie3"=>"moviedetail3");

	$actor = array("actor1"=>"actordetail", "actor2"=>"actordetail", "actor3"=>"actordetail");

	$age = array("actor1"=>"35", "actor2"=>"37", "actor3"=>"43");

	$character = array("actor1"=>"character1", "actor2"=>"character2", "actor3"=>"character3");

	
function agedes(){


$numbers = array($age['actor1'],$age['actor2'],$age['actor3']);

rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x <  $arrlength; $x++) {
     echo $numbers[$x];
     echo "<br>";
}
}
	

$classmovie = movie();
$classmovie->movies();

class movie{
	
	public function movies(){
	
	if($movie[i]==="movie1")
		{
			echo $movie['movie1'];
		}
		
	
	}
}

class moviedetail{

	public function detail(){
		if($movie[i]==="movie1")
		{
			echo "This is the movie";
		}


	}
}

class movieactor{
	public function detail(){
		if($actor[i]===)
		{
			echo $actor['actor1'];
		}

	}
}
?>
	 



</body>
</html>
