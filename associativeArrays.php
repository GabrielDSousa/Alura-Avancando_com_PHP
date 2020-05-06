<?php

//Simulating a simple bank account

$checkingAccounts = [
    "526-02-9692" => [
        'holder' => 'John',
        'ammount' => 3000
    ],
    "115-07-0759" => [
        'holder' => 'Marie',
        'ammount' => 1000
    ],
    "460-61-7961" => [
        'holder' => 'Caio',
        'ammount' => 300
    ]
];

//Adding a new account
$checkingAccounts["547-52-6559"] = [
    'holder' => 'Mike',
    'ammount' => 900
];

foreach($checkingAccounts as $SSN => $account){
    echo "$SSN from ".$account['holder'].PHP_EOL;
}
