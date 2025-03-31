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


    <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">WELCOME TO TechCV -
                YOUR CV BUILDER
            </h1>
            <p class="subtitle">Create your resume in a few minutes!</p>
            <a href="{{ route('login') }}" class="btn btn-primary">Get Started</a>
        </div>
    </section>

    <section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About Us</p>
                <h2>Tech CV</h2>
                <p>
                    is a dedicated platform for IT professionals to create high-quality
                    resumes that showcase their skills and experience effectively.

                    Our mission is to empower IT professionals to present themselves
                    in the best possible way with a resume that aligns with industry
                    standards and speaks directly to employers in tech fields.
                </p>
            </div>
            <div class="about-img">
                <img src="assets/img/resume-application-employment-form-concept.jpg" alt="food" />
            </div>
        </div>
    </section>

    <section class="features " id="features">
        <h2 class="feature"> Our Features</h2>
        <div class="benefits">

            <div class="benefitsWrapper">
                <div class="benefitsItem benefitsItemWidth50">
                    <div class="benefitsItemInner">
                        <img class="benefitsIcon" src="assets/img/icon1.svg" alt="Career Tools Icon" />
                        <p class="benefitsItemTitle">Customizable templates designed for various IT roles.</p>

                    </div>
                </div>

                <div class="benefitsItem benefitsItemWidth50">
                    <div class="benefitsItemInner">
                        <img class="benefitsIcon" src="assets/img/icon2.svg" alt="Career Tools Icon" />

                        <p class="benefitsItemTitle">Automated job recommendations tailored to your skills and
                            experience.</p>

                    </div>
                </div>


                <div class="benefitsItem benefitsItemWidth50">
                    <div class="benefitsItemInner">
                        <img class="benefitsIcon" src="assets/img/icon3.svg" alt="Career Tools Icon" />
                        <p class="benefitsItemTitle">Easy-to-use interface, allowing you to create your resume in
                            minutes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="joinTechCV">
        Join TechCV today and take a step forward in your career with a resume that stands out!
    </div>




    <section id="testimonials">
        <h2 class="testimonial-title">What Our Customers Say</h2>
        <div class="testimonial-container container">
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="https://i.postimg.cc/5Nrw360Y/male-photo1.jpg" alt="" />
                        <p class="customer-name">Ross Lee</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    "TechCV helped me create a professional resume in minutes.
                    I landed my dream job within a week!"
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="assets/img/Amelia Watson.jpg" alt="" />
                        <p class="customer-name">Amelia Watson</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    "The templates are clean and easy to customize.
                    Highly recommended for tech professionals!"
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="https://i.postimg.cc/fy90qvkV/male-photo3.jpg" alt="" />
                        <p class="customer-name">Ben Roy</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    "Excellent platform!
                    The job suggestions based on my resume were spot on."
                </p>

            </div>
        </div>
    </section>
    <section class="steps steps--horizontal">
        <h2 class="stepsTitle">Create your perfect resume in 4 easy steps:</h2>
        <div class="steps-container">
            <div class="step">
                <img src="assets/img/step1-image.svg" alt="Step 1" class="step-image">
                <h3>Step 1</h3>
                <h4>Choose a template</h4>
                <p>Choose from 4 templates designed by recruiting professionals to help you get the interview.</p>
            </div>
            <div class="step">
                <img src="assets/img/step2-image.svg" alt="Step 2" class="step-image">
                <h3>Step 2</h3>
                <h4>Add content written by experts</h4>
                <p>With just a few clicks, add custom, job-specific content created by recruiting experts.</p>
            </div>
            <div class="step">
                <img src="assets/img/step3-image.svg" alt="Step 3" class="step-image">
                <h3>Step 3</h3>
                <h4>Make it yours</h4>
                <p>Adjust colors, fonts, and layout using our easy-to-use interface.</p>
            </div>
            <div class="step">
                <img src="assets/img/step4-image.svg" alt="Step 4" class="step-image">
                <h3>Step 4</h3>
                <h4>Download as PDF or DOC</h4>
                <p>Download your polished resume in your preferred file format. Now you're ready to apply for your next
                    job.</p>
            </div>
        </div>
        <a href="{{ route('resume_tamplate') }}" class="resume-button pt-5">Create Your Resume Now</a>
    </section>



    <section class="faq">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-container">
            <div class="faq-item">
                <h3 class="faq-question">What is TechCV?</h3>
                <p class="faq-answer">TechCV is a web-based platform designed to help IT professionals create
                    professional
                    resumes quickly and easily. It also suggests job opportunities based on your resume.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">Is TechCV free to use?</h3>
                <p class="faq-answer">Yes, creating and downloading your resume is completely free. However, we also
                    offer
                    premium features like advanced resume templates and personalized job suggestions.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">How can I edit my resume after creating it?</h3>
                <p class="faq-answer">Simply log in to your account, go to the "My Resumes" section, and select the
                    resume you
                    want to edit. You can make changes and save or download the updated version.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">What file formats are supported?</h3>
                <p class="faq-answer">You can download your resume in PDF format, which is widely accepted by employers
                    and
                    ensures a professional look.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">How do I contact customer support?</h3>
                <p class="faq-answer">You can reach us through the "Contact Us" page, where you’ll find our email
                    address and
                    phone number. We’re happy to assist you!</p>
            </div>
        </div>
    </section>
    <section class="contact-area section-gap" id="contact">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-30 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Contact Us</h1>
                        <p>Let us know if you need any help!</p>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-lg-12">
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8580987740924!2d144.9630577158404!3d-37.81410797975152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e33!2zTWVsYm91cm5lLCBBdXN0cmFsaWE!5e0!3m2!1sen!2sus!4v1696988378483!5m2!1sen!2sus"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
                <form class="form-area mt-60" id="myForm" action="" method="post"
                    class="contact-form text-right">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control"
                                required="" type="text">

                            <input name="email" placeholder="Enter email address"
                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                class="common-input mb-20 form-control" required="" type="email">

                            <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control"
                                required="" type="text">
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Message"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
                            <button class="btn mt-20" type="submit">Send Message</button>
                            <div class="alert-msg"></div>
                        </div>
                    </div>
                </form>

            </div>
    </section>
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

@section('script')
    <script>
        document.getElementById('myForm').addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Sending...',
                text: 'Please wait a moment',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            setTimeout(function() {
                Swal.close();
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Message sent successfully',
                    confirmButtonText: 'OK'
                });
                document.getElementById('myForm').reset();
            }, 2000);
        });
    </script>
@endsection
