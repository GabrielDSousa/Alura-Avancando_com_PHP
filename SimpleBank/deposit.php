<?php
//Function to deposit a amount of money
function deposit(array $account, float $amount) : array
{
    if($amount <= 0){
        showMsg("A deposit need to be more than $0");
    }else{
        $account['amount'] += $amount;
        showMsg("Your transaction was a success, your new amount on this account is $".$account['amount']);
    }

    return $account;
}
