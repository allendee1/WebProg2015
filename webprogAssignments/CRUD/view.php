<?php
    /*$name = 'Elietzer Allendes';
    $person = array('Name' => $name, 'Age' => 21, CallorieGoal => 2000);
    $total = 0;*/
    
    
  /*  session_start();
  $food = $_SESSION['food'];
  if($_POST){
    $_SESSION['food'] = $food;
    header('Location: index.php');
  }
  $person = $food[$_REQUEST['id']];*/
  
  session_start();

  $food = $_SESSION['food'];
  if($_POST){
    if(isset($_GET['id'])){
      $food[$_GET['id']] = $_POST;
    }else{
      $food[] = $_POST;
    }
    
    $_SESSION['food'] = $food;
    header('Location: ./');
  }
    
  if(isset($_GET['id'])){
    $meal = $food[$_GET['id']];
  }else{
    $meal = array();
  }
  
    //$total = 0;
    //foreach($food as $meal){
    //    $total += $meal['Reps'];
    //}
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

</head>
<body>
  
  <!-- -------------------------------- !!!!!YOUR CODE GOES HERE BELOW!!!!! -------------------------------- -->
  <div class="panel panel-success">
            <div class="panel-heading">Your Data</div>
            <div claa="panel-body">
                <dl class="dl-horizontal">
                    <dt>Workout</dt>
                    <dd><?=$meal['Workout']?></dd>
                    <dt>date</dt>
                    <dd><?=date("M d Y  h:i:sa", $meal['Date'])?></dd>
                    <dt>Reps</dt>
                    <dd><?=$meal['Reps']?></dd>
                    <!--<dt>Total Reps</dt>-->
                    <!--<1<dd><//?=$total?></dd>-->
                    <dt>Duration</dt>
                    <dd><?=$meal['Duration']?></dd>
                </dl>
            </div>
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