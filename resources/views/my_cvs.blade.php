@extends('layout')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset(' assets/vendor/bootstrap/css/bootstrap.min.css') }}" />
@section('content')
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="{{ route('resume_tamplate') }}">Resume Tamplates</a></li>
                <li><a href="#contact">Contact</a></li>
                @if (Auth::check())
                    <li><a href="{{ route('my_cvs') }}">My Cvs</a></li>
                    <li>
                        <a>{{ Auth::user()->email }}</a>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="button button--medium button--light-blue">Logout</button>
                        </form>
                    </li>
                @else
                    <a href="{{ route('login') }}" rel="noopener noreferrer nofollow"
                        class="button button--medium button--light-blue header__button">My Account</a>
                @endif

            </ul>
            <h1 class="logo">Tech<span class="logo">CV</span></h1>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>

    <section class="sliderSection">
        <h2 class="sliderTitle">Your CVs</h2>
        </p>
        <div class="sliderContainer">
            <div class="sliderItem">
                <img src="assets/img/temp1.jpg" alt="Template 1" class="sliderImage">
                <div class="useTemplateButton">
                    <a href="{{ route('cv.show', 1) }}"><i class="fa fa-eye"></i>Preview</a>
                </div>
            </div>
            <div class="sliderItem">
                <img src="assets/img/temp2.jpg" alt="Template 2" class="sliderImage">
                <div class="useTemplateButton">
                    <a href="{{ route('cv.show', 2) }}"><i class="fa fa-eye"></i>Preview</a>
                </div>
            </div>
            <div class="sliderItem">
                <img src="assets/img/temp3.jpg" alt="Template 3" class="sliderImage">
                <div class="useTemplateButton">
                    <a href="{{ route('cv.show', 3) }}"><i class="fa fa-eye"></i>Preview</a>
                </div>
            </div>
            <div class="sliderItem">
                <img src="assets/img/temp4.JPG" alt="Template 4" class="sliderImage">
                <div class="useTemplateButton">
                    <a href="{{ route('cv.show', 4) }}"><i class="fa fa-eye"></i>Preview</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-section contact-us">
                <h3 class="logo">Tech<span class="footer">CV</span></h3>
                <p>Build your professional tech resume effortlessly !</p>
                <p> <span class="ph">Phone: </span> <br>+972 594550455</p>
                <p><span class="ph">Email:</span><br> support@techcv.com</p>

            </div>

            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="myresume.html">Templates</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-section follow-us">
                <h3>Follow Us</h3>
                <ul class="socials">
                    <li><a href="https://www.facebook.com/"><img src="{{ asset('assets/img/facebook.png') }}"
                                alt="Facebook">Facebook</a></li>
                    <li><a href="https://x.com/?lang=ar"><img src="{{ asset('assets/img/twitter.png') }}"
                                alt="Twitter">Twitter</a>
                    </li>
                    <li><a href="https://www.linkedin.com/"><img src="{{ asset('assets/img/linkedin.png') }}"
                                alt="LinkedIn">LinkedIn</a></li>
                </ul>
            </div>

            <div class="footer-section terms">
                <h3>Terms & Policies</h3>
                <ul>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 TechCV | All rights reserved.</p>
        </div>
    </footer>
@endsection
