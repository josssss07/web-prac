<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<body>
  <h1>Shuffled String Game </h1>
  
  <form action="game.php" method="post">
    <div>
        <?php
        include 'fileread.php';
        $final_shuffleWord = $shuffleWord;
        $rightword = $rightword;
        ?>
      <label for="shuffletxt">The Shuffled Word: </label>
      <input type="text" id="shuffletxt" value=<?php echo  $final_shuffleWord?> name="shuffletxt">
      <label for="answer">Guess the Word: </label>
      <input type="text" id="answer" name="answer">

      <div class="score_val">

      </div>
    </div>
    <div>
        <input type="submit" name="nextword" id="next" value="next word" formaction="nextword.php">
        
        <button type="submit">End game</button>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>
  </form>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>