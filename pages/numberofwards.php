<?php
  session_start();
  if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
    if(isset($_GET['num']) && !empty($_GET['num'])){
      $num = $_GET['num'];
      $formarray = array();
      $counter = 0;
      while($counter < $num){$formarray[] = $counter;$counter++;}
      // print($formarray[-1]);
      $last = end($formarray);
      echo "<form  method='POST' action='parentconfigprocess.php'>";
      echo "<div class='form-group' style='display:none'>";
      echo "<input name='wnum' value='$num'>";
      echo "</div>";
      foreach($formarray as $fn){
          echo "<div class='form-group mb-4'>";
          echo "<div class='row'>";
          echo "<div class='col-sm-6'>";
          echo "<input type='text' name='cname$fn' class='form-control border-left-0 border-right-0 border-top-0 rounded-0' placeholder='ID Of Child'>";
          echo "</div>";
          echo "<div class='col-sm-6'>";
          echo "<input type='number' name='idname$fn' class='form-control rounded-0 border-left-0 border-right-0 border-top-0' placeholder='ID Of Child'>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
      }
      echo "<div class='form-group'>";
      echo "<input type='submit' name='submit' class='btn btn-secondary btn-block rounded-0' value='Continue To Account'>";
      echo "</div>";
      echo "</form>";


    }
  }

?>
