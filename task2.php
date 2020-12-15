<?php 
    
    function arraysort($arr = []) {
        for ($i = 0; $i < count($arr);$i++){
            // getting the first value
            for($k = $i+1; $k < count($arr);$k++){
                // comparing with the rest of valuses
                if(strtolower($arr[$k][0]) < strtolower($arr[$i][0])) {
                    // if yes swop it to the head of the array
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$k];
                    $arr[$k] = $temp;
                }
            }
        }

        // print the array
        print_r($arr);
    }


    // Call Function
    arraysort(['Eman', 'ali', 'osama', 'yasser']);
