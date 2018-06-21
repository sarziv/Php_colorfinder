<?php

class RowColFinder extends Generate {

    //Counts all similar connected colors
    public function connectedColors($size){
        //prints Blocks
        $list = $this->arrayPrint($size);
        //Row and Col variables
        $rowValue = 0;
        $colValue = 0;
        for ($row = 0; $row < $size; $row++) {
            for ($col = 0; $col < $size; $col++) {
                //Out of bounds column don't check last block
                if (!empty($list[$row][$col+1])){
                    //Matching columns
                    if($list[$row][$col] == $list[$row][$col+1]) {
                        $rowValue++;
                    }
                }
                //Out of bounds row don't check last block
                if (!empty($list[$row+1][$col])){
                    //Matching rows
                    if($list[$row][$col] == $list[$row+1][$col]) {
                        $colValue++;
                    }
                }
            }
        }
        include('Views/rowColView.html');
    }

}


