<!doctypehtml>
<html>
<đầu>
   @include ( 'head' )
</đầu>
<thân>
<div class = "thùng chứa" >
   <header class = "hàng" >
       @include ( 'header' )
   </tiêu đề>
   <div id= "main" class = "hàng" > 
           @yield ( 'nội dung' )
   </div>
   <footer class = "hàng" >
       @include ( 'footer' )
   </chân trang>
</div>
</thân>
</html>