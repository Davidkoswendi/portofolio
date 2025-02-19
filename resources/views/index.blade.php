<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo">
                <img src="{{ asset('img/Black_Circle_Icon_Business_Logo-removebg-preview.png') }}" alt="Logo">
            </div>
            <div class="links">
                <a href="#home">Home</a>
                <a href="#about">About Me</a>
                <a href="#portfolio">My Portfolio</a>
                <a href="#services">Skill</a> 
                <a href="#programming-languages">Programming skills</a>
                <a href="#map">My Location</a> 
            </div>
            <button onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})" class="contact-button">Contact Me</button>
            <svg xmlns="http://www.w3.org/2000/svg" class="hamburg" height="32" width="34" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        </div>
        <div class="dropmenu">
            <a href="#home">Home</a>
            <a href="#about">About Me</a>
            <a href="#portfolio">My Portfolio</a>
            <a href="#services">Skill</a>    
            <a href="#programming-languages">Programming skills</a>
            <a href="#map">My Location</a> 
            <button onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})" class="contact-button">Contact Me</button>
            <svg xmlns="http://www.w3.org/2000/svg" class="cancel" height="36" width="32" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
        </div>
    </nav>

<!-- Home Section -->
<section id="home">
    <div class="content">
        <div class="main-content">
            <h1 data-aos="fade-right" data-aos-duration="1500">Hi! I Am</h1>
            <span data-aos="fade-left" data-aos-duration="1500" data-aos-delay="200">David K.</span>
            <p data-aos="flip-up" data-aos-duration="1500" data-aos-delay="400">I'm David Koswendi, a passionate student with a strong focus on web development.</p>
            <div class="social-icons" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="600">
                <a href="https://wa.me/message/EXALVCOQPZW7I1" target="_blank" class="social-icon">
                    <img src="{{ asset('img/wa.png') }}" alt="WhatsApp">
                </a>
                <a href="mailto:davidkoswendi2007@egmail.com " target="_blank" class="social-icon">
                    <img src="{{ asset('img/gmail.png') }}" alt="gmail">
                </a>
                <a href="https://www.instagram.com/davedzz29?igsh=MWY3NWRwdnMwaGd3OQ==" target="_blank" class="social-icon">
                    <img src="{{ asset('img/ig.png') }}" alt="Instagram">
                </a>
                <a href="https://www.linkedin.com/in/david-koswendi-804355323 " target="_blank" class="social-icon">
                    <img src="{{ asset('img/linkedin.png') }}" alt="linkedin">
                </a>
            </div>
        </div>
        <div class="image">
        <model-viewer 
    src="sprunki__black.glb" 
    alt="3D Model of ASUS ROG Strix Scar 17" 
    auto-rotate 
    rotation-per-second="20deg"
    style="width: 100%; height: 400px;">
</model-viewer>
        </div>
    </div>
</section>

    <!-- About Section -->
<!-- About Section -->
<section id="about">
    <div class="about-content">
        <h2 data-aos="fade-up" data-aos-duration="1500">About Me</h2>
        <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">Hello, I'm David Koswendi.
a Software Engineering (RPL) student at SMKN 4 Bandung. My interest in technology
and programming began at an early age. I am very interested in web development, and continue
to strengthen my proficiency in HTML, CSS, JavaScript, and other coding to create user-friendly and captivating
user experiences. As my skills continue to expand, I am committed to creating innovative solutions
in the world of technology and web development.</p>
        
        <!-- Certificates Section -->
        <div class="certificates" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
            <h3>My Certificates</h3>
            <div class="certificate-list">
                <div class="certificate-item">
                    <img src="{{ asset('img/Sertifikat1.png') }}" alt="Certificate 1">
                    <a href="{{ asset('Sertifikat_Pelatihan_Digitalent.pdf') }}" target="_blank" view="Sertifikat_Pelatihan_Digitalent.pdf" class="download-button">View</a>
                </div>
                <div class="certificate-item">
                    <img src="{{ asset('img/certificate2.jpg') }}" alt="Certificate 2">
                    <a href="{{ asset('img/certificate2.jpg') }}" download="Certificate2.jpg" class="download-button">Download</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Portfolio Section -->
    <section id="portfolio">
    <div class="portfolio-content">
        <h2 data-aos="fade-up" data-aos-duration="1500">My Portfolio</h2>
        <div class="portfolio-list">
            <div class="portfolio-item" data-aos="flip-left" data-aos-duration="1500">
                <img src="{{ asset('img/project1.png') }}" alt="Project 1">
                <h3>Registration Form Creation</h3>
            </div>
            <div class="portfolio-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="200">
                <img src="{{ asset('img/project2.png') }}" alt="Project 2">
                <h3>Portfolio Creation</h3>
            </div>
            <div class="portfolio-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="400">
                <img src="{{ asset('img/project3.png') }}" alt="Project 3">
                <h3>Online Store</h3>
            </div>
            <div class="portfolio-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="600">
                <img src="{{ asset('img/project4.png') }}" alt="Project 4">
                <h3>Cinema Website</h3>
            </div>
        </div>
    </div>
