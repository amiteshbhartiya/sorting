<?php

$data = [11,3,55,6,99, 100,1, 1];

// selection sort

function selection_sort(&$data, $count){

  for ($i = 0; $i < $count; $i++) {
      
     $min = $i;  
     for ($j = $i; $j < $count; $j++) {
       if($data[$min] > $data[$j]) {
         $min = $j; 
       }

     }
     
     if($min != $i) {
        $temp = $data[$i];
        $data[$i] = $data[$min];
        $data[$min]= $temp;
     } 
              
  }

}

selection_sort($data, count($data));

echo '<pre>';

print_r($data);

?>
