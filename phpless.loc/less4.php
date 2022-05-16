<? 
// $ruhsat = true;
// $hisob = 0;
// while($ruhsat){
//     $hisob++;
//     if ($hisob == 5) {
//         continue;
//     }
//     echo $hisob;
//     if ($hisob == 10) {
//         $ruhsat = false;
//         break;
//     }
// }
// echo "salom";
// $hisob = 1;
// while ($ruhsat and $hisob <= 10) {
//     echo $hisob;
//     $hisob++;
// }

// $hisob = 10;
// while ($hisob <= 100) {
//     echo $hisob;
//     $hisob += 10;
// }
// $hisob = 10;

// do {
//     echo $hisob;
//     $hisob += 10;
// } while ($hisob < 101);

// for ($hisob = 10; $hisob <= 50; $hisob = $hisob + 10) { 
//     echo $hisob;
// }


$days = [
    "Dushanba",
    "seshanba", 
    "chorshanba", 
    "payshanba", 
    "juma", 
    "shanba", 
    "yakshanba"
];

// foreach ($days as $ind => $elem) {
//     echo $ind ." ";
// }
// echo $days[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Haftadagi ish kunlari</h2>
    <ul>
        <?
            foreach ($days as $ind => $elem) {
                if($elem == "juma"){
                    continue;
                }else if($ind == 6){
                    break;
                };
                echo "<li>".$ind.") ".$elem."</li>";
            }
        ?>
    </ul>
    
</body>
</html>