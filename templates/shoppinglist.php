<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8"/>
    <title>To do App</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>
<body>
<h1>To Do List</h1>
<form method="post" action="/addItem" class="input-group mb-3 w-25">
    <button class="input-group-text" id="inputGroup-sizing-default" type="submit">Add Item</button>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="item">
</form>
    <?php echo \App\ViewHelpers\ShoppingListViewHelper::displayShoppingList($shoppinglist)?>
<div>
    <button class="input-group-text" id="inputGroup-sizing-default" type="submit"><a href="purchaseditems">See Purchased Items</a></button>
</div>
</body>
</html>
