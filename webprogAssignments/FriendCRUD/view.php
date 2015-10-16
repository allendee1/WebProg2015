<?php
  session_start();
    
    $friend = $_SESSION['friend'];
    if($_POST){
        if(isset($_GET['id'])){
            $friend[$_GET['id']] = $_POST;
        }
        else{
            $friend[] = $_POST;
        }
        $_SESSION['friend'] = $friend;
        header('Location: index.php');
    }
    
    if(isset($_GET['id'])){
        $friendColumn = $friend[$_GET['id']];
    }
    else{
        $friendColumn = array();
    }
    /* !!! All of your PHP code goes here !!! */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bootstrap Skeleton</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <style>
    .container {
      width: 75%;
      margin: auto;
      }
  </style>
</head>
<body>
  
  <!-- -------------------------------- !!!!!YOUR CODE GOES HERE BELOW!!!!! -------------------------------- -->
  <div class= "container">
      <!-- ...!!! Object 1 - Navbar !!! ... -->
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <a href = "#" class = "navbar-brand">Town of Fishkill</a>	

		<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
		</button>

		<div class = "collapse navbar-collapse navHeaderCollapse">

			<ul class = "nav navbar-nav navbar-right">

				<li class = "active"><a href = "#">Home</a></li>
				<li><a href = "#">Blog</a></li>
				<li class = "dropdown">

					<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Social Media <b class = "caret"></b></a>
					<ul class = "dropdown-menu">
						<li><a href = "#">Twitter</a></li>
						<li><a href = "#">Facebook</a></li>
						<li><a href = "#">Google+</a></li>
						<li><a href = "#">Instagram</a></li>
						<li><a href = "#">Elietzer's Awesome site</a></li>
					</ul>
					
				<li><a href = "#">About</a></li>
				<li><a href = "#">Contact</a></li>
			</ul>
		</div>
      </div>
    </nav>
    <!-- ...!!! END OF: Object 1 - Navbar !!! ... -->
      
      
    <!-- ...!!! Object 2 -   !!! ... -->
    <div class="panel panel-success">
            <div class="panel-heading">Your Data</div>
            <div claa="panel-body">
                <dl class="dl-horizontal">
                    <dt>First Name</dt>
                    <dd><?=$friendColumn['FirstName']?></dd>
                    <dt>Last Name</dt>
                    <dd><?=$friendColumn['LastName']?></dd>
                    <dt>Mile Time</dt>
                    <dd><?=$friendColumn['MileTime']?></dd>
                    <dt>Age</dt>
                    <dd><?=$friendColumn['Age']?></dd>
                </dl>
            </div>
        </div>
  
    
    
    
    <!-- ...!!! END OF: Object 2 -   !!! ... -->
  
  </div>
  
  
  
  
  
  
  
  
  
  <!-- -------------------------------- !!!!!YOUR CODE GOES HERE ABOVE!!!!! -------------------------------- -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  
    // -------------------------------- !!!!!YOUR JAVASCRIPT CODE GOES HERE BELOW!!!!! --------------------------------
    
    
    
    
    
    
    
    
    
    
    // -------------------------------- !!!!!YOUR JAVASCRIPT CODE GOES HERE ABOVE!!!!! --------------------------------
    
  </script>
</body>
</html>