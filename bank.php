<?php
//Routine to show a message
function showMsg($msg){
    echo $msg.PHP_EOL;
}

//Simulating a simple bank account
$checkingAccounts = [
    "526-02-9692" => [
        'holder' => 'John',
        'amount' => 3000
    ],
    "115-07-0759" => [
        'holder' => 'Marie',
        'amount' => 1000
    ],
    "460-61-7961" => [
        'holder' => 'Caio',
        'amount' => 300
    ]
];

//Adding a new account
$checkingAccounts["547-52-6559"] = [
    'holder' => 'Mike',
    'amount' => 900
];

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

$checkingAccounts['460-61-7961'] = withdraw($checkingAccounts['460-61-7961'], 100);
$checkingAccounts['526-02-9692'] = deposit($checkingAccounts['526-02-9692'], 1000);


foreach($checkingAccounts as $SSN => $account){
    showMsg("$SSN from {$account['holder']} have \${$account['amount']}");
}

