<!-- https://laptrinhtudau.com/ham-extract-trong-php/ -->
<?php
    $a = "laptrinhtudau";
    
    $my_array = array(
        "a" => "PHP",
        "b" => "Java", 
        "c" => "Python"
    );
    
    extract($my_array);
    
    echo "\$a = $a; \$b = $b; \$c = $c";

    echo("<pre></pre>");
    echo("===========");
    echo("<pre></pre>");

    $a = "laptrinhtudau";
    $my_array = array(
        "a" => "PHP",
        "b" => "Java",
        "c" => "Python"
    );
    extract($my_array, EXTR_PREFIX_SAME, "dup");
    echo "\$a = $a; \$b = $b; \$c = $c; \$dup_a = $dup_a";

    echo("<pre></pre>");
    echo("===========");
    echo("<pre></pre>");

    $vars = array(
        "color" => "blue", 
        "size" => "medium"
    );
    $color = "red";  // Existing variable

    extract($vars, EXTR_OVERWRITE);

    echo $color; // Outputs: blue (overwritten)
      
    echo("<pre></pre>");
    echo("===========");
    echo("<pre></pre>");

    $expected_array_got_string = 'somestring';
    var_dump(empty($expected_array_got_string['some_key'])); // true
    var_dump(empty($expected_array_got_string[0])); // false
    var_dump(empty($expected_array_got_string['0'])); // false
    var_dump(empty($expected_array_got_string['0.5'])); //true
    var_dump(empty($expected_array_got_string['0 Mostel'])); // true
?>