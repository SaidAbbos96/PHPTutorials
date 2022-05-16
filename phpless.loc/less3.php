<? 
// $num = 5;

// if($num > 5){
//     $res = "katta";
// }else if($num < 5){
//     $res = "Kichik";
// }else if($num == 6){
//     $res = "teng";
// }else{
//     $res = "defult";
// };

// echo $res;

// $num = 5;

// if($num == 6)
//     $res = "teng";
// elseif($num < 5)
//     $res = "Kichik";
// else if($num > 5 )
//     $res = "katta";
// else
//     $res = "5 ga teng";

// echo $res;


// $box = false;
// if(!$box){
//     echo $box;
//     var_dump($box);
// }


// $box = 10;
// if($box and ($box > 8 and $box == 11)){
//     var_dump($box);
//     echo "<br>".$box;
// }


// if(false && (false && false)){ 
//     var_dump($box);
//     echo "<br>".$box;
// }

// $text = "hello";
// if($text or $text == "salom" or $text == "Hello" or $text == "prevet"){
//     var_dump($text);
//     echo "<br>".$text;
// }

// $text = "Hello";
// if($text && ($text == "salom" or $text == "Hello" || $text == "prevet")){
//     var_dump($text);
//     echo "<br>".$text;
// }


// $text = "hello";
// switch ($text) {
//     case "salom":
//         $res = "Salom Uzbek";
//         break;
//     case "hello":
//         $res = "Hi amerekos !";
//         break;
//     case "prevet":
//         $res = "Dobrey den ruskiy";
//         break;
//     default:
//         $res = "Salom shunchaki";
//         break;
// }

//     var_dump($res);
//     echo "<br>".$res;


// $text = "hello";
// $res = match($text){
//     "salom" => "Salom Uzbek",
//     "hello" => "Hi amerekos !",
//     "prevet" => "Dobrey den ruskiy",
//     defult => "Salom shunchaki",
// };


// var_dump($res);
// echo "<br>".$res;


// $num = 5;
// // if () {
// //     $natija = "teng 5 ga";
// // } else {
// //     $natija = "Boshqa son";
// // }
// $natija = ($num == 5) ? "teng 5 ga": "Boshqa son";
// var_dump($natija);
// echo "<br>".$natija; 

$books = false;
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
    <h2>List of books</h2>
    <!-- <ul>
        <?
            if($books):
        ?>
        <li>Kitob 1</li>
        <li>Kitob 2</li>
        <? else: ?>
            <li>Kitoblar topilmadi !</li>
        <? endif; ?>
    </ul> -->
    <ul>
        <?
            if($books):
                echo "<li>Kitob 1</li>
                <li>Kitob 2</li>";
            else: ?>
            <li>Kitoblar topilmadi !</li>
        <? endif; ?>
    </ul>
</body>
</html>