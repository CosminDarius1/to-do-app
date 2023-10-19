<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8"/>
    <title>To do App</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h1>Purchased items</h1>
<?php
echo \App\ViewHelpers\ShowPurchasedListVewHelper::showPurchased($shoppinglist)?>
<div>
    <button class="input-group-text" id="inputGroup-sizing-default" type="submit"><a href="shoppinglist">Go back to Shopping List</a></button>
</div>
</body>