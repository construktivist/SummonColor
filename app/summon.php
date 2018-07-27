<?php

Class SummonColor
{

  private $hex;

  private function getHex(){
    $this->hex = "#" . dechex(mt_rand(0, 0xFFFFFF));
  }

  private function echoColor(){
    echo "<div  class='panel' style=
              'background-color:$this->hex;
               width:64px;
               height:64px;
               margin:5px;
               float:left;'>
          <div class='panel-body'>
          </div>
        </div>";
  }

  public function getAndDisplayColor(){
    $this->getHex();
    $this->echoColor();
  }

}

$summonColor = new SummonColor();
$summonColor->getAndDisplayColor();

 ?>
