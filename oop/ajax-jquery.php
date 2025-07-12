<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // $('#main-menu a').click(function(event) {
            //     event.preventDefault();
                
            //     $('#main').load(this.href + ' #main *', function(responseText, status) {
            //         if (status === 'success') {
            //             $('#notification-bar').text('The page has been successfully loaded');
            //         } else {
            //             $('#notification-bar').text('An error occurred');
            //         }
            //     });
            // });

            // Get with ajax
            $.ajax({
                url: 'https://jsonplaceholder.typicode.com/posts',
                // data: Dữ liệu được gửi lên server khi thực thi một request Ajax.
                data: {
                    format: 'json'
                },
                // Một hàm sẽ được gọi khi request fails.
                error: function() {
                    $('#info').html('<p>An error has occurred</p>');
                },
                // Kiểu của dữ liệu mong muốn được trả về từ server
                dataType: 'json',
                success: function(data) {
                    for(var $obj in data) {
                        var $id = $('<h1>').text($obj);
                        $('#info')
                            .append($id)
                    }
                },
                type: 'GET'
            });

            
        });
    </script>
</head>
<body>
<div id="info"></div>
<button>Send an HTTP GET request to a page and get the result back</button>

</body>
</html>