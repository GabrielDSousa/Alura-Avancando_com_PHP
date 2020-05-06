<?php
require 'accounts.php';


//Routine to show a message
function showMsg($msg){
    echo $msg.PHP_EOL;
}

function showAllAccounts(){
    $checkingAccounts = allAccounts();
    foreach($checkingAccounts as $SSN => $account){
        ['holder' => $holder, 'amount' => $amount] = $account;
        showMsg("$SSN from  $holder have \$$amount");
    }
}