

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="score_val">
  </div>  

<script>
    let score = 0;
    document.getElementById().onlcick = function(){
        let userinput = document.getElementById('answer');
        let rightWord = document.getElementById('shuffletxt');

        if(userinput === rightWord){
            score++;
        }else{
            score = score; 
        }

        document.getElementById('score_val').innerHTML = 'score is ' + score;
    }

    console
        
    </script>
  
</body>
</html>
      
