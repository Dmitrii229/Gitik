<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAR</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="nikitka" id=""> 
    <button
         type="submit"
        class="btn btn-primary">
         GO TO NEXT PAGE
    </button>

    </form>
</body>
</html> 
<?php
$XVI="Иван Васильевич";
$XVIII="Пётр Алексеевич";
$XIX="Николай Павлович";
if  (isset($_GET ['nikitka']))
$vek = $_GET['nikitka'];
 echo'В '. $vek . ' веке царствовал ' . $$vek;