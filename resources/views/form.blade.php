@extends('layout')
<link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
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


    <div class="form-container">
        <div class="form-header">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2>CV Information</h2>
            <p>Fill in the details below to create your CV.</p>
        </div>
        <form action="{{ route('cv.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h4>Personal Information</h4>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="firstName"
                        placeholder="Enter your first name">
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="lastName"
                        placeholder="Enter your last name">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" id="phone"
                        placeholder="Enter your phone number">
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address"
                        placeholder="Enter your Address">
                </div>
                <div class="col-md-6">
                    <label for="cover" class="form-label">Your Image</label>
                    <input type="file" id="cover" name="image" class="form-control">
                </div>
            </div>

            <h4>Education</h4>
            <div id="education-container">
                <div class="education-group">
                    <div class="mb-3">
                        <label for="major" class="form-label">Major</label>
                        <input type="text" class="form-control" name="education[major][0]"
                            placeholder="Enter your qualification">
                    </div>
                    <div class="mb-3">
                        <label for="institution" class="form-label">University Name</label>
                        <input type="text" class="form-control" name="education[institution][0]"
                            placeholder="Enter university name">
                    </div>
                </div>
            </div>
            <div class="text-center mb-3">
                <button type="button" class="btn btn-secondary" id="add-education">+ Add Education</button>
            </div>

            <h4>Work Experience</h4>
            <div id="experience-container">
                <div class="experience-group">
                    <div class="mb-3">
                        <label for="jobTitle" class="form-label">Job Title</label>
                        <input type="text" class="form-control" name="experiences[jobTitle][0]"
                            placeholder="Enter your job title">
                    </div>
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name</label>
                        <input type="text" class="form-control" name="experiences[companyName][0]"
                            placeholder="Enter company name">
                    </div>
                    <div class="mb-3">
                        <label for="jobDescription" class="form-label">Job Description</label>
                        <textarea class="form-control" name="experiences[jobDescription][0]" rows="4"
                            placeholder="Describe your job responsibilities"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="start" class="form-label">Start Date</label>
                        <input type="date" class="form-control" name="experiences[start][0]">
                    </div>
                    <div class="mb-3">
                        <label for="end" class="form-label">End Date</label>
                        <input type="date" class="form-control" name="experiences[end][0]">
                    </div>
                </div>
            </div>
            <div class="text-center mb-3">
                <button type="button" class="btn btn-secondary" id="addExperience">+ Add Experience</button>
            </div>


            <h4>References</h4>
            <div id="references-container">
                <div class="references-group">
                    <div class="mb-3">
                        <label for="references" class="form-label">Reference Name</label>
                        <input type="text" name="references[name][0]" class="form-control"
                            placeholder="Enter Reference Name">
                    </div>
                    <div class="mb-3">
                        <label for="references-job" class="form-label">Job</label>
                        <input type="text" name="references[job][0]" class="form-control"
                            placeholder="Enter Reference Job">
                    </div>
                    <div class="mb-3">
                        <label for="references-phone" class="form-label">Phone</label>
                        <input type="text" name="references[phone][0]" class="form-control"
                            placeholder="Enter Reference Phone">
                    </div>
                    <div class="mb-3">
                        <label for="references-email" class="form-label">Email</label>
                        <input type="email" name="references[email][0]" class="form-control"
                            placeholder="Enter Reference Email">
                    </div>
                </div>
            </div>
            <div class="text-center mb-3">
                <button type="button" class="btn btn-secondary" id="addReference">+ Add Reference</button>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

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

@section('script')
    <script src="{{ asset('assets/js/form.js') }}"></script>
@endsection
