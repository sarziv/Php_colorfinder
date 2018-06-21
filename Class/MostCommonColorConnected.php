<?php

class MostCommonColorConnected extends Generate
{
    private function finderConnected ($size)
    {
        //prints Blocks
        $list = $this->arrayPrint($size);
        //Array fill -> Generate Class start at 1.
        //More flexible array.
        $maxlist = array_fill(1,$size+1,'0');
        //Looping to all the ROWS and COLUMNS
        for ($row = 0; $row < $size; $row++) {
            for ($col = 0; $col < $size; $col++) {
                if (!empty($list[$row][$col + 1])) {
                    //Counting each color
                    if ($list[$row][$col] === $list[$row][$col + 1]) {
                        //every color connections
                        $maxlist[$list[$row][$col]] = $maxlist[$list[$row][$col]] + 1;
                    }
                }
                //Out of bounds row don't check last block
                if (!empty($list[$row + 1][$col])) {
                    //Counting each color
                    if ($list[$row][$col] === $list[$row + 1][$col]) {
                        $maxlist[$list[$row][$col]] = $maxlist[$list[$row][$col]] + 1;
                    }
                }
            }
        }
        //var_dump($maxlist);
        return $maxlist;
    }

    public function singleMaxConnected($size)
    {
        //max array
        $maxValue = $this->finderConnected($size);
        /*New better way*/
        //new assign dont wana change maxValue
        $sortedCheck = $maxValue;
        //sorted to find multiple colors
        rsort($sortedCheck);
        //multiple color check
        if ($sortedCheck[0] != $sortedCheck[1]) {
            $max = max($maxValue);
            $key = array_search($max, $maxValue);
            //View
            include('Views/mostcommon.html');
            //var_dump($key);
            //var_dump($maxValue);
        } else {
            //view
            include('Views/multiColor.html');
            //var_dump($maxValue);
        }

    }

}