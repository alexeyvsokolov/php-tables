<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Таблицы PHP</title>
</head>

<body>
    <table class="table">
        <caption>1. Таблица истинности PHP</caption>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
        </tr>
        <tr>
            <th><?php echo $a = 0; ?></th>
            <th><?php echo $b = 0; ?></th>
            <td><?php echo (!$a) ? "True" : "False"; ?></td>
            <td><?php echo ($a || $b) ? "True" : "False"; ?></td>
            <td><?php echo ($a && $b) ? "True" : "False"; ?></td>
            <td><?php echo ($a xor $b) ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th><?php echo $a = 0; ?></th>
            <th><?php echo $b = 1; ?></th>
            <td><?php echo (!$a) ? "True" : "False"; ?></td>
            <td><?php echo ($a || $b) ? "True" : "False"; ?></td>
            <td><?php echo ($a && $b) ? "True" : "False"; ?></td>
            <td><?php echo ($a xor $b) ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th><?php echo $a = 1; ?></th>
            <th><?php echo $b = 0; ?></th>
            <td><?php echo (!$a) ? "True" : "False"; ?></td>
            <td><?php echo ($a || $b) ? "True" : "False"; ?></td>
            <td><?php echo ($a && $b) ? "True" : "False"; ?></td>
            <td><?php echo ($a xor $b) ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th><?php echo $a = 1; ?></th>
            <th><?php echo $b = 1; ?></th>
            <td><?php echo (!$a) ? "True" : "False"; ?></td>
            <td><?php echo ($a || $b) ? "True" : "False"; ?></td>
            <td><?php echo ($a && $b) ? "True" : "False"; ?></td>
            <td><?php echo ($a xor $b) ? "True" : "False"; ?></td>
        </tr>
    </table>

    <br>

    <table class="table">
        <caption>2. Гибкое сравнение в PHP</caption>
        <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>
        <tr>
            <th>true</th>
            <td><?php echo (true == true) ? "True" : "False"; ?></td>
            <td><?php echo (true == false) ? "True" : "False"; ?></td>
            <td><?php echo (true == 1) ? "True" : "False"; ?></td>
            <td><?php echo (true == 0) ? "True" : "False"; ?></td>
            <td><?php echo (true == -1) ? "True" : "False"; ?></td>
            <td><?php echo (true == "1") ? "True" : "False"; ?></td>
            <td><?php echo (true == null) ? "True" : "False"; ?></td>
            <td><?php echo (true == "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>false</th>
            <td><?php echo (false == true) ? "True" : "False"; ?></td>
            <td><?php echo (false == false) ? "True" : "False"; ?></td>
            <td><?php echo (false == 1) ? "True" : "False"; ?></td>
            <td><?php echo (false == 0) ? "True" : "False"; ?></td>
            <td><?php echo (false == -1) ? "True" : "False"; ?></td>
            <td><?php echo (false == "1") ? "True" : "False"; ?></td>
            <td><?php echo (false == null) ? "True" : "False"; ?></td>
            <td><?php echo (false == "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>1</th>
            <td><?php echo (1 == true) ? "True" : "False"; ?></td>
            <td><?php echo (1 == false) ? "True" : "False"; ?></td>
            <td><?php echo (1 == 1) ? "True" : "False"; ?></td>
            <td><?php echo (1 == 0) ? "True" : "False"; ?></td>
            <td><?php echo (1 == -1) ? "True" : "False"; ?></td>
            <td><?php echo (1 == "1") ? "True" : "False"; ?></td>
            <td><?php echo (1 == null) ? "True" : "False"; ?></td>
            <td><?php echo (1 == "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>0</th>
            <td><?php echo (0 == true) ? "True" : "False"; ?></td>
            <td><?php echo (0 == false) ? "True" : "False"; ?></td>
            <td><?php echo (0 == 1) ? "True" : "False"; ?></td>
            <td><?php echo (0 == 0) ? "True" : "False"; ?></td>
            <td><?php echo (0 == -1) ? "True" : "False"; ?></td>
            <td><?php echo (0 == "1") ? "True" : "False"; ?></td>
            <td><?php echo (0 == null) ? "True" : "False"; ?></td>
            <td><?php echo (0 == "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>-1</th>
            <td><?php echo (-1 == true) ? "True" : "False"; ?></td>
            <td><?php echo (-1 == false) ? "True" : "False"; ?></td>
            <td><?php echo (-1 == 1) ? "True" : "False"; ?></td>
            <td><?php echo (-1 == 0) ? "True" : "False"; ?></td>
            <td><?php echo (-1 == -1) ? "True" : "False"; ?></td>
            <td><?php echo (-1 == "1") ? "True" : "False"; ?></td>
            <td><?php echo (-1 == null) ? "True" : "False"; ?></td>
            <td><?php echo (-1 == "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>"1"</th>
            <td><?php echo ("1" == true) ? "True" : "False"; ?></td>
            <td><?php echo ("1" == false) ? "True" : "False"; ?></td>
            <td><?php echo ("1" == 1) ? "True" : "False"; ?></td>
            <td><?php echo ("1" == 0) ? "True" : "False"; ?></td>
            <td><?php echo ("1" == -1) ? "True" : "False"; ?></td>
            <td><?php echo ("1" == "1") ? "True" : "False"; ?></td>
            <td><?php echo ("1" == null) ? "True" : "False"; ?></td>
            <td><?php echo ("1" == "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>null</th>
            <td><?php echo (null == true) ? "True" : "False"; ?></td>
            <td><?php echo (null == false) ? "True" : "False"; ?></td>
            <td><?php echo (null == 1) ? "True" : "False"; ?></td>
            <td><?php echo (null == 0) ? "True" : "False"; ?></td>
            <td><?php echo (null == -1) ? "True" : "False"; ?></td>
            <td><?php echo (null == "1") ? "True" : "False"; ?></td>
            <td><?php echo (null == null) ? "True" : "False"; ?></td>
            <td><?php echo (null == "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>"php"</th>
            <td><?php echo ("php" == true) ? "True" : "False"; ?></td>
            <td><?php echo ("php" == false) ? "True" : "False"; ?></td>
            <td><?php echo ("php" == 1) ? "True" : "False"; ?></td>
            <td><?php echo ("php" == 0) ? "True" : "False"; ?></td>
            <td><?php echo ("php" == -1) ? "True" : "False"; ?></td>
            <td><?php echo ("php" == "1") ? "True" : "False"; ?></td>
            <td><?php echo ("php" == null) ? "True" : "False"; ?></td>
            <td><?php echo ("php" == "php") ? "True" : "False"; ?></td>
        </tr>
    </table>

    <br>

    <table class="table">
        <caption>3. Жёсткое сравнение в PHP</caption>
        <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>
        <tr>
            <th>true</th>
            <td><?php echo (true === true) ? "True" : "False"; ?></td>
            <td><?php echo (true === false) ? "True" : "False"; ?></td>
            <td><?php echo (true === 1) ? "True" : "False"; ?></td>
            <td><?php echo (true === 0) ? "True" : "False"; ?></td>
            <td><?php echo (true === -1) ? "True" : "False"; ?></td>
            <td><?php echo (true === "1") ? "True" : "False"; ?></td>
            <td><?php echo (true == null) ? "True" : "False"; ?></td>
            <td><?php echo (true === "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>false</th>
            <td><?php echo (false === true) ? "True" : "False"; ?></td>
            <td><?php echo (false === false) ? "True" : "False"; ?></td>
            <td><?php echo (false === 1) ? "True" : "False"; ?></td>
            <td><?php echo (false === 0) ? "True" : "False"; ?></td>
            <td><?php echo (false === -1) ? "True" : "False"; ?></td>
            <td><?php echo (false === "1") ? "True" : "False"; ?></td>
            <td><?php echo (false === null) ? "True" : "False"; ?></td>
            <td><?php echo (false === "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>1</th>
            <td><?php echo (1 === true) ? "True" : "False"; ?></td>
            <td><?php echo (1 === false) ? "True" : "False"; ?></td>
            <td><?php echo (1 === 1) ? "True" : "False"; ?></td>
            <td><?php echo (1 === 0) ? "True" : "False"; ?></td>
            <td><?php echo (1 === -1) ? "True" : "False"; ?></td>
            <td><?php echo (1 === "1") ? "True" : "False"; ?></td>
            <td><?php echo (1 === null) ? "True" : "False"; ?></td>
            <td><?php echo (1 === "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>0</th>
            <td><?php echo (0 === true) ? "True" : "False"; ?></td>
            <td><?php echo (0 === false) ? "True" : "False"; ?></td>
            <td><?php echo (0 === 1) ? "True" : "False"; ?></td>
            <td><?php echo (0 === 0) ? "True" : "False"; ?></td>
            <td><?php echo (0 === -1) ? "True" : "False"; ?></td>
            <td><?php echo (0 === "1") ? "True" : "False"; ?></td>
            <td><?php echo (0 === null) ? "True" : "False"; ?></td>
            <td><?php echo (0 === "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>-1</th>
            <td><?php echo (-1 === true) ? "True" : "False"; ?></td>
            <td><?php echo (-1 === false) ? "True" : "False"; ?></td>
            <td><?php echo (-1 === 1) ? "True" : "False"; ?></td>
            <td><?php echo (-1 === 0) ? "True" : "False"; ?></td>
            <td><?php echo (-1 === -1) ? "True" : "False"; ?></td>
            <td><?php echo (-1 === "1") ? "True" : "False"; ?></td>
            <td><?php echo (-1 === null) ? "True" : "False"; ?></td>
            <td><?php echo (-1 === "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>"1"</th>
            <td><?php echo ("1" === true) ? "True" : "False"; ?></td>
            <td><?php echo ("1" === false) ? "True" : "False"; ?></td>
            <td><?php echo ("1" === 1) ? "True" : "False"; ?></td>
            <td><?php echo ("1" === 0) ? "True" : "False"; ?></td>
            <td><?php echo ("1" === -1) ? "True" : "False"; ?></td>
            <td><?php echo ("1" === "1") ? "True" : "False"; ?></td>
            <td><?php echo ("1" === null) ? "True" : "False"; ?></td>
            <td><?php echo ("1" === "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>null</th>
            <td><?php echo (null === true) ? "True" : "False"; ?></td>
            <td><?php echo (null === false) ? "True" : "False"; ?></td>
            <td><?php echo (null === 1) ? "True" : "False"; ?></td>
            <td><?php echo (null === 0) ? "True" : "False"; ?></td>
            <td><?php echo (null === -1) ? "True" : "False"; ?></td>
            <td><?php echo (null === "1") ? "True" : "False"; ?></td>
            <td><?php echo (null === null) ? "True" : "False"; ?></td>
            <td><?php echo (null === "php") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <th>"php"</th>
            <td><?php echo ("php" === true) ? "True" : "False"; ?></td>
            <td><?php echo ("php" === false) ? "True" : "False"; ?></td>
            <td><?php echo ("php" === 1) ? "True" : "False"; ?></td>
            <td><?php echo ("php" === 0) ? "True" : "False"; ?></td>
            <td><?php echo ("php" === -1) ? "True" : "False"; ?></td>
            <td><?php echo ("php" === "1") ? "True" : "False"; ?></td>
            <td><?php echo ("php" === null) ? "True" : "False"; ?></td>
            <td><?php echo ("php" === "php") ? "True" : "False"; ?></td>
        </tr>
    </table>

    <br>

    <table class="table">
        <caption>Выводы о сравнении в PHP</caption>
        <tr>
            <th class="i">Разница между гибким и жестким сравнениями заключается в том, что в гибком сравнении происходит сравнение значений двух операндов, а в жестком сравнении, сравнивается значение и тип операндов.</th>
        </tr>
    </table>
</body>

</html>