<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nahid's Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        .skill-bar {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            transition: width 0.5s ease;
        }
        .animate-fade-in {
            animation: fadeIn 0.6s ease-in;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Nahid</h1>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#about" class="text-gray-700 hover:text-blue-600 transition">About</a>
                    <a href="#projects" class="text-gray-700 hover:text-blue-600 transition">Projects</a>
                    <a href="#skills" class="text-gray-700 hover:text-blue-600 transition">Skills</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient text-white py-20 md:py-32">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in">
                    <h2 class="text-5xl md:text-6xl font-bold mb-6">Hi, I'm Nahid</h2>
                    <p class="text-xl text-gray-100 mb-8">Full-stack web developer building beautiful and functional web applications with modern technologies like Laravel, Vue.js, and more.</p>
                    <div class="flex gap-4">
                        <a href="#contact" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Get In Touch</a>
                        <a href="#projects" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">View Work</a>
                    </div>
                </div>
                <div class="hidden md:block text-center">
                    <div class="w-64 h-64 mx-auto bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                        <i class="fas fa-code text-8xl opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-4xl font-bold text-gray-900 mb-4">About Me</h3>
            <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mb-12"></div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="md:col-span-2">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">I'm a full-stack web developer passionate about creating beautiful and functional web applications. With expertise in Laravel, Vue.js, and modern web technologies, I build scalable solutions that solve real-world problems.</p>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">With over 5 years of experience in web development, I've worked on numerous projects ranging from small business websites to large-scale applications. I'm dedicated to writing clean, maintainable code and staying updated with the latest web technologies.</p>
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <i class="fas fa-map-marker-alt text-3xl text-blue-600 mb-3"></i>
                            <h4 class="font-semibold text-gray-900">Location</h4>
                            <p class="text-gray-600">San Francisco, USA</p>
                        </div>
                        <div class="bg-purple-50 p-6 rounded-lg">
                            <i class="fas fa-envelope text-3xl text-purple-600 mb-3"></i>
                            <h4 class="font-semibold text-gray-900">Email</h4>
                            <p class="text-gray-600"><a href="mailto:hello@nahid.dev" class="text-purple-600 hover:underline">hello@nahid.dev</a></p>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-blue-100 to-purple-100 p-8 rounded-lg h-fit">
                    <h4 class="text-xl font-bold text-gray-900 mb-4">Quick Facts</h4>
                    <ul class="space-y-3 text-gray-700">
                        <li><i class="fas fa-check text-green-500 mr-3"></i>5+ Years Experience</li>
                        <li><i class="fas fa-check text-green-500 mr-3"></i>50+ Projects Completed</li>
                        <li><i class="fas fa-check text-green-500 mr-3"></i>Full-Stack Developer</li>
                        <li><i class="fas fa-check text-green-500 mr-3"></i>Always Learning</li>
                        <li><i class="fas fa-check text-green-500 mr-3"></i>Open to Opportunities</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-4xl font-bold text-gray-900 mb-4">Featured Projects</h3>
            <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mb-12"></div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg overflow-hidden card-hover shadow-md animate-fade-in">
                    <div class="h-48 bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-6xl text-white opacity-50"></i>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">E-Commerce Platform</h4>
                        <p class="text-gray-600 text-sm mb-4">A full-featured e-commerce platform built with Laravel and Vue.js. Includes product management, shopping cart, payment integration, and order tracking.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Laravel</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">Vue.js</span>
                            </div>
                            <a href="https://github.com" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden card-hover shadow-md animate-fade-in">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-blue-500 flex items-center justify-center">
                        <i class="fas fa-tasks text-6xl text-white opacity-50"></i>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Task Management App</h4>
                        <p class="text-gray-600 text-sm mb-4">A collaborative task management application with real-time updates. Features include project boards, team collaboration, and progress tracking.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Real-time</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">WebSocket</span>
                            </div>
                            <a href="https://github.com" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden card-hover shadow-md animate-fade-in">
                    <div class="h-48 bg-gradient-to-br from-red-400 to-pink-500 flex items-center justify-center">
                        <i class="fas fa-chart-line text-6xl text-white opacity-50"></i>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Analytics Dashboard</h4>
                        <p class="text-gray-600 text-sm mb-4">A comprehensive analytics dashboard with real-time data visualization. Features include custom reports, data export, and interactive charts.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Charts</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">Analytics</span>
                            </div>
                            <a href="https://github.com" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden card-hover shadow-md animate-fade-in">
                    <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center">
                        <i class="fas fa-globe text-6xl text-white opacity-50"></i>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Social Media Analytics</h4>
                        <p class="text-gray-600 text-sm mb-4">A tool to analyze social media performance across multiple platforms. Includes real-time analytics, trend detection, and reporting dashboards.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Social</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">API</span>
                            </div>
                            <a href="https://github.com" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden card-hover shadow-md animate-fade-in">
                    <div class="h-48 bg-gradient-to-br from-indigo-400 to-blue-500 flex items-center justify-center">
                        <i class="fas fa-network-wired text-6xl text-white opacity-50"></i>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">API Gateway</h4>
                        <p class="text-gray-600 text-sm mb-4">A robust API gateway for managing and routing microservices. Features authentication, rate limiting, logging, and request transformation.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Microservices</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">API</span>
                            </div>
                            <a href="https://github.com" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden card-hover shadow-md animate-fade-in">
                    <div class="h-48 bg-gradient-to-br from-pink-400 to-rose-500 flex items-center justify-center">
                        <i class="fas fa-briefcase text-6xl text-white opacity-50"></i>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Portfolio Website</h4>
                        <p class="text-gray-600 text-sm mb-4">My personal portfolio website showcasing projects and skills. Built with Laravel backend and Vue.js frontend with beautiful modern design.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Portfolio</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">Design</span>
                            </div>
                            <a href="https://github.com" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-4xl font-bold text-gray-900 mb-4">Skills & Expertise</h3>
            <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mb-12"></div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="animate-fade-in">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="font-semibold text-gray-900">PHP</h4>
                        <span class="text-sm font-bold text-blue-600">95%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="skill-bar h-full rounded-full" style="width: 95%"></div>
                    </div>
                </div>

                <div class="animate-fade-in">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="font-semibold text-gray-900">Laravel</h4>
                        <span class="text-sm font-bold text-blue-600">95%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="skill-bar h-full rounded-full" style="width: 95%"></div>
                    </div>
                </div>

                <div class="animate-fade-in">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="font-semibold text-gray-900">Vue.js</h4>
                        <span class="text-sm font-bold text-blue-600">85%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="skill-bar h-full rounded-full" style="width: 85%"></div>
                    </div>
                </div>

                <div class="animate-fade-in">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="font-semibold text-gray-900">JavaScript</h4>
                        <span class="text-sm font-bold text-blue-600">90%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="skill-bar h-full rounded-full" style="width: 90%"></div>
                    </div>
                </div>

                <div class="animate-fade-in">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="font-semibold text-gray-900">MySQL</h4>
                        <span class="text-sm font-bold text-blue-600">88%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="skill-bar h-full rounded-full" style="width: 88%"></div>
                    </div>
                </div>

                <div class="animate-fade-in">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="font-semibold text-gray-900">REST APIs</h4>
                        <span class="text-sm font-bold text-blue-600">92%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="skill-bar h-full rounded-full" style="width: 92%"></div>
                    </div>
                </div>

                <div class="animate-fade-in">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="font-semibold text-gray-900">Tailwind CSS</h4>
                        <span class="text-sm font-bold text-blue-600">85%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="skill-bar h-full rounded-full" style="width: 85%"></div>
                    </div>
                </div>

                <div class="animate-fade-in">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="font-semibold text-gray-900">Git & Version Control</h4>
                        <span class="text-sm font-bold text-blue-600">90%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="skill-bar h-full rounded-full" style="width: 90%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-br from-blue-50 to-purple-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-4xl font-bold text-gray-900 mb-4">Get In Touch</h3>
            <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mb-12"></div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <p class="text-lg text-gray-700 mb-8">Have a project in mind? I'd love to hear from you. Drop me a message and I'll get back to you as soon as possible.</p>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Email</h4>
                                <p class="text-gray-600"><a href="mailto:hello@nahid.dev" class="text-blue-600 hover:underline">hello@nahid.dev</a></p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Phone</h4>
                                <p class="text-gray-600">+1 (555) 123-4567</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Location</h4>
                                <p class="text-gray-600">San Francisco, USA</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <form id="contactForm" onsubmit="handleSubmit(event)">
                        <div class="mb-6">
                            <label class="block text-gray-900 font-semibold mb-2">Name</label>
                            <input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Your name" required>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-900 font-semibold mb-2">Email</label>
                            <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="your@email.com" required>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-900 font-semibold mb-2">Subject</label>
                            <input type="text" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Project inquiry">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-900 font-semibold mb-2">Message</label>
                            <textarea name="message" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 resize-none" rows="5" placeholder="Your message..." required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold py-3 rounded-lg hover:opacity-90 transition" id="submitBtn">
                            Send Message
                        </button>
                        <div id="message" class="mt-4"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">Nahid</h4>
                    <p class="text-gray-400">Full-stack developer crafting beautiful digital experiences</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#about" class="hover:text-white transition">About</a></li>
                        <li><a href="#projects" class="hover:text-white transition">Projects</a></li>
                        <li><a href="#skills" class="hover:text-white transition">Skills</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Follow</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">GitHub</a></li>
                        <li><a href="#" class="hover:text-white transition">LinkedIn</a></li>
                        <li><a href="#" class="hover:text-white transition">Twitter</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <p class="text-gray-400">hello@nahid.dev</p>
                    <p class="text-gray-400">+1 (555) 123-4567</p>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Nahid's Portfolio. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        async function handleSubmit(event) {
            event.preventDefault();
            
            const form = event.target;
            const submitBtn = document.getElementById('submitBtn');
            const messageDiv = document.getElementById('message');
            
            const formData = {
                name: form.name.value,
                email: form.email.value,
                subject: form.subject.value,
                message: form.message.value
            };
            
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';
            
            try {
                const response = await fetch('/api/contact-messages', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(formData)
                });
                
                if (response.ok) {
                    messageDiv.innerHTML = '<div class="p-4 bg-green-100 text-green-800 rounded-lg">Message sent successfully! I\'ll get back to you soon.</div>';
                    form.reset();
                    setTimeout(() => {
                        messageDiv.innerHTML = '';
                    }, 5000);
                } else {
                    const error = await response.json();
                    messageDiv.innerHTML = '<div class="p-4 bg-red-100 text-red-800 rounded-lg">Error: ' + (error.message || 'Failed to send message') + '</div>';
                }
            } catch (error) {
                console.error('Error:', error);
                messageDiv.innerHTML = '<div class="p-4 bg-red-100 text-red-800 rounded-lg">An error occurred while sending your message</div>';
            } finally {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Send Message';
            }
        }
    </script>
