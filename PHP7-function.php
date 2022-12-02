<?php 
declare(strict_types = 1);

function topla(int $sayi1, int $sayi2):string {
        return (string) ($sayi1+$sayi2);
}

function arr(array $arr):string{
    return implode(",",$arr);
}
//echo topla(2,5);
print_r(arr(["test","test"]));
?>