<html>
<head>
	<title>PHP Task</title>
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>
<body>
	
	<div class="container">
	
	<header class="jumbotron">
		<ul class="nav nav-pills">
			<li role="presentation" class="active"><a href="index.php">Home</a></li>
			<li role="presentation"><a href="">About</a></li>
			<li role="presentation"><a href="">Contact</a></li>
		</ul>
	
	<h2>This is a Movie Website</h2>
	
	
	</header>


	<div class="content container"> 
		<h3>Universal Search</h3>  
 	 
 	<br> 

<?php 
  
    $sval = $_POST['search'];
    
    echo "Search = ".$sval; 
	
       
    
	
        
        
        
        //$movieclass = new movief();
        //movief::fmovie($sval);
        
       /* for ($a = 0; $a < count($movie); $a++) {
            
            if($sval==$movie[i]){
                        echo 'movie confirmed';
            echo $a;}
        }
        */
        echo "<br/>";
        //test();
        
       
        
        
        movief::fmovie($sval);
       
        
        //echo $movie[0];
	
        class movief {

            function fmovie($sval) {
                 
                $comp = $sval;
                 
                 $movie = array("movie1", "movie2", "movie3");
                 
                 $actor = array("actor1", "actor2", "actor3");
        
                 $actord = array("actor1"=>"actordetail", "actor2"=>"actordetail", "actor3"=>"actordetail");

                $age = array("actor1"=>"35", "actor2"=>"37", "actor3"=>"43");

                $character = array("actor1"=>"character1", "actor2"=>"character2", "actor3"=>"character3");
                 
                 if (in_array($comp, $movie)) {
                    
                    echo "Movie Found = ".$sval."<br/>";
                    if(in_array($comp, $actord)){
                        echo "Actor = ".$actord;
                    }
                    
                 }
                  
                    if(in_array($comp, $actord)){
                        echo "Actor Detail";
                    }
                else
                    echo "nothing found";
                   
            }

        }
        
        class moviefde {

            function defmovie($sval) {
                 
                $comp = $sval;
                 
                 $movie = array("movie1"=>"moviedetail1", "movie2"=>"moviedetail2", "movie3"=>"moviedetail3");
                
                 if (in_array($comp, $movie)) {
                    
                    echo "Moive Found";
                }
            }

        }
        
        /*
        for ($i = 1; $i < count(3); $i++) {
            if($movie[i]==$sval)
            {   
                echo "found = ".$movie[i];
            }
        }
      */
   
        
?>
        
	</div>
</div><!-- Container Ends-->
</body>
</html>
