<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require_once 'php/connect.php';
?>

<form action="php/create.php" method="post">

    <select name="route" id="route" onchange="test()">
        <option value="из A в B">из A в B</option>
        <option value="из B в A">из B в A</option>
        <option value="из A в B и обратно в А">из A в B и обратно в А</option>
    </select>

    <label for="time" class="text">Выберите время</label>

    <select name="time" id="time" class="AinB" >
        <option value="18:00(из A в B)">18:00(из A в B)</option>
        <option value="18:30(из A в B)">18:30(из A в B)</option>
        <option value="18:45(из A в B)">18:45(из A в B)</option>
        <option value="19:00(из A в B)">19:00(из A в B)</option>
        <option value="19:15(из A в B)">19:15(из A в B)</option>
        <option value="21:00(из A в B)">21:00(из A в B)</option>
    </select>


    <select name="time2" id="time2" class="bina">
        <option value="18:30(из B в A)">18:30(из B в A)</option>
        <option value="18:45(из B в A)">18:45(из B в A)</option>
        <option value="19:00(из B в A)">19:00(из B в A)</option>
        <option value="19:15(из B в A)">19:15(из B в A)</option>
        <option value="19:35(из B в A)">19:35(из B в A)</option>
        <option value="21:50(из B в A)">21:50(из B в A)</option>
        <option value="21:55(из B в A)">21:55(из B в A)</option>
    </select>
    <label for="time" class="text2">Выберете время туда и обратно нажав на CTRL</label>
    <select name="time3" id="time3" multiple="multiple" class="multiple">
        <option value="18:00(из A в B)">18:00(из A в B)</option>
        <option value="18:30(из A в B)">18:30(из A в B)</option>
        <option value="18:45(из A в B)">18:45(из A в B)</option>
        <option value="19:00(из A в B)">19:00(из A в B)</option>
        <option value="19:15(из A в B)">19:15(из A в B)</option>
        <option value="21:00(из A в B)">21:00(из A в B)</option>
        <option value="18:30(из B в A)">18:30(из B в A)</option>
        <option value="18:45(из B в A)">18:45(из B в A)</option>
        <option value="19:00(из B в A)">19:00(из B в A)</option>
        <option value="19:15(из B в A)">19:15(из B в A)</option>
        <option value="19:35(из B в A)">19:35(из B в A)</option>
        <option value="21:50(из B в A)">21:50(из B в A)</option>
        <option value="21:55(из B в A)">21:55(из B в A)</option>
    </select>

    <label for="num">Количество билетов</label>
    <input id="num" name="ticket">
    <button id="button">Посчитать</button>

    <div class="itog">
    </div>

</form>

    <script src="script.js"></script>
</body>
</html>