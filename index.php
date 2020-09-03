<?php
  $array = [
    0 => [
      "question" => "prova",
      "answer" => "risp"
    ],
    1 => [
      "question" => "prova",
      "answer" => "risp"
    ],
    2 => [
      "question" => "prova",
      "answer" => "risp"
    ],
    3 => [
      "question" => "prova",
      "answer" => "risp"
    ]
  ]
 ?>
 <div class="">

   <?php
    foreach ($array as $num => $value) {
        ?>
           <h3>
               <?php echo $value["question"]; ?>
           </h3>
           <p>
             <?php echo $value["answer"]; ?>
           </p>
        <?php
      }
      ?>
 </div>