</section>

    <!-- Services Section -->
    <section id="services">
        <div class="services-content">
            <h2 data-aos="fade-up" data-aos-duration="1500">My Skill</h2>
            <div class="service-list">
                <div class="service-item" data-aos="flip-left" data-aos-duration="1500">
                    <h3>Web Development</h3>
                    <p>Create a fast, responsive and visually stunning customized website.</p>
                </div>
                <div class="service-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="200">
                    <h3>UI/UX Design</h3>
                    <p>Designing user-friendly and intuitive interfaces to enhance user experience.</p>
                </div>
                <div class="service-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="400">
                    <h3>Data Base</h3>
                    <p>Store, manage, and organize data for easy access and processing.</p>
                </div>
            </div>
        </div>
    </section>

<!-- Programming Skills Section -->
<section id="programming-languages">
    <div class="programming-content">
        <h2 data-aos="fade-up" data-aos-duration="1500">Programming Skills</h2>
        <div class="skills-container">
            <div class="skill-item" data-aos="fade-up" data-aos-duration="1500">
                <div class="skill-icon">
                    <img src="{{ asset('img/HTML.png') }}" alt="HTML Logo">
                </div>
                <div class="skill-details">
                    <h4>HTML</h4>
                    <p>I possess the ability to integrate various programming languages within HTML, enhancing its functionality and versatility.</p>
                </div>
            </div>
            <div class="skill-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                <div class="skill-icon">
                    <img src="{{ asset('img/css.png') }}" alt="CSS Logo">
                </div>
                <div class="skill-details">
                    <h4>CSS</h4>
                    <p>I am capable of creating visually appealing and innovative websites through the effective use of CSS.</p>
                </div>
            </div>
            <div class="skill-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
                <div class="skill-icon">
                    <img src="{{ asset('img/js.png') }}" alt="JavaScript Logo">
                </div>
                <div class="skill-details">
                    <h4>JavaScript</h4>
                    <p>I have the proficiency to make websites interactive, enhancing user engagement through JavaScript.</p>
                </div>
            </div>
            <div class="skill-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
                <div class="skill-icon">
                    <img src="{{ asset('img/php.png') }}" alt="PHP Logo">
                </div>
                <div class="skill-details">
                    <h4>PHP</h4>
                    <p>I was able to connect data to a database using PHP, facilitating dynamic data management.</p>
                </div>
            </div>
            <div class="skill-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
                <div class="skill-icon">
                    <img src="{{ asset('img/LARAVEL (1).png') }}" alt="Laravel Logo">
                </div>
                <div class="skill-details">
                    <h4>Laravel</h4>
                    <p>I am capable in developing websites using the Laravel framework, ensuring robust and scalable applications.</p>
                </div>
            </div>
            <div class="skill-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
                <div class="skill-icon">
                    <img src="{{ asset('img/MySQL.png') }}" alt="MySQL Logo">
                </div>
                <div class="skill-details">
                    <h4>MySQL</h4>
                    <p>I am capable of creating secure databases for users in MySQL, utilizing SQL queries to manage data effectively.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Location Section -->
