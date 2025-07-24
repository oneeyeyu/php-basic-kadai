<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
        $user_name = 'yuutarou';
        echo $user_name;
        echo '<br>';
        $user_name = 'kotarou';
        echo $user_name;
       ?>
   </p>
   <p>
    <?php
        $number = 3;
        echo $number - 1.2;
        echo '<br>';
        $myname = 'yu';
        echo "私の名前は{$myname}です。";
    ?>
   </p>
</body>

</html>