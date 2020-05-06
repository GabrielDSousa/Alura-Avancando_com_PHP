<?php
require 'accounts.php';


//Routine to show a message
function showMsg($msg){
    echo $msg.PHP_EOL;
}

function showAllAccounts(){
    $checkingAccounts = allAccounts();
    foreach($checkingAccounts as $SSN => $account){
        showMsg("$SSN from {$account['holder']} have \${$account['amount']}");
    }
}