@extends('layout')
<link rel="stylesheet" href="{{ asset('assets/css/template1.css') }}">
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
                <div class="profileTxt">
                    <div class="imgBox">
                        <img src="{{ asset('assets/img/Amelia Watson.jpg') }}" id="profileImage">
                    </div>
                </div>
                <div class="info contact">
                    <h3 class="title">contact me</h3>
                    <ul>
                        <li>
                            <span class="icon"><i class="fa fa-phone"></i></span>
                            <span class="text" id="phone">+1 234 5678 900</span>
                        </li>

                        <li>
                            <span class="icon"><i class="fa fa-envelope"></i></span>
                            <span class="text" id="email">test@gmail.com</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-laptop"></i></span>
                            <span class="text" id="address">www.realygreatsite.com</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-location-dot"></i></span>
                            <span class="text" id="address">palestine, rafah</span>
                        </li>
                    </ul>
                </div>
                <div class="info education">
                    <h3 class="title">education</h3>
                    <ul id="education">
                        <li>
                            <span class="text " id="degree">course studied</span>
                            <span class="text " id="university">university / college details</span>
                            <span id="since">2006 - 2008</span>
                        </li>
                        <li>
                            <span id="degree">course studied</span>
                            <span id="university">university / college details</span>
                            <span id="since">2006 - 2008 </span>
                        </li>
                        <li>
                            <span class="bold" id="degree">course studied</span>
                            <span class="text bold" id="university">university / college details</span>
                            <span id="since">2006 - 2008</span>
                        </li>
                    </ul>
                </div>
                <div class="info skills">
                    <h3 class="title">skills</h3>
                    <ul id="skills">
                        <li> UI/UX </li>
                        <li> visual design</li>
                        <li> wireframes </li>
                        <li> storyboards </li>
                        <li> user flows </li>
                        <li> proces flows </li>
                    </ul>
                </div>
            </div>


            <div class="right-side">
                <div class="personal-info">
                    <h1 class="name">dani <span>martinez</span></h1>
                    <h6>marking manager</h6>
                </div>
                <div class="work">
                    <h1 class="title">work experience</h1>
                    <div class="job">
                        <div class="between">
                            <h3>job position here</h3>
                            <span class="text">2019 - 2022</span>
                        </div>
                        <div class="work-details">
                            <h1>Company name here</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quam blanditiis suscipit sunt
                                maxime laboriosam nihil architecto est adipisci minus dolorum maiores quas asperiores,
                                cumque natus soluta placeat corporis id!</p>
                        </div>
                    </div>
                    <div class="job">
                        <div class="between">
                            <h3>job position here</h3>
                            <span class="text">2019 - 2022</span>
                        </div>
                        <div class="work-details">
                            <h1>Company name here</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quam blanditiis suscipit sunt
                                maxime laboriosam nihil architecto est adipisci minus dolorum maiores quas asperiores,
                                cumque natus soluta placeat corporis id!</p>
                        </div>
                    </div>
                    <div class="job">
                        <div class="between">
                            <h3>job position here</h3>
                            <span class="text">2019 - 2022</span>
                        </div>
                        <div class="work-details">
                            <h1>Company name here</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quam blanditiis suscipit sunt
                                maxime laboriosam nihil architecto est adipisci minus dolorum maiores quas asperiores,
                                cumque natus soluta placeat corporis id!</p>
                        </div>
                    </div>
                    <div class="job">
                        <div class="between">
                            <h3>job position here</h3>
                            <span class="text">2019 - 2022</span>
                        </div>
                        <div class="work-details">
                            <h1>Company name here</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quam blanditiis suscipit sunt
                                maxime laboriosam nihil architecto est adipisci minus dolorum maiores quas asperiores,
                                cumque natus soluta placeat corporis id!</p>
                        </div>
                    </div>
                </div>
                <div class="references">
                    <h1 class="title">references</h1>
                    <div class="ref-detail">
                        <div class="box">
                            <h3 class="name">harumi kobayashi</h3>
                            <h5 class="job">wardiere inc. / ceo</h5>
                            <span class="text">Phone : +123-456-78900</span>
                            <span class="text">email : +123-456-78900</span>
                        </div>
                        <div class="box">
                            <h3 class="name">harumi kobayashi</h3>
                            <h5 class="job">wardiere inc. / ceo</h5>
                            <span class="text">Phone : +123-456-78900</span>
                            <span class="text">email : +123-456-78900</span>
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
