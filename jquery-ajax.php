<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jquery Ajax</title>
  </head>
  <body>
    <div id="box"></div>
    <button type="button" id="btn">Ambil Datanya</button>
  </body>
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){

      $('#btn').click(function(){
        $.ajax({
          url     : 'file.php',
          method  : "POST",
          data    : {nama : "NAUFAL"}
        }).done(function(hasil){
          $('#box').html(hasil);
        });
      });

    });
  </script>
</html>
