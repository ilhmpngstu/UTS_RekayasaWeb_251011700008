<?php

$images = [
    [
        'id' => 'laravel',
        'filename' => 'course-laravel.svg',
        'title' => 'Laravel 11 &amp; Vue.js 3',
        'subtitle' => 'Fullstack Web Development',
        'badge' => 'WEB DEV',
        'bg_start' => '#ff2d20',
        'bg_end' => '#b91c1c',
        'icon' => '<path fill="white" d="M100 80 L180 35 L260 80 L260 170 L180 215 L100 170 Z" fill-opacity="0.25" stroke="white" stroke-width="4"/><path fill="white" d="M140 100 L180 75 L220 100 L220 150 L180 175 L140 150 Z" fill-opacity="0.45"/><circle cx="180" cy="125" r="22" fill="#ffffff"/>'
    ],
    [
        'id' => 'python',
        'filename' => 'course-python.svg',
        'title' => 'Python Modern Programming',
        'subtitle' => 'Dasar Logika Hingga OOP',
        'badge' => 'PROGRAMMING',
        'bg_start' => '#0284c7',
        'bg_end' => '#1e3a8a',
        'icon' => '<rect x="110" y="70" width="140" height="110" rx="24" fill="white" fill-opacity="0.2" stroke="white" stroke-width="4"/><circle cx="145" cy="105" r="14" fill="#fbbf24"/><circle cx="215" cy="145" r="14" fill="#38bdf8"/><path d="M130 145 H190 V155 H130 Z" fill="#ffffff" opacity="0.6"/>'
    ],
    [
        'id' => 'uiux',
        'filename' => 'course-uiux.svg',
        'title' => 'UI/UX Design Masterclass',
        'subtitle' => 'Figma &amp; Design Systems',
        'badge' => 'DESIGN',
        'bg_start' => '#8b5cf6',
        'bg_end' => '#4c1d95',
        'icon' => '<rect x="110" y="65" width="55" height="55" rx="27" fill="#f43f5e"/><rect x="165" y="65" width="55" height="55" rx="27" fill="#fb923c"/><rect x="110" y="120" width="55" height="55" rx="27" fill="#a855f7"/><circle cx="192" cy="147" r="27" fill="#06b6d4"/>'
    ],
    [
        'id' => 'react',
        'filename' => 'course-react.svg',
        'title' => 'React 19 &amp; Next.js 15',
        'subtitle' => 'Enterprise Architecture',
        'badge' => 'FRONTEND',
        'bg_start' => '#0284c7',
        'bg_end' => '#0f172a',
        'icon' => '<ellipse cx="180" cy="125" rx="75" ry="26" fill="none" stroke="#67e8f9" stroke-width="4"/><ellipse cx="180" cy="125" rx="75" ry="26" fill="none" stroke="#67e8f9" stroke-width="4" transform="rotate(60 180 125)"/><ellipse cx="180" cy="125" rx="75" ry="26" fill="none" stroke="#67e8f9" stroke-width="4" transform="rotate(120 180 125)"/><circle cx="180" cy="125" r="15" fill="#67e8f9"/>'
    ],
    [
        'id' => 'datascience',
        'filename' => 'course-datascience.svg',
        'title' => 'Data Science &amp; Machine Learning',
        'subtitle' => 'Python, Pandas, &amp; Scikit-Learn',
        'badge' => 'DATA SCIENCE',
        'bg_start' => '#059669',
        'bg_end' => '#064e3b',
        'icon' => '<rect x="110" y="130" width="22" height="50" rx="6" fill="#34d399"/><rect x="142" y="105" width="22" height="75" rx="6" fill="#38bdf8"/><rect x="174" y="80" width="22" height="100" rx="6" fill="#fbbf24"/><rect x="206" y="55" width="22" height="125" rx="6" fill="#f43f5e"/><path d="M121 125 Q160 90 217 50" stroke="white" stroke-width="5" fill="none" stroke-linecap="round"/>'
    ],
    [
        'id' => 'cybersecurity',
        'filename' => 'course-cybersecurity.svg',
        'title' => 'Cyber Security &amp; Ethical Hacking',
        'subtitle' => 'Defense &amp; PenTesting',
        'badge' => 'SECURITY',
        'bg_start' => '#334155',
        'bg_end' => '#0f172a',
        'icon' => '<path d="M180 55 L245 82 V138 C245 180 180 210 180 210 C180 210 115 180 115 138 V82 Z" fill="#22c55e" fill-opacity="0.25" stroke="#22c55e" stroke-width="4"/><path d="M162 130 H198 V165 H162 Z" fill="#22c55e" rx="4"/><path d="M170 130 V118 A10 10 0 0 1 190 118 V130" stroke="#22c55e" stroke-width="4" fill="none"/>'
    ],
    [
        'id' => 'flutter',
        'filename' => 'course-flutter.svg',
        'title' => 'Flutter &amp; Dart Mobile App',
        'subtitle' => 'Android &amp; iOS Multiplatform',
        'badge' => 'MOBILE',
        'bg_start' => '#0284c7',
        'bg_end' => '#0369a1',
        'icon' => '<path d="M130 140 L170 100 L230 100 L160 170 L230 240 L170 240 L130 200 L160 170 Z" fill="#38bdf8" transform="translate(10, -35) scale(0.85)"/><path d="M160 170 L195 135 L230 170 L195 205 Z" fill="#ffffff" transform="translate(10, -35) scale(0.85)"/>'
    ],
    [
        'id' => 'cloud',
        'filename' => 'course-cloud.svg',
        'title' => 'Cloud Computing AWS &amp; DevOps',
        'subtitle' => 'Docker, CI/CD, &amp; Microservices',
        'badge' => 'CLOUD &amp; DEVOPS',
        'bg_start' => '#ea580c',
        'bg_end' => '#9a3412',
        'icon' => '<path d="M135 155 C120 155 110 142 110 128 C110 114 120 102 135 102 C140 82 158 68 180 68 C204 68 222 84 226 108 C238 110 248 122 248 135 C248 150 236 155 224 155 Z" fill="white" fill-opacity="0.3" stroke="white" stroke-width="4"/><circle cx="180" cy="118" r="14" fill="#fde047"/>'
    ],
];

