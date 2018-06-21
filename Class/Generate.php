<?php

class Generate{

    private function generateArray($size)
    {
        $list = array();

        //Check size
        if($size > 1){
            for ($x = 0; $x < $size; $x++) {
                //Push array to specific size
                array_push($list, array());
            }
            //Array push and random generator
            for ($x = 0; $x < $size; $x++) {
                $random = array();
                for ($i = 0; $i < $size; $i++) {
                    $random[$i] = rand(1,5);
                    array_push($list[$i], $random[$i]);
                }
            }
            return $list;
        }else{
            echo "Size can't be less then 1" . "\n";
            //Shutdown
            exit();
        }

    }

    public function arrayPrint($size){
        //Generated Array
        $list = $this->generateArray($size);
        echo '<div class="container">';
        for ($row = 0; $row < $size; $row++) {
            echo '<div class="row">';
            for ($col = 0; $col < $size; $col++) {
                //Displays the list as block of color then numbers
                switch ($list[$row][$col]){
                    case 1:
                        echo '<div class="square-red "></div>';
                        break;
                    case 2:
                        echo '<div class="square-blue"></div>';
                        break;
                    case 3:
                        echo '<div class="square-black"></div>';
                        break;
                    case 4:
                        echo '<div class="square-green"></div>';
                        break;
                    case 5:
                        echo '<div class="square-yellow"></div>';
                        break;
                }
            }
            echo "</div>";
        }
        echo "</div>";
        //return a list of numbers from printed array
        return $list;
    }
}