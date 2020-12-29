<!DOCTYPE html>
<html>
<head>
      <meta charset = "utf-8">
      <title>FizzBuzz問題</title>
</head>
<body>
  <form method = "post">
    <p>
      FizzNum:　<input type = "text" name = "FizzNum" placeholder = "整数値を入力してください" size = "30">
    </p>
    <p>
      BuzzNum: <input type = "text" name = "BuzzNum" placeholder = "整数値を入力してください" size = "30">
    </p>
    <p>
      <input type = "submit" name = "submit" value = "実行">
    </p>
  </form>
  <p>【出力】</p>
  <?php 
  $fizznum = mb_convert_kana($_POST["FizzNum"],"n");
  $buzznum = mb_convert_kana($_POST["BuzzNum"],"n");

  if($_POST["submit"] === "実行"){
    if((int)$fizznum === 0 || (int)$buzznum === 0){
      echo "<p>整数値を入力してください</p>";
    }elseif((int)$fizznum != (float)$fizznum || (int)$buzznum != (float)$buzznum ){
      echo "<p>整数値を入力してください</p>";
    }else{
      for($i=1; $i<100; $i++){
        if($i % $fizznum === 0 && $i % ($fizznum * $buzznum) != 0 ){
          echo "<p>Fizz ".$i."</p>";
        }elseif($i % $buzznum === 0 && $i % ($fizznum * $buzznum) != 0 ){
          echo "<p>Buzz ".$i."</p>";
        }elseif($i % ($fizznum * $buzznum) === 0 ){
          echo "<p>FizzBuzz ".$i."</p>";
        }
      }
    }
  }

   ?>

</body>

</html>
