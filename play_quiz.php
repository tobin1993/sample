<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"/>

	<meta charset="utf-8">
	<title>Play  Quiz</title>


</head>
<body>
<style>
.panel-heading{
    background-color:lightgreen;
}
</style>
<div class="container">
	<h1 align="center">Play the Quiz!</h1>
    
    <form method="post" action="<?php echo base_url();?>index.php/Questions/resultdisplay">
       
    
    <?php foreach($questions as $row) { 
        ?>
    
    <?php $ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->answer);
	shuffle($ans_array); ?>
    
    <div class="panel panel-primary">
        <br>
        <div class="panel-heading">

    <p class="panel-title"><strong><?php echo $row->quizID; ?>.<?php echo $row->question; ?></strong></p>
        </div>
     <div class="panel-body">
    <input type="radio" name="quizid<?php echo $row->quizID; ?>" value="<<?php echo $ans_array[0]; ?>" required> <?php echo $ans_array[0];?><br>
    <input type="radio" name="quizid<?php echo $row->quizID; ?>" value="<?php echo $ans_array[1]; ?>"> <?php echo $ans_array[1];?><br>
    <input type="radio" name="quizid<?php echo $row->quizID; ?>" value="<?php echo $ans_array[2]; ?>"> <?php echo $ans_array[2];?><br>
    <input type="radio" name="quizid<?php echo $row->quizID; ?>" value="<?php echo $ans_array[3]; ?>"> <?php echo $ans_array[3];?><br>
    </div>
    <?php } ?>
    
    <br><br>
    <div class="panel-footer">
    <button type="submit" class="btn btn-info">Submit!!</button>
</div>
    <br><br>
</div>
    </form>
    
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>