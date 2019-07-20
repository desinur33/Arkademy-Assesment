<?php
function is_username_valid($string){
    $result=false;
    $check1=preg_match('/^[A-Za-z]/', $string);
    $check2=preg_match('/[A-Z]/', $string);
    $check3=preg_match('/^[\s\S]{5,9}$/ ',$string);
    if($check1&&$check2&&$check3){
        $result=true;
    }
    return $result;
}

function is_password_valid($string){
    $result=false;
    $check1=preg_match('/^[A-Za-z]/', $string);
    $check2=preg_match('/[#@$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $string);
    $check3=preg_match('/[A-Z]/', $string);
    $check4=preg_match('/^[\s\S]{5,}$/ ',$string);
    $check5=preg_match('/=/', $string);
    if($check1&&$check2&&$check3&&$check4&&$check5){
        $result=true;
    }
    return $result;
}

//input string parameter dibawah inidisini============

var_dump(is_username_valid("Xrutaf888")); #return true

var_dump(is_username_valid('1Diana')); #return false

var_dump(is_password_valid("passW0rd=!#")); #return true

var_dump(is_password_valid("C0d3YourFuture!#")); #return false
//========================================
/*
 jadi gini, pada soal no 2, saya gunain PHP, So return value booleannya tidak seperti js maupun java
yang outputnya otomat true or false, tapi 0 dan 1(sama aja karena 0 adalah false dan 1 adalah true)
biar sama dengan soal, ane pake fungsi vardump  ya:)

*/