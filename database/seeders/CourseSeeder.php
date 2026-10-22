<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate existing data to prevent duplicates on multiple runs
        Course::truncate();

        $courses = [
            [
                'title' => 'Fullstack Web Development: Laravel 11 & Vue.js 3',
                'instructor' => 'Sandhika Galih, S.T., M.Kom.',
                'duration' => '24 Jam Video (32 Modul)',
                'image' => 'course-laravel.svg',
                'price' => 350000,
                'category' => 'Web Development',
                'description' => 'Pelajari arsitektur web modern dari nol hingga mahir. Kursus ini membahas routing, Blade template, Eloquent ORM, RESTful API, authentication Sanctum, komponen reaktif Vue.js 3, Inertia.js, serta integrasi Tailwind CSS untuk portofolio siap kerja.',
            ],
            [
                'title' => 'Pemrograman Python Modern: Dari Dasar ke Mahir',
                'instructor' => 'Eko Kurniawan Khannedy, S.Kom.',
                'duration' => '20 Jam Video (28 Modul)',
                'image' => 'course-python.svg',
                'price' => 250000,
                'category' => 'Programming',
                'description' => 'Kuasai konsep fundamental logika pemrograman komputer menggunakan Python. Mulai dari variabel, tipe data, branching, looping, function, Object-Oriented Programming (OOP), file handling, virtual environment, hingga otomatisasi tugas sehari-hari.',
            ],
            [
                'title' => 'UI/UX Design Masterclass: Figma & Design System',
                'instructor' => 'Dwi Febrianto, S.Ds.',
                'duration' => '16 Jam Video (24 Modul)',
                'image' => 'course-uiux.svg',
                'price' => 280000,
                'category' => 'Design',
                'description' => 'Panduan komprehensif mendesain antarmuka aplikasi digital yang estetis dan berpusat pada pengguna (User-Centered Design). Pelajari user persona, wireframing, interactive prototyping, auto layout, komponen varian, token warna, dan pembuatan design system berskala industri.',
            ],
            [
                'title' => 'React 19 & Next.js 15: Fullstack Enterprise Apps',
                'instructor' => 'Rizky Ramadhan, S.Kom.',
                'duration' => '30 Jam Video (40 Modul)',
                'image' => 'course-react.svg',
                'price' => 420000,
                'category' => 'Web Development',
                'description' => 'Tingkatkan keterampilan frontend Anda ke tingkat profesional. Pelajari React Server Components, App Router, Server Actions, TypeScript, TanStack Query, optimasi SEO, SSR (Server-Side Rendering), dan deployment performa tinggi ke Vercel atau AWS Cloud.',
            ],
            [
                'title' => 'Data Science & AI Machine Learning dengan Python',
                'instructor' => 'Dr. Siti Nurhaliza, M.Cs.',
                'duration' => '36 Jam Video (48 Modul)',
                'image' => 'course-datascience.svg',
                'price' => 499000,
                'category' => 'Data Science',
                'description' => 'Pelajari siklus hidup lengkap sains data. Mulai dari data wrangling dengan Pandas & NumPy, visualisasi data interaktif dengan Matplotlib & Seaborn, feature engineering, pemodelan machine learning (regresi, klasifikasi, clustering) dengan Scikit-Learn, hingga evaluasi akurasi model.',
            ],
            [
                'title' => 'Cyber Security Fundamentals & Ethical Hacking',
                'instructor' => 'Budi Santoso, CISA, CEH',
                'duration' => '22 Jam Video (30 Modul)',
                'image' => 'course-cybersecurity.svg',
                'price' => 390000,
                'category' => 'Cyber Security',
                'description' => 'Pahami cara mengamankan infrastruktur dan aplikasi web dari ancaman siber. Materi meliputi network security scanning (Nmap, Wireshark), eksploitasi OWASP Top 10 vulnerabilities (SQLi, XSS, CSRF), kriptografi modern, ethical hacking methodology, dan audit keamanan sistem.',
            ],
            [
                'title' => 'Flutter & Dart: Bangun Aplikasi Multiplatform',
                'instructor' => 'Fajar Nugraha, S.Kom.',
                'duration' => '28 Jam Video (35 Modul)',
                'image' => 'course-flutter.svg',
                'price' => 340000,
                'category' => 'Mobile Development',
                'description' => 'Kembangkan satu basis kode untuk aplikasi Android & iOS secara simultan. Pelajari widget composition, responsive UI design, navigasi multi-screen, state management modern (Bloc & Riverpod), integrasi REST API, SQLite lokal, dan push notifications Firebase.',
            ],
            [
                'title' => 'Cloud Computing AWS Practitioner & Docker DevOps',
                'instructor' => 'Afif Efendi, M.Kom.',
                'duration' => '25 Jam Video (32 Modul)',
                'image' => 'course-cloud.svg',
                'price' => 450000,
                'category' => 'Cloud & DevOps',
                'description' => 'Kuasai arsitektur infrastruktur awan Amazon Web Services (AWS) dan konsep DevOps modern. Pelajari komputasi EC2, VPC networking, storage S3, database RDS, containerization aplikasi menggunakan Docker, Docker Compose, dan pipeline otomatisasi CI/CD GitHub Actions.',
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
