@extends('layout')
<link rel="stylesheet" href="{{ asset('assets/css/template2.css') }}">
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


    <div class="template">
        <div class="container" id="cv">
            <div class="banner">
                <div class="profileTxt">
                    <div class="imgBox">
                        <img src="assets/img/Amelia Watson.jpg">
                    </div>
                </div>

                <div class="personal-info">
                    <h1 class="name">korina villaneuva</h1>
                    <h6>graphic designer</h6>
                </div>
            </div>
            <div class="left-side">
                <div class="info contact">
                    <h3 class="title">contact</h3>
                    <ul>
                        <li>
                            <span class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <span class="text" id="phone">+1 234 5678 900</span>
                        </li>

                        <li>
                            <span class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <span class="text" id="email">test@gmail.com</span>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fa-solid fa-laptop"></i>
                            </span>
                            <span class="text" id="address">www.realygreatsite.com</span>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <span class="text" id="address">palestine, rafah</span>
                        </li>
                    </ul>
                </div>
                <div class="info education">
                    <h3 class="title">education</h3>
                    <ul id="education">
                        <li>
                            &#9679 bachelor of design
                            <span class="text" id="degree"> realy great university</span>
                            <span class="text" id="since">2012 - 2016</span>
                            <span class="text" id="university">123 anywhere st., any city</span>
                        </li>
                        <li>
                            &#9679 bachelor of design
                            <span class="text" id="degree"> realy great university</span>
                            <span class="text" id="since">2012 - 2016</span>
                            <span class="text" id="university">123 anywhere st., any city</span>
                        </li>

                    </ul>
                </div>
                <div class="info">
                    <h3 class="title">skills</h3>
                    <ul id="skills">
                        <li> organized</li>
                        <li> communicaton </li>
                        <li> team wok </li>
                        <li> meeting deadlines </li>
                        <li> cirtical thinking</li>
                    </ul>
                </div>
            </div>


            <div class="right-side">

                <div class="work">
                    <h1 class="title"> experience</h1>
                    <div class="job">
                        <div class="between">
                            <div class="content">
                                <div class="icon">
                                    <img src="assets/img/loc.png" alt="">
                                </div>
                                <div class="text">
                                    <h3>Graphic Designer</h3>
                                    <span class="text">Aldenaire & Partners</span>
                                </div>
                            </div>
                            <span class="text">2019 - 2022</span>
                        </div>
                        <div class="work-details">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quam blanditiis suscipit sunt
                                maxime
                                laboriosam nihil architecto est adipisci minus dolorum maiores quas asperiores, cumque natus
                                soluta
                                placeat corporis id!</p>
                        </div>
                    </div>

                    <div class="job">
                        <div class="between">
                            <div class="content">
                                <div class="icon">
                                    <img src="assets/img/loc.png" alt="">
                                </div>
                                <div class="text">
                                    <h3>Graphic Designer</h3>
                                    <span class="text">Aldenaire & Partners</span>
                                </div>
                            </div>
                            <span class="text">2019 - 2022</span>
                        </div>
                        <div class="work-details">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quam blanditiis suscipit sunt
                                maxime
                                laboriosam nihil architecto est adipisci minus dolorum maiores quas asperiores, cumque natus
                                soluta
                                placeat corporis id!</p>
                        </div>
                    </div>

                    <div class="job">
                        <div class="between">
                            <div class="content">
                                <div class="icon">
                                    <img src="assets/img/loc.png" alt="">
                                </div>
                                <div class="text">
                                    <h3>Graphic Designer</h3>
                                    <span class="text">Aldenaire & Partners</span>
                                </div>
                            </div>
                            <span class="text">2019 - 2022</span>
                        </div>
                        <div class="work-details">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quam blanditiis suscipit sunt
                                maxime
                                laboriosam nihil architecto est adipisci minus dolorum maiores quas asperiores, cumque natus
                                soluta
                                placeat corporis id!</p>
                        </div>
                    </div>

                </div>
                <div class="languages">
                    <h1 class="title">language</h1>
                    <ul class="between">
                        <li>
                            english
                        </li>
                        <li>
                            french
                        </li>
                        <li>
                            Spanish
                        </li>
                    </ul>
                </div>
                <div class="references">
                    <h1 class="title">references</h1>
                    <div class="ref-detail">
                        <div class="box">
                            <p class="name">alferdo torres</p>
                            <p class="ref-job">director</p>
                        </div>
                        <div class="box">
                            <p class="name">Aldenaire & Parners</p>
                            <p class="ref-job">+123-456-7890</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>





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
