<?php


$hex = "#" . dechex(mt_rand(0, 0xFFFFFF));

echo "<div  class='panel' style=
            'background-color:$hex;
             width:64px;
             height:64px;
             margin:5px;
             float:left;'>
        <div class='panel-body'>
        </div>
      </div>";


 ?>
