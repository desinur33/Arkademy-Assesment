<?php
function mrBrulee($ops,$n,$arr){
    switch($ops){
        case "SUM":
            if(count($arr)<=$n){
                $sum=0;
                for ($i=0; $i <=count($arr)-1 ; $i++) { 
                    $sum=$sum+$i;
                }
                $hasil1=$sum;
            }else{
                $hasil1="Kesalahan Input";
            }
            print $hasil1;
        break;

        case "MUL":
            if(count($arr)<=$n){
                $mul=1;
                $inc=1;
                for ($i=0; $i <=count($arr)-1 ; $i++) {
                    $mul*= $inc;
                    $inc++;
                }
                $hasil2=$mul;
            }else{
                $hasil2="Kesalahan Input";
            }
            print $hasil2;
        break;

        case "SUB":
        if(count($arr)<=$n){
            $sub=0;
            for ($i=0; $i <=count($arr)-1 ; $i++) { 
                $sub=$sub-$i;
            }
            $hasil3=$sub;
            }else{
                $hasil3="Kesalahan Input";
            }
            print $hasil3;
        break;

        if(count($arr)<=$n){
            $sub=1;
            for ($i=1; $i <=count($arr)-1 ; $i++) { 
                $sub=$sub/$i;
            }
            $hasil4=$sub;
            }else{
                $hasil4="Kesalahan Input";
            }
            print $hasil4;
        break;
    }
}

mrBrulee("SUM",20,[11,13,15]);
print("\n");
mrBrulee('MUL',20,[12,15,17]);