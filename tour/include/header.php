<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>모두투어 - 다시 만나고 싶은 여행</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.5/swiper-bundle.css" integrity="sha512-wMTbLMebj4OAT4mU2nV6XvE8QuTHOrwPKNaGuGF2wiaNU9IHea/bgJcKP/DtG+c3+LbNu54evMgWOWPvN/7iDQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.5/swiper-bundle.min.js" integrity="sha512-g+qKl+LYdI74iYWV+VI91ahB/N6mVjrP8aGCtyIGvM2FkgpwbEEey0eUVUuqNn94yYS6/WxVwTawukEqaf+53A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>    
        $(document).ready(function(){
            var slide = $(".slide").bxSlider({
                controls:false,
                pagerCustom:".slideTab",
                mode:"vertical",
                touchEnabled:false,
                infiniteLoop:false
            });

            $("#sdate1,#edate1,#sdate2,#edate2,#sdate3,#edate3,#sdate4,#edate4").datepicker({
                dateFormat: 'yy/mm/dd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                dayNames: ['일','월','화','수','목','금','토'],
                dayNamesShort: ['일','월','화','수','목','금','토'],
                dayNamesMin: ['일','월','화','수','목','금','토'],
                showMonthAfterYear: true,
                changeMonth: true,
                changeYear: true,
                yearSuffix: '년'
            });
        });
    </script>
    <!-- 날짜 안나올 때, jquery링크확인(중복확인)/date명 확인 -->
</head>
<body>
    <header id="header">
        <div class="headerTopWrap">
            <div class="headerTop container">
                <nav class="Util">
                    <ul class="clearfix">
                        <li><a href="#">로그인</a></li>
                        <li><a href="#">회원가입</a></li>
                        <li><a href="#">예약확인/결제</a></li>
                        <li><a href="#">고객센터</a></li>
                    </ul>
                </nav>
                <div class="searchbarWrap">
                    <p>SEARCH</p>
                    <form action="#">
                        <input type="text" name="search" placeholder="검색어를 입력하세요." class="inp">
                    </form>
                    <div class="icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="headerWrap">
            <div class="header container">
                <h1><a href="./">
                    <img src="images/logo.png" alt="">
                </a></h1>
                <nav class="mainMenu">
                    <ul class="clearfix">
                        <li><a href="package.html">해외패키지</a>
                            <div class="sub_01">
                                <ul class="clearfix">
                                    <li><a href="#">동남아/대만</a></li>
                                    <li><a href="#">일본/몽골/홍콩</a></li>
                                    <li><a href="#">유럽/아라비아</a></li>
                                    <li><a href="#">괌/사이판/뉴질랜드</a></li>
                                    <li><a href="#">미주/캐나다/하와이</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="theme.html">테마여행</a>
                            <div class="sub_01">
                                <ul>
                                    <li><a href="#">허니문</a></li>
                                    <li><a href="#">골프</a></li>
                                    <li><a href="#">에어텔</a></li>
                                    <li><a href="#">크루즈</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="tour.html">개별여행</a>
                            <div class="sub_01">
                                <ul>
                                    <li><a href="#">현지투어/패스</a></li>
                                    <li><a href="#">차량서비스</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="jeju.html">국내/제주</a>
                            <div class="sub_01">
                                <ul>
                                    <li><a href="#">국내여행</a></li>
                                    <li><a href="#">제주</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="air.html">항공</a>
                            <div class="sub_01">
                                <ul>
                                    <li><a href="#">해외항공</a></li>
                                    <li><a href="#">국내항공</a></li>
                                    <li><a href="#">공동구매항</a></li>
                                    <li><a href="#">공권</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="hotel.html">호텔</a>
                            <div class="sub_01">
                                <ul>
                                    <li><a href="#">해외호텔</a></li>
                                    <li><a href="#">국내호텔</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="toggle">
                    <div class="heart">
                        <a href="#">찜상품</a></div>
                    <div class="all">
                        <a href="#">전체메뉴</a>
                    </div>
                </div>
            </div>
        </div>
    </header>