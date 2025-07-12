<?php
    // Cùng key lấy giá trị sau

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $result = array_merge($array1, $array2);
    print_r($result);

    /*
        Array
            (
                [color] => green
                [0] => 2
                [1] => 4
                [2] => a
                [3] => b
                [shape] => trapezoid
                [4] => 4
            )
    */

    $array1 = array();
    $array2 = array(1 => "data");
    $result = array_merge($array1, $array2);
    print_r($result);

    /*     Array
            (
                [0] => data
            )
    */

    // cùng key lấy giá trị trước
    $array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
    $array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
    $result = $array1 + $array2;
    var_dump($result);

    /*
        array(5) {
            [0]=>
            string(6) "zero_a"
            [2]=>
            string(5) "two_a"
            [3]=>
            string(7) "three_a"
            [1]=>
            string(5) "one_b"
            [4]=>
            string(6) "four_b"
        }
    */
?>