foreach ($images as $img) {
    $svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 380" width="100%" height="100%">
  <defs>
    <linearGradient id="grad-{$img['id']}" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="{$img['bg_start']}" />
      <stop offset="100%" stop-color="{$img['bg_end']}" />
    </linearGradient>
  </defs>

  <!-- Background -->
  <rect width="600" height="380" fill="url(#grad-{$img['id']})"/>

  <!-- Subtle grid pattern -->
  <g opacity="0.08" stroke="#ffffff" stroke-width="1.5">
    <line x1="0" y1="60" x2="600" y2="60"/>
    <line x1="0" y1="120" x2="600" y2="120"/>
    <line x1="0" y1="180" x2="600" y2="180"/>
    <line x1="0" y1="240" x2="600" y2="240"/>
    <line x1="0" y1="300" x2="600" y2="300"/>
    <line x1="100" y1="0" x2="100" y2="380"/>
    <line x1="200" y1="0" x2="200" y2="380"/>
    <line x1="300" y1="0" x2="300" y2="380"/>
    <line x1="400" y1="0" x2="400" y2="380"/>
    <line x1="500" y1="0" x2="500" y2="380"/>
  </g>

  <!-- Decorative circles -->
  <circle cx="530" cy="70" r="130" fill="white" fill-opacity="0.08"/>
  <circle cx="70" cy="310" r="90" fill="white" fill-opacity="0.06"/>

  <!-- Center Graphic Icon -->
  <g transform="translate(120, 15)">
    {$img['icon']}
  </g>

  <!-- Category Badge -->
  <rect x="40" y="222" width="150" height="30" rx="15" fill="#ffffff" fill-opacity="0.25"/>
  <text x="115" y="242" fill="#ffffff" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="12" font-weight="700" letter-spacing="1.5" text-anchor="middle">{$img['badge']}</text>

  <!-- Title &amp; Subtitle -->
  <text x="40" y="284" fill="#ffffff" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="24" font-weight="800">{$img['title']}</text>
  <text x="40" y="315" fill="#f1f5f9" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="15" font-weight="500">{$img['subtitle']}</text>

  <!-- Accent line -->
  <rect x="40" y="338" width="90" height="4" rx="2" fill="#fbbf24"/>
</svg>
SVG;

    file_put_contents(__DIR__ . '/../../public/assets/images/' . $img['filename'], $svg);
    echo "Generated: " . $img['filename'] . PHP_EOL;
}
