<?php 
  $obj = new main();
  $text = "Hello this is a practise text";
  $obj -> stringSet1($text);
  $obj -> stringSet2($text);
  $obj -> stringSet3($text);
  $obj -> stringSet4($text);
  $obj -> stringSet5($text);
  $obj -> stringSet6($text);
  $obj -> stringSet7($text);
  $obj -> stringSet8($text);
  $obj -> stringSet9($text);
  $obj -> stringSet10($text);

  $objArray = new ArrayTypes();
  $myArray = array('ant','bee','cat','dog','elephant','cat','dog','cat');
  $mySecondArray = array("Food" => "Pasta","Color" => "Blue","Season" => "Summer", "Drinks" => "Pepsi");
  $myArray4 = array('Two','Four','Six','Eight','Ten');
  $myThirdArray = array('2','4','6','8','10');
  $objArray -> arraySet($myArray , $mySecondArray);
  $objArray -> arraySet1($mySecondArray);
  $objArray -> arraySet2($myArray ,$mySecondArray);
  $objArray -> arraySet3($myArray4,$myThirdArray);
  $objArray -> arraySet4($myArray);
  $objArray -> arraySet5($myArray4);
  $objArray -> arraySet6($myArray4,$myThirdArray);
  $objArray -> arraySet7($myArray);
  $objArray -> arraySet8($myArray);
  $objArray -> arraySet9($mySecondArray);
  $objArray -> arraySet10();

  class main {

    public function _construct() {

      echo 'Hello world </br>;';
    }
    public function stringSet1($text){
      echo '<h1>This section is for string functions<br></h1><p> The original string is: Hello this is a practise text </p1>';
      echo '<hr>';
      echo ' <p> This is <b> 1. strlen</b> function </p>';
        print strlen($text);
    }
    public function stringSet2($text){
      echo '<hr>';
      echo '<p> This is <b>2. Strrev</b> function </p>';
       print strrev($text);
    }
    public function stringSet3($text){
      echo '<hr>';
      echo '<p> This is <b>3. Substr</b> function </p>';
      print substr($text,16);    
    }
    public function stringSet4($text){
	echo '<hr>';
	echo '<p> This is <b>4. wordwrap</b> function </p>';
	print wordwrap($text,10,"<br>\n");
    }
    public function stringSet5($text){
       echo '<hr>';
       echo '<p> This is <b>5. ucwords</b> function </p>';
       print ucwords($text);
    }
    public function stringSet6($text){
	echo '<hr>';
	echo '<p> This is <b>6. trim</b> function </p>';
	print ($text)."<br>";
        echo trim($text,"Het");
   }
   public function stringSet7($text){
	echo '<hr>';
	echo '<p> This is <b>7. stripos</b> function for char:is </p>';
	echo stripos($text,"is");
   }
   public function stringSet8($text){
	echo '<hr>';
	echo '<p> This is <b>8. strrpos</b> function for char:is </p>'; 
	echo strrpos($text,"is");
   }
   public function stringSet9($text){
	echo '<hr>';
	echo '<p> This is <b>9. strcmp</b> function </p>';
	echo strcmp($text,"this is something not similar");
   }
   public function stringSet10($text){
	echo '<hr>';
	echo '<p> This is <b>10. substr_replace</b> function </p>';
	echo substr_replace($text,"and long",-4);
	echo '<br> End of String Functions';
   }
   public function __destruct() {

        echo '<hr>';
	echo '</br> End of String & Array functions' ;
	echo '<hr>';
	echo '<hr>';
	   }
   }

   class ArrayTypes {

   public function _construct () {
   
   	echo 'This is null';
   
   }
   public function arraySet($myArray, $mySecondArray){
   	echo '<hr>';
	echo '<h1> This section is for array functions </h1>';
	echo '<hr>';
	echo '<p> This is the original arrays </p>';
	echo '<br> ';
	print_r($myArray);
	echo '<br> <br>';
	print_r($mySecondArray);
   }
   public function arraySet1 ($mySecondArray){
	echo '<hr>';
	echo '<p> This is <b> 1. array_change_key_case </b>function </p>';
	print_r(array_change_key_case($mySecondArray,CASE_LOWER));

   }
   public function arraySet2($myArray, $mySecondArray){
	echo '<hr>';
	echo '<p> This is <b> 2. array_chunk </b> function</p>';
	print_r(array_chunk($myArray,3));
	echo '<br>';
	print_r(array_chunk($mySecondArray,2));
	echo '<br>';
	print_r(array_chunk($mySecondArray,2,true));

  }
  public function arraySet3($myArray4,$myThirdArray){
	echo '<hr>';
	echo '<p>This is <b> 3. array_combine </b>function </p>';
	//$result = array_combine ($myArray4,$myThirdArray);
	print_r(array_combine($myArray4, $myThirdArray));

 }
 public function arraySet4($myArray){
	echo '<hr>';
	echo '<p> This is <b>4. array_count_values </b> function </p> ';
	print_r(array_count_values($myArray));


 }
 public function arraySet5($myArray4){
	echo '<hr>';
	echo '<p>This is <b>5. array_diff </b>function <br> There are 2 test arrays taken: </p> ';
	$test1 = array ('One','Two','Three','Four','Five');
	$test2 = array ('One','Two','Seven','Eighteen','Twenty');
	print_r($test1);
	echo '<br>';
	print_r($test2);
	echo '<br>';
	print_r(array_diff($myArray4,$test1,$test2));

 }
 public function arraySet6 ($myArray4,$myThirdArray){
	echo '<hr>';
	echo '<p>This is  <b>6. array_merge </b>function </p>';
	print_r(array_merge($myArray4,$myThirdArray));


}
 public function arraySet7($myArray) {
	echo '<hr>';
	echo '<p> This is <b>7. array_shift </b> function </p> ';
	echo array_shift($myArray);
	echo '<br>';
	print_r($myArray);
}
 public function arraySet8 ($myArray){
	echo '<hr>';
	echo '<p> This is <b> 8. array_splice </b> function  </p>';
	$test3 = array('orange','green','blue','black');
	print_r(array_splice($myArray,0,2,$test3));
	echo '<br>';
	print_r($myArray);

}
 public function arraySet9($mySecondArray){
	echo '<hr>';
	echo '<p>This is<b>9. array_reverse </b>function </p>';
	print_r($mySecondArray);
	echo '<br>';
	print_r(array_reverse($mySecondArray));

}
 public function arraySet10 () {
	echo '<hr>';
	echo '<p> This is <b>10. arsort & ktsort </b> function  </p> ';
	$test5 = array ("1" => "One", "2" => "Two", "3" => "Three", "4" => "Four");
	echo '<br><p> This is example array </p>';
	print_r($test5);
	echo '<br>';
	arsort($test5);
	  foreach($test5 as $x=>$x_value)
	   {
	      echo "Key=" . $x . ", Value=" . $x_value;
	         echo "<br>";
		    }
	echo '<br>';
	krsort ($test5);
	  foreach($test5 as $x=>$x_value)
	    {
	       echo "Key=" . $x . ", Value=" . $x_value;
	          echo "<br>";
		     }

}

}
?>
