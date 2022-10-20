<html>
    <body>
        <script>
            const timer = 30000    // ミリ秒で間隔の時間を指定
window.addEventListener('load',function(){
  setInterval('location.reload()',timer);
});
        </script>
        <p style="color:#ffffff; font-size:100px;"><?=file_get_contents("text.txt")?></p>
    </body>
</html>