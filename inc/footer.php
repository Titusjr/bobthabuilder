        <!-- contact section -->
        <section id="contact" class="contact section">
            
            <div class="container">
            
                <div class="contact-content">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mx-auto py-4">
                            <div class="contact-container mx-auto">
                                <h3 class="text-black" data-aos="fade-up" data-aos-delay="0">Get in touch</h3>
                                <p class="mb-4 mt-3" data-aos="fade-up" data-aos-delay="100">I'm always interested in exploring new opportunities. Want a website that works and winks at users? Need your data to stop looking like chaos? Or just want to say "hey, that was funny"? Let's talk.</p>
                                <div class="contact-form" data-aos="fade-up" data-aos-delay="200">
                                    <form method="post">
                                    	<div class="form-row">
                                        	<div class="col">
                                            	<input class="form-control" type="text" name="fulname" placeholder="Full Name" required>
                                            </div>
                                            <div class="col">
                                        		<input class="form-control" type="email" name="email" placeholder="Email Address" required>
                                            </div>
                                        </div>
                                        <textarea class="mt-4 pl-2 pt-2" name="msg" rows="6" placeholder="Write your Message" required></textarea>
                                        <input class="send mt-3 text-white" type="submit" name="submit" value="Send Message">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            
        </section>
        
        <!-- footer section -->
        <footer id="footer" class="footer">
        
            <div class="container" data-aos="fade-up" data-aos-delay="0">
                <div class="row align-items-center">
                
                    <div class="col-lg-7 mx-auto text-center mb-0 px- pb-3">
                        <div class="footer-content mx-auto">
                            <p>Copyright &copy; 2025 - <span id="year"></span> Bobola A. Dabira | All rights reserved.</p>
                            <ul class="list-unstyled list-inline mt-4">
                                <li class="list-inline-item mr-3"><a href="https://x.com/titusjr_" target="_new"><i class="fa-brands fa-x-twitter text-black"></i></a></li>
                                <li class="list-inline-item mr-3"><a href="https://github.com/Titusjr" target="_new"><i class="fa-brands fa-github text-black"></i></a></li>
                                <li class="list-inline-item mr-3"><a href="https://linkedin.com/in/bobola-a-dabira-b3b197373" target="_new"><i class="fa-brands fa-linkedin-in text-black"></i></a></li>
                                <li class="list-inline-item"><a href="mailto:titusaderibigbebobola@gmail.com"><i class="fa-regular fa-envelope text-black"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
 		
        </footer>

	</main>
    
    <script>
		const toggle = document.getElementById('darkToggle');
		const icon = document.getElementById('darkIcon');
	
		if (localStorage.getItem('darkMode') === 'enabled') {
			document.body.classList.add('dark-mode');
			icon.classList.replace('fa-moon', 'fa-sun');
		}
	
		toggle.addEventListener('click', function () {
			document.body.classList.toggle('dark-mode');
	
			if (document.body.classList.contains('dark-mode')) {
				icon.classList.replace('fa-moon', 'fa-sun');
				localStorage.setItem('darkMode', 'enabled');
			} else {
				icon.classList.replace('fa-sun', 'fa-moon');
				localStorage.setItem('darkMode', 'disabled');
			}
		});
		
		const menuBtn = document.querySelector('.navbar-content .menu');
		const dropdown = document.querySelector('.header-mobile .dropdown');
		
		if (menuBtn && dropdown) {
			menuBtn.addEventListener('click', function () {
				menuBtn.classList.toggle('open');
				dropdown.classList.toggle('open');
			});
		}
		
		document.getElementById('year').textContent = new Date().getFullYear();
	</script>
    
    <script src="assets/js/jquery.slim.min.js" type="text/javascript"></script>
	<script src="assets/js/popper.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script>
		AOS.init({
			duration: 700,
			easing: 'ease-out',
			once: true,
			offset: 80
		});
	</script>

</body>
</html>