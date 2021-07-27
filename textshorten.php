<?php 
function textShorten($text, $limit){
  if (strlen($text) > $limit) {
    $maxLength = 14;
    return substr($text, 0, $limit). " ...";
} else {
  return $text;
}

}
?>
