<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajax menggunakan JavaScript</title>
  </head>
  <body>
    <div id="text"></div>
  </body>
  <script type="text/javascript">

    function load_ajax(url, callback){

      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = cekStatus;

      function cekStatus(){
        if (xhr.readyState == 4 && xhr.status == 200) {
          callback(xhr.responseText);
        }
      }

      xhr.open('GET', url, true);
      xhr.send();
    }

    //memanggil otomatis
    load_ajax('data.json', function(data){
      
      data = JSON.parse(data);
      document.getElementById('text').innerHTML = data.nama;
    })

  </script>
</html>
