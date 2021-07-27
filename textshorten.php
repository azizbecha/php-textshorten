<?php 
function textShorten($text, $limit){
  
  // If the string length is greater than limit: 
  if (strlen($text) > $limit) {
    $maxLength = 14;
    return substr($text, 0, $limit). " ...";
} else {
  return $text;
}

}
?>
