<?php
//Симуляция: обычно список данных извлекается прграммным кодом, например, из БД
$people=[
    array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow", "Salary" => 123456),
    array("FirstName" => "AAA", "LastName" => "BBB", "City" => "Moscow", "Salary" => 456),
    array("FirstName" => "Andrei", "LastName" => "Adranov", "City" => "Gorod", "Salary" => 4898),
    array("FirstName" => "Alex", "LastName" => "Borisov", "City" => "London", "Salary" => 4954)
];

//Отфильруем данные по первым буквам фамилии
$letters=strtolower($_REQUEST["letters"]);

$results=[];
foreach($people as $person){
    if(str_starts_with(strtolower($person["LastName"]), $letters)){
        array_push($results,$person);
    }
}

//Отправим извлеченные данные в формате JSON
//echo json_encode($people);
echo json_encode($results);
?>
