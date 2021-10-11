<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <script src="./functions.js" charset="utf-8"></script>
    <title>Lesson</title>
  </head>
  <body>

    <?php
      echo __DIR__;
      echo '<br>';
      echo __FILE__;
      $directoryPath = __DIR__;
      $directoryPath = str_replace('\\', '/', $directoryPath);
      var_dump($directoryPath);
    ?>
    <br>

  <ul id="radio-list">
    <li>
      <input type="radio" id="field-1" name="direction" value="west">
      <label for="field-1">West</label>
    </li>
    <li>
      <input type="radio" id="field-2" name="direction" value="north">
      <label for="field-2">North</label>
    </li>
    <li>
      <input type="radio" id="field-3" name="direction" value="east">
      <label for="field-3">East</label>
    </li>
  </ul>

  <!--div class="lds-dual-ring"></div-->

  <style>
.lds-dual-ring {
  display: inline-block;
  width: 80px;
  height: 80px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 64px;
  height: 64px;
  margin: 8px;
  border-radius: 50%;
  border: 6px solid #000;
  border-color: #000 transparent #000 transparent;
  animation: lds-dual-ring 1.8s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
  </style>

<?php


class LevelA {
  public function __construct(
    $levA_key1, $levA_key2, $levA_key3, $levA_key4,
    $levA_prop1, $levA_prop2, $levA_prop3, $levA_prop4)
  {
      $this->$levA_key1 = $levA_prop1;
      $this->$levA_key2 = $levA_prop2;
      $this->$levA_key3 = $levA_prop3;
      $this->$levA_key4 = $levA_prop4;
  }
}

class LevelB {
  public function __construct($levB_key1, $levB_key2, $levB_prop1, $levB_prop2) {
      $this->$levB_key1 = $levB_prop1;
      $this->$levB_key2 = $levB_prop2;
  }
}

$LevelA = new LevelA("term_id", "term_slug", "term_title", "term_resources", 1, 2, 3, 4);


$LevelB_1 = new LevelB("rf->kz", "kz->rf", $LevelA, $LevelA_2);

/*
class Entree {
  public $name;
  public $ingredients = [];
}
$soup = new Entree;

$soup->name = 'Chicken Soup';
$soup->ingredients = ['chicken', 'water'];

*/




  echo '<pre>';
    //echo json_encode($soup);
  echo '</pre>';
  //$final_response = $alex;
  //echo json_encode($final_response);
?>

<script>
    "use strict";
  document.addEventListener("DOMContentLoaded", function () {
    //let res = <?php echo json_encode($LevelA);?>;
    //console.log(res);
  });
</script>

  </body>
</html>