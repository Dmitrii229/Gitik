<?php require('BD.php');?>
<?php $sql="INSERT INTO `freinds`
    (`firstname`, `name`, `lastname`, `email`, `phone`, `adress`, `user_id`) VALUES (
    '".$_POST['first_name']."',
    '".$_POST['name']."',
    '".$_POST['last_name']."',
    '".$_POST['phone']."',
    '".$_POST['email']."',
    '".$_POST['adress']."',
    '3'
    )";
    //var_dump($sql);//

    $result = mysqli_query($mysqli,$sql);
if (mysqli_errno($mysqli)) echo mysqli_error();
header("Location:http://localhost/Praktika/content.php");
if(isset($_GET['role'])){
    $sql='UPDATE `users` SET `id`='[value-1]',`login`='[value-2]',`password`='[value-3]',`email`='[value-4]',`role`='[value-5]',`created_at`='[value-6]' WHERE 1
}
