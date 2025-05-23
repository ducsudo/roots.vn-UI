<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roots.vn</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="fixed top-0 w-full z-50 bg-white shadow">
        <!-- Item 1: Will be hidden when scrolling -->
        <div id="item1" class="bg-green-500 text-white text-center py-2">
            Miễn phí giao hàng nội thành Thành phố Hồ Chí Minh trong bán kính 5km cho đơn hàng từ 500.000 VND.
        </div>

        <!-- Item 2 & Item 3: Fixed header elements -->
        <div class="flex justify-between items-center py-4 px-6">
            <div class="text-lg font-bold">ROOTS organic store and juice bar</div>
            <nav>
                <ul class="flex space-x-4">
                    <li class="cursor-pointer">HOME</li>
                    <li class="cursor-pointer">OUR ROOTS</li>
                    <li class="cursor-pointer">INSPIRATION</li>
                    <li class="cursor-pointer">CAREERS</li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Content to scroll -->
    <div class="mt-24 p-6">
        <p class="h-[1500px]">Scroll down to hide Item 1...</p>
    </div>

    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $("#item1").fadeOut();
                } else {
                    $("#item1").fadeIn();
                }
            });
        });

    </script>
</body>
</html>