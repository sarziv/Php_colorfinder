<?php
/*
 * WARNING!
 * This is not even close to efficient or well planed algorithm.
 * */

class lowestCostWalk extends Generate
{
    public function longestConnected($size){
        // print generated array
        $list = $this->arrayPrint($size);
        $startArray = array();
        for ($row = 0; $row < $size; $row++) {
            //start step comparison
            array_push($startArray,$list[$row][0]);
            //min values
            $min = min($startArray);
            //find min value in the array so we know what blocks are best to walk.
            $key = array_keys($startArray,$min);
        }
        if(sizeof($startArray) > 1) {
            $startArrayPushed = array();
            foreach ($key as $pointofstart){
               array_push($startArrayPushed,$list[$pointofstart][1]);
                $minStep = $list[$pointofstart][0] + $list[$pointofstart][1];
                echo $minStep;
        }
        }else{
            //TODO
        }
        var_dump($startArrayPushed);
    }
}
