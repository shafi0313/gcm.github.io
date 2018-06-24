<?php 
include 'header_footer/header.php';
 ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group list">
                <li class="list-group-item list-group-item-action"><a href=""><i class="fas fa-envelope"></i> Message From Principal</a></li>
                <li class="list-group-item list-group-item-action"><a href="result.html"><i class="fas fa-search"></i> Results</a></li>
                <li class="list-group-item list-group-item-action"><a href="teacher_info.html"><i class="fas fa-users"></i> Teacher &amp; Staff's Information</a></li>
                <li class="list-group-item list-group-item-action"><a href="photo_gallery.html"><i class="fas fa-image"></i> Photo Gallery</a></li>
                <li class="list-group-item list-group-item-action"><a href="committees.html"><i class="fas fa-users"></i> Committees</a></li>
            </ul>
        </div>

        <!--image slide
        ==================================-->
        <div class="col-md-8" id="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="image/slide/1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/slide/2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/slide/3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!--image slide
====================-->

<section class="marquee_area">
    <h5 class="l_news">Latest News: </h5>
    <div class="marq">
        <marquee class="mar" onmouseover="this.stop();" onmouseout="this.start();">about_pra</marquee>
    </div>
</section>


<section class="about_area">
    <div class="container">
        <p class="about_pra">
            হাটবোয়ালিয়া জিনিয়াস ক্যাডেট মাদ্রাসা, ইসলামিক ও আধুনিক শিক্ষার এক সমন্বিত শিক্ষা প্রতিষ্ঠান। <br> 
            জিনিয়াস ক্যাডেট মাদ্রাসা ২০১১ সালে ইসলামিক ও আধুনিক শিক্ষা প্রদানের উদ্দেশ্যে প্রতিষ্ঠিত হয়। <br> 
            মাদ্রাসার শিক্ষাকে আধুনিক ও সকলের নিকট গ্রহণযোগ্য করে গড়ে তুলে ইসলামকে শ্রেষ্ঠ ও বিজয়ী করার মত, <br> 
            যোগ্যতাসম্পন্ন ছাত্র/ছাত্রীর উপস্থাপন করায় আমাদের লক্ষ।
        </p>
    </div>
</section>
 
 <section class="content" style="background: url(image/ba.jpg); background-size: cover">
     <div class="container">
         <div class="row">
             <div class="col-md-6 con_img">
                 <img src="image/Untitled-1.png" alt="">
             </div>
             <div class="col-md-6">
                 <h5 class="mar_title">Notice Board</h5>
                 <div class="mar_content">
                     <marquee behavior="" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                         <p>sjf </p>
                         <p>sjf </p>
                         <p>sjf </p>
                     </marquee>
                 </div>
             </div>
         </div>
     </div>
 </section>
  
<!-- Feature
=======================-->

 <section class="feature_area">
     <div class="container">
        <div class="feature_title">
            <h4>আমাদের বৈশিষ্টঃ</h4>
        </div>
        
         <div class="row">
             <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action list-group-item-primary">ধর্মীয় ও আধুনিক শিক্ষার এক সমন্বিত প্রতিষ্ঠান</li>
                    <li class="list-group-item list-group-item-action list-group-item-secondary">আরবী ভাষা ও ইসলামের মৌলিক জ্ঞানসহ</li>
                    <li class="list-group-item list-group-item-action list-group-item-success">বিশুদ্ধ কোরআন শিক্ষা বিশেষ ব্যবস্থা।</li>
                    <li class="list-group-item list-group-item-action list-group-item-info">মাতৃভাষাসহ ইংরেজী ভাষার উপর বিশেষ গুরুত্বরোপ।</li>
                    <li class="list-group-item list-group-item-action list-group-item-warning">শ্রেণী কক্ষেই পাঠ প্রদান ও আদায়করণ।</li>
                </ul>
             </div>
             <div class="col-md-6">
                 <ul class="list-group">
                    <li class="list-group-item list-group-item-action list-group-item-danger">মাসিক ও সেমিষ্টার পরীক্ষার প্রোগ্রেস রিপোর্ট তৈরি।</li>
                    <li class="list-group-item list-group-item-action list-group-item-light">নিরিবিলি পরিবেশে অভিজ্ঞ শিক্ষকমন্ডলী দ্বারা পাঠ দান।</li>
                    <li class="list-group-item list-group-item-action list-group-item-dark">একটি বিজ্ঞ পরিচালনা পরিষদ দ্বারা পরিচালিত।</li>
                    <li class="list-group-item list-group-item-action list-group-item-primary">সরকার অনুমোদিত সিলেবাস অনুযায়ী শিক্ষা দান।</li>
                    <li class="list-group-item list-group-item-action list-group-item-warning">শ্রেণী কক্ষেই পাঠ প্রদান ও আদায়করণ।</li>
                </ul>
             </div>
         </div>
     </div>
 </section>

 <?php 
include 'header_footer/footer.php';
 ?>