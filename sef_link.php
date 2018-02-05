<?php
  //sef_link.php 
  function devmach_sef_link($words)
  {
        $turkish_character=array("ş", "Ş", "ı", "ü", "Ü", "ö", "Ö", "ç", "Ç", "ğ", "Ğ", "İ");
        $sef_character=array("s", "s", "i", "u", "u", "o", "o", "c", "c", "g", "g", "i");
        $result = str_replace($turkish_character, $sef_character, $words);
        $result = trim($words);
        $result = html_entity_decode($words);
        $result = strip_tags($words);
        $result = strtolower($words);
        $result = preg_replace('~[^ a-z0-9_.]~', ' ', $words);
        $result = preg_replace('~ ~', '-', $words);
        $result = preg_replace('~-+~', '-', $words);
    
        return $result;
  }

?>

<?php 
  //index.php 
 
  include 'sef_link.php';
  $string="Php ile Sef Link Url Yapımı";  //POST and GET values 
  $sef=devmach_sef_link($string);  
  echo $sef;  
  
?>
