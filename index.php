<?php
    include('inc/header.php');
?>
    
    <main class="main">
    
        <!-- intro section -->
        <section id="intro" class="intro section">
        
            <div class="container">
                <div class="intro-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mx-auto">
                        	<div class="profile" data-aos="fade-down" data-aos-delay="0">
                            	<div class="profile-grid">
                                	<img decoding="async" src="assets/img/bob_tha_builder_logo_circle.gif" width="375" height="282">
                                </div>
                            </div>
                            <div class="intro-container">
                                <div class="greeting mt-3" data-aos="fade-up" data-aos-delay="100">
                                	<h1 class="text-black">Hey, I'm Bobola A. Dabira. Script Writer & Data Analyst</h1>
                                </div>
                                <div class="bio" data-aos="fade-up" data-aos-delay="200">
                                	<p>Curious mind with a passion for building functional tools from ideas. Experienced in Full Stack Development and Data Analytics, creating solutions that are efficient, user-friendly, and meaningful.</p>
                                	<p>Need a website, a dashboard, or a good laugh?</p>
                                </div>
                            </div>
                            <div class="cta-action mt-3" data-aos="fade-up" data-aos-delay="300">
                                <a class="btn cta-btn" href="#contact">Get in Touch
                                	<i class="fa-solid fa-angle-right ml-2"></i>
                                </a>
                                <a class="btn inactive">
                                	<div class="small"></div> Available for new project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        
        <!-- showcase -->
        <section id="showcase" class="showcase section">
        
            <div class="container px-0" data-aos="fade-left" data-aos-delay="0">
            
                <div class="slideshow">
                    <div class="row align-items-center">
                        
                        <div class="slideshow-container">
                
                            <div class="slides mx-auto p-1">
                                <img class="mx-auto d-block mt-3" src="assets/img/p002.png" style="width:90%; height:90%">
                            </div>
                    
                            <div class="slides mx-auto p-1">
                                <img class="mx-auto d-block mt-3" src="assets/img/p003.png" style="width:90%; height:90%">
                            </div>
                    
                            <div class="slides mx-auto p-1">
                                <img class="mx-auto d-block mt-3" src="assets/img/p004.png" style="width:90%; height:90%">
                            </div>
                            
                            <!-- set 2 slideShow -->
                            <div class="slides mx-auto p-1">
                                <img class="mx-auto d-block mt-3" src="assets/img/p002.png" style="width:90%; height:90%">
                            </div>
                    
                            <div class="slides mx-auto p-1">
                                <img class="mx-auto d-block mt-3" src="assets/img/p003.png" style="width:90%; height:90%">
                            </div>
                    
                            <div class="slides mx-auto p-1">
                                <img class="mx-auto d-block mt-3" src="assets/img/p004.png" style="width:90%; height:90%">
                            </div>
                    
                        </div>    
                        
                    </div>
                </div>
                
            </div>
        
        </section>
        
        
        <!-- about section -->
        <section id="about" class="about section">
        
            <div class="container">
                
                <div class="about-content">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mx-auto p-4">
                            <h3 class="text-black" data-aos="fade-up" data-aos-delay="0">About</h3>
                            <p data-aos="fade-up" data-aos-delay="100">Who's This Nerd?</p>
                            <p data-aos="fade-up" data-aos-delay="200">I'm Bobola A. Dabira <span class="aka">Aka BobThaBuilder</span> — no, not the one who fixes roofs. I fix <em>websites and data messes</em>. I'm a script writer specialized in full-stack (both front-end and back-end) development. I write scripts that tell browsers what to do. I turn messy spreadsheets into crystal-clear truths.</p>
                            <p data-aos="fade-up" data-aos-delay="300">I enjoy tackling problems that fulfill user needs, turning ideas into reality through building solutions, fixing weird bugs, and uncovering insights from data.</p>
                            <p data-aos="fade-up" data-aos-delay="400"><b>Fun Fact</b>: I once spent 3 hours fixing a bug only to realize I forgot a semicolon. Legendary stuff.</p>
                            
                            <div class="data mx-auto">
                                <div class="data-content">
                                    <div class="data-grid" data-aos="zoom-in" data-aos-delay="200">
                                    	<div class="frame">
                                            <div class="frame-grid">
                                            	<img src="assets/img/p005.jpg">
                                            </div>
                                        </div>
                                        <div class="note">
                                        	<p>Dashboard that told the truth</p>
                                        </div>
                                    </div>
                                    <div class="data-wrapper" data-aos="zoom-in" data-aos-delay="400">
                                    	<div class="frame">
                                            <div class="frame-grid">
                                            	<img src="assets/img/p006.png">
                                            </div>
                                        </div>
                                        <div class="note">
                                        	<p>Some of my recent work</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
           </div>
        
        </section>
        
        <!-- project section -->
        <section id="projects" class="projects section">
        
            <div class="container section-title" data-aos="fade-up" data-aos-delay="0">
            	<h2>Here's What I've Been Up To.</h2>
            </div>
            
            <div class="container">
            
                <div class="project-content">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mx-auto px-4">
                            <?php
                                $sql = "SELECT projectID,name,descr,pic1 FROM projects LIMIT 2";
                                $result = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <div class="project-wrapper my-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="project-grid mx-auto mt-3 pt-1">
                                    <img class="mx-auto d-block mt-3" src="assets/<?php echo $row['pic1']; ?>" width="95%" height="310px">
                                </div>
                                <h3 class="text-black ml-3 mt-4"><?php echo $row['name']; ?></h3>
                                <p class="ml-3 mt-3"><?php echo $row['descr']; ?></p>
                                <a class="btn text-decoration-none ml-3" href="view-project.php?pid=<?php echo $row['projectID']; ?>" role="button">View Project<i class="fa-solid fa-angle-right ml-2"></i></a>
                            </div>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            
            </div>
        
        </section>
        
        <!-- skills/tools section -->
        <section id="skill" class="skill section">
        
            <div class="container" data-aos="fade-up" data-aos-delay="0">
            
                <div class="skill-content">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mx-auto p-4">
                            <h3>Skills and Tools <i class="fa-solid fa-laptop-code ml-5 text-primary"></i> <i class="fa-solid fa-magnifying-glass-chart text-warning ml-3"></i></h3>
                            <ul class="mt-4" type="disc">
                                <li>Front-End: JavaScript, React, React Native</li>
                                <li>Back-End: Python, Node.Js, PHP (proficient in OOP)</li>
                                <li>Server-Side: MySQL</li>
                                <li>Data Analysis: MS Excel, SQL, Stata, Spreadsheet, SPSS</li>
                            </ul>
                        </div>
            
                    	<hr>
                        
                    </div>
                </div>
            
            </div>
        
        </section>
        
        <!-- help section -->
        <section id="help" class="help section">
        
            <div class="container section-title" data-aos="fade-up" data-aos-delay="0">
            	<h2>How Can I Help?</h2>
                <p>Let's turn your vision into something amazing.</p>
            </div>
            
            <div class="container">
            
                <div class="help-content">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mx-auto text-center py-4">
                            <div class="help-wrapper" data-aos="fade-up" data-aos-delay="100">
                                <div class="help-grid">
                                    <p class="text-black mt-2">Web Development</p>
                                    <i class="fa-solid fa-code text-primary"></i>
                                    <p class="text-black mt-4">You Bring the Chaos, I Bring the Code</p>
                                </div>
                                <div class="help-grid">
                                    <p class="text-black mt-2">Site with good load speed</p>
                                    <i class="fa-solid fa-gear text-success"></i>
                                    <p class="text-black mt-4">Websites that load faster than your ex replies</p>
                                </div>
                            </div>
                            <div class="help-wrapper" data-aos="fade-up" data-aos-delay="200">
                                <div class="help-grid">
                                    <p class="text-black mt-2">Data Cleaning & Visualization</p>
                                    <i class="fa-solid fa-hands-bubbles text-warning"></i>
                                    <p class="text-black mt-4">Like spring cleaning, but for spreadsheets</p>
                                </div>
                                <div class="help-grid">
                                    <p class="text-black mt-2">Dashboard</p>
                                    <i class="fa-solid fa-square-poll-vertical text-info"></i>
                                    <p class="text-black mt-4">Dashboards that make your boss say "ooh"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        
        </section>
        
        <!-- testimonial section -->
        <section id="testimonial" class="testimonial section">
        
            <div class="container section-title" data-aos="fade-up" data-aos-delay="0">
                <h3>Testimonials</h3>
            </div>
            
            <div class="container px-0">
            
                <div class="review" data-aos="fade-up" data-aos-delay="150">
                    <div class="row align-items-center">
                    
                        <div class="review-container">
                            <div class="review-slides text-center mt-3 p-4">
                                <q>Working with Bobola A. Dabira was amazing! He EXCEEDED all my expectations with his professionalism and clear communication, bring my vision for the website to life. Highly proactive, quick to respond, and incredibly polite - recommend him to anyone!</q>
                                <p class="author">- Holly Frasier</p>
                            </div>
                            <div class="review-slides text-center mt-3 p-4">
                                <q>Fantastic! Bobola A. Dabira did a great job, was super responsive, and very helpful.</q>
                                <p class="author">- Dustin Boyd</p>
                            </div>
                            <div class="review-slides text-center mt-3 p-4">
                                <q>It was such a pleasure working with Bob. Excellent and prompt communication skills as well as very detail oriented. He has set a high standard for any other seller going forword. Definitely RECOMMEND!</q>
                                <p class="author">- Yata Watts</p>
                            </div>
                            <div class="review-slides text-center mt-3 p-4">
                                <q>Good job. Very professional and easy to work with.</q>
                                <p class="author">- Reggie</p>
                            </div>
                            <div class="review-slides text-center mt-3 p-4">
                                <q>Bob not only implemented my ideas but he also gave me ideas of how to make my product function better. He also delivered very quickly. I will definitely be a return customer.</q>
                                <p class="author">- Tiyezye Banda</p>
                            </div>
                            
                            <!-- Set 2 (duplicate for seamless scroll) -->
                            <div class="review-slides text-center mt-3 p-4">
                                <q>Working with Bobola A. Dabira was amazing! He EXCEEDED all my expectations with his professionalism and clear communication, bring my vision for the website to life. Highly proactive, quick to respond, and incredibly polite - recommend him to anyone!</q>
                                <p class="author">- Holly Frasier</p>
                            </div>
                            <div class="review-slides text-center mt-3 p-4">
                                <q>Fantastic! Bobola A. Dabira did a great job, was super responsive, and very helpful.</q>
                                <p class="author">- Dustin Boyd</p>
                            </div>
                            <div class="review-slides text-center mt-3 p-4">
                                <q>It was such a pleasure working with Bob. Excellent and prompt communication skills as well as very detail oriented. He has set a high standard for any other seller going forword. Definitely RECOMMEND!</q>
                                <p class="author">- Yata Watts</p>
                            </div>
                            <div class="review-slides text-center mt-3 p-4">
                                <q>Good job. Very professional and easy to work with.</q>
                                <p class="author">- Reggie</p>
                            </div>
                            <div class="review-slides text-center mt-3 p-4">
                                <q>Bob not only implemented my ideas but he also gave me ideas of how to make my product function better. He also delivered very quickly. I will definitely be a return customer.</q>
                                <p class="author">- Tiyezye Banda</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            
            </div>
        
        </section>
    
<?php
    include('inc/footer.php');
?>