</body>
</html>
    <style>
        [v-cloak] {
            display: none;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        .skill-bar {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            transition: width 0.5s ease;
        }
        .animate-fade-in {
            animation: fadeIn 0.6s ease-in;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-gray-50" v-cloak>
    <div id="app">
        <!-- Navigation -->
        <nav class="bg-white shadow-lg sticky top-0 z-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Nahid</h1>
                    </div>
                    <div class="hidden md:flex space-x-8">
                        <a href="#about" class="text-gray-700 hover:text-blue-600 transition">About</a>
                        <a href="#projects" class="text-gray-700 hover:text-blue-600 transition">Projects</a>
                        <a href="#skills" class="text-gray-700 hover:text-blue-600 transition">Skills</a>
                        <a href="#contact" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero-gradient text-white py-20 md:py-32">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="animate-fade-in">
                        <h2 class="text-5xl md:text-6xl font-bold mb-6">Hi, I'm Nahid</h2>
                        <p class="text-xl text-gray-100 mb-8">Full-stack web developer building beautiful and functional web applications with modern technologies.</p>
                        <div class="flex gap-4">
                            <a href="#contact" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Get In Touch</a>
                            <a href="#projects" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">View Work</a>
                        </div>
                    </div>
                    <div class="hidden md:block text-center">
                        <div class="w-64 h-64 mx-auto bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                            <i class="fas fa-code text-8xl opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h3 class="text-4xl font-bold text-gray-900 mb-4">About Me</h3>
                <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mb-12"></div>
                
                <div v-if="about" class="grid md:grid-cols-3 gap-8">
                    <div class="md:col-span-2">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">{{ about.bio }}</p>
                        <div class="grid grid-cols-2 gap-6 mt-8">
                            <div class="bg-blue-50 p-6 rounded-lg">
                                <i class="fas fa-map-marker-alt text-3xl text-blue-600 mb-3"></i>
                                <h4 class="font-semibold text-gray-900">Location</h4>
                                <p class="text-gray-600">{{ about.location }}</p>
                            </div>
                            <div class="bg-purple-50 p-6 rounded-lg">
                                <i class="fas fa-envelope text-3xl text-purple-600 mb-3"></i>
                                <h4 class="font-semibold text-gray-900">Email</h4>
                                <p class="text-gray-600"><a href="mailto:{{ about.email }}" class="text-purple-600 hover:underline">{{ about.email }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-blue-100 to-purple-100 p-8 rounded-lg h-fit">
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Quick Facts</h4>
                        <ul class="space-y-3 text-gray-700">
                            <li><i class="fas fa-check text-green-500 mr-3"></i>5+ Years Experience</li>
                            <li><i class="fas fa-check text-green-500 mr-3"></i>50+ Projects Completed</li>
                            <li><i class="fas fa-check text-green-500 mr-3"></i>Full-Stack Developer</li>
                            <li><i class="fas fa-check text-green-500 mr-3"></i>Always Learning</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-20 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h3 class="text-4xl font-bold text-gray-900 mb-4">Featured Projects</h3>
                <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mb-12"></div>
                
                <div v-if="projects.length" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div v-for="project in projects" :key="project.id" class="bg-white rounded-lg overflow-hidden card-hover shadow-md animate-fade-in">
                        <div v-if="project.image" class="h-48 bg-gradient-to-br from-blue-400 to-purple-500 relative overflow-hidden">
                            <img :src="project.image" :alt="project.title" class="w-full h-full object-cover">
                        </div>
                        <div v-else class="h-48 bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                            <i class="fas fa-project-diagram text-6xl text-white opacity-50"></i>
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">{{ project.title }}</h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ project.description }}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex gap-2">
                                    <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Web</span>
                                    <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">PHP</span>
                                </div>
                                <a v-if="project.link" :href="project.link" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                                    View <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-20 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h3 class="text-4xl font-bold text-gray-900 mb-4">Skills & Expertise</h3>
                <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mb-12"></div>
                
                <div v-if="skills.length" class="grid md:grid-cols-2 gap-8">
                    <div v-for="skill in skills" :key="skill.id" class="animate-fade-in">
                        <div class="flex justify-between items-center mb-2">
                            <h4 class="font-semibold text-gray-900">{{ skill.name }}</h4>
                            <span class="text-sm font-bold text-blue-600">{{ skill.level }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div class="skill-bar h-full rounded-full" :style="{ width: skill.level + '%' }"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-gradient-to-br from-blue-50 to-purple-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h3 class="text-4xl font-bold text-gray-900 mb-4">Get In Touch</h3>
                <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mb-12"></div>
                
                <div class="grid md:grid-cols-2 gap-12">
                    <div>
                        <p class="text-lg text-gray-700 mb-8">Have a project in mind? I'd love to hear from you. Drop me a message and I'll get back to you as soon as possible.</p>
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Email</h4>
                                    <p class="text-gray-600"><a href="mailto:hello@nahid.dev" class="text-blue-600 hover:underline">hello@nahid.dev</a></p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Phone</h4>
                                    <p class="text-gray-600">+1 (555) 123-4567</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Location</h4>
                                    <p class="text-gray-600">San Francisco, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <form @submit.prevent="sendMessage">
                            <div class="mb-6">
                                <label class="block text-gray-900 font-semibold mb-2">Name</label>
                                <input v-model="form.name" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Your name" required>
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-900 font-semibold mb-2">Email</label>
                                <input v-model="form.email" type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="your@email.com" required>
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-900 font-semibold mb-2">Subject</label>
                                <input v-model="form.subject" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Project inquiry">
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-900 font-semibold mb-2">Message</label>
                                <textarea v-model="form.message" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 resize-none" rows="5" placeholder="Your message..." required></textarea>
                            </div>
                            <button type="submit" :disabled="sending" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold py-3 rounded-lg hover:opacity-90 transition disabled:opacity-50">
                                <span v-if="!sending">Send Message</span>
                                <span v-else><i class="fas fa-spinner fa-spin mr-2"></i>Sending...</span>
                            </button>
                            <div v-if="successMessage" class="mt-4 p-4 bg-green-100 text-green-800 rounded-lg">{{ successMessage }}</div>
                            <div v-if="errorMessage" class="mt-4 p-4 bg-red-100 text-red-800 rounded-lg">{{ errorMessage }}</div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-8 mb-8">
                    <div>
                        <h4 class="text-xl font-bold mb-4">Nahid</h4>
                        <p class="text-gray-400">Full-stack developer crafting digital experiences</p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Quick Links</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="#about" class="hover:text-white transition">About</a></li>
                            <li><a href="#projects" class="hover:text-white transition">Projects</a></li>
                            <li><a href="#skills" class="hover:text-white transition">Skills</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Follow</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="#" class="hover:text-white transition">GitHub</a></li>
                            <li><a href="#" class="hover:text-white transition">LinkedIn</a></li>
                            <li><a href="#" class="hover:text-white transition">Twitter</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Contact</h4>
                        <p class="text-gray-400">hello@nahid.dev</p>
                        <p class="text-gray-400">+1 (555) 123-4567</p>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                    <p>&copy; 2025 Nahid's Portfolio. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        const { createApp } = Vue;

        createApp({
            data() {
                return {
                    about: null,
                    projects: [],
                    skills: [],
                    form: {
                        name: '',
                        email: '',
                        subject: '',
                        message: ''
                    },
                    sending: false,
                    successMessage: '',
                    errorMessage: ''
                }
            },
            mounted() {
                this.fetchData();
            },
            methods: {
                async fetchData() {
                    try {
                        const apiBase = 'http://127.0.0.1:8000/api';
                        
                        const aboutRes = await fetch(`${apiBase}/about`);
                        const aboutData = await aboutRes.json();
                        this.about = Array.isArray(aboutData) ? aboutData[0] : aboutData;

                        const projectsRes = await fetch(`${apiBase}/projects`);
                        this.projects = await projectsRes.json();

                        const skillsRes = await fetch(`${apiBase}/skills`);
                        this.skills = await skillsRes.json();
                    } catch (error) {
                        console.error('Error fetching data:', error);
                        this.errorMessage = 'Failed to load portfolio data';
                    }
                },
                async sendMessage() {
                    if (!this.form.name || !this.form.email || !this.form.message) {
                        this.errorMessage = 'Please fill in all required fields';
                        return;
                    }

                    this.sending = true;
                    this.errorMessage = '';
                    this.successMessage = '';

                    try {
                        const response = await fetch('http://127.0.0.1:8000/api/contact-messages', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify(this.form)
                        });

                        if (response.ok) {
                            this.successMessage = 'Message sent successfully! I\'ll get back to you soon.';
                            this.form = { name: '', email: '', subject: '', message: '' };
                            setTimeout(() => {
                                this.successMessage = '';
                            }, 5000);
                        } else {
                            const errorData = await response.json();
                            this.errorMessage = errorData.message || 'Failed to send message';
                        }
                    } catch (error) {
                        console.error('Error sending message:', error);
                        this.errorMessage = 'An error occurred while sending your message';
                    } finally {
                        this.sending = false;
                    }
                }
            }
        }).mount('#app');
    </script>
</body>
</html>
