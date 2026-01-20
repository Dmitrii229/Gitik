<?php require('BD.php');?>
<?php require('header.php');?>
<?php
 $sql='SELECT * FROM `users`';
$result = mysqli_query($mysqli,$sql);

?>

     <table>
        <thead>
            <tr>
    
        <th>id</th>
        <th>Login</th>
        <th>Email</th>
        <th>role</th>
        <th>присвоить роль читателя</th>
    </tr>
       <?php  while ($row=mysqli_fetch_assoc($result)): ?>
        <tr>
            

            <th><?php echo $row ['id']?></th>
            <th><?php echo $row ['login']?></th>
            <th><?php echo $row ['email']?></th>
            <th><?php echo $row ['role']?></th>
            <th><a href="Keri.php?role=<?$row['ID'];?>">ЕГОР ЛОХ</a></th>


        </tr>
<?php endwhile; ?>
            </table>

            
<div class="container2">

<a>
    <a href="content.php" class="btn btn-primary">Друзья</a>
</div>

<?php
// support_button.php
?>
<?php
$telegram = 'support_bot';
?>
<form action="https://web.telegram.org/a/#8502192215<?= htmlspecialchars($telegram) ?>" method="get" target="_blank">
    <button type="submit" style="
        background: #ff0000ff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
    ">
        📞 Написать в поддержку
    </button>
</form>