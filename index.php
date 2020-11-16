<?php 

//count_chars 

echo "<table border = '1'>";
   echo "<tr>";
      echo "<th>Funtion</th>";
      echo "<th>Result</th>";
   echo "</tr>";

   
   $str1 = "Mohammad yacoub";
   $str2 = "orange Academy";
   $strtoupper = strtoupper($str1);

   echo "<tr>";
      
      echo  "<td>strtoupper</td>";
      echo  "<td>$strtoupper</td>";

   echo "</tr>";

      $strtolower = strtolower($str1);
     
   
   echo "<tr>";
      
      echo  "<td>strtolower</td>";
      echo  "<td>$strtolower</td>";

   echo "</tr>";

   $strtouc = ucwords($str1);

   echo "<tr>";
      
      echo  "<td>strtouc</td>";
      echo  "<td>$strtouc</td>";

   echo "</tr>";

   $strto1uc = ucfirst($str1);

   echo "<tr>";
      
      echo  "<td>strto1uc</td>";
      echo  "<td>$strto1uc</td>";

   echo "</tr>";

   $smpstr = "082307";
   //$split1 = implode(":", $smpstr, 2)
   $split1 = substr(chunk_split($smpstr, 2 ,':'), 0, -1);


   echo "<tr>";
      
      echo  "<td>split</td>";
      echo  "<td>$split1</td>";

   echo "</tr>";

   $smpstr2 = "The quick brown fox jumps over lazy dog";
   $wordcheck = "jumps";

   if(strpos($smpstr2 ,$wordcheck )){
      $check ="True";}
   else {
      $check ="False";
   }
   
   echo "<tr>";
      
      echo  "<td>check</td>";
      echo  "<td>$check</td>";

   echo "</tr>";

   $varnum = 2020;
   $tostr = strval($varnum);
   $sumcheck = $tostr . "20";
    
   echo "<tr>";
      
      echo  "<td>tostrin</td>";
      echo  "<td>$sumcheck</td>";

   echo "</tr>";

   $smpstr3 = "www.google.com/mohammad/yacoub/index.php";
   $myFile = pathinfo($smpstr3);
   $basename = $myFile['basename'];

    echo "<tr>";
      
      echo  "<td>basename</td>";
      echo  "<td>$basename</td>";

   echo "</tr>";

   $email = "Ayham@example.com";
   $parts = explode("@", $email);
   $username = $parts[0];

   echo "<tr>";
      
      echo  "<td>firstname</td>";
      echo  "<td>$username</td>";

   echo "</tr>";

   $smpstr4 = "Ayham@example.com";
   $last3 = substr($smpstr4 , -3);

   echo "<tr>";
      
      echo  "<td>lastthree</td>";
      echo  "<td>$last3</td>";

   echo "</tr>";

   $val1 = 65.45 ; 
   $val2 = 104.35 ;
   $valres = $val1 + $val2 ;
   $valfor = number_format($valres, 2);

   echo "<tr>";
      
      echo  "<td>number_format</td>";
      echo  "<td>$valfor</td>";

   echo "</tr>";

   $smpstr5 = "123456789ABCDEFGHIJKLMNOPabcdefghijklm";
   $num = substr(str_shuffle($smpstr5), 0 , 6);

   echo "<tr>";
      
      echo  "<td>str_shuffle6</td>";
      echo  "<td>$num</td>";

   echo "</tr>";

   $smpstr6 = "123456789ABCDEFGHIJKLMNOPabcdefghijklm";
   $rdm="6789";
   $rdchoic = substr(str_shuffle($rdm), 0 , 1);
  // $rdmnum = intval($rdchoic);
   $num2 = substr(str_shuffle($smpstr6), 0 , $rdchoic);

   echo "<tr>";
      
      echo  "<td>str_shuffle(6,7,8,9)</td>";
      echo  "<td>$num2</td>";

   echo "</tr>";

   $smld1 = "the quick brown fox jumps over the lazy dog";
   $repdata = str_replace("the","That", $smld1  );

   echo "<tr>";
      
      echo  "<td>str_shuffle(6,7,8,9)</td>";
      echo  "<td>$repdata</td>";

   echo "</tr>";

   $str3 = "foottbaall";
   $str4 = "footdbffll";

   $pos = strspn($str3,$str4) ; 

   $res = 'First difference at position : ' . $pos ."  " . '"' . $str3[$pos] . '"' . " vs " . '"' .  $str4[$pos] .'"' ;

   echo "<tr>";
      
   echo  "<td>posdiff</td>";
   echo  "<td>$res</td>";

   echo "</tr>";

   $sample1 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky." ;

   $expsam1 = explode("\n" , $sample1);
   ob_start();
   var_dump($expsam1);
   $result = ob_get_clean();
   //($expsam1);

   echo "<tr>";
      
   echo  "<td>vardump</td>";
   echo  "<td>$result</td>";

   echo "</tr>";

   $smpstr7 = "www.google.com/mohammad/yacoub/index.php";
   $myFile2 = pathinfo($smpstr7);
   $basename2 = $myFile['basename'];
   $filename = explode(".", $basename2);

    echo "<tr>";
      
      echo  "<td>filename</td>";
      echo  "<td>$filename[0]</td>";

   echo "</tr>";

   $char = "Z";
   $nxtchar = ++$char;

   if(strlen($nxtchar) > 1){
      $nxtchar = $nxtchar[0];
   }

   echo "<tr>";
      
      echo  "<td>next char</td>";
      echo  "<td>$nxtchar</td>";

   echo "</tr>";

   $smpstr8 = "rayy@example.com";
   $strexp2 = explode("@",$smpstr8);

   echo "<tr>";
      
      echo  "<td>part of string</td>";
      echo  "<td>$strexp2[1]</td>";

   echo "</tr>";

   $smpstr9 = "rayy@example.com";
   $ressmp9 = bin2hex($smpstr9);

   echo "<tr>";
      
   echo  "<td>bin2hex</td>";
   echo  "<td>$ressmp9</td>";

   echo "</tr>";

   $oldstr = "The Brown Fox";
   $str_to_insert = "quick ";

   $newstr = substr_replace($oldstr, $str_to_insert, 4, 0);

   echo "<tr>";
      
   echo  "<td>insert string</td>";
   echo  "<td>$newstr</td>";

   echo "</tr>";

   $smpstr10 = "The first World";
   $expstr10 = explode(" ", $smpstr10);

   echo "<tr>";
      
   echo  "<td>insert string</td>";
   echo  "<td>$expstr10[0]</td>";

   echo "</tr>";

   $smpstr11 = "000547023.24";
   $rmvzero = trim($smpstr11 , "0");

   echo "<tr>";
      
   echo  "<td>insert string</td>";
   echo  "<td>$rmvzero</td>";

   echo "</tr>";

   $smpstr12 = "The quick brown fox jumps over the lazy dog";
   $smp12res = str_replace("fox", " ", $smpstr12);

   echo "<tr>";
      
   echo  "<td>insert string</td>";
   echo  "<td>$smp12res</td>";

   echo "</tr>";

   $smpstr13 = "The quick/ brown fox jumps over the lazy dog///";

   $smp13res = str_replace("/", "", $smpstr13);

  // $str = rtrim($str, '/');

   echo "<tr>";
      
   echo  "<td>insert string</td>";
   echo  "<td>$smp13res</td>";

   echo "</tr>";

   $smpstr14 = "htttp://www.example.com/5478631";

   $id = substr($smpstr14, strrpos($smpstr14, '/') +1);

   echo "<tr>";
      
   echo  "<td>insert string</td>";
   echo  "<td>$id</td>";

   echo "</tr>";

   $smpstr15 = '\"\1+2/3*3:23/4*3';
   $new_str = str_replace(str_split('\\/:+*?"<>|'), '', $smpstr15);

   echo "<tr>";
      
   echo  "<td>insert string</td>";
   echo  "<td>$new_str</td>";

   echo "</tr>";

   $sentence = "The quick brown fox jumps over the lazy dog"; 
   $senres = implode(' ', array_slice(explode(' ', $sentence), 0, 5));
   
   echo "<tr>";
      
   echo  "<td>insert string</td>";
   echo  "<td>$senres</td>";

   echo "</tr>";

   $smpstr16 = '2,543.12';
   $new_str2 = str_replace(str_split(','), '', $smpstr16);

   echo "<tr>";
      
   echo  "<td>insert string</td>";
   echo  "<td>$new_str2</td>";

   echo "</tr>";

   $cah = "a";
   $allchar = "a";
   for($i=0; $i<=24 ; $i++){
      $char = ++$cah;
      $allchar = $allchar . $char ;
   }

   
   echo "<tr>";
      
   echo  "<td>insert string</td>";
   echo  "<td>$allchar</td>";

   echo "</tr>";





?>

