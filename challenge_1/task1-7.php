<HTML>
<head></head>
      <body>
<?php
	var_dump($_GET);

  $total = ($_GET["total"]);
  $num = ($_GET["num"]);
  $section = ($_GET["section"]);
  
  
  
  $section1 = '雑貨';
  $section2 = '生鮮食品';
  $section3 = 'その他';
  
  
  if ($section == 1) {
    echo '種別：'.$section1.'<br>'.'<br>';
  } elseif ($section == 2) {
    echo '種別：'.$section2.'<br>'.'<br>';
  } else {
    echo '種別：'.$section3.'<br>'.'<br>';
  }
  
  echo '総額：'.$total.'円'.'<br>'.'個数：'.$num.'個'.'<br>';
  echo '単価：'.$total / $num.'円'.'<br>'.'<br>';
  
  $point5 = floor($total * 0.05);
  $point4 = floor($total * 0.04);
  $point= floor($total * 0.01);
  
  if ($total >= 5000) {
    echo '今回のポイントは'.$point5.'ポイントです。';
  } elseif ($total >= 3000) {
    echo '今回のポイントは'.$point4.'ポイントです。';
  } else {
    echo '今回のポイントは'.$point.'ポイントです。';
  }
?>
      </body>
</HTML>