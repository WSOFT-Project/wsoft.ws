<html>
    <head>
        <title>
            Dino Game
        </title>
        <style>
        #gameScreen{
            border: 1px solid black;
        }
        img{
            display: none;
        }
        canvas{
  width: 100%;
  height: 100%;
}
        </style>
    </head>
    <body>
    <script>
    var w = $('.contents').width();
var h = $('.contents').height();
$('#rader_result').attr('width', w);
$('#rader_result').attr('height', h);
    </script>
        <div class="contents"><canvas id ="gameScreen" width="800" height="500"></canvas></div>
        <script src="index.js" type="module"></script>
        <img id ="img_dino" src="dino.png">
        <img id ="img_back" src="back.jpg">
        <img id ="img_bomb" src="bomb.png">
    </body>
</html>