<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>"/>
	<meta charset="utf-8">
	<title>Result Sheet</title>
<style>
  .panel-heading{
    color:black;
    background-color: 

  }
  .abc{
    background-color: linen;
  }

  </style>
</head>
<body class="abc">
  

<div class="container">
	<h1>Result Sheet</h1>
    
    <?php $score =0; ?>
    
      <?php $array1= array(); ?>
      <?php $array2= array(); ?>    
      <?php $array3= array(); ?>
      <?php $array4= array(); ?>
      <?php $array5= array(); ?>
      <?php $array6= array(); ?>
      <?php $array7= array(); ?>
      <?php $array8= array(); ?>
      
         <?php foreach($checks as $checkans) { ?>
               <?php array_push($array1, $checkans); } ?>
               
               
        <?php foreach($results as $res) { ?>
               <?php array_push($array2, $res->answer); 
			         array_push($array3, $res->quizID); 
			         array_push($array4, $res->question); 
			         array_push($array5, $res->choice1); 
			         array_push($array6, $res->choice2); 
			         array_push($array7, $res->choice3); 
					 array_push($array8, $res->answer); 
			   } ?>
               
               
           
 
    <form method="post" action="<?php echo base_url();?>index.php/welcome/index">  
  <?php 
           for ($x=0; $x <8; $x++) { ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
    <p class="panel-title"><strong><?php echo $array3[$x];?>.<?php echo $array4[$x]; ?></strong></p>
    </div>
<div class="panel-body">
      <?php if ($array2[$x]!=$array1[$x]) { ?>
      
           <p><span style="background-color: #FF9C9E"><?php echo $array1[$x]; ?></span></p>
           <p><span style="background-color: #ADFFB4"><?php echo $array2[$x]; ?></span></p>
           
      <?php } else { ?>
      
           <p><span style="background-color: #ADFFB4"><?php echo $array1[$x]; ?></span></p>
           
           <?php $score = $score + 1; ?>
      
    <?php } } ?>
    
    <br><br>
    </div>
    <h2>Your Score: </h2>

      <h1><?php echo $score; ?>/8</h1>
      
      <div class="panel-footer">
    <button type="submit" class="btn btn-danger">play again!!</button>  
    </div>
  </div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

    
    </form>
    
</div>

</body>
</html>