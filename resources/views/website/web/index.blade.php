@extends('website.template.master')
@section('content')    
    <!-- hs Slider Start -->
    <div class="container">
        <div class="slider-area">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="carousel-captions caption-1">
                    </div>
                </div>
                <div class="item">
                    <div class=" carousel-captions caption-2">
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-captions caption-3">
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-captions caption-4">
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-captions caption-5">
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span class="number"></span></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number"></span></li>
                </ol>
                <div class="carousel-nevigation">
                    <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        <span></span>
                    </a>
                    <a class="next" href="#carousel-example-generic" role="button" data-slide="next">
                        <span></span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- hs Slider End -->
    <!-- hs about ind wrapper Start -->
    <div class="hs_about_indx_main_wrapper">
        <div class="container">
            <header class="entry-header nmb">
                <h1 class="entry-title note nmb">
                    <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="10"><a href="#">Note: दान या पेमेंट की कोई भी धनराशि केवल A/C LAKSHYADHAR SHARMA में  ही मान्य होगी |</a></marquee>
                </h1>           
            </header>
            <div class="row home-content-main">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="home-content">
                        <ul class="main-nav list-unstyled">
                            <li>
                                <a class="kundali" href="kundali.php">
                                    <span>कुंडली</span>
                                </a>
                            </li>

                            <li>
                                <a class="poojan" href="vastu_shastra.php">
                                    <span>वास्तु शास्त्र</span>
                                </a>
                            </li>   
                            <li>
                                <a class="naksha" href="hastrekha_shastra_list.php">
                                    <span>हस्त रेखा विज्ञान</span>
                                </a>
                            </li>                       

                            <li>
                                <a class="phone" href="panchang_list.php">
                                    <span>पंचांग और मुहूर्त</span>
                                </a>
                            </li>    

                            <li>
                                <a class="hand" href="vedashram_list.php">
                                    <span>वेदाआश्रम (वेद विद्यालय)</span>
                                </a>
                            </li>
                                                
                            <li>
                                <a class="vaidik_pujan" href="vaidik_pujan_list.php">
                                    <span> वैदिक पूजन/यज्ञ </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                       <a class="payNow" href="pay.php">
                            <span> PAY करें </span>
                        </a>       
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h4 style="margin-top: 20px; margin-bottom: 10px;">ज्योतिषाचार्य से पूछे:-</h4>
                    @include('website.include.sidebar_form')
                </div>
            </div>

            <div style="width: 100%; height: 60px;"></div>

            <div class="row home-content-main">
                <div class="col-md-12">
                   <div class="pull-right float-none-mobile" style="padding-left: 20px;">
                       <!-- <iframe width="320" height="250" src="https://www.youtube.com/embed/beqMnu-_Tow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                       <img src="web/images/contact/placeholder.jpg" alt="pandit ji" width="300" class="img-responsive">
                   </div>
                   <div>
                        <p class="red">ज्योतिष क्या है-</p>
                        <p class="blue">यथा शिखा मयूराणां , नागानां मणयो यथा ।<br>
                        तद् वेदांगशास्त्राणां , ज्योतिषममूर्ध्नि वर्तते ॥</p>
                        <p>जैसे मोरों में शिखा और नागों में मणि का स्थान सबसे उपर है, वैसे ही सभी वेदांग (शिक्षा, कल्प, निरुक्त, व्याकरण,छन्द  एवं ज्योतिष ) शास्त्रों मे ज्योतिष का स्थान सबसे उपर है ।</p>
                        <p class="blue">वेदचक्षु: किलेदं स्मृतं ज्यौतिषं मुख्यता चाङ्गमध्ये ऽस्यतेनोच्यते ।<br>
                        संयतोऽपीतरै: कर्णनासादिभि: चक्षुषाङ्गेन हीनो न किञ्चित्कर: ।।</p>
                        <p>इस ज्योतिष शास्त्र को वेद का चक्षु अथार्थ (नेत्र ) कहा गया है इसी कारण वेदांगो में इसकी मुख्यता कहीं गई है।  कर्ण, नासिका आदि दूसरे अंगों से संपन्न होने पर भी नेत्ररूपी अंग से हीन होने पर मनुष्य कुछ भी करने में समर्थ नहीं हो पाता है।।</p>
                        <p>मैं  वैदिक अचार्य - लक्ष्यधर शर्मा हमारी वेबसाइट <a class="red" href="./">(www.grahkripa.com)</a> के माध्यम से आप सभी का हार्दिक स्वागत करता हूं,आप हमारे माध्यम से वैदिक ज्योतिष , वैदिक पूजन – पाठ वेद-विद्यालय से संबंधित यहां पर जानकारी प्राप्त कर सकते हैं
                        जन्मपत्रिका जानकारी हेतु आप हमें जन्म तिथि, जन्म –समय, जन्म –स्थान,देकर अपने जीवन से जुड़ी हर प्रश्न का उत्तर जान सकते हैं..</p>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs about ind wrapper End -->

@endsection

