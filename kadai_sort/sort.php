<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];
        function sort_2way($nums,$order){
            if ($order === true){
            sort($nums);
            echo "昇順に表示します<br>";
            foreach($nums as $num){                    
                echo "{$num}<br>";
                }
            }elseif($order === false){
            rsort($nums);
            echo "降順に表示します<br>";
                foreach($nums as $num){                    
                    echo "{$num}<br>";
                }
            }
        }
        $order = true;
            sort_2way($nums,$order);
        $order = false;
            sort_2way($nums,$order);
        ?>
    </p>
</body>

</html>