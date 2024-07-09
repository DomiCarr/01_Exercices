<?php
 
  function getUser(): array { 
    return [
    'name' => 'John',
    'language' => 'fr',
    'hobbies' => [
      [
        'name' => 'piano',
        'type' => 'music'
      ],
      [
        'name' => 'volley-ball',
        'type' => 'sport'
      ],
      [
        'name' => 'tennis',
        'type' => 'sport'
      ],
      [
        'name' => 'saxophone',
        'type' => 'music'
      ],
    ]
  ];
}
  ?>