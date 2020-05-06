<?php
require 'accounts.php'
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
