<?php
// a function that will strip any html or script tags
function preventScript($data)
{
     
     $data = htmlspecialchars($data);
     return $data;
}
?>