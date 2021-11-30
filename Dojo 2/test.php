<?php

$input =[
    "1. Shoes",
    "2.2. Jewels",
    "1.2. Boots",
    "2.2.2. Watches and bracelets",
    "2. Accessories",
    "2.3. Gloves",
    "2.2.1. Rings",
    "2.1. Hats",
    "1.1. Heels",
  ];

  function tri($array){
      asort($array);
      sort($array);
      substr_count($array, '')
  }

  $output = tri($input);


  print_r($output);

  public function buildTree() : self
  {
      // TODO: Build your tree here
      asort($this->flatData);
      sort($this->flatData);
      foreach($this->flatData as $key => $value);
      switch(substr_count('.', $value)) {
          case 1:
            array_push($this->tree, $value);
            break;
        case 2:
            array_push($this->tree[])
              
      }
      return $this;
  }
