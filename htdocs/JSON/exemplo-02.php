<?php 

$json = '[
  {
    "nome": "Joao",
    "idade": 20
  },
  {
    "nome": "Glaucio",
    "idade": 25
  }
]'; 

$data = json_encode($json,true);

var_dump($data);
 ?>