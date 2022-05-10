<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<!-- PHP start -->
  <main>

    <?
    // $name = "john";
    // echo "salom $name";
    ?>

    <!-- <h1 class="title">Salom <?= $name; ?></h1> -->


    <?
    // $arr = [1,2,3,4,5,6];
    // echo "<pre>";
    // var_dump($arr);  //echo tashqari browzerga chiqarish imkoniyati
    // print_r($arr);  //echo tashqari browzerga chiqarish imkoniyati
    // echo "</pre>";  


    // $arr = ['html', 'css', 'js', 'php'];

    // for ($i=0; $i < count($arr); $i++) { 
    //   $x = strtoupper($arr[$i]); //harflarni kattartirish uchun
    //   echo $x . "<br>";
    // }

    // $a =  4;
    // if ($a > 6) {
    //   echo " $a > 6";
    // }elseif ($a < 6) {
    //   echo "$a < 6";
    // }elseif ($a == 6) {
    //   echo "$a = 5";
    // }else{
    //   echo "ERROR";
    // }


    // echo date('l jS \of  F Y h:i:s A'); //  Monday 8th of August 2005 03:12:46 PM ///bu kunni vaqtni shunaqa chiqaradi //
    // echo "<br>";
    // echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
    // echo "<br>";

    // echo date(DATE_RFC2822);

    // echo date("d"); //Bu sanani chiqaradi
    // echo date("D"); //Bu hafta kunlari chiqaradi
    // echo date("j"); //Bu kunlani oldida nollarsiz chiqaradi
    // echo date("l(lovercase 'L')"); 

    // echo date('W');
    // echo date('d W F \y\i\l');
    // date_default_timezone_set("Asia/Tashkent"); //Bu vaqtni joyini aniqlaydi
    // echo date('Y \-\ \ F \o\y\i \s\o\a\t H:i:s');
    ?>


    <!-- 
    <select>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option> -->

    <?
    // for ($i=0; $i <= 78 ; $i++) { 
    //   echo "<option>$i</option>";
    // }

    ?>

    <? for ($i = 0; $i < 10; $i++) : ?>
      <!-- <option><?= $i ?></option> -->
    <? endfor; ?>
    <!-- </select> -->





    <?
    // $obj = [
    //   "name" => "jhon",
    //   "age" => 12,
    //   "adrees" => [
    //     "city" => "tashkent",
    //     "tel" => "+998946465"
    //   ]
    // ];
    // foreach ($obj as $key => $value) {
    //   if (gettype($value) == "array") {
    //     foreach ($value as $kalit => $qiymat) {
    //       echo "$kalit" . " => " . $qiymat . "<br>";
    //     }
    //   } else {
    //     echo $key . " => " . $value . "<br>";
    //   }
    // }

    ?>

  
    
  </main>
</body>

</html>