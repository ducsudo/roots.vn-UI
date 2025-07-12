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
                   <div class="">
                        <div class="">
                            <h1 class="uppercase text-sm sm:text-base lg:text-2xl xl:text-[32px] font-bold text-white">Giới thiệu</h1>
                            <div class="h-[2px] w-[40px] sm:w-[64px] lg:w-[100px] bg-[#E3C161]"></div>
                        </div>
                   </div>
                </div>
            </div>
            {{-- Navigate --}}
            <div class="bg-[#F5F5F5]">
                <div class="max-w-[1200px] m-auto px-[15px]">
                    <div class="flex">
                        {{-- Tab1 --}}
                        <div
                            id="tab-1"
                            onclick="changeTab()"
                            class="flex flex-col items-center justify-center lg:w-[292px] lg:p-0 p-1 lg:h-[90px] bg-white lg:gap-[10px] gap-1 cursor-pointer"
                        >
                            <div class="flex flex-col items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 28 27" fill="none">
                                    <path d="M9.4751 13.4999L12.4876 16.5249L18.5251 10.4749M12.4376 1.5624C13.3001 0.824902 14.7126 0.824902 15.5876 1.5624L17.5626 3.2624C17.9376 3.5874 18.6376 3.8499 19.1376 3.8499H21.2626C22.5876 3.8499 23.6751 4.9374 23.6751 6.2624V8.3874C23.6751 8.8749 23.9376 9.5874 24.2626 9.9624L25.9626 11.9374C26.7001 12.7999 26.7001 14.2124 25.9626 15.0874L24.2626 17.0624C23.9376 17.4374 23.6751 18.1374 23.6751 18.6374V20.7624C23.6751 22.0874 22.5876 23.1749 21.2626 23.1749H19.1376C18.6501 23.1749 17.9376 23.4374 17.5626 23.7624L15.5876 25.4624C14.7251 26.1999 13.3126 26.1999 12.4376 25.4624L10.4626 23.7624C10.0876 23.4374 9.3876 23.1749 8.8876 23.1749H6.7251C5.4001 23.1749 4.3126 22.0874 4.3126 20.7624V18.6249C4.3126 18.1374 4.0501 17.4374 3.7376 17.0624L2.0501 15.0749C1.3251 14.2124 1.3251 12.8124 2.0501 11.9499L3.7376 9.9624C4.0501 9.5874 4.3126 8.8874 4.3126 8.3999V6.2499C4.3126 4.9249 5.4001 3.8374 6.7251 3.8374H8.8876C9.3751 3.8374 10.0876 3.5749 10.4626 3.2499L12.4376 1.5624Z" 
                                    stroke="#E3C161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="">
                                <p class="text-xs lg:text-base uppercase text-center text-[#E2AC36]">Sứ mệnh - giá trị cốt lõi</p>
                            </div>
                        </div>
                        {{-- Tab2 --}}
                        <div 
                            id="tab-2"
                            class="flex flex-col items-center justify-center lg:w-[292px] lg:p-0 p-1 lg:h-[90px] lg:gap-[10px] gap-1 cursor-pointer"
                            onclick="changeTab()"
                        >
                            <div class="flex flex-col items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 31" fill="none">
                                    <path d="M10.3127 27.55C7.81274 26.55 5.62523 24.7375 4.17523 22.225C2.75023 19.7625 2.27523 17.025 2.61273 14.4125M7.31275 6.09995C9.43775 4.43745 12.1002 3.44995 15.0002 3.44995C17.8377 3.44995 20.4503 4.41244 22.5503 6.01244M19.6877 27.55C22.1877 26.55 24.3752 24.7375 25.8252 22.225C27.2502 19.7625 27.7252 17.025 27.3877 14.4125M20.5253 10.4375C23.5753 13.4875 23.5753 18.4374 20.5253 21.4874C17.4753 24.5374 12.5252 24.5374 9.47524 21.4874C6.42524 18.4374 6.42524 13.4875 9.47524 10.4375C12.5252 7.38746 17.4753 7.38746 20.5253 10.4375Z" 
                                    stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="">
                                <p class="text-xs lg:text-base text-[#3B3B3B] uppercase text-center">Lịch sử hình thành phát triển</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="show-tab-1" class="">
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
                                <ul class="list-disc text-red-500 px-3 md:px-5 gap-5 flex flex-col text-sm lg:text-base bg-[url('{{ asset("/img/path-2164.jpg") }}')] bg-size-[50%] bg-center bg-no-repeat">
                                    <li>
                                        <p class="text-black">
                                            <b class="text-[#E2AC36]">Phong Thủy Phùng Gia</b> với sứ mệnh trao đến cho cộng đồng những kiến thức giá trị, hơn hết với những định hướng rõ ràng 
                                            Phong Thủy Phùng Gia luôn đặt mọi cá nhân ở vị trí trung tâm và không ngừng nỗ lực góp phần cải thiện cuộc sống khách hàng trở nên hoàn thiện hơn.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text-black">
                                            Bằng những hành động thiết thực trong hơn 10 năm phát triển, 
                                            giá trị cốt lõi từ sứ mệnh của Phong Thủy Phùng Gia
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
                            <div class="flex justify-center items-center m-auto md:m-0 mb-6 lg:mb-0 w-1/2 md:w-full">
                                <img class="m-auto" src="{{ asset('/img/Frame-12081.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
               {{--  Intro --}}
                <div class="bg-white  mt-[60px]">
                    <div class="max-w-[1200px] m-auto px-[15px]">
                        <div class="lg:grid lg:grid-cols-2 lg:gap-[54px]">
                            <div class="flex justify-center items-center m-auto md:m-0 mb-6 lg:mb-0 w-1/2 md:w-full">
                                <img class="m-auto" src="{{ asset('/img/Frame-12083.png') }}" alt="">
                            </div>
                            <div class="flex flex-col gap-[36px] bg-[url('{{ asset("/img/path-2164.jpg") }}')] bg-size-[50%] bg-center bg-no-repeat">
                                <div class="flex flex-col gap-6">
                                    <div class="relative">
                                        <div class="h-[64px] lg:h-[80px] w-[2px] bg-[#E2AC36] absolute"></div>
                                        <div class="pl-6 flex flex-col gap-4">
                                            <p class="uppercase text-[#0D0D0D] lg:text-base text-sm font-medium">PHONG THỦY PHÙNG GIA</p>
                                            <p class="uppercase text-[#E2AC36] lg:text-[32px] text-base font-semibold">Giá trị cốt lõi</p>
                                        </div>
                                    </div>
                                    <ul class="px-5 gap-5 flex flex-col text-sm lg:text-base ">
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
            </div>

            <div id="show-tab-2" class="hidden">
                {{-- History --}}
                <div class="bg-white  mt-[60px]">
                    <div class="max-w-[1200px] m-auto px-[15px]">
                        <div class="flex flex-col gap-6">
                            <div class="relative">
                                <div class="h-[64px] lg:h-[80px] w-[2px] bg-[#E2AC36] absolute"></div>
                                <div class="pl-3 lg:pl-6 flex flex-col gap-4">
                                    <p class="uppercase text-[#0D0D0D] text-sm lg:text-base font-medium">Lịch sử</p>
                                    <p class="uppercase text-[#E2AC36] text-base lg:text-[32px] font-semibold">Hình thành & phát triển</p>
                                </div>
                            </div>
                            <ul class="px-5 gap-5 flex flex-col lg:text-base text-sm">
                                <li>
                                    <b class="text-[#E2AC36] font-bold text-base leading-6">MASTER PHÙNG PHƯƠNG</b>đang là một trong những người đi đầu trong việc áp dụng các sản phẩm công nghệ 4.0 
                                    kết hợp với phong thủy và đã có những kết quả bước đầu thành công, vô cùng hiệu quả đối với những khách hàng tìm đến thầy.
                                </li>
                                <li>
                                    <img src="{{ asset('/img/img-history.png') }}" alt="">
                                </li>
                                <li>
                                    Trong hơn <b class="text-[#E2AC36] font-bold text-base leading-6">10 năm lĩnh hội kiến thức phong thủy</b> và không ngừng phát triển toàn diện, thầy Phùng Phương còn kết hợp với 
                                    khả năng chuyên sâu của bản thân về Thiết kế sân vườn và cảnh quan trong thời gian <b class="text-[#E2AC36] font-bold text-base leading-6">học tập tại Singapore</b>. 
                                    Chính bởi những trải nghiệm thực tế và kiến thức lĩnh hội trong nhiều năm liền đã khiến Master Phùng Phương có cái nhìn 
                                    toàn cảnh và đa chiều trong các phương pháp cải thiện không gian phong thủy của mỗi công trình hay đời sống 
                                    thường ngày của mỗi khách hàng.
                                </li>
                                <li>
                                    Có lẽ vậy mà sau nhiều năm tại nước ngoài, khi trở về nước thầy <b class="text-[#E2AC36] font-bold text-base leading-6">Phùng Phương</b> đều được 
                                    hầu hết mọi người đánh giá có phần “khác biệt” trong “lối đi riêng của mình” trong nhiều 
                                    thế hệ thầy Phong Thủy Địa Lý tại Việt Nam từ trước đến nay.
                                </li>
                                <li>
                                    Đặc biệt, theo tôn chỉ của<b class="text-[#E2AC36] font-bold text-base leading-6">Master Phùng Phương</b>đối với bộ môn Phong Thủy khi áp dụng vào 
                                    đời sống luôn dựa trên<b class="text-[#E2AC36] font-bold text-base leading-6">Gieo Chính Đạo- Đắc Tâm An</b>và đối với mọi người- dù theo bất kể 
                                    tôn giáo nào đều sẽ đạt được lợi ích tích cực khi đi theo con đường của Phong Thủy chính phái.
                                </li>
                                <li>
                                    Và đó cũng là điều thầy<b class="text-[#E2AC36] font-bold text-base leading-6"> Phùng Phương </b>muốn gửi gắm về con đường thầy lựa chọn trong bộ môn khoa học này, 
                                    thầy chia sẻ bản thân sẽ kết hợp hài hòa giữa phong thủy chính phái và huyền học thế giới, 
                                    giữa các thuật số cao cấp <b class="text-[#E2AC36] font-bold text-base leading-6">(như Huyền Không Đại Quái, Huyền Không Phi Tinh, Kỳ Môn Độn Giáp…)</b> để đem lại 
                                    vượng khí cho gia chủ người được áp dụng.
                                </li>
                                <li class="text-[#E2AC36] text-base lg:text-[32px] font-semibold text-center">
                                    <p class="">HÀNH TRÌNH 10 NĂM</p>
                                    <p>& NHỮNG CỘT MỐC QUAN TRỌNG</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            
                {{--  History Journey --}}
                <div class="mt-[60px]">
                    <div class="max-w-[1200px] m-auto px-[15px]">
                        {{--  History Journey link --}}
                        <div class="hidden md:block h-[146px] relative">
                            {{-- History Journey location --}}
                            <div class="absolute md:left-[3.4%] z-[-10] sm:top-[-2.7%] lg:left-[60px]  xl:left-[40.6%]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                    <path d="M25.0002 27.979C28.5901 27.979 31.5002 25.0689 31.5002 21.479C31.5002 17.8892 28.5901 14.979 25.0002 14.979C21.4104 14.979 18.5002 17.8892 18.5002 21.479C18.5002 25.0689 21.4104 27.979 25.0002 27.979Z" stroke="#E3C161" stroke-width="1.5"/>
                                    <path d="M7.54187 17.6873C11.646 -0.354324 38.3752 -0.333491 42.4585 17.7082C44.8544 28.2915 38.271 37.2498 32.5002 42.7915C28.3127 46.8332 21.6877 46.8332 17.4794 42.7915C11.7294 37.2498 5.14604 28.2707 7.54187 17.6873Z" stroke="#E3C161" stroke-width="1.5"/>
                                </svg>
                            </div>
                            {{-- History Journey arrow --}}
                            <div class="absolute sm:top-[31.5%] md:left-[3.4%] z-[-10] md:top-[31.5%] lg:left-[60px]  xl:left-[40%]">
                                <img src="{{ asset('/img/left_arrow-1.png') }}" 
                                    alt=""
                                    class="w-[35px] h-[8.27%]"
                                />
                            </div>
                            <div class="absolute sm:top-[280px] md:left-[180px] z-[-10] md:top-[216%] lg:left-[230px] xl:left-[56.4%]">
                                <img src="{{ asset('/img/right_arrow.png') }}" 
                                    alt=""
                                    class="w-[35px] h-[8.27%]"
                                />
                            </div>
                            <div class="absolute sm:top-[524px] md:left-[3.4%] z-[-10] md:top-[408%] lg:left-[60px] xl:left-[40%]">
                                <img src="{{ asset('/img/left_arrow-1.png') }}" 
                                    alt=""
                                    class="w-[35px] h-[8.27%]"
                                />
                            </div>
                            <div class="absolute sm:top-[750px] md:left-[180px] z-[-10] md:top-[600%] lg:left-[230px] xl:left-[56.4%]">
                                <img src="{{ asset('/img/right_arrow.png') }}" 
                                    alt=""
                                    class="w-[35px] h-[8.27%]"
                                />
                            </div>
                            <div class="absolute sm:top-[1020px] md:left-[3.4%] z-[-10] md:top-[800%] lg:left-[60px] xl:left-[40%]">
                                <img src="{{ asset('/img/left_arrow-1.png') }}" 
                                    alt=""
                                    class="w-[35px] h-[8.27%]"
                                />
                            </div>
                            <div class="absolute sm:top-[1260px] md:left-[180px] z-[-10] md:top-[980%] lg:left-[230px] xl:left-[56.4%]">
                                <img src="{{ asset('/img/right_arrow.png') }}" 
                                    alt=""
                                    class="w-[35px] h-[8.27%]"
                                />
                            </div>
                        </div>
                        {{--  History Journey Content Desktop --}}
                        <div class="hidden xl:block">
                            <div class="flex flex-col gap-[60px]">
                                {{-- 2008 --}}
                                <div class="flex gap-[75px] justify-center items-center">
                                    <div class="w-[34.2%]">
                                        <p class="text-[#3B3B3B] text-2xl text-end font-semibold lg:pb-8">Bắt đầu</p>
                                        <p class="lg:text-[64px] lg:leading:[64px] xl:text-[120px] xl:leading-[120px] font-semibold text-[#E2AC36] text-end">2008</p>
                                    </div>
                                    <div class="flex justify-center">
                                        <img 
                                            src="{{ asset('/img/h-img1.png') }}" 
                                            alt="Lịch sử hình thành"
                                            class="w-[220px]"
                                        />
                                    </div>
                                    <div class="flex justify-center items-center w-[34.2%]">
                                        <p class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-light">
                                            Thầy bắt đầu tham gia nghiên cứu phong thủy đầu tiên tại Đảo Quốc Sư Tử - Singapore
                                        </p>
                                    </div>
                                </div>
                                {{-- 2009 --}}
                                <div class="flex gap-[75px] justify-center items-center">
                                    <div class="flex justify-center items-center w-[34.2%]">
                                        <p class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-light">Thầy trở thành người sáng lập <b class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-semibold">
                                            Công Ty Cổ Phần Thiết Kế Phong Thủy Phùng Gia</b>
                                            và là đại diện pháp lý duy nhất cho đến thời điểm hiện nay!
                                        </p>
                                    </div>
                                    <div class="flex justify-center">
                                        <img 
                                            src="{{ asset('/img/h-img6.png') }}" 
                                            alt="Lịch sử hình thành"
                                            class="w-[220px]"
                                        />
                                    </div>
                                    <div class="w-[34.2%]">
                                        <p class="text-[#3B3B3B] text-2xl font-semibold lg:pb-8">Sáng lập</p>
                                        <p class="lg:text-[64px] lg:leading:[64px] xl:text-[120px] xl:leading-[120px] font-semibold text-[#E2AC36]">2009</p>
                                    </div>
                                </div>
                                {{-- 2010 --}}
                                <div class="flex gap-[75px] justify-center items-center">
                                    <div class="w-[34.2%]">
                                        <p class="text-[#3B3B3B] text-2xl text-end font-semibold lg:pb-8">Tham gia</p>
                                        <p class="lg:text-[64px] lg:leading:[64px] xl:text-[120px] xl:leading-[120px] font-semibold text-[#E2AC36] text-end">2010</p>
                                    </div>
                                    <div class="flex justify-center">
                                        <img 
                                            src="{{ asset('/img/h-img2.png') }}" 
                                            alt="Lịch sử hình thành"
                                            class="w-[220px]"
                                        />
                                    </div>
                                    <div class="flex justify-center items-center w-[34.2%]">
                                        <p class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-light">Thầy tham gia các khóa học tại Bắc Kinh, Trung Quốc.</p>
                                    </div>
                                </div>
                                {{-- 2013 --}}
                                <div class="flex gap-[75px] justify-center items-center">
                                    <div class="flex justify-center items-center w-[34.2%]">
                                        <p class="text-[#0D0D0D] text-lg leading-[30px] font-light">
                                            Thầy trở về nước và bắt đầu có những buổi Talkshow trực tiếp, 
                                            buổi đào tạo đầu tiên với hơn 2.000 học viên
                                        </p>
                                    </div>
                                    <div class="flex justify-center">
                                        <img 
                                            src="{{ asset('/img/h-img3.png') }}" 
                                            alt="Lịch sử hình thành"
                                            class="w-[220px]"
                                        />
                                    </div>
                                    <div class="w-[34.2%]">
                                        <p class="text-[#3B3B3B] text-2xl font-semibold lg:pb-8">Talkshow</p>
                                        <p class="lg:text-[64px] lg:leading:[64px] xl:text-[120px] xl:leading-[120px] font-semibold text-[#E2AC36]">2013 </p>
                                    </div>
                                </div>
                                {{-- 2018 --}}
                                <div class="flex gap-[75px] justify-center items-center"> 
                                    <div class="w-[34.2%]">
                                        <p class="text-[#3B3B3B] text-2xl text-end font-semibold lg:pb-8">Tọa đàm</p>
                                        <p class="lg:text-[64px] lg:leading:[64px] xl:text-[120px] xl:leading-[120px] font-semibold text-[#E2AC36] text-end">2018</p>
                                    </div>
                                    <div class="flex justify-center">
                                        <img 
                                            src="{{ asset('/img/h-img4.png') }}" 
                                            alt="Lịch sử hình thành"
                                            class="w-[220px]"
                                        />
                                    </div>
                                    <div class="flex justify-center items-center w-[34.2%]">
                                        <p class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-light">
                                            <b class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-semibold">Master Phùng Phương</b>
                                            tham gia liên tiếp nhiều buổi tọa đàm tại
                                            các nước: Thái Lan, Campuchia, Malaysia, Singapore, Nhật Bản, Hàn Quốc, Úc, Mỹ, Canada, Ấn Độ, …
                                        </p>
                                    </div>
                                </div>
                                {{-- 2022 --}}
                                <div class="flex gap-[75px] justify-center items-center">
                                    <div class="flex justify-center items-center w-[34.2%]">
                                        <p class="text-[#0D0D0D] text-xl leading-[30px]">Hiện thầy đang là Chủ Tịch của Công Ty Cổ Phần Phong Thủy Phùng Gia. 
                                            Website của công ty là : 
                                            <b class="text-[#E2AC36] text-xl leading-[30px] font-light">phongthuyphunggia.com</b>
                                        </p>
                                    </div>
                                    <div class="flex justify-center">
                                        <img 
                                            src="{{ asset('/img/h-img5.png') }}" 
                                            alt="Lịch sử hình thành"
                                            class="w-[220px]"
                                        />
                                    </div>
                                    <div class="w-[34.2%]">
                                        <p class="text-[#3B3B3B] text-2xl font-semibold lg:pb-8">Bắt đầu</p>
                                        <p class="lg:text-[120px] lg:leading-[120px] font-semibold text-[#E2AC36]">2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  History Journey Content Tablet / mobile --}}
                        <div class="block xl:hidden">
                            <div class="flex flex-col gap-[48px] md:gap-[60px]">
                                {{-- 2008 --}}
                                <div class="flex gap-[42px] md:gap-[75px]">
                                    <div class="my-auto sm:my-0 sm:flex items-center justify-center w-1/3">
                                        <img 
                                            src="{{ asset('/img/h-img1.png') }}" 
                                            alt="Lịch sử hình thành"
                                            class="max-w-[220px] w-full"
                                        />
                                    </div>
                                    <div class="flex flex-col justify-center w-2/3">
                                        <p class="text-base text-[#3B3B3B] md:text-2xl font-semibold">Bắt đầu</p>
                                        <p class="text-3xl md:text-[64px] md:leading:[64px] xl:text-[120px] xl:leading-[120px] font-semibold text-[#E2AC36]">2008</p>
                                        <p class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-light">
                                            Thầy bắt đầu tham gia nghiên cứu phong thủy đầu tiên tại Đảo Quốc Sư Tử - Singapore
                                        </p>
                                    </div>
                                </div>
                                {{-- 2009 --}}
                                <div class="flex gap-[42px] md:gap-[75px]">
                                    <div class="my-auto sm:my-0 sm:flex items-center justify-center w-1/3">
                                        <img 
                                            src="{{ asset('/img/h-img6.png') }}" 
                                            alt="Lịch sử hình thành"
                                            class="max-w-[220px] w-full"
                                        />
                                    </div>
                                    <div class="flex flex-col justify-center w-2/3">
                                        <p class="text-base text-[#3B3B3B] md:text-2xl font-semibold">Sáng lập</p>
                                        <p class="text-3xl md:text-[64px] md:leading:[64px] xl:text-[120px] xl:leading-[120px] font-semibold text-[#E2AC36]">2009</p>
                                        <p class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-light">Thầy trở thành người sáng lập <b class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-semibold">
                                            Công Ty Cổ Phần Thiết Kế Phong Thủy Phùng Gia</b>
                                            và là đại diện pháp lý duy nhất cho đến thời điểm hiện nay!
                                        </p>
                                    </div>
                                </div>
                                {{-- 2010 --}}
                                <div class="flex gap-[42px] md:gap-[75px]">
                                    <div class="my-auto sm:my-0 sm:flex items-center justify-center w-1/3">
                                        <img 
                                            src="{{ asset('/img/h-img2.png') }}" 
                                            alt="Lịch sử hình thành"
                                            class="max-w-[220px] w-full"
                                        />
                                    </div>
                                    <div class="flex flex-col justify-center w-2/3">
                                        <p class="text-base text-[#3B3B3B] md:text-2xl font-semibold">Tham gia</p>
                                        <p class="text-3xl md:text-[64px] md:leading:[64px] xl:text-[120px] xl:leading-[120px] font-semibold text-[#E2AC36]">2010</p>
                                        <p class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-light">Thầy tham gia các khóa học tại Bắc Kinh, Trung Quốc.</p>
                                    </div>
                                </div>
                                {{-- 2013 --}}
                                <div class="flex gap-[42px] md:gap-[75px]">
                                    <div class="my-auto sm:my-0 sm:flex items-center justify-center w-1/3">
                                        <img 
                                            src="{{ asset('/img/h-img3.png') }}" 
                                            alt="Lịch sử hình thành"
                                            class="max-w-[220px] w-full"
                                        />
                                    </div>
                                    <div class="flex flex-col justify-center w-2/3">
                                        <p class="text-base text-[#3B3B3B] md:text-2xl font-semibold">Talkshow</p>
                                        <p class="text-3xl md:text-[64px] md:leading:[64px] xl:text-[120px] xl:leading-[120px] font-semibold text-[#E2AC36]">2013 </p>
                                        <p class="text-[#0D0D0D] text-lg leading-[30px] font-light">
                                            Thầy trở về nước và bắt đầu có những buổi Talkshow trực tiếp, 
                                            buổi đào tạo đầu tiên với hơn 2.000 học viên
                                        </p>
                                    </div>
                                </div>
                                {{-- 2018 --}}
                                <div class="flex gap-[42px] md:gap-[75px]">
                                    <div class="my-auto sm:my-0 sm:flex items-center justify-center w-1/3">
                                        <img 
                                            src="{{ asset('/img/h-img4.png') }}" 
                                            alt="Lịch sử hình thành"
                                            class="max-w-[220px] w-full"
                                        />
                                    </div>
                                    <div class="flex flex-col justify-center w-2/3">
                                    <p class="text-base text-[#3B3B3B] md:text-2xl font-semibold">Tọa đàm</p>
                                        <p class="text-3xl md:text-[64px] md:leading:[64px] xl:text-[120px] xl:leading-[120px] font-semibold text-[#E2AC36]">2018</p>
                                        <p class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-light">
                                            <b class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-semibold">Master Phùng Phương</b>
                                            tham gia liên tiếp nhiều buổi tọa đàm tại
                                            các nước: Thái Lan, Campuchia, Malaysia, Singapore, Nhật Bản, Hàn Quốc, Úc, Mỹ, Canada, Ấn Độ, …
                                        </p>
                                    </div>
                                </div>
                                {{-- 2022 --}}
                                <div class="flex gap-[42px] md:gap-[75px]">
                                    <div class="my-auto sm:my-0 sm:flex items-center justify-center w-1/3">
                                        <img 
                                            src="{{ asset('/img/h-img5.png') }}" 
                                            alt="Lịch sử hình thành"
                                            class="max-w-[220px] w-full"
                                        />
                                    </div>
                                    <div class="flex flex-col justify-center w-2/3">
                                    <p class="text-base text-[#3B3B3B] md:text-2xl font-semibold">Bắt đầu</p>
                                        <p class="text-3xl md:text-[64px] md:leading:[64px] xl:text-[120px] xl:leading-[120px] font-semibold text-[#E2AC36]">2022</p>
                                        <p class="text-[#0D0D0D] text-base lg:text-xl lg:leading-[30px] font-light">
                                            Hiện thầy đang là Chủ Tịch của Công Ty Cổ Phần Phong Thủy Phùng Gia. 
                                            Website của công ty là :
                                            <b class="text-[#E2AC36] text-base lg:text-xl lg:leading-[30px] font-semibold">phongthuyphunggia.com</b>
                                        </p>
                                    </div>
                                </div>
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
            changeTab();
        })

        // Function được sử dụng để thay đổi tabs trong trang
        function changeTab() {
            // Show tab1
            $("#tab-1").click(function() {
                $('#tab-2').removeClass('bg-white');
                $('#tab-2 p').removeClass('text-[#E2AC36]');
                $("#tab-2 svg path").css("stroke", "#BFBFBF");
                $("#tab-2 svg path").css("stroke", "#BFBFBF");
                $("#show-tab-2").addClass("hidden");

                $("#tab-1").addClass('bg-white');
                $("#tab-1 p").addClass('text-[#E2AC36]');
                $("#tab-1 svg path").css("stroke", "#E3C161");
                $("#show-tab-1").removeClass("hidden");
            })

            // Show tab2
            $("#tab-2").click(function() {
                $('#tab-1').removeClass('bg-white');
                $('#tab-1 p').removeClass('text-[#E2AC36]');
                $("#tab-1 svg path").css("stroke", "#BFBFBF");
                $("#show-tab-1").addClass("hidden");
                
                $("#tab-2").addClass('bg-white');
                $("#tab-2 p").addClass('text-[#E2AC36]');
                $("#tab-2 svg path").css("stroke", "#E3C161");
                $("#show-tab-2").removeClass("hidden");
            })
        }
    </script>
</body>
</html>