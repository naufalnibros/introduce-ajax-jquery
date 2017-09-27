<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Ajax</title>
  </head>
  <body>
    <input type="text" name="nama" id="inputText">
    <button type="button" id="button">Ambil data</button>
    <div id="box"></div>
  </body>
  <script type="text/javascript">

    function load_ajax(url, callback){
      var xhr = new XMLHttpRequest;
      xhr.onreadystatechange = cekStatus;

      function cekStatus(){
        if (xhr.readyState == 4 && xhr.status == 200) {
          xhr.responseText;
        }
      }

      xhr.open('GET', url, true);
      xhr.send();
    }

    document.getElementById('button').onclick = function(){

      text = document.getElementById('inputText').value;

      load_ajax('data.php?q='+ text, function(data){
        document.getElementById('box').innerHTML = data;
      });
    };


  </script>
</html>
