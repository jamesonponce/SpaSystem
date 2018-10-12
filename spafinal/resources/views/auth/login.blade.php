@extends('layouts.app')

@section('content')
<head>
    <title>LykaRe of Wellness Center</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
    
</head>
<body style="background-image: url(image/wood.jpg); background-size: cover;">
    <!--nav-->
    <nav class="stroke">
        <div class="nav">
            <div class="nav-header">
                <ul>
                    <li><img src="image/logo.png" style="width: 190px; height: 56px; padding-left: 40px; bottom: 10%;">
                    </li>
                    <li> <a href=href="{{ url('/welcome') }}">Home</a></li>
                    <li><a href="#service">SERVICE</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                    <li><a href="{{ route('register') }}">REGISTER</a></li>
                </ul

            </div>
        </div>
    </nav>
    
    <div class="loginbox">
        <img src="image/avatar.png" class="avatar">
        <form>
        <p>Username</p>
            <input type="text" name="" placeholder="Enter Username"style ="width: 245px; height: 40px;">
            <p>Password</p>
            <input type="password" name="" placeholder="Enter Password"style ="width: 245px; height: 40px;"><br>

            <button class="button" style="vertical-align:middle; width: 245px"><span><a href="{{ url('/home') }}">Login</span></button><br>
            <a href="#">Lost your password?</a><br>

            <a href="#">Don't have a account?</a>
        
            
        </form>
    </div>
    <div style="padding-top: 600px;"></div>
     <div style="background-color: #edf0c7; height: 230px;">
    <div class="foooterz"> 
        <div></div>
        <div> <div class="lalagyan" style="font-family: 'Fira Sans', sans-serif; color: #ff5c00; font-size: 25px; padding-top: 35px; padding-left: 65px;">Location</div>
        <div class="lalagyan" style="font-family: 'Fira Sans', sans-serif; color: #ff5c00; font-size: 25px; padding-left: 65px;"> LykaRe Wellness Center</div>
        
        <div class="lalagyan" style="font-family: 'Fira Sans', sans-serif; color: black; font-size: 19px; padding-left: 65px;">
            Alabang, Muntinlupa City, Philippines
            Email us: alabang@lykarewellnesscenter.com</div> </div>
         
        <div> <div class="lalagyan" style="font-family: 'Fira Sans', sans-serif; color: #ff5c00; font-size: 25px; padding-top: 35px; padding-left: 85px;"> To promote your products in lykarewellnesscenter.com's site, please contact our sales group: </div>
            <div class="lalagyan" style="font-family: 'Fira Sans', sans-serif; color: black; font-size: 19px; padding-left: 85px;"> Phone: +63 (2) 369-2359 / 7895314
Fax: +63 (2) 771-0143
E-mail address: alabang@lykarewellnesscenter.com</div> 
            </div>
        <div> <div class="lalagyan" style="font-family: 'Fira Sans', sans-serif; color: #ff5c00; font-size: 25px; padding-top: 35px; padding-left: 75px;"> For event sponsorships: </div>
            <div class="lalagyan" style="font-family: 'Fira Sans', sans-serif; color: black; font-size: 19px; padding-left: 75px;"> Please send proposals to alabang@lykarewellnesscenter.com</div>      
        </div>
        </div>
    </div>
    
    <div class="footer" style=" position: relative; left: 0;  bottom: 0;  height: 40px;  width: 100%; background-color: #1b1b1c; color: white; text-align: center; padding-top: 10px;">  Copyright © 2018 LykaReWellnessCenter.com | About Us | Terms of Use | Email Us | FAQs </div>
   
    </body>
   
@endsection
