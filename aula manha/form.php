<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//         $cor = $_POST["cor"];
//         $hobbies = $_POST["hobbies"];

//         echo "sua cor favorita é " . htmlspecialchars($cor) . "<br>";

//         if (!empty($hobbies)) {
//           echo "seus hobbies são: <br> ";

//           foreach ($hobbies as $hobby) {
//           echo "- ". htmlspecialchars($hobby) . "<br>";
//       }
//     }else {
//       echo "voce não escolheu nenhum hobby.";
//     }}

      //   if($_SERVER["REQUEST_METHOD"] == "POST"){
      //     $num1 = $_POST['num1'];
      //     $num2 = $_POST['num2'];
      //     $num3 = $_POST['num3'];


      //     if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
      //     $media = ($num1 + $num2 + $num3) / 3;
      //     echo "a media é " . $media;
      //     } else {
      //       echo "por favor, insira um numero valido.";
      //   }
      // }

      if($_SERVER["REQUEST_METHOD"] == "POST"){
           $cor = $_POST["pais"];

           echo "seu país de destino é " . htmlspecialchars($cor) . "<br>";
      }else {
              echo "voce não escolheu nenhum país.";
            }
      ?>
</html>