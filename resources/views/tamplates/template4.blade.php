@extends('layout')
<link rel="stylesheet" href="{{ asset('assets/css/template4.css') }}">
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
            <div class="left-side">
                <div class="imgBox">
                    <img src="assets/img/img.jpg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#28555e" fill-opacity="1" d="M0,64L1440,320L1440,320L0,320Z"></path>
                    </svg>
                </div>
                <div class="info contact">
                    <div class="group">
                        <i class="fa fa-phone"></i>
                        <h2>contact</h2>
                    </div>
                    <ul>
                        <li class="email">hello@reallygreatsite.com</li>
                        <li class="phone">+123-456-7890</li>
                        <li class="address">123 Anywhere St., Any City</li>
                    </ul>
                </div>
                <div class="info education">
                    <div class="group">
                        <i class="fa fa-graduation-cap"></i>
                        <h2>education</h2>
                    </div>
                    <ul id="education">
                        <li>
                            &#9679 Borcelle Business School
                            <span class="text " id="degree">Bachelor of Business Management</span>
                            <span id="since">Completed in 2016</span>
                        </li>
                        <li>
                            &#9679 Larana Business School
                            <span id="degree">Certificate in Digital Marketing </span>
                            <span id="since">Completed in 2014</span>
                        </li>


                    </ul>
                </div>
                <div class="info skills">
                    <div class="group">
                        <i class="fa-solid fa-puzzle-piece"></i>
                        <h2>skills</h2>
                    </div>
                    <ul id="skills">
                        <li> Management Skills </li>
                        <li> Digital Marketing</li>
                        <li> Negotiation</li>
                        <li> Critical Thinking </li>
                        <li> Communication Skills </li>
                        <li> Digital Marketing </li>
                        <li> Negotiation </li>
                    </ul>
                </div>

            </div>


            <div class="right-side">
                <div class="personal-info">
                    <h1 class="name">Isabel <span>Schumacher</span></h1>
                    <h6>marking manager</h6>
                </div>

                <div class="work">
                    <h1 class="title">work experience</h1>
                    <div class="jobs">
                        <div class="job">
                            <span class="duration">Jan 2022- Present</span>
                            <span class="company">Company Name l 123 Anywhere St., Any City</span>
                            <span class="job-title">Junior/ Business Consultant</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi fugit, quod temporibus
                                laudantium
                                quos obcaecati!</p>
                        </div>
                        <div class="job">
                            <span class="duration">Jan 2022- Present</span>
                            <span class="company">Company Name l 123 Anywhere St., Any City</span>
                            <span class="job-title">Junior/ Business Consultant</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi fugit, quod temporibus
                                laudantium
                                quos obcaecati!</p>
                        </div>

                        <div class="job">
                            <span class="duration">Jan 2022- Present</span>
                            <span class="company">Company Name l 123 Anywhere St., Any City</span>
                            <span class="job-title">Junior/ Business Consultant</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi fugit, quod temporibus
                                laudantium
                                quos obcaecati!</p>
                        </div>

                    </div>

                </div>
                <div class="references">
                    <h1 class="title">references</h1>
                    <div class="ref-detail">
                        <div class="box">
                            <h3 class="name">harumi kobayashi</h3>
                            <h5 class="job">wardiere inc. / ceo</h5>
                            <span>Phone : +123-456-78900</span>
                            <span>email : +123-456-78900</span>
                        </div>
                        <div class="box">
                            <h3 class="name">harumi kobayashi</h3>
                            <h5 class="job">wardiere inc. / ceo</h5>
                            <span>Phone : +123-456-78900</span>
                            <span>email : +123-456-78900</span>
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
