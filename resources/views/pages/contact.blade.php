@extends('layouts.master')
@section('content')

    <div class="Request-bg">
  <div class="container">
    <div class="row">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="abouttitle">
         <h2>تماس با ما</h2>
       </div>
       </div>
    </div>
  </div>
</div>

<div class="Request">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage3 text-right">
          <h2>درخواست تماس</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <form>
          <input class="form-control" placeholder="نام" type="Name">
          <input class="form-control" placeholder="شماره تماس" type="Phone">
          <input class="form-control" placeholder="ایمیل" type="Email">
          <textarea class="textarea" placeholder="پیام" >پیام</textarea>
        </form>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="Request-box">
          <figure><img src="images/Request.jpg" alt="img"/></figure>
          <div class="Register">
          	<h3>برای دریافت آخرین خبرها</h3>
          	<p>consectetur adipiscing elit, sed do eiusmod tempor 
incididunt ut labore et dolore magna aliqua. Ut enim </p>
          	<a href="#">همین حالا عضو شوید</a>
          </div>
        </div>
      </div>
      <button class="send-btn">ارسال</button>
    </div>
  </div>
</div>

@endsection