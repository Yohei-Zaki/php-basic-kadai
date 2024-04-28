

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php
    // 配列、変数 
    $nums  = [15, 4, 18, 23, 10];

    function sort_2way($array, $order){
        // $orderがTRUEの場合
        if($order === TRUE){
        
            //昇順に並び替え 
            sort($array);
            // 取り出して出力
            echo('昇順に出力します。' . '<br>');
            foreach($array as $num){
                echo($num) . '<br>';
            }
            } else{
            // 降順に並び替え 
            rsort($array);
            // 取り出して出力
            echo('降順に出力します。' . '<br>');
            foreach($array as $num){
                echo ($num) . '<br>';
        }
    }
    }
    sort_2way($nums, TRUE);
    sort_2way($nums, FALSE);

    ?>
    </p>
</body>
</html>