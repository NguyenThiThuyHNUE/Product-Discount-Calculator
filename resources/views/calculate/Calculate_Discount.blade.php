<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
@csrf
    <h1>Product Discount Calculator
    </h1>
    <table>
        <tr>
            <td>Product Description: </td>
            <td><input type="text" name="description" placeholder="Mo ta sam pham"></td>
        </tr>
        <tr>
            <td>List Price: </td>
            <td><input type="text" name="price" placeholder="gia niem yet"></td>
        </tr>
        <tr>
            <td>Discount Percent: </td>
            <td><input type="text" name="percent" placeholder="Ti le pham tram"></td>
            <td><p>%</p></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Calculate Discount</button></td>
        </tr>
    </table>
</form>
</body>
</html>
