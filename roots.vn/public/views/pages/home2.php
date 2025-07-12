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
    <div class="relative h-[3000px]">
        {{-- Header --}}
        <header class="h-[162px]">
            {{-- Header Top --}}
            <div class="bg-[#E1EDE5] h-[28px] relative z-100">
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
            <div class="fixed w-full z-10">
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
            <div class="hidden overlay-header opacity-100 absolute top-0 left-0 right-0 bottom-0 bg-[#00000080]"></div>
        </header>
        {{-- End hader --}}
        
    </div>
    <script>
        // $("documement").ready(
        //     )
        const handleShowOverlay = () => {
            $(".overlay-header").css("display", "block");
        }

        const handleHiddenOverlay = () => {
            $(".overlay-header").css("display", "none");
        }
    </script>
</body>
</html>