<?php

function curr_conv($amount,$type){
    if($type=='usd'){
        $bdt=$amount*85.80;
        return "$ {$amount}usd={$bdt} BDT";
    }
    else if($type=='cad'){
        $bdt=$amount*67.01;
        return "$ {$amount}cad={$bdt} BDT";
    }
    
    else if ($type=='pound'){
        $bdt=$amount*114.15;
        return "$ {$amount}pound={$bdt} BDT";
    }
    else{
        echo"put the correct money please.";
    }
    
}

echo curr_conv(100,'cad')
?>