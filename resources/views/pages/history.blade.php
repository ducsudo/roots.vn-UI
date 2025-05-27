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
                <div class="max-w-[1200px] m-auto px-[15px] ">
                    <div class="flex">
                        <div class="flex flex-col items-center justify-center lg:w-[292px] lg:p-0 p-1 lg:h-[90px]  lg:gap-[10px] gap-1">
                           <div class="flex flex-col items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 28 27" fill="none">
                                    <path d="M9.47461 13.4999L12.4871 16.5249L18.5246 10.4749M12.4371 1.5624C13.2996 0.824902 14.7121 0.824902 15.5871 1.5624L17.5621 3.2624C17.9371 3.5874 18.6371 3.8499 19.1371 3.8499H21.2621C22.5871 3.8499 23.6746 4.9374 23.6746 6.2624V8.3874C23.6746 8.8749 23.9371 9.5874 24.2621 9.9624L25.9621 11.9374C26.6996 12.7999 26.6996 14.2124 25.9621 15.0874L24.2621 17.0624C23.9371 17.4374 23.6746 18.1374 23.6746 18.6374V20.7624C23.6746 22.0874 22.5871 23.1749 21.2621 23.1749H19.1371C18.6496 23.1749 17.9371 23.4374 17.5621 23.7624L15.5871 25.4624C14.7246 26.1999 13.3121 26.1999 12.4371 25.4624L10.4621 23.7624C10.0871 23.4374 9.38711 23.1749 8.88711 23.1749H6.72461C5.39961 23.1749 4.31211 22.0874 4.31211 20.7624V18.6249C4.31211 18.1374 4.04961 17.4374 3.73711 17.0624L2.04961 15.0749C1.32461 14.2124 1.32461 12.8124 2.04961 11.9499L3.73711 9.9624C4.04961 9.5874 4.31211 8.8874 4.31211 8.3999V6.2499C4.31211 4.9249 5.39961 3.8374 6.72461 3.8374H8.88711C9.37461 3.8374 10.0871 3.5749 10.4621 3.2499L12.4371 1.5624Z" stroke="#3B3B3B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="">
                                <p class="text-center text-xs lg:text-base text-[#3B3B3B] uppercase font-medium">Sứ mệnh - giá trị cốt lõi</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-center lg:w-[292px] lg:p-0 p-1 lg:h-[90px] lg:gap-[10px] gap-1 bg-white">
                           <div class="flex flex-col items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 31" fill="none">
                                    <path d="M10.3127 27.55C7.81274 26.55 5.62523 24.7375 4.17523 22.225C2.75023 19.7625 2.27523 17.025 2.61273 14.4125M7.31275 6.09995C9.43775 4.43745 12.1002 3.44995 15.0002 3.44995C17.8377 3.44995 20.4503 4.41244 22.5503 6.01244M19.6877 27.55C22.1877 26.55 24.3752 24.7375 25.8252 22.225C27.2502 19.7625 27.7252 17.025 27.3877 14.4125M20.5253 10.4375C23.5753 13.4875 23.5753 18.4374 20.5253 21.4874C17.4753 24.5374 12.5252 24.5374 9.47524 21.4874C6.42524 18.4374 6.42524 13.4875 9.47524 10.4375C12.5252 7.38746 17.4753 7.38746 20.5253 10.4375Z" stroke="#E2AC36" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="">
                                <p class="text-center text-xs lg:text-base text-[#E2AC36] uppercase font-medium">Lịch sử hình thành phát triển</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           {{-- History --}}
           <div class="bg-white  mt-[60px]">
            <div class="max-w-[1200px] m-auto px-[15px]">
                <div class="flex flex-col gap-6">
                    <div class="relative">
                        <div class="h-[64px] lg:h-[80px] w-[2px] bg-[#E2AC36] absolute"></div>
                        <div class="pl-6 flex flex-col gap-4">
                            <p class="uppercase text-[#0D0D0D] text-sm lg:text-base font-medium">Lịch sử</p>
                            <p class="uppercase text-[#E2AC36] text-base lg:text-[32px] font-semibold">Hình thành & phát triển</p>
                        </div>
                    </div>
                    <ul class="px-5 gap-5 flex flex-col lg:text-base text-sm">
                        <li>
                            <b class="text-[#E2AC36] font-bold text-base leading-6">MASTER PHÙNG PHƯƠNG</b> đang là một trong những người đi đầu trong việc áp dụng các sản phẩm công nghệ 4.0 
                            kết hợp với phong thủy và đã có những kết quả bước đầu thành công, vô cùng hiệu quả đối với những khách hàng tìm đến thầy.
                        </li>
                        <li>
                            <img src="{{ asset('/img/img-history.png') }}" alt="">
                        </li>
                        <li>
                            Trong hơn <b class="text-[#E2AC36] font-bold text-base leading-6">10 năm lĩnh hội kiến thức phong thủy</b> và không ngừng phát triển toàn diện, thầy Phùng Phương còn kết hợp với 
                            khả năng chuyên sâu của bản thân về Thiết kế sân vườn và cảnh quan trong thời gian <b class="text-[#E2AC36] font-bold text-base leading-6">học tập tại Singapore</b>. 
                            Chính bởi những trải nghiệm thực tế và kiến thức lĩnh hội trong nhiều năm liền đã khiến Master Phùng Phương có cái nhìn 
                            toàn cảnh và đa chiều trong các phương pháp cải thiện không gian phong thủy của mỗi công trình hay đời sống 
                            thường ngày của mỗi khách hàng.
                        </li>
                        <li>
                            Có lẽ vậy mà sau nhiều năm tại nước ngoài, khi trở về nước thầy <b class="text-[#E2AC36] font-bold text-base leading-6">Phùng Phương</b> đều được 
                            hầu hết mọi người đánh giá có phần “khác biệt” trong “lối đi riêng của mình” trong nhiều 
                            thế hệ thầy Phong Thủy Địa Lý tại Việt Nam từ trước đến nay.
                        </li>
                        <li>
                            Đặc biệt, theo tôn chỉ của <b class="text-[#E2AC36] font-bold text-base leading-6">Master Phùng Phương</b> đối với bộ môn Phong Thủy khi áp dụng vào 
                            đời sống luôn dựa trên <b class="text-[#E2AC36] font-bold text-base leading-6">Gieo Chính Đạo- Đắc Tâm An</b> và đối với mọi người- dù theo bất kể 
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
            <div class="bg-white  mt-[60px]">
                <div class="max-w-[1200px] m-auto px-[15px] ">
                    {{--  History Journey link --}}
                    <div class="w-full h-[146px] relative">
                        {{-- History Journey location --}}
                        <div class="absolute top-[-4px] left-[475px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <path d="M25.0002 27.979C28.5901 27.979 31.5002 25.0689 31.5002 21.479C31.5002 17.8892 28.5901 14.979 25.0002 14.979C21.4104 14.979 18.5002 17.8892 18.5002 21.479C18.5002 25.0689 21.4104 27.979 25.0002 27.979Z" stroke="#E3C161" stroke-width="1.5"/>
                                <path d="M7.54187 17.6873C11.646 -0.354324 38.3752 -0.333491 42.4585 17.7082C44.8544 28.2915 38.271 37.2498 32.5002 42.7915C28.3127 46.8332 21.6877 46.8332 17.4794 42.7915C11.7294 37.2498 5.14604 28.2707 7.54187 17.6873Z" stroke="#E3C161" stroke-width="1.5"/>
                            </svg>
                        </div>
                        {{-- History Journey arrow --}}
                        <div class="absolute top-[46px] left-[470px]">
                            <img src="{{ asset('/img/left_arrow-1.png') }}" 
                                alt=""
                                class="w-[35px] h-[156px]"
                            />
                        </div>
                        <div class="absolute top-[316px] left-[660px]">
                            <img src="{{ asset('/img/right_arrow.png') }}" 
                                alt=""
                                class="w-[35px] h-[156px]"
                            />
                        </div>
                        <div class="absolute top-[596px] left-[470px]">
                            <img src="{{ asset('/img/left_arrow-1.png') }}" 
                                alt=""
                                class="w-[35px] h-[156px]"
                            />
                        </div>
                        <div class="absolute top-[876px] left-[660px]">
                            <img src="{{ asset('/img/right_arrow.png') }}" 
                                alt=""
                                class="w-[35px] h-[156px]"
                            />
                        </div>
                        <div class="absolute top-[1166px] left-[470px]">
                            <img src="{{ asset('/img/left_arrow-1.png') }}" 
                                alt=""
                                class="w-[35px] h-[156px]"
                            />
                        </div>
                        <div class="absolute top-[1436px] left-[660px]">
                            <img src="{{ asset('/img/right_arrow.png') }}" 
                                alt=""
                                class="w-[35px] h-[156px]"
                            />
                        </div>
                    </div>
                    {{--  History Journey Content --}}
                    <div class="">
                        <div class="flex flex-col gap-[60px]">
                            {{-- 2008 --}}
                            <div class="flex gap-[75px] justify-center items-center">
                                <div class="w-[400px]">
                                    <p class="text-[#3B3B3B] text-2xl text-end font-semibold">Bắt đầu</p>
                                    <p class="text-[120px] leading-[120px] font-semibold text-[#E2AC36]  text-end">2008</p>
                                </div>
                                <div class="flex justify-center">
                                    <img 
                                        src="{{ asset('/img/h-img1.png') }}" 
                                        alt="Lịch sử hình thành"
                                        class="w-[220px]"
                                    />
                                </div>
                                <div class="flex justify-center items-center w-[400px]">
                                    <p class="text-[#0D0D0D] text-xl leading-[30px] font-light">
                                        Thầy bắt đầu tham gia nghiên cứu phong thủy đầu tiên tại Đảo Quốc Sư Tử - Singapore
                                    </p>
                                </div>
                            </div>
                            {{-- 2009 --}}
                            <div class="flex gap-[75px] justify-center items-center">
                                <div class="flex justify-center items-center w-[400px]">
                                    <p class="text-[#0D0D0D] text-xl leading-[30px] font-light">Thầy trở thành người sáng lập <b class="text-[#0D0D0D] text-xl leading-[30px] font-semibold">
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
                                <div class="w-[400px]">
                                    <p class="text-[#3B3B3B] text-2xl font-semibold">Sáng lập</p>
                                    <p class="text-[120px] leading-[120px] font-semibold text-[#E2AC36]">2009</p>
                                </div>
                            </div>
                            {{-- 2010 --}}
                            <div class="flex gap-[75px] justify-center items-center">
                                <div class="w-[400px]">
                                    <p class="text-[#3B3B3B] text-2xl text-end font-semibold">Tham gia</p>
                                    <p class="text-[120px] leading-[120px] font-semibold text-[#E2AC36] text-end">2010</p>
                                </div>
                                <div class="flex justify-center">
                                    <img 
                                        src="{{ asset('/img/h-img2.png') }}" 
                                        alt="Lịch sử hình thành"
                                        class="w-[220px]"
                                    />
                                </div>
                                <div class="flex justify-center items-center w-[400px]">
                                    <p class="text-[#0D0D0D] text-xl leading-[30px] font-light">Thầy tham gia các khóa học tại Bắc Kinh, Trung Quốc.</p>
                                </div>
                            </div>
                            {{-- 2013 --}}
                            <div class="flex gap-[75px] justify-center items-center">
                                <div class="flex justify-center items-center w-[400px]">
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
                                <div class="w-[400px]">
                                    <p class="text-[#3B3B3B] text-2xl font-semibold">Talkshow</p>
                                    <p class="text-[120px] leading-[120px] font-semibold text-[#E2AC36]">2013 </p>
                                </div>
                            </div>
                            {{-- 2018 --}}
                            <div class="flex gap-[75px] justify-center items-center"> 
                                <div class="w-[400px]">
                                    <p class="text-[#3B3B3B] text-2xl text-end font-semibold">Tọa đàm</p>
                                    <p class="text-[120px] leading-[120px] font-semibold text-[#E2AC36] text-end">2018</p>
                                </div>
                                <div class="flex justify-center">
                                    <img 
                                        src="{{ asset('/img/h-img4.png') }}" 
                                        alt="Lịch sử hình thành"
                                        class="w-[220px]"
                                    />
                                </div>
                                <div class="flex justify-center items-center w-[400px]">
                                    <p class="text-[#0D0D0D] text-xl leading-[30px] font-light">
                                        <b class="text-[#0D0D0D] text-xl leading-[30px] font-semibold">Master Phùng Phương</b>
                                        tham gia liên tiếp nhiều buổi tọa đàm tại
                                        các nước: Thái Lan, Campuchia, Malaysia, Singapore, Nhật Bản, Hàn Quốc, Úc, Mỹ, Canada, Ấn Độ, …
                                    </p>
                                </div>
                            </div>
                            {{-- 2022 --}}
                            <div class="flex gap-[75px] justify-center items-center">
                                <div class="flex justify-center items-center w-[400px]">
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
                                 <div class="w-[400px]">
                                    <p class="text-[#3B3B3B] text-2xl font-semibold">Bắt đầu</p>
                                    <p class="text-[120px] leading-[120px] font-semibold text-[#E2AC36]">2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            {{-- Share --}}
            <div class="bg-white mt-[30px] mb-[60px] h-[91px]">
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