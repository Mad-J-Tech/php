<?php

 $fizznum_str = $_POST["FizzNum"];
 $buzznum_str = $_POST["BuzzNum"];

 $fizznum = (int)$fizznum_str;
 $buzznum = (int)$buzznum_str;

 $fizznum_float = (float)$fizznum_str;
 $buzznum_float = (float)$buzznum_str;


?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>FizzBuzz問題</title>
</head>
<body>
  <form class="" action="#" method="post">
    <p>
      FizzNum:　<input type="text" name="FizzNum" value="整数値を入力してください" size="30">
    </p>
    <p>
      BuzzNum: <input type="text" name="BuzzNum" value="整数値を入力してください" size="30">
    </p>
    <p>
      <input type="submit" name="" value="実行">
    </p>
  </form>
  <p>【出力】</p>
  <?php if($fizznum == 0 || $buzznum ==0 ): ?>
    <p><?php echo "整数値を入力してください" ?></p>
  <?php elseif($fizznum != $fizznum_float || $buzznum != $buzznum_float): ?>
    <p><?php echo "整数値を入力してください" ?></p>
  <?php else: ?>
    <?php for($i=1;$i<100;$i++): ?>
      <?php if($i%$fizznum == 0 && $i%($fizznum*$buzznum) !=0 ): ?>
        <p><?php echo "Fizz ".$i; ?></p>
      <?php elseif($i%$buzznum == 0 && $i%($fizznum*$buzznum) !=0 ):?>
        <p><?php echo "Buzz ".$i; ?></p>
      <?php elseif($i%($fizznum*$buzznum) ==0 ): ?>
        <p><?php echo "FizzBuzz ".$i; ?></p>
      <?php endif; ?>
    <?php endfor; ?>
  <?php endif; ?>
</body>

</html>
