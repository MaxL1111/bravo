<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>i-shop.by</title>
    <link href="../../css/style.css" type="text/css" rel="stylesheet">
    <link href="../../css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="/vendor/DataTables/datatables.min.css" type="text/css" rel="stylesheet">
    <script src="../../js/jquery.min.js"></script>
    <script src="/vendor/DataTables/datatables.min.js"></script>
</head>
<body>

<h1>Список таваров.</h1>
<br>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>id</th>
        <th>Нименование</th>
        <th>Категория</th>
        <th>Цена</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>id</th>
        <th>Нименование</th>
        <th>Категория</th>
        <th>Цена</th>
    </tr>
    </tfoot>
    <tbody>
    <?php
        for($i = 0; $i < 30; $i++)
        {
            echo "    <tr>";
            echo "        <td>" . $i . "</td>";
            echo "        <td> товар " . ($i + 1) . "</td>";
            echo "        <td>" . ($i > 15 ? "Комплектующие" : "Компьютеры") ."</td>";
            echo "        <td>" . rand (0, 100). " руб </td>";
            echo "   </tr>";
        }
    ?>
    </tbody>
</table>
<br>
<button type="button" class="btn btn-primary" onclick="history.back()">Назад</button>

<script src="../../js/bootstrap.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/func.js"></script>

</body>
