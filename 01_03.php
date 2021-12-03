<?php 

function uppr($text){
    return "<span style=\" text-transform:uppercase; \">" . $text . "</span> <br>";
}

function lowr($text){
    return "<span style=\" text-transform:lowercase; \">" . $text . "</span> <br>";
}

echo uppr('new');
echo lowr('OLD');

function uppr_lowr($type, $str){
    if($type=='u'){
        return "<span style=\" text-transform:uppercase; \">{$str}</span> <br>";
    }
    else if($type=='l'){
        return "<span style=\" text-transform:lowercase; \">{$str} </span> <br>";
    }
    else{
        return "type doesn't match <br>";
    }
}

$txt=" New Old";

echo uppr_lowr('u',$txt);
?>