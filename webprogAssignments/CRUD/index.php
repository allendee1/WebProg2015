<?php
    session_start();
    $name = 'Elietzer Allendes';
    $message = "Welcome $name";
    
    $person = array('Name' => $name, 'Age' => 21, CallorieGoal => 2000);
    
    $food = $_SESSION['food'];
    if(!$food){
        $_SESSION['food'] = $food = array(
        /*array('Name' => 'Breakfast', 'Time' => strtotime("-1 hour"), Callories => 400),
        array('Name' => 'Lunch', 'Time' => strtotime("now"), Callories => 800),
        array('Name' => 'Snack', 'Time' => strtotime("now + 1 hour"), Callories => 400),
        array('Name' => 'Dinner', 'Time' => strtotime("6pm"), Callories => 400)*/
        
        array( 'Workout' => 'Push Ups', 'Date' => strtotime("-1 hour"), Reps => 3, 'Duration' => '5' ),
        array( 'Workout' => 'Bench Press', 'Date' => strtotime("now"), Reps => 5, 'Duration' => '6' ),
        array( 'Workout' => 'Dumb Bells', 'Date' => strtotime("now + 1 hour"), Reps => 4, 'Duration' => '6' ),
        array( 'Workout' => 'Running', 'Date' => strtotime("6pm"), Reps => 7, 'Duration' => '6' ),
        );
    }
        
    //$_SESSION['food'] = $food[] = $_REQUEST;

    $total = 0;
    foreach($food as $meal){
        $total += $meal['Reps'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food Intake</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Food Intake</h1>
        <h2><?=$message?></h2>
        <div class="panel panel-success">
            <div class="panel-heading">Your Data</div>
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt>Name</dt>
                    <dd><?=$person['Name']?></dd>
                    <dt>Age</dt>
                    <dd><?=$person['Age']?></dd>
                    <dt>CallorieGoal</dt>
                    <dd><?=$person['CallorieGoal']?></dd>
                    <dt>Today's Intake</dt>
                    <dd><?=$total?></dd>
                </dl>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-xs-10">
                <a href="edit.php" class="btn btn-success">
                    <i class="glyphicon glyphicon-plus"></i> New Record
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="glyphicon glyphicon-trash"></i> Delete All
                    <span class="badge"><?=count($food)?></span>
                </a>
                <table class="table table-condensed table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Workout</th>
                            <th>Date</th>
                            <th>Reps</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($food as $i => $meal): ?>
                <tr>
                  <th scope="row">
                      <div class="btn-group" role="group" aria-label="...">
                      <a href="view.php?id=<?=$i?>" title="View" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a href="edit.php?id=<?=$i?>" title="Edit" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="delete.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                  </div>
                  </th>
                  
                  <td><?=$meal['Workout']?></td>
                  <td><?=date("M d Y  h:i:sa", $meal['Date'])?></td>
                  <td><?=$meal['Reps']?></td>
                  <td><?=$meal['Duration']?></td>
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


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    </script>
</body>

</html>