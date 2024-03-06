 <?php
     $english=$_POST['english'];
     $tamil=$_POST['tamil'];
     $maths=$_POST['maths'];
     $science=$_POST['science'];
     $socialscience=$_POST['socialscience'];
    ?>
   <center>
   <h1>mark list</h1>
   <label>1.english=</label><?php echo $english;?><br>
   <label>2.tamil=</label><?php echo $tamil;?><br>
   <label>3.maths=</label><?php echo $maths;?><br>
   <label>4.science=</label><?php echo $science;?><br>
   <label>5.socialscience=</label><?php echo $socialscience;?><br>
   <?php
   $total=$english+$tamil+$maths+$science+$socialscience;
   ?>
   <label>total=</label><?php echo$total;
   $avg=$total/5;?><br>
   <label>avrage=</label>
   <?php
   echo $avg;
   ?>
  </center>