<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M Lateef | Full-Stack Engineer & AI Developer </title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/lateef.png') }}">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome 6.4 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-wrapper">
            <div class="spinner"></div>
            <div class="spinner-text">M. LATEEF</div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top glass-nav">
        <div class="container">
            <a class="navbar-brand fw-extrabold tracking-wide" href="#">
                <span class="text-gradient">M. LATEEF</span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-uppercase fs-7 fw-semibold gap-lg-3">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ai-advantage">AI Advantage</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Stack</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Work</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <div class="ms-lg-3 mt-3 mt-lg-0">
                    <a href="#contact" class="btn btn-gradient-primary btn-sm rounded-pill px-4">Get In Touch</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="about" class="hero-section d-flex align-items-center text-white position-relative">
        <div class="hero-bg-glow"></div>
        <div class="container py-5 position-relative z-1">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <div
                        class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill glass-card mb-4 border-glow">
                    </div>
                    <h1 class="display-3 fw-extrabold mb-3 lh-sm tracking-tight text-white">
                        Engineering Sophisticated <span class="text-gradient">Digital Solutions</span>
                    </h1>
                    <p class="lead text-cool-slate mb-4 max-w-650 fw-medium">
                        Hi, I'm <strong>M Lateef</strong>—a senior-ready developer with 2+ years specialized in turning
                        ambition into reality using <strong>Laravel, Django, Flutter, and Bootstrap</strong>.
                    </p>
                    <div
                        class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-3 mb-5">
                        <a href="#projects" class="btn btn-gradient-primary btn-lg rounded-pill px-4 shadow-glow">
                            <i class="fa-solid fa-code me-2"></i>Explore Work
                        </a>
                        <a href="#contact" class="btn btn-glass btn-lg rounded-pill px-4">
                            <i class="fa-solid fa-paper-plane me-2"></i>Get In Touch
                        </a>
                    </div>

                    <!-- Performance Stats -->
                    <div class="row g-3 pt-4 border-top border-slate">
                        <div class="col-4">
                            <h3 class="fw-extrabold text-gradient mb-0">2+</h3>
                            <p class="fs-7 text-cool-slate mb-0">Years Experience</p>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-extrabold text-gradient mb-0">100%</h3>
                            <p class="fs-7 text-cool-slate mb-0">On-Time Delivery</p>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-extrabold text-gradient mb-0">AI+</h3>
                            <p class="fs-7 text-cool-slate mb-0">Enhanced Workflows</p>
                        </div>
                    </div>
                </div>

                <!-- Premium Profile Display -->
                <div class="col-lg-5 text-center">
                    <div class="profile-card-wrapper position-relative d-inline-block">
                        <div class="profile-card-glow"></div>
                        <div class="glass-card p-3 rounded-5 border-glow text-center position-relative z-1">
                            <img src="{{ asset('assets/lateef.png') }}" alt="M Lateef - Full Stack Developer"
                                class="img-fluid rounded-4 profile-img mb-3 shadow-2xl">
                            <h4 class="fw-extrabold mb-1 text-white">M. Lateef</h4>
                            <p class="text-primary-cool fs-7 fw-semibold mb-2">Backend & Cross-Platform Engineer</p>
                            <div class="d-flex justify-content-center gap-2">
                                <span class="badge badge-dark fs-8">Architecture</span>
                                <span class="badge badge-dark fs-8">Performance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- AI Advantage Section -->
    <section id="ai-advantage" class="py-5 bg-obsidian position-relative">
        <div class="container py-lg-4">
            <div class="glass-card p-4 p-md-5 rounded-5 border-glow">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6">
                        <span class="text-gradient fw-bold text-uppercase fs-7 tracking-wider">The Innovation
                            Edge</span>
                        <h2 class="display-6 fw-extrabold text-white mt-2 mb-3">AI-Accelerated Software Engineering</h2>
                        <p class="text-cool-slate mb-4">
                            I leverage cutting-edge AI coding tools to optimize the <b>how</b> of
                            development—accelerating rapid prototyping, automating testing protocols, and optimizing
                            complex database architectures. This advanced workflow ensures:
                        </p>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-3">
                                <div
                                    class="icon-box-sm bg-primary-dark text-primary-cool rounded-circle border border-primary border-opacity-25">
                                    <i class="fa-solid fa-bolt fs-7"></i>
                                </div>
                                <div>
                                    <h6 class="text-white fw-bold mb-1">Superior Delivery Velocity</h6>
                                    <p class="fs-7 text-cool-slate mb-0">Rapid product turnarounds that outpace
                                        traditional development without sacrificing structural integrity.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div
                                    class="icon-box-sm bg-primary-dark text-primary-cool rounded-circle border border-primary border-opacity-25">
                                    <i class="fa-solid fa-shield-check fs-7"></i>
                                </div>
                                <div>
                                    <h6 class="text-white fw-bold mb-1">Clean, Bug-Free Codebases</h6>
                                    <p class="fs-7 text-cool-slate mb-0">Continuous integration of AI-powered static
                                        analysis to maintain superior code quality and security.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="code-preview-card p-4 rounded-4 bg-black border border-slate">
                            <div class="d-flex align-items-center gap-2 mb-3 border-bottom border-slate pb-3">
                                <span class="dot bg-danger"></span>
                                <span class="dot bg-warning"></span>
                                <span class="dot bg-success"></span>
                                <span class="fs-8 text-muted ms-auto font-monospace">optimize.py</span>
                            </div>
                            <pre class="font-monospace fs-7 text-cool-slate mb-0"><code><span class="text-indigo-cool">class</span> <span class="text-cyan-cool">workflow_engine</span>:
    <span class="text-indigo-cool">def</span> <span class="text-info">__init__</span>(self, developer="Lateef"):
        self.stack = ["Laravel", "Django", "Flutter"]
        self.ai = ["Copilot", "Optimizers", "Refactors"]
        
    <span class="text-indigo-cool">def</span> <span class="text-info">build</span>(self, requirements):
        # AI accelerates prototyping & testing
        clean_code = self.ai.refactor(requirements)
        <span class="text-indigo-cool">return</span> f"Optimized & Scalable: {clean_code}"</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Ecosystem -->
    <section id="skills" class="py-5 bg-obsidian-deeper">
        <div class="container py-lg-5">
            <div class="text-center max-w-650 mx-auto mb-5">
                <span class="text-gradient fw-bold text-uppercase fs-7 tracking-wider">Expertise</span>
                <h2 class="display-5 fw-extrabold text-white mt-1">Core Tech Ecosystem</h2>
                <p class="text-cool-slate fw-medium">Industry-standard frameworks and languages I combine to build
                    high-performance solutions.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card p-4 rounded-4 text-center h-100 card-hover border-glow">
                        <div
                            class="icon-box mb-3 bg-danger-subtle text-danger mx-auto rounded-4 border border-danger border-opacity-10">
                            <i class="fa-brands fa-laravel fa-2x"></i>
                        </div>
                        <h5 class="fw-bold text-white mb-2">Laravel</h5>
                        <p class="fs-7 text-cool-slate mb-0">Enterprise PHP for robust REST APIs, secure authentication,
                            and complex backend architecture.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card p-4 rounded-4 text-center h-100 card-hover border-glow">
                        <div
                            class="icon-box mb-3 bg-primary-subtle text-primary-cool mx-auto rounded-4 border border-primary-cool border-opacity-10">
                            <i class="fa-brands fa-python fa-2x"></i>
                        </div>
                        <h5 class="fw-bold text-white mb-2">Django</h5>
                        <p class="fs-7 text-cool-slate mb-0">Pragmatic Python framework engineered for extreme velocity
                            and clean, structured data-driven apps.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card p-4 rounded-4 text-center h-100 card-hover border-glow">
                        <div
                            class="icon-box mb-3 bg-info-subtle text-info mx-auto rounded-4 border border-info border-opacity-10">
                            <i class="fa-solid fa-mobile-screen-button fa-2x"></i>
                        </div>
                        <h5 class="fw-bold text-white mb-2">Flutter</h5>
                        <p class="fs-7 text-cool-slate mb-0">Google's UI toolkit for compiling natively high-fidelity
                            cross-platform mobile applications.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card p-4 rounded-4 text-center h-100 card-hover border-glow">
                        <div
                            class="icon-box mb-3 bg-purple-subtle text-purple-cool mx-auto rounded-4 border border-purple-cool border-opacity-10">
                            <i class="fa-brands fa-bootstrap fa-2x"></i>
                        </div>
                        <h5 class="fw-bold text-white mb-2">Bootstrap</h5>
                        <p class="fs-7 text-cool-slate mb-0">Fluid front-end framework for responsive UI design and
                            efficient, production-ready web layouts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filterable Projects Section -->
    <section id="projects" class="py-5 bg-obsidian">
        <div class="container py-lg-5">
            <div class="text-center max-w-650 mx-auto mb-4">
                <span class="text-gradient fw-bold text-uppercase fs-7 tracking-wider">Portfolio</span>
                <h2 class="display-5 fw-extrabold text-white mt-1">Featured Deliverables</h2>
                <p class="text-cool-slate fw-medium">A curated selection of robust platforms engineered for business
                    requirements.</p>
            </div>

            <!-- Category Filter -->
            <div class="d-flex justify-content-center flex-wrap gap-2 mb-5 px-3">
                <button class="btn btn-filter active rounded-pill px-4 fs-7" data-filter="all">All Deliverables</button>
                <button class="btn btn-filter rounded-pill px-4 fs-7" data-filter="web">Web Applications</button>
                <button class="btn btn-filter rounded-pill px-4 fs-7" data-filter="enterprise">Enterprise
                    Systems</button>
                <button class="btn btn-filter rounded-pill px-4 fs-7" data-filter="mobile">Mobile Software</button>
            </div>

            <div class="row g-4" id="projects-grid">
                <!-- Project 1 (Web) -->
                <div class="col-lg-4 col-md-6 project-item" data-category="web">
                    <div class="glass-card rounded-4 border-glow overflow-hidden h-100 d-flex flex-column card-hover">
                        <div class="project-header p-4 pb-0">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span
                                    class="badge badge-success text-success-cool border border-success border-opacity-25 rounded-pill fs-8">Live
                                    Platform</span>
                                <i class="fa-solid fa-globe text-cool-slate fs-5"></i>
                            </div>
                            <h4 class="fw-extrabold text-white mb-2 tracking-tight">ENTH Tours & Travel</h4>
                            <p class="fs-7 text-cool-slate">A highly responsive commercial portal engineered for package
                                showcases, booking inquiries, and secure administration.</p>
                        </div>
                        <div class="p-4 pt-0 mt-auto">
                            <div class="d-flex flex-wrap gap-2 mb-3 pt-3 border-top border-slate">
                                <span class="tech-tag">laravel</span>
                                <span class="tech-tag">Bootstrap</span>
                                <span class="tech-tag">mysql</span>
                            </div>
                            <a href="https://enthtours.com/"
                                class="btn btn-outline-slate btn-sm rounded-pill w-100 fs-8 fw-semibold">Explore Now</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 (Enterprise) -->
                <div class="col-lg-4 col-md-6 project-item" data-category="enterprise">
                    <div class="glass-card rounded-4 border-glow overflow-hidden h-100 d-flex flex-column card-hover">
                        <div class="project-header p-4 pb-0">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span
                                    class="badge badge-primary text-primary-cool border border-primary border-opacity-25 rounded-pill fs-8">Retail
                                    Operations</span>
                                <i class="fa-solid fa-store text-cool-slate fs-5"></i>
                            </div>
                            <h4 class="fw-extrabold text-white mb-2 tracking-tight">Shop Management Software</h4>
                            <p class="fs-7 text-cool-slate">An enterprise-level operational hub designed to centralize
                                inventory tracking, real-time analytics, and financial reporting.</p>
                        </div>
                        <div class="p-4 pt-0 mt-auto">
                            <div class="d-flex flex-wrap gap-2 mb-3 pt-3 border-top border-slate">
                                <span class="tech-tag">react js</span>
                                <span class="tech-tag">javascript</span>
                                <span class="tech-tag">postsql</span>
                            </div>
                            <a href="#contact"
                                class="btn btn-outline-slate btn-sm rounded-pill w-100 fs-8 fw-semibold">Explore in GitHub</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 (Mobile) -->
                <div class="col-lg-4 col-md-6 project-item" data-category="mobile">
                    <div class="glass-card rounded-4 border-glow overflow-hidden h-100 d-flex flex-column card-hover">
                        <div class="project-header p-4 pb-0">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span
                                    class="badge badge-info text-info-cool border border-info border-opacity-25 rounded-pill fs-8">Medical
                                    Tech</span>
                                <i class="fa-solid fa-hospital text-cool-slate fs-5"></i>
                            </div>
                            <h4 class="fw-extrabold text-white mb-2 tracking-tight">Medical Management Hub</h4>
                            <p class="fs-7 text-cool-slate">A secure healthcare ecosystem focused on HIPAA-compliant
                                patient records, smart appointment scheduling, and pharmacy stock control.</p>
                        </div>
                        <div class="p-4 pt-0 mt-auto">
                            <div class="d-flex flex-wrap gap-2 mb-3 pt-3 border-top border-slate">
                                <span class="tech-tag">react js</span>
                                <span class="tech-tag">responsive application</span>
                                <span class="tech-tag">PostgreSQL</span>
                            </div>
                            <a href="#contact"
                                class="btn btn-outline-slate btn-sm rounded-pill w-100 fs-8 fw-semibold">Explore in GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-obsidian position-relative">
        <div class="contact-bg-glow"></div>
        <div class="container py-lg-5 position-relative z-1">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 text-center text-lg-start">
                    <span class="text-gradient fw-bold text-uppercase fs-7 tracking-wider">Acquisition</span>
                    <h2 class="display-5 fw-extrabold text-white mt-1 mb-3 lh-sm tracking-tight">Partner for Digital
                        Acceleration</h2>
                    <p class="text-cool-slate fw-medium mb-4 max-w-650 mx-auto mx-lg-0">
                        I am focused on delivering high-fidelity applications that align with complex business
                        objectives. Let's discuss how my expertise can accelerate your product roadmap.
                    </p>

                    <div
                        class="d-flex flex-column gap-3 mb-4 max-w-650 mx-auto mx-lg-0 align-items-center align-items-lg-start">
                        <div class="d-flex align-items-center gap-3">
                            <div
                                class="icon-box-sm bg-primary-dark text-primary-cool rounded-circle border border-primary border-opacity-25">
                                <i class="fa-solid fa-envelope fs-7"></i>
                            </div>
                            <div>
                                <span class="fs-8 text-cool-slate d-block">Request a Consultation</span>
                                <a href="mailto:khangalib5191@gmail.com"
                                    class="text-white text-decoration-none fw-semibold">khangalib5191@gmail.com</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <div
                                class="icon-box-sm bg-primary-dark text-primary-cool rounded-circle border border-primary border-opacity-25">
                                <i class="fa-solid fa-check-double fs-7"></i>
                            </div>
                            <div>
                                <span class="fs-8 text-cool-slate d-block">Status</span>
                                <span class="text-white fw-semibold">Available for Selective Projects</span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-3 fs-5 justify-content-center justify-content-lg-start">
                        <a href="{{'https://github.com/khangalib5191-lab'}}" target="_blank"
                            class="icon-box-sm bg-dark-subtle text-cool-slate border border-slate rounded-circle hover-glow"><i
                                class="fa-brands fa-github fs-6"></i></a>
                        <a href="#" target="_blank"
                            class="icon-box-sm bg-dark-subtle text-cool-slate border border-slate rounded-circle hover-glow"><i
                                class="fa-brands fa-linkedin-in fs-6"></i></a>
                    </div>
                </div>

                <!-- Updated Contact Form with Native Laravel Processing -->
                <div class="col-lg-7">
                    <div class="glass-card p-4 p-md-5 rounded-5 border-glow">

                        <!-- Success Alert Message -->
                        @if(session('success'))
                            <div class="alert alert-success bg-success text-white border-0 mb-4 rounded-3">
                                <i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.send') }}" method="POST" id="portfolio-contact-form">
                            @csrf

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label text-white fs-7 fw-semibold">Full Name</label>
                                    <input type="text" name="name" id="form-name" class="form-control custom-input"
                                        placeholder="Consultation Request" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-white fs-7 fw-semibold">Business Email</label>
                                    <input type="email" name="email" id="form-email" class="form-control custom-input"
                                        placeholder="name@company.com" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label text-white fs-7 fw-semibold">Engagement Type</label>
                                    <select name="engagement_type" id="form-engagement"
                                        class="form-select custom-input fs-7 text-cool-slate">
                                        <option value="Full-Stack Application Development">Full-Stack Application
                                            Development</option>
                                        <option value="Cross-Platform Mobile (Flutter)">Cross-Platform Mobile (Flutter)
                                        </option>
                                        <option value="Enterprise Software Solutions">Enterprise Software Solutions
                                        </option>
                                        <option value="Technical Consultation/Partnership">Technical
                                            Consultation/Partnership</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label text-white fs-7 fw-semibold">Brief Project Summary</label>
                                    <textarea name="message" id="form-message"
                                        class="form-control custom-input fs-7" rows="4"
                                        placeholder="Briefly describe your objectives and key requirements..."
                                        required></textarea>
                                </div>
                                <div class="col-12 mt-4 pt-2">
                                    <button type="submit"
                                        class="btn btn-gradient-primary btn-lg rounded-pill w-100 shadow-glow fw-bold fs-7 py-3">
                                        <i class="fa-solid fa-paper-plane me-2"></i>Request Professional Consultation
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-obsidian-deeper border-top border-slate text-center">
        <div class="container">
            <p class="fs-7 text-cool-slate mb-0">&copy; <span id="year"></span> <strong>M. Lateef</strong>. Engineered
                for clarity, speed, and client value.</p>
        </div>
    </footer>

    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>