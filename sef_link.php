<?php
  //sef_link.php
  class sef_link_class{

    private $t_c=array("ş", "Ş", "ı", "ü", "Ü", "ö", "Ö", "ç", "Ç", "ğ", "Ğ", "İ");
    private $s_c=array("s", "s", "i", "u", "u", "o", "o", "c", "c", "g", "g", "i");
    private $words="";
  function devmach_sef_link($words)
  {

        $result = str_replace($this->t_c, $this->s_c,$words);
        $result = trim($words);
        $result = html_entity_decode($words);
        $result = strip_tags($words);
        $result = strtolower($words);
        $result = preg_replace('~[^ a-z0-9_.]~', ' ', $words);
        $result = preg_replace('~ ~', '-', $words);
        $result = preg_replace('~-+~', '-', $words);

        return $result;
  }

}





  $sef_class=new sef_link_class;
  $string="dsadçööğğşşüü";
  $sef=$sef_class->devmach_sef_link($string);
  echo $sef;

?>
 
