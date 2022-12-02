<?php 

    //print_r(range(0,100,2));
    //number_format()
    function byteToMB($byte){
        return number_format( $byte/1048576,2);
    }

    function say($baslangic,$limits){
        
        for ($i=$baslangic; $i <= $limits ; $i++) { 
            yield $i;
        }
        
    }

    $sayilar = range(0,100000);
    echo byteToMB(memory_get_usage())."mb bellek kulandı";
    $sayilar=say(0,100000);
    echo byteToMB(memory_get_usage())."mb bellek kulandı";
    /*foreach($sayilar as $sayi){
        echo $sayi."<br>";
    }*/
    
?>