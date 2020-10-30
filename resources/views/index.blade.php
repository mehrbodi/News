@extends('layouts.master')
@section('content')

<section class="slider_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <!-- state banner -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"> <img class="first-slide" src="images/banner.jpg" alt="First slide"> </div>
            <div class="carousel-item"> <img class="second-slide" src="images/banner.jpg" alt="Second slide"> </div>
            <div class="carousel-item"> <img class="third-slide" src="images/banner.jpg" alt="Third slide"> </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <i class='fa fa-angle-right'></i></a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <i class='fa fa-angle-left'></i></a> </div>
        <!-- end banner -->
      </div>
      <div class="col-md-6">
        <div class="full-slider_cont">
          <h1>World ‘s popular<br>
            <span class="dark_brown">Bitcoin company</span></h1>
          <p>It is a long established fact that a reader will be distracted by the <br>
            readable content of a page when looking at its layout. The point <br>
            of using Lorem Ipsum is that it has a more-or-less normal dis<br>
            tribution of letters, as opposed to using 'Content here, content<br>
            here', making it look like readable English. Many desktop<br>
            publishing packages and more-or-less normal distribution of <br>
            letters, as opposed to using 'Content here, content here', making<br>
            it look like readable English. Many desktop publishing packages and </p>
          <div class="button_section"> <a class="main_bt" href="#"> تبادل خبر</a> <a class="main_bt" href="#">درباره ما</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Currency -->
<div class="Currency">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>NEED TO TAKE CARE OF YOUR <strong class="cur">CURRENCY INVESTMENTS</strong></h2>
          <span><img src="images/boder.png" alt="img"/> </span> </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="three-box">
          <figure><img src="images/1.jpg" alt="img"/></figure>
          <div class="Bitcoin"> <i><img src="images/dollar.png" alt="img"/></i>
            <h3>Bitcoin Transaction</h3>
            <p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud lit esse </p>
          </div>
          <a class="read-more" href="#">ادامه مطلب</a> </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="three-box">
          <figure><img src="images/2.jpg" alt="img"/></figure>
          <div class="Bitcoin"> <i><img src="images/dollar.png" alt="img"/></i>
            <h3>Bitcoin Exchange</h3>
            <p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
          </div>
          <a class="read-more" href="#">ادامه مطلب</a> </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="three-box">
          <figure><img src="images/3.jpg" alt="img"/></figure>
          <div class="Bitcoin"> <i><img src="images/dollar.png" alt="img"/></i>
            <h3>Bitcoin Investment</h3>
            <p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
          </div>
          <a class="read-more" href="#">ادامه مطلب</a> </div>
      </div>
    </div>
  </div>
</div>
<!-- end Currency -->

<!--state abouts -->
<div class="abouts"> <dir class="abouts-bg">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="abouts-us">
            <h3>درباره <strong class="cur">شرکت ما</strong></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit ani</p>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="abouts-us">
            <figure><img src="images/about.png" alt="img"/></figure>
          </div>
        </div>
      </div>
    </div>
  </dir> </div>

<!-- service -->
<div class="service">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="STRONG"> <i><img src="icon/strong.png" alt="icon"/></i>
            <h3>STRONG SECURITY</h3>
            <p>ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="world"> <i><img src="icon/world.png" alt="icon"/></i>
            <h3>WORLD COVERAGE</h3>
            <p>ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
          </div>
        </div>
      </div>
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <div class="service-box">
          <h2>خدمات <strong class="cur">ما</strong></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
          <figure><img class="img-responsive" src="images/service-image.jpg" alt="img"/></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end service -->

<!-- state abouts -->
<div class="our experts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage2">
          <h2><strong class="cur">تیم</strong> ما </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
        </div>
      </div>
    </div>
  </div>
  <div class="experts-box">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="experts-threebox">
            <figure><img src="images/experts-1.jpg" alt="img"/></figure>
            <h3>marco verratti </h3>
            <span>Ceo Founder</span>
            <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
            <div class="icon"> <i> <a href="#"><img src="images/facebook.png"></a></i> <i> <a href="#"><img src="images/Twitter.png"></a></i> <i> <a href="#"><img src="images/linkedin.png"></a></i> <i> <a href="#"><img src="images/instagram.png"></a></i> </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="experts-threebox">
            <figure><img src="images/experts-2.jpg" alt="img"/></figure>
            <h3>lina marzouki</h3>
            <span>Director</span>
            <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
            <div class="icon"> <i> <a href="#"><img src="images/facebook.png"></a></i> <i> <a href="#"><img src="images/Twitter.png"></a></i> <i> <a href="#"><img src="images/linkedin.png"></a></i> <i> <a href="#"><img src="images/instagram.png"></a></i> </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="experts-threebox">
            <figure><img src="images/experts-3.jpg" alt="img"/></figure>
            <h3>antonio conte </h3>
            <span>Money Developer</span>
            <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            <div class="icon"> <i> <a href="#"><img src="images/facebook.png"></a></i> <i> <a href="#"><img src="images/Twitter.png"></a></i> <i> <a href="#"><img src="images/linkedin.png"></a></i> <i> <a href="#"><img src="images/instagram.png"></a></i> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end abouts -->
<div class="Request">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage3">
          <h2>تقاضای تماس</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <form>
          <input class="form-control" placeholder="نام" type="Name">
          <input class="form-control" placeholder="شماره تلفن" type="Phone">
          <input class="form-control" placeholder="ایمیل" type="Email">
          <textarea class="textarea" placeholder="پیام" >پیام</textarea>
        </form>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="Request-box">
          <figure><img src="images/Request.jpg" alt="img"/></figure>
          <div class="Register">
            <h3>Get started today widh digital money bitcon</h3>
            <p>consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim </p>
            <a href="#">Register now</a> </div>
        </div>
      </div>
      <button class="send-btn">ارسال</button>
    </div>
  </div>
</div>

@endsection
