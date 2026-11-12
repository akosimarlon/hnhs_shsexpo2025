<?php

$i = 1;
echo '<div class="gallery">';
echo nl2br("\n");
  while ($i <= 31) {
    echo '<img src="img/photos/STRAND/ABM/'.$i.'.jpg" alt="Cinque Terre" class="gallery-item" style="width:auto;height:200px;" onclick="openModal(\'modal'.$i.'\', \'ABM_PICS'.$i.'\')">';    
    echo nl2br("\n");
    $i++;
  }                
echo '</div>';
echo nl2br("\n");
echo nl2br("\n");

$k = 1;
while ($k <= 31) {
  echo '<div id="modal'.$k.'" class="modal">';echo nl2br("\n");
     
  echo '        <span onclick="document.getElementById(\'modal'.$k.'\').style.display=\'none\'" class="close">&times;</span>';echo nl2br("\n");
  
  
  //echo '    <span class="close" onclick="closeModal(\'modal'.$k.'\')">&times;</span>';echo nl2br("\n");
  echo '   <img src="img/photos/STRAND/ABM/'.$k.'.jpg" alt="Cinque Terre" class="modal-content" style="width:auto;height:500px;">';echo nl2br("\n");
  //echo '   <div class="caption"></div>';
  echo '</div>';echo nl2br("\n");echo nl2br("\n");
  $k++;
}

?>