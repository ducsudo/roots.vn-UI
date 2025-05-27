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
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Yanone+Kaffeesatz:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="relative">
        <header></header>
        <main class="">
             {{-- Banner --}}
            <div class="max-w-[1600xp] w-full relative ">
                <div class="w-full">
                    <img src="{{ asset('/img/img-about.jpg') }}" alt="" class="w-full">
                </div>
                {{-- Title page --}}
                <div class="absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 max-w-[1200px] flex px-[15px] m-auto items-center w-full">
                   <div class="hidden lg:block">
                        <div class="">
                            <h1 class="uppercase text-[32px] font-bold text-white">Giới thiệu</h1>
                            <div class="h-[2px] w-[100px] bg-[#E3C161]"></div>
                        </div>
                   </div>
                </div>
            </div>
            {{-- Navigate --}}
            <div class="bg-[#F5F5F5]">
                    <div class="max-w-[1200px] m-auto px-[15px]">
                        <div class="flex">
                            <div class="flex flex-col items-center justify-center lg:w-[292px] lg:p-0 p-1 lg:h-[90px] bg-white lg:gap-[10px] gap-1">
                            <div class="flex flex-col items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 28 27" fill="none">
                                        <path d="M9.4751 13.4999L12.4876 16.5249L18.5251 10.4749M12.4376 1.5624C13.3001 0.824902 14.7126 0.824902 15.5876 1.5624L17.5626 3.2624C17.9376 3.5874 18.6376 3.8499 19.1376 3.8499H21.2626C22.5876 3.8499 23.6751 4.9374 23.6751 6.2624V8.3874C23.6751 8.8749 23.9376 9.5874 24.2626 9.9624L25.9626 11.9374C26.7001 12.7999 26.7001 14.2124 25.9626 15.0874L24.2626 17.0624C23.9376 17.4374 23.6751 18.1374 23.6751 18.6374V20.7624C23.6751 22.0874 22.5876 23.1749 21.2626 23.1749H19.1376C18.6501 23.1749 17.9376 23.4374 17.5626 23.7624L15.5876 25.4624C14.7251 26.1999 13.3126 26.1999 12.4376 25.4624L10.4626 23.7624C10.0876 23.4374 9.3876 23.1749 8.8876 23.1749H6.7251C5.4001 23.1749 4.3126 22.0874 4.3126 20.7624V18.6249C4.3126 18.1374 4.0501 17.4374 3.7376 17.0624L2.0501 15.0749C1.3251 14.2124 1.3251 12.8124 2.0501 11.9499L3.7376 9.9624C4.0501 9.5874 4.3126 8.8874 4.3126 8.3999V6.2499C4.3126 4.9249 5.4001 3.8374 6.7251 3.8374H8.8876C9.3751 3.8374 10.0876 3.5749 10.4626 3.2499L12.4376 1.5624Z" stroke="#E3C161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="">
                                    <p class="text-xs lg:text-base text-[#E2AC36] uppercase text-center">Sứ mệnh - giá trị cốt lõi</p>
                                </div>
                            </div>
                            <div class="flex flex-col items-center justify-center lg:w-[292px] lg:p-0 p-1 lg:h-[90px] lg:gap-[10px] gap-1">
                            <div class="flex flex-col items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 31" fill="none">
                                        <path d="M10.3127 27.55C7.81274 26.55 5.62523 24.7375 4.17523 22.225C2.75023 19.7625 2.27523 17.025 2.61273 14.4125M7.31275 6.09995C9.43775 4.43745 12.1002 3.44995 15.0002 3.44995C17.8377 3.44995 20.4503 4.41244 22.5503 6.01244M19.6877 27.55C22.1877 26.55 24.3752 24.7375 25.8252 22.225C27.2502 19.7625 27.7252 17.025 27.3877 14.4125M20.5253 10.4375C23.5753 13.4875 23.5753 18.4374 20.5253 21.4874C17.4753 24.5374 12.5252 24.5374 9.47524 21.4874C6.42524 18.4374 6.42524 13.4875 9.47524 10.4375C12.5252 7.38746 17.4753 7.38746 20.5253 10.4375Z" stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="">
                                    <p class="text-xs lg:text-base text-[#3B3B3B] uppercase text-center">Lịch sử hình thành phát triển</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            {{-- Missions --}}
            <div class="bg-white  mt-[60px]">
                <div class="max-w-[1200px] m-auto px-[15px]">
                    <div class="flex flex-col-reverse lg:grid lg:grid-cols-2 lg:gap-[54px]">
                        <div class="flex flex-col gap-6">
                            <div class="relative">
                                <div class="h-[64px] lg:h-[80px] w-[2px] bg-[#E2AC36] absolute"></div>
                                <div class="pl-6 flex flex-col gap-4">
                                    <p class="text-sm uppercase text-[#0D0D0D] lg:text-base font-medium">Sứ mệnh</p>
                                    <p class="uppercase text-[#E2AC36] text-base lg:text-[32px] font-semibold">Tôn chỉ hoạt động</p>
                                </div>
                            </div>
                            <ul class="list-disc text-red-500 px-5 gap-5 flex flex-col text-sm lg:text-base">
                                <li>
                                    <p class="text-black">
                                        <b class="text-[#E2AC36]">Phong Thủy Phùng Gia</b> với sứ mệnh trao đến cho cộng đồng những kiến thức giá trị, hơn hết với những định hướng rõ ràng 
                                        Phong Thủy Phùng Gia luôn đặt mọi cá nhân ở vị trí trung tâm và không ngừng nỗ lực góp phần cải thiện cuộc sống khách hàng trở nên hoàn thiện hơn.
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black">
                                        Bằng những hành động thiết thực trong hơn 10 năm phát triển, 
                                        giá trị cốt lõi từ sứ mệnh của Phong Thủy Phùng Gia 
                                        đã được ghi nhận; hướng tới mục tiêu trở thành doanh nghiệp phong thủy có tầm ảnh hưởng, lấy chữ 
                                        <b class="text-[#E2AC36]">Đạo - Tín là sức mạnh </b>và đạo đức xã hội tận lực với mọi cá nhân trong xã hội.
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black">
                                        Kiến tạo niềm tin tích cực trong cuộc sống
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black">
                                        Mục tiêu: 2 triệu người ứng dụng phong thủy vào cuộc sống
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black">
                                        Đội ngũ nhân sự luôn làm việc không hối tiếc - chịu trách nhiệm
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black">
                                        Tôn trọng là cộng hưởng sức mạnh - sống tử tế là người có ích - cải tiến vô hạn
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="flex justify-center items-center mb-6">
                            <img src="{{ asset('/img/Frame-12081.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
           {{--  Intro --}}
            <div class="bg-white  mt-[60px]">
                <div class="max-w-[1200px] m-auto px-[15px]">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-[54px]">
                        <div class="flex justify-center items-center mb-6">
                            <img src="{{ asset('/img/Frame-12083.png') }}" alt="">
                        </div>
                        <div class="flex flex-col gap-[36px]">
                            <div class="flex flex-col gap-6">
                                <div class="relative">
                                    <div class="h-[64px] lg:h-[80px] w-[2px] bg-[#E2AC36] absolute"></div>
                                    <div class="pl-6 flex flex-col gap-4">
                                        <p class="uppercase text-[#0D0D0D] lg:text-base text-sm font-medium">PHONG THỦY PHÙNG GIA</p>
                                        <p class="uppercase text-[#E2AC36] lg:text-[32px] text-base font-semibold">Giá trị cốt lõi</p>
                                    </div>
                                </div>
                                <ul class="px-5 gap-5 flex flex-col text-sm lg:text-base">
                                    <li>
                                       "Phong thủy dựa trên khoa học để giúp mọi người hiểu rõ bản thân muốn gì và 
                                       lựa chọn điều tốt nhất. Đây là nền tảng quan trọng để công ty xây dựng và phát triển lâu dài”.
                                    </li>
                                  
                                    <li>
                                       Khi mới thành lập, <b class="text-[#E2AC36]">Phùng Gia Feng Shui</b> gặp không ít khó khăn từ việc xây dựng thương hiệu đến tiếp cận khách hàng. 
                                       Tuy nhiên, người sáng lập vẫn kiên trì giữ vững tôn chỉ “Gốc sâu nhất của phong thủy là tâm, đạo cao nhất là tích đức hành thiện”. Phùng Gia Feng Shui lấy khách hàng làm trung tâm và nỗ lực đáp ứng mọi yêu cầu. Nhờ đó, thương hiệu dần khởi sắc và có chỗ đứng tại thị trường Việt Nam.
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <img 
                                    src="{{ asset('/img/Frame-12086.png') }}" 
                                    alt=""
                                    class="w-full"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Share --}}
            <div class="bg-white  my-[60px] h-[91px]">
                <div class="max-w-[1200px] m-auto px-[15px] flex justify-end flex-col">
                    <div class="flex flex-col gap-[30px]">
                        <div class="bg-[#E3C161] h-[1px] w-full"></div>
                       <div class="flex flex-col gap-2 w-[175px] h-[60px]">
                            <div>
                                <p class="text-xl text-[#3B3B3B] font-normal">Chia sẻ</p>
                            </div>
                            <ul class="flex gap-1.5">
                                <li class="bg-[#3B5998] flex py-[3px] px-[4px] gap-1 rounded-[3px] justify-center items-center">
                                    <img src="{{ asset('/img/face.png') }}" alt="" class="w-3 h-3"/>
                                    <p class="text-white text-xs font-bold">Share</p>
                                </li>
                                <li class="text-[#BFBFBF] text-base font-normal">
                                    Share
                                </li>
                                <li class="flex bg-[#03A9F4] py-[3px] px-[4px] gap-1 rounded-[3px] justify-center items-center">
                                    <img src="{{ asset('/img/x.png') }}" alt="" class="w-3 h-3"/>
                                    <p class="text-white text-xs font-bold">Tweet</p>
                                </li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        $(document).ready(function() {
            
        })
    </script>
</body>
</html>