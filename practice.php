<?php
echo '<img src="images.png" alt="">';
echo "<br>";
$a= mt_rand(1,6);
if($a===1){echo '大吉';
    echo "<br>";
    echo '<img src="img/大吉.png" alt="">';
    echo "<br>";
}elseif($a===2){echo '中吉';
    echo "<br>";
    echo '<img src="img/中吉.jpeg" alt="">';
    echo "<br>";
}elseif($a===3){echo '小吉';
    echo "<br>";
    echo '<img src="img/小吉.png" alt="">';
    echo "<br>";
}elseif($a===4){echo '吉';
    echo "<br>";
    echo '<img src="img/吉.png" alt="">';
    echo "<br>";
}elseif($a===5){echo '凶';
    echo "<br>";
    echo '<img src="img/凶.jpeg" alt="">';
    echo "<br>";
}elseif($a===6){echo '大凶';
    echo "<br>";
    echo '<img src="img/大凶.jpeg" alt="">';
    echo "<br>";}
?>
