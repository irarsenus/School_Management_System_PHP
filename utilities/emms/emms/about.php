<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ESMMS</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: white;
            overflow-x: hidden;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .bg-animation::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a" cx="50%" cy="50%" r="50%"><stop offset="0%" style="stop-color:rgba(255,255,255,0.1)"/><stop offset="100%" style="stop-color:rgba(255,255,255,0)"/></radialGradient></defs><circle cx="300" cy="300" r="120" fill="url(%23a)"><animate attributeName="cx" values="300;700;300" dur="25s" repeatCount="indefinite"/></circle><circle cx="700" cy="400" r="180" fill="url(%23a)"><animate attributeName="cy" values="400;600;400" dur="20s" repeatCount="indefinite"/></circle><circle cx="500" cy="700" r="100" fill="url(%23a)"><animate attributeName="r" values="100;200;100" dur="18s" repeatCount="indefinite"/></circle></svg>') center/cover;
            animation: float 35s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(180deg); }
        }

        /* Header */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 1rem 2rem;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: currentColor;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        /* Main Content */
        .main-content {
            padding-top: 120px;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Hero Section */
        .hero-section {
            text-align: center;
            margin-bottom: 6rem;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #fff, #f0f0f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { text-shadow: 0 0 20px rgba(255, 255, 255, 0.5); }
            to { text-shadow: 0 0 30px rgba(255, 255, 255, 0.8); }
        }

        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Content Sections */
        .content-section {
            margin-bottom: 4rem;
            animation: fadeInUp 1s ease-out;
        }

        .section-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .content-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 2.5rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .content-card:hover::before {
            left: 100%;
        }

        .content-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .card-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: #fff;
            opacity: 0.9;
        }

        .card-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #fff;
        }

        .card-text {
            font-size: 1rem;
            line-height: 1.7;
            opacity: 0.9;
        }

        /* Mission Section */
        .mission-section {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 30px;
            padding: 4rem 3rem;
            margin: 4rem 0;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .mission-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            background: linear-gradient(45deg, #fff, #f0f0f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .mission-text {
            font-size: 1.2rem;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.95;
        }

        /* Stats Section */
        .stats-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .stat-card {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #fff;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Team Section */
        .team-section {
            margin: 4rem 0;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 3rem;
            background: linear-gradient(45deg, #fff, #f0f0f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .team-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
        }

        .team-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(45deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 3rem;
            color: white;
        }
        .team-avatar img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .team-name {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .team-role {
            font-size: 1rem;
            opacity: 0.8;
            margin-bottom: 1rem;
        }

        .team-bio {
            font-size: 0.9rem;
            line-height: 1.6;
            opacity: 0.9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }

            .nav-links {
                gap: 1rem;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .section-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .content-card {
                padding: 2rem;
            }

            .mission-section {
                padding: 3rem 2rem;
            }

            .mission-title {
                font-size: 2rem;
            }

            .stats-section {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 1rem;
            }

            .stats-section {
                grid-template-columns: 1fr;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Background Animation -->
    <div class="bg-animation"></div>

    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <a href="index.html" class="logo">
                <i class="fas fa-graduation-cap"></i>
                ESMMS
            </a>
            <nav>
                <ul class="nav-links">
                    <li><a href="./">Home</a></li>
                    <li><a href="about.php" class="active">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Hero Section -->
            <section class="hero-section">
                <h1 class="hero-title">About ESMMS</h1>
                <p class="hero-subtitle">
                    Revolutionizing education through innovative technology and comprehensive school management solutions.
                </p>
            </section>

            <!-- Mission Section -->
            <section class="mission-section">
                <h2 class="mission-title">Our Mission</h2>
                <p class="mission-text">
                    To empower educational institutions with cutting-edge technology that simplifies administration, 
                    enhances learning experiences, and fosters meaningful connections between students, teachers, 
                    parents, and administrators. We believe that efficient school management leads to better 
                    educational outcomes and stronger communities.
                </p>
            </section>

            <!-- Features Section -->
            <section class="content-section">
                <div class="section-grid">
                    <div class="content-card">
                        <i class="fas fa-chart-line card-icon"></i>
                        <h3 class="card-title">Advanced Analytics</h3>
                        <p class="card-text">
                            Comprehensive reporting and analytics tools that provide insights into student performance, 
                            attendance patterns, and institutional effectiveness. Make data-driven decisions with real-time dashboards.
                        </p>
                    </div>

                    <div class="content-card">
                        <i class="fas fa-shield-alt card-icon"></i>
                        <h3 class="card-title">Secure & Reliable</h3>
                        <p class="card-text">
                            Built with enterprise-grade security features, ensuring student data privacy and system reliability. 
                            Regular backups, encrypted communications, and role-based access control keep your information safe.
                        </p>
                    </div>

                    <div class="content-card">
                        <i class="fas fa-mobile-alt card-icon"></i>
                        <h3 class="card-title">Mobile-First Design</h3>
                        <p class="card-text">
                            Access your school management system anywhere, anytime. Our responsive design ensures seamless 
                            experience across all devices - desktop, tablet, and mobile platforms.
                        </p>
                    </div>

                    <div class="content-card">
                        <i class="fas fa-users-cog card-icon"></i>
                        <h3 class="card-title">Collaborative Platform</h3>
                        <p class="card-text">
                            Foster better communication between all stakeholders. Teachers can share updates, parents can track 
                            progress, and administrators can manage operations - all in one unified platform.
                        </p>
                    </div>
                </div>
            </section>


            <!-- Team Section -->
            <section class="team-section">
                <h2 class="section-title">Meet Our Team</h2>
                <div class="team-grid">
                    <div class="team-card">
                        <div class="team-avatar">
                            <img src="images/hero.webp" alt="Team member">
                        </div>
                        <h3 class="team-name">IRABA Arsene</h3>
                        <p class="team-role">Lead Software Engineer</p>
                    </div>

                    <div class="team-card">
                        <div class="team-avatar">
                            <img src="images/hero.webp" alt="Team member">
                        </div>
                        <h3 class="team-name">IRABA Arsene</h3>
                        <p class="team-role">Lead Software Engineer</p>
                    </div>

                    <div class="team-card">
                        <div class="team-avatar">
                            <img src="images/hero.webp" alt="Team member">
                        </div>
                        <h3 class="team-name">IRABA Arsene</h3>
                        <p class="team-role">Lead Software Engineer</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer style="text-align: center;padding: 30px 10px;border-top: 1px solid rgba(255, 255, 255, 0.2);">
        <span>Copyright © Designed & Developed by Arsene 2025</span>
    </footer>

    <script>
        // Add smooth scrolling and entrance animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all content sections
        document.querySelectorAll('.content-section, .mission-section, .stats-section, .team-section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'all 0.8s ease-out';
            observer.observe(section);
        });

        // Counter animation for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            
            counters.forEach(counter => {
                const target = parseInt(counter.textContent);
                let current = 0;
                const increment = target / 100;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = counter.textContent.includes('+') ? target + '+' : 
                                            counter.textContent.includes('%') ? target + '%' : target;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current) + 
                                            (counter.textContent.includes('+') ? '+' : 
                                             counter.textContent.includes('%') ? '%' : '');
                    }
                }, 20);
            });
        }

        // Trigger counter animation when stats section is visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(animateCounters, 500);
                    statsObserver.unobserve(entry.target);
                }
            });
        });

        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }

        // Add parallax effect to background
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const bgAnimation = document.querySelector('.bg-animation');
            bgAnimation.style.transform = `translateY(${scrolled * 0.5}px)`;
        });
    </script>
</body>
</html>