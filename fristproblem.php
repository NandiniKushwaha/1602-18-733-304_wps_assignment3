<?php
 $states = "Mississippi Alabama Texas Massachusetts Kansas";
 $statesArray = [];
 $states1 = explode(' ',$states);
 foreach($states1 as $state) {
 if(preg_match( '/xas$/', ($state)))
 $statesArray[0] = ($state);
 }
 print("Element at 0th index is:".$statesArray[0]);
 ?>