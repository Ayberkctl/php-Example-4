<?php
function test(){
    return "test";
}
if(function_exists("test")) {
    echo "test fonksiyonu vardır";

}
else{echo "test fonksiyonu yoktur";} 
function kısalt($str, $limit=5){
    $karekterSayısı =strlen($str);
    if ($karekterSayısı>$limit){
        if(function_exists("mb_substr")){
            $str = mb_substr($str,0,$limit,"utf8")."...";
        }else{
            $str = substr($str,0,$limit)."...";
        }
        
    }
    return $str;

}
?>