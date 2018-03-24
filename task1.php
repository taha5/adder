<?php
session_start();
if(isset($_SESSION['username'])){
    include "ins.php";
}
?>
<h1 class="text-center">ADD OPERATION</h1>
<div class="container">
<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<div class="form-group form-group-lg">
	<label class="col-sm-2 control-label">frist number </label>
	<div class="col-sm-10 col-md-4">
	<input class="form-control" type="number_format" name="int" placeholder="inter frist number and signal + or -" autocomplete="off">
		
	</div>
		
	</div>
    <!--satrt -->
    <div class="form-group form-group-lg">
	<label class="col-sm-2 control-label">frist name</label>
	<div class="col-sm-10 col-md-4">
	<input class="form-control" type="number_format" name="int2" placeholder="inter second number and signal + or -" autocomplete="off">
		
	</div>
		
	</div>
    <!--000000-->
    <div class="form-group form-group-lg">
	<div class="col-sm-offset-2 col-sm-10">
	<input type="submit" value="calculator" class="btn btn-primary"/>
		
	</div>
	</div>
    <!--000000-->
    </form>
    </div>
   
    
<?php

if($_SERVER['REQUEST_METHOD']=='POST') {
    $number  = $_POST['int'];
    $number2 = $_POST['int2'];
 
$ar =str_split($number);
       $re =array_shift($ar);
       $cal=implode($ar);
       //-----------------
 $ar2 =str_split($number2);
       $re2 =array_shift($ar2);
       $cal2=implode($ar2);
      //--------------
       if($re == $re2){
         $x=$cal+$cal2;
          
           function decimal_binary($dec){
            $binary=null;
            while($dec >= 1){
                $rem = $dec % 2;
               $dec /= 2;
                $binary = $rem . $binary;
            }
            if($binary == null){
                $binary = 0;
                return $binary;
            }
            
           echo "<div class='alert alert-success'>" . $binary ." " . "</div>";
        }
        decimal_binary($x);
        

       }elseif ($number < 0) {
        function decimal_binary1($dec){
            $binary=null;
            while($dec >= 1){
                $rem = $dec % 2;
               $dec /= 2;
                $binary = $rem . $binary;
            }
            if($binary == null){
                $binary = 0;
                return $binary;
            }
            
          //echo "<div class='alert alert-success'>" . $binary ." " . "</div>";
        }
/////////*********** *///
        $ar =str_split($number);
       $re =array_shift($ar);
       $cal=implode($ar);
       $com=decimal_binary1($cal);
       $binarry1=decbin($cal);
       $arrrr=str_split($binarry1);
       $compll;
       //echo print_r($arrrr);
        //echo "<div class='alert alert-success'>" . $binarry1." " . "</div>";

       foreach ( $arrrr as $aaa) {
           //echo $aaa;

           $compll=($aaa==0)?(1):(0);
           if($aaa==0){
            $aaa=1;
               
           }else{
            $aaa=0;
           }
          
       }
      
       
          
       $aaa;  $b888=1;
       $i=0; $r=0;
       
      
     // echo $compll;
    while ( $aaa != 0 ||$b888 !=0)
    {
     $sum[$i++] =((int)($aaa % 10 + $b888 % 10+$r ) % 2);
     $r = (int)(($aaa % 10 + $b888 % 10 + $r) / 2);
     $aaa = intval($aaa/ 10);
     $b888  = intval($b888  / 10); 
    
    }
//print_r($sum);
    if ($r != 0) {
     $sum[$i++] =($r);
    }
    
    
    $rev= array_reverse($sum,false);
  
    foreach($rev as $bb) {
        
         ///2222********************
         
    }
     
          
         }elseif($number2<0){

            function decimal_binary2($dec){
                $binary=null;
                while($dec >= 1){
                    $rem = $dec % 2;
                   $dec /= 2;
                    $binary = $rem . $binary;
                }
                if($binary == null){
                    $binary = 0;
                    return $binary;
                }
                
         
            }
            $ar =str_split($number);
            $re =array_shift($ar);
            $cal=implode($ar);
            $com=decimal_binary2($cal);
            $binarry1=decbin($cal);
            $arrrr=str_split($binarry1);
            $compll;
            foreach ( $arrrr as $aaa) {
                //echo $aaa;
     
                $compll=($aaa==0)?(1):(0);
                if($aaa==0){
                 $aaa=1;
                    
                }else{
                 $aaa=0;
                }
               //echo $aaa;
            }
            $aaa;  $b888=1;
       $i=0; $r=0;
       
      
     // echo $compll;
    while ( $aaa != 0 ||$b888 !=0)
    {
     $sum[$i++] =((int)($aaa % 10 + $b888 % 10+$r ) % 2);
     $r = (int)(($aaa % 10 + $b888 % 10 + $r) / 2);
     $aaa = intval($aaa/ 10);
     $b888  = intval($b888  / 10); 
    
    }
//print_r($sum);
    if ($r != 0) {
     $sum[$i++] =($r);
    }
    
    
    $rev= array_reverse($sum,false);
  
    foreach($rev as $bb) {
        
        echo $bb;
    }
      
        }
   
}
?>