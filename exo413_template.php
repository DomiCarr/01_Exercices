<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <h1>
        <?php
        echo WELCOME_TEXT . $user['name'].'!';
    ?>
    </h1>
    <div>
        <?php
      if ($user['language'] === 'fr') {
        echo 'Sports préférés :';
      } else {
        echo 'Favorites sports :';
      }
    ?>
        <ul>
            <?php
        foreach ($user['hobbies'] as $hobby) {
          if ($hobby['type'] == 'sport') {
            echo '<li>'.$hobby['name'].'</li>';
          }
        }
      ?>
        </ul>
    </div>
</body>

</html>