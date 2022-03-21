<?php declare(strict_types=1);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
           
<?php




//hi, this php comment sections


            // $name ="ahtraP ahaS atpiD";
            // $email ="dipta196@gmail.com";
            // $number =12485.215;
            // $arryElements =array("dipta","saha",27);

            // echo var_dump($arryElements);
            //  echo strrev($name);

            
            // $number =60; 
            // if ($number<50) {
            //     $totalNumber= $number + 10;
            //     echo $totalNumber;
            // }
            // else{
            //     echo "This $number is Bigger then 50.";
            // }




            // $car= "NO CAR";
            // switch ($car) {
            //     case 'TOYOTA':
            //         echo "I LOVE " . $car;
            //         break;
            //     case 'NISSAN':
            //         echo "I LOVE " . $car;
            //         break;
            //     case 'BMW':
            //         echo "I LOVE " . $car;
            //         break;
                
            //     default:
            //         echo "I LOVE MOTORCYCLE ";
            //         break;
            // }

                    
                    // $a=9;

                    // THis FOR LOOP 

                    // for ($i=1; $i <= 10; $i++) { 
                         
                    //     echo $a. "x".$i. "=".  $a*$i ."<br>";
                     
                    // }

                    //THIS WHILE LOOP
                    // $i=1;
                    // while ($i <= 10) {
                    //     echo $a. "x".$i. "=".  $a*$i ."<br>"; 
                    //     $i++;
                    // }


                    // THis DO WHILE LOOP
                //   do {
                //         echo $a. "x".$i. "=".  $a*$i ."<br>"; 
                //         $i++;
                //     } while ($i <= 10) 




                // Array Function
                 

                // $names= array("Arpita", "Prionty", "Prapto","Aornob", "DIPTA");
                // $arrayLength=count($names);
                // for ($i=0; $i < $arrayLength; $i++){
                //     echo $names[$i]."<br>";

                   
                // }

//Foreach LOop

                // $names= array(
                //     "nameOne"=>"Arpita",
                //     "nameTwo"=> "Prionty", 
                //     "nameThree"=> "Prapto",
                //     "nameFour"=> "Aornob",
                //     "nameFive"=> "DIPTA");
                
                // foreach ($names as $name =>$val ) {
                //     echo $name . " = " .$val . "<br>";
                // }


                // function sum(int $a, int $b) {
                //     return $a + $b;
                //   }
                //   echo sum(5, 1);
                
                // $a =50;
                // $b =10;

                // function addNumbers(){
                //     $GLOBALS['ans'] = $GLOBALS['a'] - $GLOBALS['b'];
                // }
                //     addNumbers();
                //     echo $ans;
                // 
                
                //Constent

                // define("FirstTime","Iam trying to more and more but not resolved ");

                   
                //            echo FirstTime."<br>";
                //            echo pow(8,2),"<br>";
                            
                //             echo "<br>";
                //             echo ceil(5.6);
                //             echo "<br>";
                //             echo floor(5.6);
                //             echo "<br>";
                //             echo round(5.5); echo "<br>";

                //             $string="Hello Kitty";

                //             echo strtoupper($string);
                //             echo "<br>";
                //             echo strtolower($string);
                //             echo "<br>";
                //             echo strlen($string);
                //             echo "<br>";
                //             echo str_replace('Kitty','World',"Hello Kitty");

                //             echo "<br>";

                //             echo "<br>";
                //             echo "------------------------------------------------------------";
                //             echo "------------------------------------------------------------";

                //             echo "<br>";

                //             $array=[20,1,23,4,6,11,7,15,9,10];

                            // sort($array);

                            // $arrayLength= count($array);

                            // for ($i=0; $i <$arrayLength ; $i++) { 
                            //     echo $array[$i];
                            //     echo "<br>";
                            // }


                            // echo "<br>";

                            // echo min($array);
                            // echo "<br>";
                            // print_r($array);

                                    // foreach ($array as $val) {
                                    //    echo $val;
                                    //    echo "<br>";
                                    // }


                                            function myFirstFunction(){
                                                echo "Hi this my first declear function ". "<br>" ;
                                            }
                                            myFirstFunction();


                                            function myWorkFunction($firstPerson,$secondPerson){
                                                echo "Amr Choto Pagol Vai er nam ki jano tumra ". $firstPerson ." R amr nam ki jano". $secondPerson."<br>" ;
                                            }
                                            myWorkFunction("Prapto Saha", "Dipta Saha");
                                            
                                            function addNumber(int $x , int $y){
                                                return $x + $y;
                                            }
                                            echo "<h1>". addNumber(4,5)."</h1>";


                                            $x=6;
                                            $y=4;
                                            function addedNumber(){
                                                $GLOBALS['ans']=$GLOBALS['x']+$GLOBALS['y'];
                                            }
                                            addedNumber();
                                            echo "$ans <br>" ;

                                            function subNumber(){
                                                $GLOBALS['y']=$GLOBALS['x'] - $GLOBALS['y'];
                                            }
                                            subNumber();
                                            echo $y;


                ?>
  
      
</body>
</html>