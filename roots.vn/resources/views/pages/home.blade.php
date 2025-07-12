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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Yanone+Kaffeesatz:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="relative">
        {{-- Header --}}
        <header class="h-[162px] fixed top-0 z-30 w-full">
            {{-- Header Top --}}
            <div id="header-top" class="bg-[#E1EDE5] h-[28px] relative z-100">
               <div class="max-w-[1200px] flex justify-content-center px-[15px] m-auto items-center ">
                    <div class="w-7/10 flex justify-end ">
                        <p class="text-xs font-bold text-[#2A383A] leading-7">Miễn phí giao hàng nội thành Thành phố Hồ Chí Minh trong bán kính 5km cho đơn hàng từ 500.000 VND.</p>
                    </div>
                    <div class="w-3/10 flex justify-end items-center h-full">
                        <div class="pr-[15px] relative">
                            <a 
                                class="text-xs leading-7"
                                href="https://roots.vn/lien-he"
                            >
                                Hỗ trợ
                            </a>
                            <div class="absolute right-0 top-1/2 -translate-y-1/2">
                                <p class="text-[#333]">|</p>
                            </div>
                        </div>
                        <div class="px-[15px] relative">
                            <a 
                                class="text-xs leading-7"
        
                                href="https://roots.vn/cua-hang"
                            >
                                Tìm cửa hàng
                            </a>
                            <div class="absolute right-0 top-1/2 -translate-y-1/2">
                                <p class="text-[#333]">|</p>
                            </div>
                        </div>

                        {{-- Header top language --}}
                        <div class="flex items-center ml-[15px] gap-1 group hover:cursor-pointer relative h-[18px]">
                           <div class="mr-[30px]">
                                <i class="fas fa-globe"></i>
                            </div>
                           <div class="absolute right-[15px]">
                                <i class="fas fa-caret-down"></i>
                            </div>
                           <div class="hidden group-hover:bg-[#D0E2D6] group-hover:block absolute top-full left-0 w-[120px] h-20">
                                <div class="flex flex-col justify-center p-2 h-full">
                                    <div class="flex h-7 items-center">
                                        <img class="w-4 h-[10px]" src="https://roots.vn/core/img/flags/vn.png" alt="">
                                        <a href="" class="ml-[5px]">VI</a>
                                    </div>
                                    <div class="flex h-7 items-center">
                                        <img class="w-4 h-[10px]" src="http://roots.vn/core/img/flags/en.png" alt="">
                                        <a href="" class="ml-[5px]">EN</a>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
               </div>
            </div>
            {{-- Header middle and header bottom --}}
            <div class="w-full ">
                {{-- Header middle --}}
                <div class="flex justify-center bg-white">
                    <div class="flex items-center justify-between bg-white max-w-[1200px] w-full px-[15px]">
                       <div class="flex w-full">
                           {{--  Header middle one--}}
                            <div class="w-1/2 flex pr-5">
                                <div class="text-lg font-bold w-2/10">
                                    <img 
                                        src="https://roots.vn/assets/images/logo.svg" alt="" 
                                        class="h-[90px] w-[90px]"
                                    >
                                </div>
                                <nav class="hidden md:flex space-x-6 text-gray-700 items-center justify-end w-8/10">
                                    <a href="#" class="relative text-base font-semibold  group text-[#2A383A] hover:text-[#4d835f] mr-[30px]">HOME
                                        <span class="absolute left-0 bottom-0 w-full h-[2px] bg-[#4d835f] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></span>
                                    </a>
                                    <a href="#" class="relative text-sm font-semibold group text-[#2A383A] hover:text-[#4d835f] mr-[30px]">OUR ROOTS
                                        <span class="absolute left-0 bottom-0 w-full h-[2px] bg-[#4d835f] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></span>
                                    </a>
                                    <a href="#" class="relative text-sm font-semibold group text-[#2A383A] hover:text-[#4d835f] mr-[30px]">INSPIRATION
                                        <span class="absolute left-0 bottom-0 w-full h-[2px] bg-[#4d835f] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-500">
                                        </span>
                                    </a>
                                    <a href="#" class="relative text-sm font-semibold group text-[#2A383A] hover:text-[#4d835f] ">CAREERS
                                        <span class="absolute left-0 bottom-0 w-full h-[2px] bg-[#4d835f] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-500">
                                        </span>
                                    </a>
                                </nav>
                            </div>
                            {{-- End header middle one --}}
            
                            
                            {{--  Header middle two --}}
                            <div class="flex items-center w-1/2 pl-[15px] justify-end">
                                <div class="relative w-[440px] "> {{-- w-[calc(100%-130px)] --}}
                                    <div class="flex flex-col gap-4 justify-center items-center w-full h-10 px-3 md:px-0 ">
                                        <div class="relative border-[1px] border-[#4d835f] w-full max-w-lg rounded-[25px] h-10">
                                            <input type="text" class="rounded-md w-full h-full text-sm p-3 outline-0 px-[15px]" placeholder="Tìm kiếm sản phẩm">
                                            <button type="submit" class="absolute right-0 top-1/2 -translate-y-1/2 bg-[#4d835f] h-10 rounded-e-[25px] w-[50px]">
                                                {{-- <i class="fas fa-search text-sm"></i> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="w-[25px] h-[25px] absolute top-1/2 -translate-1/2 left-1/2 text-white"
                                                >
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex ml-[35px]">
                                    <span class="">
                                        <i class="far fa-user-circle text-[35px] text-[#4d835f]"></i>
                                    </span>
                                </div>
                                <div class="relative ml-[25px]">
                                    <div class="">
                                        <i class="fas fa-shopping-bag text-[35px] text-[#4d835f]"></i>
                                    </div>
                                    <div class="absolute w-[25px] rounded-full bg-[#4d835f] flex justify-center items-center top-[-25%] left-[18px] h-[25px]">
                                        <span class="text-center">0</span>
                                    </div>
                                </div>
                            </div>
                            {{--  Header middle two --}}
                       </div>
                    </div>
                </div>
    
                {{-- Header bottom --}}
               <div class="bg-[#4d835f] h-[44px]">
                   <div class="max-w-[1200px] mx-auto  text-white h-full px-[15px]">
                        <nav class="flex justify-between text-[14px] font-medium h-full">
                            <!-- Dropdown 1 -->
                            <div class="relative group hover:bg-white hover:text-black" 
                                onmouseenter="handleShowOverlay()" 
                                onmouseleave="handleHiddenOverlay()"
                            >
                                <div class="h-full cursor-pointer px-[15px]">
                                    <a href="#" class="w-full h-full leading-11 text-sm font-semibold">Thực phẩm & đồ uống</a>
                                </div>
                                {{-- Subnav L1 --}}
                                <div class="">
                                    <div class="hidden group-hover:block bg-white text-black absolute w-[200px]">
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Trái cây & Rau củ quả</a>
                                                </div>
                                                <div class="flex items-center">
                                                    <i class="fas fa-chevron-right text-[10px]"></i>
                                                </div>
                                            </div>
                                            {{-- Subnav L2 --}}
                                           <div class="absolute left-full top-0 hidden group-hover/item:block text-black w-[200px] leading-12 bg-white">
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Trái cây</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Rau, Củ, Quả</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Nấm, Hoa</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Đậu hũ, Kim chi</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Hạt, Đậu</a>
                                                </div>
                                           </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Bơ sữa & Đồ lạnh</a>
                                                </div>
                                                <div class="flex items-center">
                                                    <i class="fas fa-chevron-right text-[10px]"></i>
                                                </div>
                                            </div>
                                            {{-- Subnav L2 --}}
                                           <div class="absolute left-full top-0 hidden group-hover/item:block text-black w-[200px] leading-12 bg-white">
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Sữa tươi thanh trùng</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Trứng</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Phô mai</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Sữa chua</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Bơ</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Kem tươi</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Kem</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Trái cây, Rau củ đông lạnh</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Thực phẩm đông lạnh khác</a>
                                                </div>
                                           </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Thịt, Cá, Hải sản</a>
                                                </div>
                                                <div class="flex items-center">
                                                    <i class="fas fa-chevron-right text-[10px]"></i>
                                                </div>
                                            </div>
                                            {{-- Subnav L2 --}}
                                           <div class="absolute left-full top-0 hidden group-hover/item:block text-black w-[200px] leading-12 bg-white">
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Thịt</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Cá, Hải sản</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Thịt thay thế</a>
                                                </div>
                                           </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Bakery</a>
                                                </div>
                                                <div class="flex items-center">
                                                    <i class="fas fa-chevron-right text-[10px]"></i>
                                                </div>
                                            </div>
                                            {{-- Subnav L2 --}}
                                           <div class="absolute left-full top-0 hidden group-hover/item:block text-black w-[200px] leading-12 bg-white">
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Bánh mì</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Bánh ngọt</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Món tráng miệng khác</a>
                                                </div>
                                           </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Thức uống</a>
                                                </div>
                                                <div class="flex items-center">
                                                    <i class="fas fa-chevron-right text-[10px]"></i>
                                                </div>
                                            </div>
                                            {{-- Subnav L2 --}}
                                           <div class="absolute left-full top-0 hidden group-hover/item:block text-black w-[200px] leading-12 bg-white">
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Kombucha</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Trà, Cà phê</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Sữa</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Hot Chocolate</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Nước trái cây, rau củ</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Nước suối, Nước khoáng</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Nước ngọt, Nước tăng lực</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Bia, Rượu</a>
                                                </div>
                                           </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Thực phẩm khô</a>
                                                </div>
                                                <div class="flex items-center">
                                                    <i class="fas fa-chevron-right text-[10px]"></i>
                                                </div>
                                            </div>
                                            {{-- Subnav L2 --}}
                                           <div class="absolute left-full top-0 hidden group-hover/item:block text-black w-[200px] leading-12 bg-white">
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Mì, Gạo, Pasta</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Nguyên liệu nấu ăn</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Dầu ăn, Giấm</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Tương, Sốt</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Đồ hộp</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Nấm, Rau củ sấy khô</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Ngũ cốc ăn sáng</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Bơ hạt, Siro, Mứt</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Kẹo</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Bánh</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Snack hạt & trái cây khô</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Nguyên liệu làm bánh</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Thực phẩm ăn liền</a>
                                                </div>
                                           </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Siêu thực phẩm</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Dropdown 2 -->
                            <div class="relative group hover:bg-white hover:text-black" 
                                onmouseenter="handleShowOverlay()" 
                                onmouseleave="handleHiddenOverlay()"
                            >
                                <div class="h-full cursor-pointer px-[15px]">
                                    <a href="#" class="w-full h-full leading-11 text-sm font-semibold">Chăm sóc sức khỏe</a>
                                </div>
                               {{-- Subnav L1 --}}
                                <div class="">
                                    <div class="hidden group-hover:block bg-white text-black absolute w-[200px]">
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Thực phẩm bổ sung</a>
                                                </div>
                                                <div class="flex items-center">
                                                    <i class="fas fa-chevron-right text-[10px]"></i>
                                                </div>
                                            </div>
                                            {{-- Subnav L2 --}}
                                           <div class="absolute left-full top-0 hidden group-hover/item:block text-black w-[200px] leading-12 bg-white">
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Thực phẩm chức năng</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Dinh dưỡng thể thao</a>
                                                </div>
                                           </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Vitamin</a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Mật ong</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Dropdown 3 -->
                            <div class="relative group hover:bg-white hover:text-black" 
                                  onmouseenter="handleShowOverlay()" 
                                onmouseleave="handleHiddenOverlay()"
                            >
                                <div class="h-full cursor-pointer px-[15px]">
                                    <a href="#" class="w-full h-full leading-11 text-sm font-semibold">Mẹ & bé</a>
                                </div>
                                {{-- Subnav L1 --}}
                                <div class="">
                                    <div class="hidden group-hover:block bg-white text-black absolute w-[200px]">
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Mẹ</a>
                                                </div>
                                                <div class="flex items-center">
                                                    <i class="fas fa-chevron-right text-[10px]"></i>
                                                </div>
                                            </div>
                                            {{-- Subnav L2 --}}
                                           <div class="absolute left-full top-0 hidden group-hover/item:block text-black w-[200px] leading-12 bg-white">
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Dinh dưỡng cho mẹ</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Chăm sóc mẹ bầu</a>
                                                </div>
                                           </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Em bé</a>
                                                </div>
                                                <div class="flex items-center">
                                                    <i class="fas fa-chevron-right text-[10px]"></i>
                                                </div>
                                            </div>
                                            {{-- Subnav L2 --}}
                                           <div class="absolute left-full top-0 hidden group-hover/item:block text-black w-[200px] leading-12 bg-white">
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Dinh dưỡng cho bé</a>
                                                </div>
                                                <div class="hover:bg-[#E1EDE5]">
                                                    <a href="#" class="block font-normal text-[#2A383A] px-[20px]">Chăm sóc em bé</a>
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Dropdown 4 -->
                            <div class="relative group hover:bg-white hover:text-black"
                                onmouseenter="handleShowOverlay()" 
                                onmouseleave="handleHiddenOverlay()"
                            >
                                <div class="h-full cursor-pointer px-[15px]">
                                    <a href="#" class="w-full h-full leading-11 text-sm font-semibold">Chăm sóc cơ thể</a>
                                </div>
                                {{-- Subnav L1 --}}
                                <div class="">
                                    <div class="hidden group-hover:block bg-white text-black absolute w-[200px]">
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Trang điểm & Dưỡng da</a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Chăm sóc cơ thể</a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Phụ kiện</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Dropdown 5 -->
                            <div class="relative group hover:bg-white hover:text-black"
                                onmouseenter="handleShowOverlay()" 
                                onmouseleave="handleHiddenOverlay()"
                            >
                                <div class="h-full cursor-pointer px-[15px]">
                                    <a href="#" class="w-full h-full leading-11 text-sm font-semibold">Nhà cửa sạch mát</a>
                                </div>
                                {{-- Subnav L1 --}}
                                <div class="">
                                    <div class="hidden group-hover:block bg-white text-black absolute w-[200px]">
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Chăm sóc nhà cửa</a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Chăm sóc thú cưng</a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Văn phòng phẩm</a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Subnav L1 Item --}}
                                        <div class="group/item h-12 w-full">
                                            <div class="flex h-12 hover:bg-[#E1EDE5]">
                                                <div class="min-w-[190px] px-[20px] leading-12">
                                                    <a href="#" class="block font-normal text-[#2A383A]">Hoa, Cây cảnh</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Dropdown 6 -->
                            <div class="relative group hover:bg-white hover:text-black">
                                <div class="h-full cursor-pointer px-[15px]">
                                    <a href="#" class="w-full h-full leading-11 text-sm font-semibold">Sản phẩm khuyến mãi</a>
                                </div>
                            </div>
                        </nav>
                    </div>
               </div>
            </div>
        </header>
        <div id="overlay-header" class="hidden opacity-100 absolute top-0 left-0 right-0 bottom-0 bg-[#00000080] z-20"></div>
        {{-- End header --}}
        
        {{-- -------------------------------------+++++-------------------------- --}}
        {{-- Content --}}
        <main class="h-[2000px] top-full mt-[162px]">
            {{-- -------------------------------------+++++-------------------------- --}}
            {{-- Slide section --}}
            <section class="relative">
                <img src="https://sudospaces.com/rootsvn/2022/02/sieuthiroots-1.png" alt="sieuthiroots-1" class="w-full">
                <button 
                    class="uppercase bg-[#4d835f] -translate-1/2 left-1/2 top-1/2 absolute text-white text-sm w-[220px] h-[45px] rounded-md font-bold cursor-pointer"
                >
                    Bắt đầu mua sắm
                </button>
            </section>

            {{-- -------------------------------------+++++-------------------------- --}}
            {{-- Organic section --}}
            <section class="pt-[35px] pb-[25px]">
                <div class="max-w-[1200px] m-auto px-[15px]">
                    {{-- Organic section tit mb-10le --}}
                   <div class="mb-10">
                        <p class="text-3xl font-bold text-gray-800 text-center leading-[65px]">
                            Sản phẩm hữu cơ tại Roots
                        </p>
                   </div>

                    <!-- Organic section list -->
                    <div class="grid grid-cols-3 gap-6 mt-6">
                        <div class="text-center relative mb-10">
                            <div class="">
                                <img src="https://sudospaces.com/rootsvn/2022/01/food-and-drink-do-an-va-do-uong-huu-co-organic-giao-hang-nhanh-roots-sieu-thi-thuc-pham-sach-hcm-quan-111-large.jpg" alt="Product" class="mx-auto">
                            </div>
                            <button class="absolute px-5 z-10 text-white w-full left-0 bottom-[-10px]">
                                <p class=" h-8 w-full bg-[#594a42] rounded px-5 py-2 uppercase font-bold text-sm">Thực phẩm & Đồ uống</p>
                            </button>
                        </div>
                        <div class="text-center relative mb-10">
                            <div class="">
                                <img src="https://sudospaces.com/rootsvn/2022/01/food-and-drink-do-an-va-do-uong-huu-co-organic-giao-hang-nhanh-roots-sieu-thi-thuc-pham-sach-hcm-quan-111-large.jpg" alt="Product" class="mx-auto">
                            </div>
                            <button class="absolute px-5 z-10 text-white w-full left-0 bottom-[-10px]">
                                <p class=" h-8 w-full bg-[#594a42] rounded px-5 py-2 uppercase font-bold text-sm">Chăm sóc sức khỏe</p>
                            </button>
                        </div>
                        <div class="text-center relative mb-10">
                            <div class="">
                                <img src="https://sudospaces.com/rootsvn/2022/01/food-and-drink-do-an-va-do-uong-huu-co-organic-giao-hang-nhanh-roots-sieu-thi-thuc-pham-sach-hcm-quan-111-large.jpg" alt="Product" class="mx-auto">
                            </div>
                            <button class="absolute px-5 z-10 text-white w-full left-0 bottom-[-10px]">
                                <p class=" h-8 w-full bg-[#594a42] rounded px-5 py-2 uppercase font-bold text-sm">Mẹ & Bé</p>
                            </button>
                        </div>
                        <div class="text-center relative mb-10">
                            <div class="">
                                <img src="https://sudospaces.com/rootsvn/2022/01/food-and-drink-do-an-va-do-uong-huu-co-organic-giao-hang-nhanh-roots-sieu-thi-thuc-pham-sach-hcm-quan-111-large.jpg" alt="Product" class="mx-auto">
                            </div>
                            <button class="absolute px-5 z-10 text-white w-full left-0 bottom-[-10px]">
                                <p class=" h-8 w-full bg-[#594a42] rounded px-5 py-2 uppercase font-bold text-sm">Chăm sóc cơ thể</p>
                            </button>
                        </div>
                        <div class="text-center relative mb-10">
                            <div class="">
                                <img src="https://sudospaces.com/rootsvn/2022/01/food-and-drink-do-an-va-do-uong-huu-co-organic-giao-hang-nhanh-roots-sieu-thi-thuc-pham-sach-hcm-quan-111-large.jpg" alt="Product" class="mx-auto">
                            </div>
                            <button class="absolute px-5 z-10 text-white w-full left-0 bottom-[-10px]">
                                <p class=" h-8 w-full bg-[#594a42] rounded px-5 py-2 uppercase font-bold text-sm">Nhà cửa sạch mát</p>
                            </button>
                        </div>
                        <div class="text-center relative mb-10">
                            <div class="">
                                <img src="https://sudospaces.com/rootsvn/2022/01/food-and-drink-do-an-va-do-uong-huu-co-organic-giao-hang-nhanh-roots-sieu-thi-thuc-pham-sach-hcm-quan-111-large.jpg" alt="Product" class="mx-auto">
                            </div>
                            <button class="absolute px-5 z-10 text-white w-full left-0 bottom-[-10px]">
                                <p class=" h-8 w-full bg-[#594a42] rounded px-5 py-2 uppercase font-bold text-sm">Sales & Deals</p>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            {{-- -------------------------------------+++++-------------------------- --}}
            {{-- Home banner section --}}
            <section class="bg-[url('https://sudospaces.com/rootsvn/2022/02/roots-home-delivery-background.png')] bg-cover bg-center w-full  py-[30px]" >
                <div class="max-w-[1200px] px-[15px] m-auto flex">
                    {{-- Home banner left --}}
                    <div class="w-[48%] max-w-[48%] px-[30px]">
                        <img src="https://sudospaces.com/rootsvn/2021/11/picture-edited-2-1-large.png" alt="picture-edited-2-1">
                    </div>
                     {{-- Home banner right --}}
                    <div class="w-[52%] px-[30px]">
                        <div class="mb-[30px]">
                            <span class="text-[#4D835F] text-2xl mb-[18px] font-bold" style="font-family: 'Exo 2', sans-serif;">THỰC PHẨM SẠCH, XANH</span>
                            <p class="text-[50px] font-black text-[#594A42]" style="font-family: 'Yanone Kaffeesatz', sans-serif;">Giao nhanh tận nhà</p>
                        </div>
                        <div>
                            <div class="flex py-[3px]">
                                <div class="text-[#49ae50] pr-2.5">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="">
                                    <p class="">
                                        <b>Nông sản hữu cơ</b> được thu hoạch từ các nông trại sạch địa phương & thế giới
                                    </p>
                                </div>
                            </div>
                            <div class="flex py-[3px]">
                                 <div class="text-[#49ae50] pr-2.5">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="">
                                    <p class="">
                                        <b>Đa dạng lựa chọn</b> các sản phẩm lành mạnh, thuần tự nhiên - luôn có sẵn
                                    </p>
                                </div>
                            </div>
                            <div class="flex py-[3px]">
                                 <div class="text-[#49ae50] pr-2.5">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="">
                                    <p class="">
                                        <b>Giao hàng tận nhà</b> nhanh chóng & miễn phí trong nội thành - điều kiện áp dụng *
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- -------------------------------------+++++-------------------------- --}}
            {{-- Ads Section --}}
            <section class="bg-[url('https://sudospaces.com/rootsvn/2021/11/bg-3.png')] bg-cover bg-center w-full">
                <div class="max-w-[1200px] px-[15px] m-auto flex">
                    <div class="py-[55px] w-full">
                        {{-- Ads title --}}
                        <div class="mb-[35px] flex justify-center w-full">
                            <span class="text-[#2A383A] font-bold text-3xl">Sống Xanh Thật Dễ</span>
                        </div>
                        
                        <div class="flex gap-[50px]">
                            <div class="flex flex-col justify-center items-center text-center">
                                <img
                                    class="max-w-[180px]"
                                    src="https://sudospaces.com/rootsvn/2021/10/home-healthy-living-made-easy-register-1.png" 
                                    alt="home-healthy-living-made-easy-register-1"
                                />
                                <a href="#" class="font-bold text-[#2A383A] text-[22px]">Đăng ký trở thành thành viên</a>
                                <p class="text-sm">Đăng nhập dễ dàng và nhanh chóng, tạo tài khoản cá nhân thuận tiện cho việc đặt hàng</p>
                            </div>
                            <div class="flex flex-col justify-center items-center text-center">
                                <img
                                    class="max-w-[180px]"
                                    src="https://sudospaces.com/rootsvn/2021/10/home-healthy-living-made-easy-shop-1.png" 
                                    alt="home-healthy-living-made-easy-register-1"
                                />
                                <a href="#" class="font-bold text-[#2A383A] text-[22px]">Mua sắm ở bất cứ đâu</a>
                                <p class="text-sm">Lựa chọn các sản phẩm thiết yếu từ hàng trăm mặt hàng hữu cơ, an toàn cho cả gia đình</p>
                            </div>
                            <div class="flex flex-col justify-center items-center text-center">
                                <img
                                    class="max-w-[180px]"
                                    src="https://sudospaces.com/rootsvn/2021/10/home-healthy-living-made-easy-delivery-1.png" 
                                    alt="home-healthy-living-made-easy-register-1"
                                />
                                <a href="#" class="font-bold text-[#2A383A] text-[22px]">ROOTS sẽ chu toàn mọi việc</a>
                                <p class="text-sm">ROOTS giao hàng định kỳ đến tận nơi nhưng vẫn linh động theo thời gian biểu của bạn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- -------------------------------------+++++-------------------------- --}}
            {{-- Posts Section --}}
            <section class="pt-10 pb-[65px]">
                <div class="max-w-[1200px] px-[15px] m-auto flex">
                    <div class="">
                        {{-- Posts Section Title --}}
                        <div class="flex w-full justify-between mb-5">
                            <div class="">
                                <span class="font-bold leading-[65px] text-[30px]">Ăn Sạch - Sống Xanh</span>
                            </div>
                            <div>
                                <a class="uppercase text-base font-bold text-[#4d835f]" href="">Xem tất cả</a>
                            </div>
                        </div>
                        {{-- Posts section list --}}
                        <div class="grid grid-cols-3 gap-0">
                            <div class="flex flex-col p-[30px] bg-[#F5F5F5]">
                                <div class="min-h-[56px] mb-[12px]"><h3 class="text-[18px] font-bold"><a href="">Hướng dẫn bảo quản rau tươi lâu</a></h3></div>
                                <p class="text-[#4d835f]">22 Jul, 2021</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus ...</p>
                                <button class=""><a class="" href="">Xem thêm</a></button>
                            </div>
                            <div class="flex flex-col">
                               <img
                                    class=""
                                    src="https://sudospaces.com/rootsvn/2021/07/bitmap-9.png" 
                                    alt=""
                                />
                            </div>
                            <div class="flex flex-col">
                                <h3><a href="">Hướng dẫn bảo quản rau tươi lâu</a></h3>
                                <p class="">22 Jul, 2021</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus ...</p>
                                <button class=""><a class="" href="">Xem thêm</a></button>
                            </div>
                            <div class="flex flex-col">
                                <img
                                    class=""
                                    src="https://sudospaces.com/rootsvn/2021/07/bitmap-9.png" 
                                    alt=""
                                />
                            </div>
                            <div class="flex flex-col">
                                <h3><a href="">Hướng dẫn bảo quản rau tươi lâu</a></h3>
                                <p class="">22 Jul, 2021</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus ...</p>
                                <button class=""><a class="" href="">Xem thêm</a></button>
                            </div>
                            <div class="flex flex-col">
                                <img
                                    class=""
                                    src="https://sudospaces.com/rootsvn/2021/07/bitmap-9.png" 
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- -------------------------------------+++++-------------------------- --}}
            {{-- Partners Section --}}
            <section class="pt-[35px] pb-[35px]">
                <div class="max-w-[1200px] px-[15px] m-auto flex">
                    <div>
                        {{-- Partners section title --}}
                        <div class="">
                            <span class="">Các Thương Hiệu Hữu Cơ</span>
                        </div>
                        {{-- Partners section list --}}
                        <div class="grid grid-cols-5 gap-[62px]">
                            <div class="">
                                <img 
                                    src="https://sudospaces.com/rootsvn/2024/11/organic-logo-6-1-medium.png" 
                                    alt="organic-logo-6-1"
                                    class=""
                                >
                            </div>
                            <div class="">
                                <img 
                                    src="https://sudospaces.com/rootsvn/2024/11/organic-logo-7-medium.png" 
                                    alt="organic-logo-7"
                                    class=""
                                >
                            </div>
                            <div class="">
                                <img 
                                    src="https://sudospaces.com/rootsvn/2024/12/organic-logo-16-medium.png" 
                                    alt="organic-logo-16"
                                    class=""
                                >
                            </div>
                            <div class="">
                                <img 
                                    src="https://sudospaces.com/rootsvn/2024/11/organic-logo-2-medium.png" 
                                    alt="organic-logo-2"
                                    class=""
                                >
                            </div>
                            <div class="">
                                <img 
                                    src="https://sudospaces.com/rootsvn/2024/12/organic-logo-15-medium.png" 
                                    alt="organic-logo-15"
                                    class=""
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- -------------------------------------+++++-------------------------- --}}
            {{-- Testimonial Section --}}
            <section class="pt-10 pb-[65px]">
                <div class="max-w-[1200px] px-[15px] m-auto flex">
                    <div class="w-full">
                        {{-- Testimonial Section Title --}}
                        <div class="flex flex-col justify-center text-center">
                            <span class="">Cảm Nhận Khách Hàng</span>
                            <p class="">Chia sẻ trải nghiệm mua sắm của bạn bằng cách tag @rootsvn trên Instagram để được xuất hiện trên trang chủ của Roots.</p>
                        </div>
                        {{-- Testimonial Section List --}}
                        <div class="h-[564px] bg-amber-400 w-full"></div>
                    </div>
                </div>
            </section>
        </main>
        {{-- -------------------------------------+++++-------------------------- --}}
        {{-- Footer --}}
        <footer class="mt-[1800px] bg-[#E1EDE5]">
            <div>
                {{-- Footer content --}}
                <div class="max-w-[1200px] px-[15px] m-auto flex">
                   <div class="w-full">
                        {{-- Footer content top --}}
                        <div class="flex py-[25px] bg-[#D0E2D6] w-full items-center">
                            <div class="w-[36%]">
                                <div class="flex justify-center items-center">
                                    <div class="mr-[35px] text-[32px] text-[#4d835f]">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <p class="max-w-[283px] w-[calc(100%-54px)] text-[#2A383A] text-sm leading-6">
                                        237 - 239 - 241 Đường Nguyễn Công Trứ, Phường Nguyễn Thái Bình, Quận 1, Thành phố Hồ Chí Minh, Việt Nam
                                    </p>
                                </div>
                            </div>
                          
                            <div class="w-[34%] relative">
                                <div class="w-[1px] h-10 bg-[#2A383A] absolute top-1/2 -translate-y-1/2 left-0"></div>
                                <div class="flex justify-center items-center">
                                    <div class="mr-[35px] text-[32px] text-[#4d835f]">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <p class="text-[#2A383A] text-sm leading-6">082 333 6868</p>
                                </div>
                                <div class="w-[1px] h-10 bg-[#2A383A] absolute top-1/2 -translate-y-1/2 right-0"></div>
                            </div>
                            <div class="w-[30%]">
                                <div class="flex justify-center items-center">
                                    <div class="mr-[35px] text-[32px] text-[#4d835f]">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <p class="text-[#2A383A] text-sm leading-6">shop@roots.vn</p>
                                </div>
                            </div>
                        </div>
                        {{-- Footer content middle --}}
                        <div class="flex border-[#4d835f] border-b-[1px] pt-[10px] pb-[35px]">
                            {{-- Footer content middle detail --}}
                            <div class="w-[36%] pr-[86px]">
                                <div class="flex justify-center">
                                    <img 
                                        src="https://sudospaces.com/rootsvn/2021/08/root-logo-01.png" 
                                        alt="logo footer"
                                        class="h-[100px] max-w-[110px]"
                                    />
                                </div>
                                <div class="">
                                    <p class="text-[#2A383A] text-sm leading-7">
                                        Chúng tôi đặt tâm huyết vào những sản phẩm chúng tôi bán, cách chúng tôi trình bày, đóng gói chúng, 
                                        cách chúng tôi giao hàng đến cho bạn, và cách bạn phản hồi khi trải nghiệm dịch vụ của chúng tôi.
                                    </p>
                                </div>
                            </div>

                            {{-- Footer content middle about --}}
                            <div class="w-[20%] pt-[23px] pl-10">
                                <div class="mb-6">
                                    <span class="text-[#2A383A] font-bold leading-[26px] text-xl">Khám phá</span>
                                </div>
                                <div class="">
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Về chúng tôi</a>
                                    </div>
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Ăn sạch - Sống xanh</a>
                                    </div>
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Thẻ thành viên</a>
                                    </div>
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Cửa hàng</a>
                                    </div>
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Tuyển dụng</a>
                                    </div>
                                </div>
                            </div>
                            {{-- Footer content middle shop --}}
                            <div class="w-[20%] pt-[23px] pl-[25px]">
                                <div class="mb-6">
                                    <span class="text-[#2A383A] font-bold leading-[26px] text-xl">Cửa hàng</span>
                                </div>
                                <div class="">
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Food & Drink</a>
                                    </div>
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Health & Wellbeing</a>
                                    </div>
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Mother & Baby Care</a>
                                    </div>
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Natural Skincare & Beauty</a>
                                    </div>
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Organic Lifestyle</a>
                                    </div>
                                </div>
                            </div>
                            {{-- Footer content middle service --}}
                            <div class="w-[24%] pt-[23px] pl-10">
                                <div class="mb-6">
                                    <span class="text-[#2A383A] font-bold leading-[26px] text-xl">Thông tin</span>
                                </div>
                                <div class="">
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Chính sách giao hàng</a>
                                    </div>
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Chính sách đổi trả</a>
                                    </div>
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Gói quà miễn phí</a>
                                    </div>
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Câu hỏi thường gặp</a>
                                    </div>
                                    <div>
                                        <a href="" class="hover:underline text-sm text-[#2A383A]">Liên hệ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Footer content bottom --}}
                        <div class="pt-[25px] pb-[35px]">
                            <div class="flex items-center">
                                <div class="w-[36%]">
                                    <div class="">
                                        <span class="text-[#2A383A] text-xl leading-9 font-bold">Đăng ký nhận bản tin</span>
                                    </div>
                                    <div class="">
                                        <span class="text-sm leading-7 text-[#2A383A]">ROOTS nói không với rác, dù là môi trường hay hộp thư của bạn</span>
                                    </div>
                                </div>
                                {{-- Footer content bottom email --}}
                                <div class="w-[35%]">
                                    <div class="w-full">
                                        <div class="flex items-center mt-1 h-[45px] w-full">
                                            <input 
                                                type="email"
                                                class="px-[15px] w-[calc(100%-98px)] text-sm text-gray-700 border border-r-0 rounded-r-none border-[#4d835f] focus:outline-none rounded shadow-sm h-full bg-white" 
                                                placeholder="Email của bạn"
                                            />
                                            <button 
                                                class="h-full px-4 w-[98px] font-bold text-sm uppercase bg-[#4d835f] border border-l-0 border-[#4d835f] rounded-r shadow-sm text-blue-50 hover:text-white hover:cursor-pointer  focus:outline-none"
                                                type="button"
                                            >
                                                Gửi
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Footer content bottom social --}}
                                <div class="w-[29%]">
                                   <div class="">
                                        <div class="flex justify-end mb-[15px]">
                                            <div class="bg-[#4d835f] rounded-full h-10 w-10 flex items-center justify-center text-xl text-white ml-2.5">
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                            <div class="bg-[#4d835f] rounded-full h-10 w-10 flex items-center justify-center text-xl text-white ml-2.5">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                            <div class="bg-[#4d835f] rounded-full h-10 w-10 flex items-center justify-center text-xl text-white ml-2.5">
                                                <img src="https://roots.vn/assets/images/icon/icon_zalo.png" alt="zalo" class="w-10 h-10 p-2">
                                            </div>
                                            <div class="bg-[#4d835f] rounded-full h-10 w-10 flex items-center justify-center text-xl text-white ml-2.5">
                                                <i class="fab fa-tiktok"></i>
                                            </div>
                                            <div class="bg-[#4d835f] rounded-full h-10 w-10 flex items-center justify-center text-xl text-white ml-2.5">
                                                <i class="fab fa-whatsapp"></i>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="mx-2 mt-[5px] relative outline-2 outline-dotted outline-[rgb(238,10,3)]">
                                                <img 
                                                    src="https://roots.vn/assets/images/bo-cong-thuong.png"
                                                    alt=""
                                                    class="max-w-[180px] w-[120px]"
                                                />
                                                <a href="http://online.gov.vn/Home/WebDetails/90496" class="absolute inset-0"></a>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
                {{-- Footer Copyright --}}
                <div class="py-2.5 bg-[#4d835f]">
                    <p class="text-white text-center text-sm leading-6">© 2021 ROOTS. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        $(document).ready(function() {
            // Xử lý sự kiện scroll đối với header
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $("#header-top").css("display", "none");
                } else {
                    $("#header-top").css("display", "block");
                }
            });
        })
        // Show khi header bottom được hover
        const handleShowOverlay = () => {
            $("#overlay-header").css("display", "block");
        }
        // Hidden khi header bottom ko còn được hover
        const handleHiddenOverlay = () => {
            $("#overlay-header").css("display", "none");
        }
    </script>
</body>
</html>