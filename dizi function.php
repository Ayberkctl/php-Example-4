<?php
/*
    print_r()
    var_dump()
    explode()
    implode()
    count()
    is_array()
    shuffle()
    array_combine()
    array_count_values()
    array_flip()
    array_key_exists()
*/
$arr=[
    "name"=>"ayberk",
    "surname"=>"catal",
    "age"=>19
    
];
    //print_r($arr);
    //var_dump($arr);
    $test="ayberk,catal,19";
    $arrTwo=explode(",",$test);
    //var_dump($arrTwo);
    $string=implode(" | ",$arrTwo);
    //echo $string;
    //echo count($arrTwo);

    /*
    if(is_array($arrTwo)){
        echo"bu bir dizidir";
    }else{echo "bu bir dizi değildir";}
    */

    $arrthree =[0,1,2,3,4,5,6,7,8,9,10];
    shuffle($arrthree);
    //print_r($arrthree);

    $keys=['name','surname'];
    $values=['ayberk','catal'];
    $arrfor=array_combine($keys,$values);
    //print_r($arrfor);

    $arrfive=["ayberk","catal",19,'ayberk',19];
    $arrfive=array_count_values($arrfive);
    //print_r($arrfive);

    $arr=[
        "name"=>"ayberk",
        "surname"=>"catal",
        "age"=>19,
    ];
    $arrSix= array_flip($arr);
    //print_r($arrSix);
    $arrseven=[
        "name"=>"ayberk",     
        "ad"=>[
            "b"=>[
                "c"=>[
                    "d"=>"e",
                    "f"=>"g"
                ]
            ]
        ]
        
    ];
    /*
    if(array_key_exists("name",$arrseven)){
        echo "ad anahtarı var";
    }else{echo"ad anahtarı yok";}
    */
    function _array_key_exists($cur_key , $arry){
        foreach ($arry as $key => $val){
            if($key == $cur_key){
                return true;
            }
            if(is_array($val)){
                return _array_key_exists($cur_key , $val);
            }
            
        }
        return false;
    }
    $ques='d';
    if(_array_key_exists($ques,$arrseven)){
        echo $ques," anahtarı var";
    }else{echo $ques," anahtarı yok";}
?>
  