<section id="map">
    <div class="programming-content">
        <h2 data-aos="fade-up" data-aos-duration="1500">My Location</h2>
        <div class="map-container">
            <!-- Penjelasan Lokasi -->
            <div class="location-description" data-aos="fade-right" data-aos-duration="1500">
                <h3>Seblak Akur, Bandung</h3>
                <p>
                    Located in Bandung, West Java, precisely in Bandung Kidul District, RT 02 RW 03, Cipagalo Kulon.
                </p>
            </div>
            <!-- Google Maps -->
            <div class="map-embed" data-aos="fade-left" data-aos-duration="1500">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4063742100607!2d107.63136181098957!3d-6.961296068129158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9b3d3860b17%3A0x3f740ec439c5af75!2sSeblak%20Akur!5e0!3m2!1sid!2sid!4v1737284322200!5m2!1sid!2sid" 
                    width="100%" 
                    height="400" 
                    style="border:0; border-radius: 10px;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section id="contact">
    <div class="contact-content">
        <h2 data-aos="fade-up" data-aos-duration="1500">Contact Me</h2>
        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
            Feel free to reach out to me for collaborations, projects, or just a friendly chat!
        </p>
        <div class="contact-container">
            <form action="https://api.web3forms.com/submit" method="POST" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400">
                <input type="hidden" name="apikey" value="770fe802-bada-41e0-83f4-1f5ed4884029">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
            <div class="contact-info" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="400">
                <h3>Let's Connect!</h3>
                <p>You can also reach me through:</p>
                <ul>
                    <li>
                        <a href="https://wa.me/message/EXALVCOQPZW7I1" target="_blank">
                            <img src="{{ asset('img/wa.png') }}" alt="WhatsApp">
                            <span>+62 821-1447-9342</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:davidkoswendi2007@egmail.com">
                            <img src="{{ asset('img/gmail.png') }}" alt="Email">
                            <span>davidkoswendi2007@egmail.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/davedzz29" target="_blank">
                            <img src="{{ asset('img/ig.png') }}" alt="Instagram">
                            <span>@davedzz29</span>
                        </a>
                    </li>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/david-koswendi-804355323 " target="_blank">
                            <img src="{{ asset('img/linkedin.png') }}" alt="linkedin">
                            <span>David Koswendi</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Notification Popup -->
<div id="notification" class="notification hidden">
    <span id="notification-message">Message sent successfully!</span>
    <button id="close-notification" class="close-button">&times;</button>
</div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({offset: 120});
    </script>
    <script>
        const hamburg = document.querySelector('.hamburg');
        const cancel = document.querySelector('.cancel');
        const navbar = document.querySelector('.dropmenu');

        hamburg.addEventListener('click', () => {
            navbar.classList.add('active'); // Show the dropdown menu
            hamburg.style.display = 'none'; // Hide hamburger icon
            cancel.style.display = 'block'; // Show cancel icon
        });

        cancel.addEventListener('click', () => {
            navbar.classList.remove('active'); // Hide the dropdown menu
            hamburg.style.display = 'block'; // Show hamburger icon
            cancel.style.display = 'none'; // Hide cancel icon
        });
        document.addEventListener('DOMContentLoaded', function () {
    const notification = document.getElementById('notification');
    const closeButton = document.getElementById('close-notification');

    // Function to show notification
    function showNotification(message) {
        notification.querySelector('#notification-message').textContent = message;
        notification.classList.remove('hidden');
        notification.classList.add('visible');

        // Hide notification after 3 seconds
        setTimeout(() => {
            notification.classList.remove('visible');
            notification.classList.add('hidden');
        }, 3000);
    }

    // Close button functionality
    closeButton.addEventListener('click', function () {
        notification.classList.remove('visible');
        notification.classList.add('hidden');
    });

    // Handle form submission
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        // Create a FormData object to send the form data
        const formData = new FormData(form);

        // Use Fetch API to submit the form data
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json', // Ensure the server knows we expect JSON
            }
        })
            .then(response => {
                if (response.ok) {
                    return response.json(); // Assuming your backend returns JSON
                }
                throw new Error('Network response was not ok.');
            })
            .then(data => {
                // Show success notification
                showNotification('Message sent successfully!');
                form.reset(); // Reset the form fields
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                showNotification('Failed to send message. Please try again.'); // Show error notification
            });
    });
});
//Skils//
document.addEventListener('DOMContentLoaded', function() {
    const skills = [
        { id: 'html-progress', percent: 90, percentId: 'html-percent' },
        { id: 'css-progress', percent: 85, percentId: 'css-percent' },
        { id: 'js-progress', percent: 80, percentId: 'js-percent' },
        { id: 'php-progress', percent: 75, percentId: 'php-percent' }
    ];

    skills.forEach(skill => {
        const progressBar = document.getElementById(skill.id);
        const percentText = document.getElementById(skill.percentId);
        let width = 0;
        const interval = setInterval(() => {
            if (width >= skill.percent) {
                clearInterval(interval);
            } else {
                width++;
                progressBar.style.width = width + '%';
                percentText.textContent = width + '%';
            }
        }, 20);
    });
});
    </script>
</body>
</html>