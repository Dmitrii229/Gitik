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
if  (isset($_GET ['nikitka'])){
    //var_dump($_GET ['nikitka']);

    $unite=explode(' ',$_GET['nikitka']);
    UnFunc($unite);

    echo implode(' ',$unite);
    
    }
    function UnFunc(&$unite){
    for($i = 0; $i < count($unite); $i++){
        if(($i % 2)>0){
       $unite[$i] =  strtoupper($unite[$i]);
        }
    }
        }