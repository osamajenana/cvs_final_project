@extends('layout')
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
    <header class="jumbotronTemplates">
        <div class="container">
            <h1>Top Resume Templates (Free Download)</h1>
            <p class="jumbotronTemplatesSubtitle">
                Get hired faster with our HR-approved resume templates. Pick a resume template, add ready-made content from
                career experts, and have a resume ready in no time.
            </p>
            <a href="{{ route('show_form') }}" class="button button--big button--blue jumbotronTemplatesButton">Create Your
                Resume Now</a>
        </div>
    </header>


    <section class="benefitsTemplates">
        <h2>Here's How Our Resume Templates Can Help You:</h2>
        <div class="benefitsTemplatesWrapper">
            <div class="benefitsTemplatesItem">
                <svg width="50" height="50" fill="#091655">
                    <path
                        d="m17 1.2 5.2 10.4L34 13.3l-8.5 8.1 2 11.5L17 27.5 6.5 32.9l2-11.5L0 13.3l11.8-1.7L17 1.2Zm-3.8 12.3-8.7 1.3 6.2 6.1-1.4 8.7 7.7-4.1 7.7 4-1.5-8.6 6.3-6.1-8.7-1.3L17 5.7l-3.8 7.8Z">
                    </path>
                </svg>
                <div class="benefitsTemplatesItemContent">
                    <h3>Resume Templates Created by Experts</h3>
                    <p>Each resume template in our builder has been created by a team of HR experts and graphic designers,
                        guaranteeing your resume will get all the must-have content and great looks.</p>
                </div>
            </div>

            <!-- Benefit 2 -->
            <div class="benefitsTemplatesItem">
                <svg width="50" height="50" fill="#091655">
                    <path
                        d="M30.3 34.2h-27V.2h19.1l8 8v26ZM22.4 3.1v5h5.1l-5-5Zm5.7 7.3h-7.9v-8H5.6V32H28V10.4Zm-3.4 6.8H9v-2.3h15.7v2.3Zm0 4.5H9v-2.2h15.7v2.2Zm0 4.6H9V24h15.7v2.3Z">
                    </path>
                </svg>
                <div class="benefitsTemplatesItemContent">
                    <h3>Tailored Resume Content for Any Job Title</h3>
                    <p>With TechCV, you won’t have to create your resume from scratch. Leverage our ready-to-use content,
                        written
                        by career experts for every job title that exists.</p>
                </div>
            </div>

            <!-- Benefit 3 -->
            <div class="benefitsTemplatesItem">
                <svg width="50" height="50" fill="#091655">
                    <path
                        d="m15.5 17.5-5.7-7.3a.5.5 0 0 1 0-.4.6.6 0 0 1 .5-.5h.4l7.4 5.7.1.1c.4.4.6.8.6 1.4 0 .5-.2 1-.5 1.3-.4.4-.8.5-1.3.5-.6 0-1-.2-1.4-.6l-.1-.2ZM17.7.2a16.7 16.7 0 0 1 14.7 8.4 16.6 16.6 0 0 1 0 17.2 16.7 16.7 0 0 1-6.2 6 16.6 16.6 0 0 1-17.1 0 16.7 16.7 0 0 1-6-6A16.6 16.6 0 0 1 2 10.7c.8-2 2-4 3.7-5.5L7 6.7A14 14 0 0 0 3 17.2c0 2.8.6 5.4 2 7.6 1.2 2.3 2.9 4 5.1 5.2 2.4 1.3 5 2 7.7 2 2.8 0 5.3-.7 7.6-2 2.2-1.2 4-3 5.2-5.2 1.3-2.3 2-5 2-7.6a15.2 15.2 0 0 0-7-12.9c-2.1-1.3-4.4-2-6.7-2v5.9h-2.3v-8h1.2Z">
                    </path>
                </svg>
                <div class="benefitsTemplatesItemContent">
                    <h3>Upload and Refresh Your Old Resume</h3>
                    <p>Got an outdated resume? Simply upload it to our builder. We'll transform it into one of our polished
                        resume
                        templates automatically.</p>
                </div>
            </div>
        </div>
        <a href="{{ route('show_form') }}" class="button button--medium button--blue benefitsTemplatesButton">Create your
            resume
            now</a>
    </section>



    <div class="resume-options">
        <a href="myresume.html" class="card highlight">
            <div class="resume-option active">
                <div class="icon-container">
                    <img src="assets/img/file-upload.png" alt="Upload Icon" />
                </div>
                <h2>I Already Have A Resume</h2>
                <p>We’ll re-format it and fill in your information so you don’t have to</p>
            </div>
        </a>
        <div class="resume-option">
            <a href="{{ route('show_form') }}" class="card highlight">
                <div class="icon-container">
                    <img src="assets/img/resume .png" alt="Create Icon" />
                </div>
                <h2>Create A New Resume</h2>
                <p>We will help you create a resume step-by-step</p>

            </a>

        </div>
    </div>

    <section class="sliderSection">

        <h2 class="sliderTitle">Choose from 4 professional resume templates</h2>
        <p class="sliderDescription">
            Create your resume quickly and effortlessly.
            TechCV resume builder comes with beautifully designed resume templates to help you find the job you want faster.
            <br> <span> Start by choosing your template.</span>
        </p>
        <div class="sliderContainer">
            <div class="sliderItem">
                <img src="assets/img/temp1.jpg" alt="Template 1" class="sliderImage">
                <div class="useTemplateButton">
                    <a href="{{ route('show_tamplate', 1) }}"><i class="fa fa-eye"></i> Preview This Template</a>
                    <a href="{{ route('show_form') }}"><i class="fa fa-pencil"></i> Use This Template</a>
                </div>
            </div>
            <div class="sliderItem">
                <img src="assets/img/temp2.jpg" alt="Template 2" class="sliderImage">
                <div class="useTemplateButton">
                    <a href="{{ route('show_tamplate', 2) }}"><i class="fa fa-eye"></i> Preview This Template</a>
                    <a href="{{ route('show_form') }}"><i class="fa fa-pencil"></i> Use This Template</a>
                </div>
            </div>
            <div class="sliderItem">
                <img src="assets/img/temp3.jpg" alt="Template 3" class="sliderImage">
                <div class="useTemplateButton">
                    <a href="{{ route('show_tamplate', 3) }}"><i class="fa fa-eye"></i> Preview This Template</a>
                    <a href="{{ route('show_form') }}"><i class="fa fa-pencil"></i> Use This Template</a>
                </div>
            </div>
            <div class="sliderItem">
                <img src="assets/img/temp4.JPG" alt="Template 4" class="sliderImage">
                <div class="useTemplateButton">
                    <a href="{{ route('show_tamplate', 4) }}"><i class="fa fa-eye"></i> Preview This Template</a>
                    <a href="{{ route('show_form') }}"><i class="fa fa-pencil"></i> Use This Template</a>
                </div>
            </div>
        </div>
    </section>


    <!-- chatgpt-->
    <div id="chatgpt-widget">
        <div id="chatgpt-header">
            <h3>ChatGPT Assistant</h3>
            <span id="chatgpt-close">&times;</span>
        </div>
        <div id="chatgpt-messages">
            <div class="message bot">
                Hi! I’m your assistant. Share your CV details, and I'll recommend jobs for you!
            </div>
        </div>
        <div id="chatgpt-input">
            <textarea id="user-input" placeholder="Type your message..."></textarea>
            <button id="send-button">Send</button>
        </div>
    </div>
    <button id="chatgpt-toggle">💬 Chat with GPT</button>





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
