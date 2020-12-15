<?php 
    $arr = ['C','d','b', 'a'];

    for($i = 0;$i < count($arr);$i++) {
        for ($k = $i+1; $k < count($arr);$k++){
            if($arr[$i] > $arr[$k]){
                $temp = $arr[$i];
                $arr[$i] = $arr[$k];
                $arr[$k] = $temp;
            }
        }
    }

    /*
      We Compare Every element in the array with the rest of the elements in the array and swaping.
    */


    print_r($arr);