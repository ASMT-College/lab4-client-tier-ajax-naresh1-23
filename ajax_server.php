<?php
// $dogs = array([
//     { "name": "tommy", "age": 20 },
//     { "name": "panda", "age": 30 },
// ])
$dogs = array();
    $dogs[0] = "tommy";
    $dogs[1] = "panda";
    $dogs[2] = "prakash";
    $dogs[3] = "chitra";
    $dogs[4] = "ishan";
    $dogs[5] = "bikas";
    $searchdata = strtolower($_GET['q']);
    $data_length = strlen($searchdata);
    $datas = '';
    if($data_length == 0){
        $datas = '';
        exit(0);
    }
    else{
        foreach($dogs as $dog){
            if($searchdata == strtolower(substr($dog, 0, $data_length))){
                $datas =$datas.$dog.',';
            }
            
        }
        print_r($datas);
    }
?>