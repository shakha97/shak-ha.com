@extends('public.portfolio_master')
@section('title', 'Portfolio')
@section('content')

    <header class="header">
        <a href="#" class="logo"><img style="width: 15%" src="/img/logo.png" alt="logo"></a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#service">Service</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, it's Me</h3>
            <h1>Shakhzod Ochilov</h1>
            <h3>and I'm a <span class="multiple-text"></span></h3>
            <p>Hello! My name is Shakhzod Ochilov, and I'm thrilled to introduce myself to you.
                I am a dedicated individual with a passion for technology and a deep interest in artificial
                intelligence.
                I strive to learn and grow every day, which is why I'm excited to be part of the OpenAI team.</p>
            <div class="social-media">
                <a href="https://www.facebook.com/shaxzod.jan.5" target="_blank"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/shakhzod_djan/" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>

        <div class="home-image">
            <img src="img/selfie2.png" alt="bgimg">
        </div>
    </section>

    <!-- About -->

    <section class="about" id="about">
        <div class="about_img">
            <img src="img/bgselfi.png" alt="">
        </div>
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Front Developer</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus blanditiis error est illum impedit
                libero optio quod ratione reprehenderit voluptates. Ad aliquid consequatur fuga inventore iure quisquam,
                sed similique vitae.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, assumenda dignissimos dolores
                ipsam recusandae sed veniam. Deserunt dolorem ea eum facere iste nisi numquam, placeat porro provident
                tempore ut velit.
            </p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section>

    <!-- Service -->

    <section class="service" id="service">
        <h2 class="heading">Our <span>Service</span></h2>

        <div class="service_container">
            <div class="service-box">
                <i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cum dicta dolorum mollitia
                    natus, nostrum odit perspiciatis possimus quos voluptas.</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <div class="service-box">
                <i class='bx bxs-paint'></i>
                <h3>Graphic design </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cum dicta dolorum mollitia
                    natus, nostrum odit perspiciatis possimus quos voluptas.</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <div class="service-box">
                <i class='bx bx-line-chart'></i>
                <h3>Digital Marketing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cum dicta dolorum mollitia
                    natus, nostrum odit perspiciatis possimus quos voluptas.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>


    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>
        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="img/Screenshot%202023-07-05%20at%2012.35.58%20PM.png" alt="">
                <div class="portfolio-layer">
                    <h4>My Instagram</h4>
                    <p>Fell free to follow and PM me</p>
                    <a href="https://www.instagram.com/shakhzod_djan/" target="_blank"><i
                            class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="https://media.istockphoto.com/id/1409298953/photo/real-estate-agents-shake-hands-after-the-signing-of-the-contract-agreement-is-complete.webp?b=1&s=170667a&w=0&k=20&c=41IYPuvIWQmDRUXdhWELlGb3IeQulHGQwRCJ_5MtgSo=" alt="">
                <div class="portfolio-layer">
                    <h4>Real Estate News</h4>
                    <p>You can see latest news about realestate</p>
                    <a target="_blank" href="/realestate"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="https://www.shutterstock.com/shutterstock/photos/266367668/display_1500/stock-photo-rolled-newspaper-with-the-headline-sport-news-266367668.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Sports latest News</h4>
                    <p>Here is for sport lovers to get latest news</p>
                    <a target="_blank" href="/sportnews"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/calculator.jpeg" alt="">
                <div class="portfolio-layer">
                    <h4>Calculator</h4>
                    <p>Here is the simple calculator which was made with HTML, CSS, JAVASCRIPT.</p>
                    <a target="_blank" href="/calculator"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/tree2.jpeg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cum dicta dolorum mollitia
                        natus, nostrum odit perspiciatis possimus quos voluptas.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/tree3.jpeg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cum dicta dolorum mollitia
                        natus, nostrum odit perspiciatis possimus quos voluptas.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>
        <div class="contact-form">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Display success message -->
            @if (session('success_message'))
                <div class="alert alert-success">
                    {{ session('success_message') }}
                </div>
            @endif

            <form method="post" action="{{route('message.save')}}">
                @csrf
                <div class="input-box">
                    <input name="full_name" type="text" placeholder="Full Name">
                    <input name="email_address" type="email" placeholder="Email Address">
                </div>

                <div class="input-box">
                    <input name="mobile_number" type="tel" placeholder="Mobile Number">
                    <input name="subject" type="text" placeholder="Subject">
                </div>
                <textarea name="text" id="" cols="30" rows="10" placeholder="Your Massage"></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>
        </div>
    </section>

    <!--    footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>copyright &copy; 2023 by Codehal | All Right Reserved.</p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

@stop
