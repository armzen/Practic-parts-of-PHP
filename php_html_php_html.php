<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h2{ 
            font-family: monospace;
            margin: 0;
            padding: 10px;
            color: plum;
            background-color: papayawhip;
        }
        div{
            width: 200px;
            font-size: 20px;
            padding: 15px 20px;
            
        }
        #green{
            color: limegreen;
            
            border: 3px solid green;
        }
        #red{
            color: crimson;
            font-size: 20px;
            padding: 15px 20px;
            border: 3px solid red;
        }
    </style>    
</head>
<body>
  <h2>Սեղմել 'reload' - կոճակին ,php rand(0,10)<5 - ֆունկցիայի գործարկման համար:</h2>
  <button id="b1">
      reload page
  </button>
   <?php
    if(rand(0,10) < 5)
    {
    ?>
        <div id="green">
            <?php echo 'yes'; ?>
        </div>
    <?php
    } else {
    ?>
        <div id="red">
           <?php  echo 'no'; ?>
        </div>
    <?php
    }
    ?>
    
    
    
    <script>
        b1.onclick = function(){
            location.reload();
        }
    
    </script>
</body>
</html>