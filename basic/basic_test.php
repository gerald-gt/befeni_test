<?php

/* Author : Gerald Nelson
   Test   : Befeni Basic Test
   Version : 1.0
   */ 

function calculate ( $add = 0 , $apply  = 0 , $multiply = 1 ) {

 $result = ($apply + $add) * $multiply ; 

 return $result ; 

}

// pass relevent inputs for output
echo calculate($add , $apply , $multiply) ; // input add , apply , multiply values

?>

