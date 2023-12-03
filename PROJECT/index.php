








<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type = "text/css" rel="stylesheet" href ="style.css">
    <title>american psycho</title>
   
</head>
<body>

          
            
              
              

    <div id="container">
    <table>

<div id="bluecolor">
        <?php 
            for($i = 0; $i < 40; $i++){
                $left = rand(1,150); $top = rand(1,100); 
                echo '<span style="left:' . $left . 'px; top:' . $top . 'px;" class="star">★<br>★</span>';
            }                 
        ?>
    </div>

  <?php for($i = 0; $i < 6; $i++): ?>
    <tr id = "redcolor">
      <td></td>
      
    </tr>
    <tr id = "whitecolor">
    <?php print("<td></td>") ?>
    </tr>
    <?php endfor; ?>
</table>
    
  
    </div>
    
</body>
</html>