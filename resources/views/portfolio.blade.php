<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md. Nahid Hasan - AI & ML Research Enthusiast</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2.47/dist/vue.global.prod.js"></script>
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
<body class="bg-gray-50">
    <div>
        <!-- Navigation -->
        <nav class="bg-white shadow-lg sticky top-0 z-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Md. Nahid Hasan</h1>
                    </div>
                    <div class="hidden md:flex space-x-8">
                        <a href="#about" class="text-gray-700 hover:text-blue-600 transition">About</a>
                        <a href="#projects" class="text-gray-700 hover:text-blue-600 transition">Projects</a>
                        <a href="#education" class="text-gray-700 hover:text-blue-600 transition">Education</a> {{-- NEW LINK --}}
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
                        <h2 class="text-5xl md:text-6xl font-bold mb-6">Hi, I'm Md. Nahid Hasan</h2>
                        <p class="text-xl text-gray-100 mb-8">AI & ML Research Enthusiast | Flutter Developer | Passionate about Healthcare Technology & Data Privacy</p>
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
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">{{ $about->bio ?? 'Full-stack developer passionate about creating beautiful web applications.' }}</p>
                        <div class="grid grid-cols-2 gap-6 mt-8">
                            <div class="bg-blue-50 p-6 rounded-lg">
                                <i class="fas fa-map-marker-alt text-3xl text-blue-600 mb-3"></i>
                                <h4 class="font-semibold text-gray-900">Location</h4>
                                <p class="text-gray-600">{{ $about->location ?? 'San Francisco, USA' }}</p>
                            </div>
                            <div class="bg-purple-50 p-6 rounded-lg">
                                <i class="fas fa-envelope text-3xl text-purple-600 mb-3"></i>
                                <h4 class="font-semibold text-gray-900">Email</h4>
                                <p class="text-gray-600"><a href="mailto:{{ $about->email ?? 'nahid.cse@diu.edu.bd' }}" class="text-purple-600 hover:underline">{{ $about->email ?? 'nahid.cse@diu.edu.bd' }}</a></p>
                            </div>
                        </div>
                        <div class="mt-8">
                            <h4 class="font-semibold text-gray-900 mb-4">Connect With Me</h4>
                            <div class="flex gap-4">
                                <a href="https://github.com/nahid114" target="_blank" class="bg-gray-900 text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-800 transition flex items-center gap-2">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-blue-100 to-purple-100 p-8 rounded-lg h-fit">
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Quick Facts</h4>
                        <ul class="space-y-3 text-gray-700">
                            <li><i class="fas fa-check text-green-500 mr-3"></i>AI & ML Research Enthusiast</li>
                            <li><i class="fas fa-check text-green-500 mr-3"></i>Flutter Developer</li>
                            <li><i class="fas fa-check text-green-500 mr-3"></i>Published Researcher (IEEE)</li>
                            <li><i class="fas fa-check text-green-500 mr-3"></i>Healthcare Technology Focus</li>
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
                    @forelse($projects as $project)
                    <div class="bg-white rounded-lg overflow-hidden card-hover shadow-md animate-fade-in">
                        <div class="h-48 bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                            <i class="fas fa-project-diagram text-6xl text-white opacity-50"></i>
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">{{ $project->title }}</h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $project->description }}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex gap-2">
                                    <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Web</span>
                                    <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">PHP</span>
                                </div>
                                @if($project->link)
                                <a href="{{ $project->link }}" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                                    View <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-gray-600">No projects yet.</p>
                    @endforelse
                </div>
            </div>
        </section>

        {{-- ========================================================= --}}
        {{-- NEW: Include Education Section (Added between Projects and Skills) --}}
        {{-- ========================================================= --}}
        <div id="education" class="py-20 bg-gray-900">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                {{-- NOTE: Since this is a Blade file, we use @include to pull the PHP/Blade partial --}}
                @include('partials.education') 
            </div>
        </div>
        {{-- ========================================================= --}}


        <!-- Skills Section -->
        <section id="skills" class="py-20 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h3 class="text-4xl font-bold text-gray-900 mb-4">Skills & Expertise</h3>
                <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mb-12"></div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    @forelse($skills as $skill)
                    <div class="animate-fade-in">
                        <div class="flex justify-between items-center mb-2">
                            <h4 class="font-semibold text-gray-900">{{ $skill->name }}</h4>
                            <span class="text-sm font-bold text-blue-600">{{ $skill->level }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div class="skill-bar h-full rounded-full" style="width: {{ $skill->level }}%"></div>
                        </div>
                    </div>
                    @empty
                    <p class="text-gray-600">No skills added yet.</p>
                    @endforelse
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
                            <div v-if="successMessage" class="mt-4 p-4 bg-green-100 text-green-800 rounded-lg">@{{ successMessage }}</div>
                            <div v-if="errorMessage" class="mt-4 p-4 bg-red-100 text-red-800 rounded-lg">@{{ errorMessage }}</div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education" class="py-20 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h3 class="text-4xl font-bold text-gray-900 mb-4">Education</h3>
                <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mb-12"></div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-lg card-hover animate-fade-in">
                        <div class="flex items-start gap-4">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-graduation-cap text-2xl text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold text-gray-900">Bachelor's Degree</h4>
                                <p class="text-blue-600 font-semibold">Computer Science</p>
                                <p class="text-gray-600 mt-2">University of California</p>
                                <p class="text-sm text-gray-500 mt-1">Graduated: May 2020</p>
                                <p class="text-gray-700 mt-4">GPA: 3.8/4.0 - Summa Cum Laude</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-lg card-hover animate-fade-in">
                        <div class="flex items-start gap-4">
                            <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-certificate text-2xl text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold text-gray-900">Professional Certifications</h4>
                                <p class="text-purple-600 font-semibold">AWS Certified Solutions Architect</p>
                                <p class="text-gray-600 mt-2">Google Cloud Professional Developer</p>
                                <p class="text-sm text-gray-500 mt-4">Certified: 2023-2025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 bg-gray-50 p-8 rounded-lg">
                    <h4 class="text-xl font-bold text-gray-900 mb-6">Coursework & Specializations</h4>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="text-gray-700">Data Structures & Algorithms</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="text-gray-700">Web Development</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="text-gray-700">Database Design</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="text-gray-700">Machine Learning</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="text-gray-700">Cloud Computing</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="text-gray-700">DevOps & Deployment</span>
                        </div>
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
                            <li><a href="#education" class="hover:text-white transition">Education</a></li> {{-- NEW LINK --}}
                            <li><a href="#skills" class="hover:text-white transition">Skills</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Follow</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="https://github.com/nahid114" target="_blank" class="hover:text-white transition">GitHub</a></li>
                            <li><a href="#" class="hover:text-white transition">LinkedIn</a></li>
                            <li><a href="#" class="hover:text-white transition">Twitter</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Contact</h4>
                        <p class="text-gray-400">{{ $about->email ?? 'nahid.cse@diu.edu.bd' }}</p>
                        <p class="text-gray-400">{{ $about->location ?? 'Dhaka, Bangladesh' }}</p>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                    <p>&copy; 2025 Md. Nahid Hasan. All rights reserved.</p>
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
                    // --- NEW STATE: Education Data ---
                    educations: [], 
                    // ---------------------------------
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
                        
                        // Education data is passed via Blade and is rendered outside the Vue component.
                        // If it were a Vue component, we'd fetch it here.
                        
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