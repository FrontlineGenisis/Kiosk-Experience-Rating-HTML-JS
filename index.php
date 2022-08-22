<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>Experience rating 
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./assets/css/fonts.css" media="screen" />

</head>
<body>
    <div class="loader">
        <div class="ring">
        </div></div>
<div class="content">
<p class="title">Rate your experience.</p>
<div class="buttons">
<p class="good">&#128512;</p> <p class="meh">&#128528;</p> <p class="horrible">&#128545;</p></div>
</div>
 <script>
        const loader = document.querySelector(".loader");
          window.onload = function(){
            setTimeout(function(){
              loader.style.opacity = "0";
              setTimeout(function(){
                loader.style.display = "none";
              }
                         , 500);
            }
                       ,1500);
          }
    </script>
</body>
</html>