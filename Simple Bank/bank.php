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
showMsg("------------All Accounts---------------");
showAllAccounts();

