<?php
    $numbers=[1,2,3,66,77];
    //echo $numbers[4];
    foreach($numbers as $x){
        echo "$x<br/>";
    }

    $people=[
        ["Yuri", "Moscow"],
        ["Evgeny", "Kaliningrad"],
        ["Axel", "London"],
        ["Daniil", "Moscow"]
    ];
    $i=1;
    foreach($people as $person){
        $name=$person[0];
        $city=$person[1];
        //echo ("$person<br/>");
        echo ("$i.$name from $city<br/>");
        $i=$i+1;
    }

    $people1=[
        array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow", "Salary" => 123456),
        array("FirstName" => "AAA", "LastName" => "BBB", "City" => "Moscow", "Salary" => 456)
    ];
    foreach($people1 as $person1){
        echo $person1['FirstName']." ".$person1['LastName']."<br/>";
    }
    
?>