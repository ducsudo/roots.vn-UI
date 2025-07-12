<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <a href="javascript:doSomething();">click me</a>
    <script>
        function doSomething() {
            alert("hello")
        }
    </script>
    <a class="delete-record" 
        href="javascript:;" 
    >
        <i class="fas fa-trash text-red">Xóa tạm</i>
    </a> -->

    <script>
        function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                // define a callback function to be executed when the request receives an answer
                document.getElementById("demo").innerHTML = this.responseText;
            }
            // send a request
            xhttp.open("GET", "https://jsonplaceholder.typicode.com/posts", true);
            
            xhttp.send();
        }
        
        function addDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                // define a callback function to be executed when the request receives an answer
                document.getElementById("demo1").innerHTML = this.responseText;
            }
            // send a request
            xhttp.open("POST", "https://jsonplaceholder.typicode.com/posts", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            // send data
            xhttp.send("userId=12&id=103");
            // const data = {
            //     "userId": 1,
            //     "id": 0,
            //     "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
            //     "body": "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
            // }
            // xhttp.send("fname=Henry&lname=Ford");
        }
    </script>
    <a href="javascript:loadDoc();">Load data</a>
    <a href="javascript:addDoc();">Add new data</a>
    <div id="demo">
        <!-- <h2>The XMLHttpRequest Object</h2> -->
        <!-- <button type="button" onclick="loadDoc()">Change Content</button> -->
    </div>
    <div id="demo1">
    </div>
    
</body>
</html>