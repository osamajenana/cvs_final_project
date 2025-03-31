@extends('layout')
<link rel="stylesheet" href="{{ asset('assets/css/template3.css') }}">
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


    <section class="template" id="cv">

        <!-- Start resume banner (Image , Name) -->
        <div class="banner">
            <div class="image">
                <img src="assets/img/Amelia Watson.jpg" alt="" id="pic" crossorigin="anonymous">
            </div>
            <div class="content">
                <h1 id="name">Connor Hamilton</h1>
                <h5 id="job">student</h5>
            </div>
        </div>
        <!-- End resume banner (Image , Name) -->

        <!-- Start resume container -->
        <div class="custom-container">
            <aside>
                <div class="group">
                    <h1>Contact me</h1>
                    <ul>
                        <li class="list"><i class="fa fa-phone"></i>
                            <p id="phone">123-456-7890</p>
                        </li>
                        <li class="list"><i class="fa fa-envelope"></i>
                            <p id="email">hello@reallygreatsite.com</p>
                        </li>
                        <li class="list"><i class="fa fa-location-dot"></i>
                            <p id="address">123 Anywhere St., Any City, ST 12345</p>
                        </li>
                    </ul>
                </div>
            </aside>
            <main>
                <div class="group">
                    <div class="title-group">
                        <div class="img">
                            <img src="assets/img/right.svg" alt="">
                        </div>
                        <h1>Education</h1>
                    </div>
                    <ul>
                        <li>
                            <h3>Borcelle University</h3>
                            <p>Business Administration career, in progress.</p>
                        </li>
                        <li>
                            <h3>Borcelle College</h3>
                            <span>2018-2022</span>
                        </li>
                    </ul>
                </div>

                <div class="group">
                    <div class="title-group">
                        <div class="img">
                            <img src="assets/img/right.svg" alt="">
                        </div>
                        <h1>Language</h1>
                    </div>
                    <ul id="language">
                        <li>Native English.</li>
                        <li>Advanced Spanish.</li>
                    </ul>
                </div>
                <div class="group">
                    <div class="title-group">
                        <div class="img">
                            <img src="assets/img/right.svg" alt="">
                        </div>
                        <h1>Skills</h1>
                    </div>
                    <ul id="skills">
                        <li>Text processor.</li>
                        <li>Spreadsheet.</li>
                        <li>Slide presentation.</li>
                    </ul>
                </div>
                <div class="group">
                    <div class="title-group">
                        <div class="img">
                            <img src="assets/img/right.svg" alt="">
                        </div>
                        <h1>Work experience</h1>
                    </div>
                    <ul>
                        <li>Ingoude Company</li>
                        <li>Participation in collections to distribute in low-income schools.</li>
                    </ul>
                </div>
            </main>
        </div>
        <!-- End resume container -->

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
