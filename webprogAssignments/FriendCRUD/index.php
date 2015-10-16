<?php
    session_start();
    $name = 'Elietzer Allendes';
    $message = "Welcome $name";
    
    $friend = $_SESSION['friend'];
    if(!$friend){
        $_SESSION['friend'] = $friend = array(
        array( 'FirstName' => 'Erik', 'LastName' => 'Bates', MileTime => 503, Age => 21 ),
        array( 'FirstName' => 'Moshe', 'LastName' => 'Plotkin', MileTime => 245, Age => 26 ),
        array( 'FirstName' => 'Aston', 'LastName' => 'Sander', MileTime => 270, Age => 21 ),
        array( 'FirstName' => 'Chris', 'LastName' => 'Blojemski', MileTime => 500, Age => 22 ),
        array( 'FirstName' => 'Elietzer', 'LastName' => 'Allendes', MileTime => 246, Age => 21 ),
        );
    }
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
      
      
      <!-- ...!!! Object 2 - Jumbotron !!! ... -->
  <div class="jumbotron">
                 <h1>Welcome! Inspire your Workout</h1>
                  <p>Usain Bolt, World Championship 2011</p>
                  
                            <div class="embed-responsive embed-responsive-4by3">
                            <iframe width="854" height="480" src="https://www.youtube.com/embed/6L-WhdPBaiE" frameborder="0" allowfullscreen></iframe>
                            </div>
                           
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  </div>
  <!-- ...!!! END OF: Object 2 - Jumbotron !!! ... -->
  
  
  
  <!-- ...!!! Object 3 - CRUD index page !!! ... -->
  <div class="row">
            <div class="col-md-8 col-xs-10">
                <a href="edit.php" class="btn btn-success">
                    <i class="glyphicon glyphicon-plus"></i> Add New Friend
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="glyphicon glyphicon-trash"></i> Delete All Friends
                    <span class="badge"><?=count($friend)?></span>
                </a>
                <table class="table table-condensed table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>MileTime</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($friend as $i => $friendColumn): ?>
                <tr>
                  <th scope="row">
                      <div class="btn-group" role="group" aria-label="...">
                      <a href="view.php?id=<?=$i?>" title="View" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a href="edit.php?id=<?=$i?>" title="Edit" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="delete.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                  </div>
                  </th>
                  
                  <td><?=$friendColumn['FirstName']?></td>
                  <td><?=$friendColumn['LastName']?></td>
                  <td><?=$friendColumn['MileTime']?></td>
                  <td><?=$friendColumn['Age']?></td>
                </tr>
                <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            <div class="col-md-4 col-xs-10">
                <div class="alert alert-success" role="alert">
                    You did well
                </div>
                <div class="alert alert-danger" role="alert">
                    Oh no! You messed up.
                </div>

            </div>
        </div>
  
  <!-- ...!!! END OF: Object 3 - CRUD index page !!! ... -->
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