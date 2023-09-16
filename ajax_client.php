<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Search for the list of dogs:
    <input type="text" name="dogs" onkeyup = "get_data_using_ajax()" id="dogs">
    <div id="dogs_result"></div>
    <script>

        function get_data_using_ajax(){
            var q = document.getElementById('dogs').value
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    console.log(this.responseText);
                    document.getElementById("dogs_result").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "ajax_server.php?q="+q, true);
            xmlhttp.send();
        }
    </script>
</body>
</html>