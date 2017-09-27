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

  $array = array('ant','bee','cat','dog','elephant');
//  $obj -> printArray($array);

  class main {

    public function _construct() {

      echo 'Hello world </br>;';
    }
    public function stringSet1($text){
      echo '<hr>';
      echo ' <p> This is <u>strlen</u> function </p>';
        print strlen($text);
    }
    public function stringSet2($text){
      echo '<hr>';
      echo '<p> This is <u>Strrev</u> function </p>';
       print strrev($text);
    }
    public function stringSet3($text){
      echo '<hr>';
      echo '<p> This is <u>Substr</u> function </p>';
      print substr($text,16);    
    }
    public function stringSet4($text){
	echo '<hr>';
	echo '<p> This is <u>wordwrap</u> function </p>';
	print wordwrap($text,10,"<br>\n");
    }
    public function stringSet5($text){
       echo '<hr>';
       echo '<p> This is <u>ucwords</u> function </p>';
       print ucwords($text);
    }
    public function stringSet6($text){
	echo '<hr>';
	echo '<p> This is <u>trim</u> function </p>';
	print ($text)."<br>";
        echo trim($text,"Het");
   }
   public function stringSet7($text){
	echo '<hr>';
	echo '<p> This is <u>stripos</u> function for char:is </p>';
	echo stripos($text,"is");
   }
   public function stringSet8($text){
	echo '<hr>';
	echo '<p> This is <u>strrpos</u> function for char:is </p>'; 
	echo strrpos($text,"is");
   }
   public function stringSet9($text){
	echo '<hr>';
	echo '<p> This is <u>strcmp</u> function </p>';
	echo strcmp($text,"this is something not similar");
   }
   public function stringSet10($text){
	echo '<hr>';
	echo '<p> This is <u>substr_replace</u> function </p>';
	echo substr_replace($text,"and long",-4);
   }
    
    public function __destruct() {

        echo '<hr>';
	echo '</br> End of String functions' ;
    }
   }
?>
