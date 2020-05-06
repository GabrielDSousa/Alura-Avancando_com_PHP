<?php
require 'deposit.php';
require 'withdraw.php';
require 'routines.php';

$checkingAccounts = allAccounts();

showMsg("------------All Accounts---------------");
showAllAccounts();
showMsg("------------Withdraw---------------");
showMsg("Withdraw correct");
$checkingAccounts['460-61-7961'] = withdraw($checkingAccounts['460-61-7961'], 100);
showMsg("Withdraw negative number");
$checkingAccounts['460-61-7961'] = withdraw($checkingAccounts['460-61-7961'], -100);
showMsg("Withdraw amount not valid");
$checkingAccounts['460-61-7961'] = withdraw($checkingAccounts['460-61-7961'], 1000);
showMsg("------------Deposit---------------");
showMsg("Deposit correct");
$checkingAccounts['526-02-9692'] = deposit($checkingAccounts['526-02-9692'], 1000);
showMsg("Deposit negative number");
$checkingAccounts['526-02-9692'] = deposit($checkingAccounts['526-02-9692'], -1000);
showMsg("------------Deleting a account---------------");
showAllAccounts();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Accounts on Simple Bank</h1>
    <ul>
        <?php $checkingAccounts = allAccounts();
        foreach ($checkingAccounts as $account){ ?>
            <li><?= $account['holder']?> with $<?= $account['amount'] ?> </li>
        <?php }?>
    </ul>

</body>
</html>
