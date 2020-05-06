<?php
//Function to withdraw a amount of money
function withdraw(array $account, float $amount) : array
{
    if($amount <= 0) {
        showMsg("A withdraw need to be more than $0");
    }elseif($amount > $account['amount']){
        showMsg("You can't do this operation, you don´t have enough money to withdraw");
    } else{
        $account['amount'] -= $amount;
        showMsg("Your transaction was a success, your new amount on this account is $".$account['amount']);
    }

    return $account;
}

