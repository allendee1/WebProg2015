<?php 
    //var_dump($_GET);
    //var_dump($_POST);
    //var_dump($_REQUEST);
    
    session_start();
    
    $food = $_SESSION['food'];
    if($_POST){
        if(isset($_GET['id'])){
            $food[$_GET['id']] = $_POST;
        }
        else{
            $food[] = $_POST;
        }
        $_SESSION['food'] = $food;
        header('Location: index.php');
    }
    
    if(isset($_GET['id'])){
        $meal = $food[$_GET['id']];
    }
    else{
        $meal = array();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food Log: Edit</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>

<body>
    <div class="container">
        <div class='alert alert-warning'>
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <b>Special Offer</b> Free ice cream today.
        </div>
        <div class="page-header">
            <h1>Food Intake <small>Record your daily meals</small></h1>
        </div>
        <form class="form-horizontal" method="POST" action="">
            <div id="messageAlert" class='alert' style="display: none">
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3></h3>
            </div>
            
            <div class="form-group">
                <label for="txtWorkout" class="col-sm-2 control-label">Workout</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtWorkout" name="Workout" placeholder="Type of Workout" value="<?=$meal['Workout']?>">
                </div>
            </div>
            
            <div class="form-group">
                <label for="txtDate" class="col-sm-2 control-label">Workout Date</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" id="txtDate" name="Date" placeholder="mm/dd/yyyy" value="<?=$meal['Date']?>">
                </div>
            </div>
            
            <div class="form-group">
                <label for="txtReps" class="col-sm-2 control-label">Num of Reps</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" id="txtReps" name="Reps" placeholder="Enter number of Reps" value="<?=$meal['Reps']?>"> <!--name="must be equal to the column name"-->
                </div>
            </div>
            
            <div class="form-group">
                <label for="txtName" class="col-sm-2 control-label">Duration</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtDuration" name="Duration" placeholder="Amount of time spent on Workout in minutes" value="<?=$meal['Duration']?>">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button id="submit" type="submit" class="btn btn-success">Record</button>
                </div>
            </div>
        </form>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 0%">
                <span>0</span>% Complete
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript">
        (function($) {
            $(function() {

                $("#submit").on('click', function(e) {
                    var self = this;
                    //$(this).css({display: "none"});
                    $(self).hide().after("Working...");
                    var per = 0;
                    var interval = setInterval(function() {
                        per += 25;
                        $(".progress-bar").css("width", per + "%");
                        $(".progress-bar span").text(per);
                        if (per >= 100) {
                            clearInterval(interval);


                            $("input.date").datepicker({
                                dateFormat: "M d Y  h:i:sa"
        }); 
/*
                            if (!$("#txtReps").val()) {
                                $("input").css({
                                    backgroundColor: "#FFAAAA"
                                });
                                $(self).prop("disabled", false).html("Try Again");
                                $("#messageAlert").removeClass("alert-success").addClass("alert-danger").show().find("h3").html("You must enter a number of reps.");
                                toastr.error("You must enter an amount.");
                            }
                            else {
                                //Display Success
                                $("input").css({
                                    backgroundColor: "#FFFFFF"
                                });
                                $("#messageAlert").removeClass("alert-danger").addClass("alert-success").show().find("h3").html("Yay! You did it.");
                                toastr.success("Yay! You did it.");
                                $(self).text("Ka-Ching").prop("disabled", false);
                            }
                            */
                        }
                    }, 200);
                    //return false;
                });

                $(".close").on('click', function(e) {
                    // $(".alert").fadeOut(1000); 
                    $(this).closest(".alert").slideUp();
                });

                $("input[type='number']").spinner();
                $("input[id='txtDate']").datepicker();
            });
        })(jQuery);
    </script>
</body>

</html>