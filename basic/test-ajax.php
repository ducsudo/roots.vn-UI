<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <script>
        function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("demo").innerHTML = this.responseText;
            }
            xhttp.open("GET", "https://jsonplaceholder.typicode.com/posts", true);
            xhttp.send();
        }
    </script>
</body>
</html>