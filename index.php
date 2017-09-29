<?php

  $obj = new main();
    $text = "This is one of the array function";
      $obj->printthis($text);
        
	  $num = array(1,2,3,4,5,6,7,8,9,10);
	  $name = array("A", "B", "B");
	  $age = array("Adam"=>"20", "Ben"=>"25", "Eve"=>"15");
	  $obj->printArray($num);
          

	      class main {

	          public function __construct() {

		        echo 'This is String and Array Functions Assignment. The string used here is - This is one of the string function.
			</br>';
			echo 'The array used here is (1) Indexed array - (1,2,3,4,5,6,7,8,9,10)and ("A", "B", "B")</br>';
			echo '(2) Associative array - ("Adam"=>"20", "Ben"=>"25", "Eve"=>"15")</br>';

			    }

	          public function printthis($text) {
			echo '<h1>1.This is  char function</h1>';
		        echo chr(-159), chr(833),  PHP_EOL;
		        echo '<hr>';
		        echo '<h1> 2. This is string length function</h1>';
			echo strlen("The strlen function return the length of the string");
                        echo '<hr>';
			 echo '<h1> 3. This is String reverse function</h1>';
			 echo strrev("string revers");
			 echo '<hr>';
			 echo '<h1> 4. This is Chunk function</h1>';
			 echo chunk_split($text,1,"."); 
                         echo '<hr>';
		         echo '<h1> 5. This is explode  function</h1>';
			 print_r (explode(" ",$str));
			 echo '<hr>';
			 echo '<h1> 6. This is upper case words function</h1>';
		         echo ucwords($text);
			 echo '<hr>';
			 echo '<h1> 7. This is ltrim  function</h1>';
		         echo $text . "<br>";
		       	echo ltrim($text,"This ");
			echo '<hr>';
			echo '<h1> 8. This is string repeat function</h1>';
			 echo str_repeat(".",20);
			 echo '<hr>';
			echo '<h1> 9. This is compare string  function</h1>';
			 echo strcasecmp("Good Morning","Good Morning");
                         echo '<hr>';
			echo '<h1> 10. This is sub-string function</h1>';
			 echo substr("$text",10);
			 echo '<hr>';
			       }

	  public function  printArray($num)
		
			  {
			  echo '<h1>11.This is array print function</h1>';
	      	       print_r($num);
			   echo '<hr>';
		           echo '<h1>12. This is Array chunk function</h1>';
			  print_r(array_chunk($num,2));
			 echo '<hr>';
		         echo '<h1>13. This is array search  function</h1>';
			  echo array_search("3",$num);
		          print_r($c);
		          echo '<hr>';
		       	echo '<h1>14. This is array keys  function</h1>';
			print_r(array_keys($num));
			echo '<hr>';
			echo '<h1>15. This is array pop function</h1>';
			array_pop($num);
			print_r($num);
			echo '<hr>';
			echo '<h1>16. This is array push function</h1>';
			array_push($num,"11","12");
			print_r($num);
			echo '<hr>';		
			echo '<h1>17. This is array values function</h1>';
			print_r(array_values($num));
			echo '<hr>';
			echo '<h1>18. This is array slice function</h1>';
			print_r(array_slice($num,2));
			echo '<hr>';
			echo '<h1>19. This is array unique  function</h1>';
			print_r(array_unique($num));
			echo '<hr>';										    
			echo '<h1>20. This is array shuffle function</h1>';
			shuffle($num);
			print_r($num);
			echo '<hr>'; 

                      }

										   										                 public function __destruct()
		 {
		 echo '</br> End of Assignment ';
	        }

	  }


 ?>

