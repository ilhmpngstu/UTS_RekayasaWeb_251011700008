<?php

$images = [
    [
        'filename' => 'course-laravel.svg',
        'title' => 'Laravel 11 & Vue.js',
        'subtitle' => 'Fullstack Web Development',
        'badge' => 'WEB DEV',
        'bg_start' => '#ff2d20',
        'bg_end' => '#800020',
        'icon' => '<path fill="white" d="M100 80 L180 35 L260 80 L260 170 L180 215 L100 170 Z" fill-opacity="0.15" stroke="white" stroke-width="4"/><path fill="white" d="M140 100 L180 75 L220 100 L220 150 L180 175 L140 150 Z" fill-opacity="0.3"/><circle cx="180" cy="125" r="22" fill="#ffffff"/>'
    ],
    [
        'filename' => 'course-python.svg',
        'title' => 'Python Modern Programming',
        'subtitle' => 'Dasar Logika Hingga OOP',
        'badge' => 'PROGRAMMING',
        'bg_start' => '#3776ab',
        'bg_end' => '#ffd438',
        'icon' => '<rect x="110" y="70" width="140" height="110" rx="20" fill="white" fill-opacity="0.2" stroke="white" stroke-width="4"/><circle cx="150" cy="110" r="14" fill="#ffffff"/><circle cx="210" cy="140" r="14" fill="#ffffff"/>'
    ],
    [
        'filename' => 'course-uiux.svg',
        'title' => 'UI/UX Design Masterclass',
        'subtitle' => 'Figma & Design Systems',
        'badge' => 'DESIGN',
        'bg_start' => '#a259ff',
        'bg_end' => '#1abcfe',
        'icon' => '<rect x="110" y="65" width="60" height="60" rx="30" fill="#f24e1e"/><rect x="170" y="65" width="60" height="60" rx="30" fill="#ff7262"/><rect x="110" y="125" width="60" height="60" rx="30" fill="#a259ff"/><circle cx="200" cy="155" r="30" fill="#1abcfe"/>'
    ],
    [
        'filename' => 'course-react.svg',
        'title' => 'React 19 & Next.js 15',
        'subtitle' => 'Enterprise Architecture',
        'badge' => 'FRONTEND',
        'bg_start' => '#087ea4',
        'bg_end' => '#001e2b',
        'icon' => '<ellipse cx="180" cy="125" rx="70" ry="25" fill="none" stroke="#61dafb" stroke-width="4" transform="rotate(0 180 125)"/><ellipse cx="180" cy="125" rx="70" ry="25" fill="none" stroke="#61dafb" stroke-width="4" transform="rotate(60 180 125)"/><ellipse cx="180" cy="125" rx="70" ry="25" fill="none" stroke="#61dafb" stroke-width="4" transform="rotate(120 180 125)"/><circle cx="180" cy="125" r="14" fill="#61dafb"/>'
    ],
    [
        'filename' => 'course-datascience.svg',
        'title' => 'Data Science & Machine Learning',
        'subtitle' => 'Python, Pandas, & Scikit',
        'badge' => 'DATA SCIENCE',
        'bg_start' => '#0f766e',
        'bg_end' => '#042f2e',
        'icon' => '<rect x="115" y="130" width="22" height="50" rx="4" fill="#34d399"/><rect x="145" y="105" width="22" height="75" rx="4" fill="#38bdf8"/><rect x="175" y="80" width="22" height="100" rx="4" fill="#fbbf24"/><rect x="205" y="60" width="22" height="120" rx="4" fill="#f43f5e"/><path d="M126 125 Q160 95 216 55" stroke="white" stroke-width="4" fill="none"/>'
    ],
    [
        'filename' => 'course-cybersecurity.svg',
        'title' => 'Cyber Security & Ethical Hacking',
        'subtitle' => 'Defense & PenTesting',
        'badge' => 'SECURITY',
        'bg_start' => '#1e293b',
        'bg_end' => '#090d16',
        'icon' => '<path d="M180 60 L240 85 V140 C240 180 180 205 180 205 C180 205 120 180 120 140 V85 Z" fill="#22c55e" fill-opacity="0.2" stroke="#22c55e" stroke-width="4"/><path d="M165 130 H195 V160 H165 Z" fill="#22c55e"/><path d="M172 130 V120 A8 8 0 0 1 188 120 V130" stroke="#22c55e" stroke-width="3" fill="none"/>'
    ],
    [
        'filename' => 'course-flutter.svg',
        'title' => 'Flutter & Dart Mobile App',
        'subtitle' => 'Android & iOS Multiplatform',
        'badge' => 'MOBILE',
        'bg_start' => '#02569b',
        'bg_end' => '#012746',
        'icon' => '<path d="M130 140 L170 100 L230 100 L160 170 L230 240 L170 240 L130 200 L160 170 Z" fill="#54c5f8" transform="translate(10, -35) scale(0.85)"/><path d="M160 170 L195 135 L230 170 L195 205 Z" fill="#02569b" transform="translate(10, -35) scale(0.85)"/>'
    ],
    [
        'filename' => 'course-cloud.svg',
        'title' => 'Cloud Computing AWS & DevOps',
        'subtitle' => 'Docker, CI/CD, & Microservices',
        'badge' => 'CLOUD & DEVOPS',
        'bg_start' => '#ea580c',
        'bg_end' => '#431407',
        'icon' => '<path d="M140 155 C125 155 115 142 115 128 C115 115 125 103 140 103 C145 85 160 72 180 72 C202 72 220 88 223 110 C236 112 245 123 245 135 C245 149 234 160 220 160 Z" fill="white" fill-opacity="0.2" stroke="white" stroke-width="4"/><circle cx="180" cy="120" r="12" fill="#fb923c"/>'
    ],
];

foreach ($images as $img) {
    $svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 380" width="100%" height="100%">
  <defs>
    <linearGradient id="grad-{$img['badge']}" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="{$img['bg_start']}" />
      <stop offset="100%" stop-color="{$img['bg_end']}" />
    </linearGradient>
    <filter id="shadow" x="-10%" y="-10%" width="120%" height="120%">
      <feDropShadow dx="0" dy="6" stdDeviation="8" flood-opacity="0.3"/>
    </filter>
  </defs>

  <!-- Background -->
  <rect width="600" height="380" fill="url(#grad-{$img['badge']})"/>

  <!-- Subtle grid pattern -->
  <g opacity="0.06" stroke="#ffffff" stroke-width="1">
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
  <circle cx="530" cy="70" r="120" fill="white" fill-opacity="0.05"/>
  <circle cx="80" cy="320" r="90" fill="white" fill-opacity="0.04"/>

  <!-- Center Graphic Box -->
  <g transform="translate(120, 20)">
    {$img['icon']}
  </g>

  <!-- Category Badge -->
  <rect x="40" y="225" width="140" height="28" rx="14" fill="#ffffff" fill-opacity="0.25"/>
  <text x="110" y="244" fill="#ffffff" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="12" font-weight="700" letter-spacing="1.5" text-anchor="middle">{$img['badge']}</text>

  <!-- Title & Subtitle -->
  <text x="40" y="285" fill="#ffffff" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="24" font-weight="800">{$img['title']}</text>
  <text x="40" y="315" fill="#e2e8f0" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="15" font-weight="500">{$img['subtitle']}</text>

  <!-- Accent line -->
  <rect x="40" y="340" width="80" height="4" rx="2" fill="#fbbf24"/>
</svg>
SVG;

    file_put_contents(__DIR__ . '/../../public/assets/images/' . $img['filename'], $svg);
    echo "Generated: " . $img['filename'] . PHP_EOL;
}

// Generate UNPAM Logo SVG
$unpamSvg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%">
  <circle cx="100" cy="100" r="96" fill="#003366" stroke="#ffcc00" stroke-width="6"/>
  <circle cx="100" cy="100" r="82" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="4,4"/>
  <circle cx="100" cy="100" r="70" fill="#002244"/>
  <!-- Decorative Star & Flower Shape -->
  <polygon points="100,38 107,58 128,58 111,70 117,90 100,78 83,90 89,70 72,58 93,58" fill="#ffcc00"/>
  <!-- Book / Knowledge Shape -->
  <path d="M70 120 C85 110 95 112 100 118 C105 112 115 110 130 120 V145 C115 135 105 137 100 143 C95 137 85 135 70 145 Z" fill="#ffffff"/>
  <path d="M100 118 V143" stroke="#003366" stroke-width="2"/>
  <!-- University Arc Text -->
  <text x="100" y="172" fill="#ffcc00" font-family="'Arial Black', Arial, sans-serif" font-size="13" font-weight="bold" text-anchor="middle" letter-spacing="1">UNPAM</text>
  <text x="100" y="186" fill="#ffffff" font-family="Arial, sans-serif" font-size="8" font-weight="bold" text-anchor="middle">UNIVERSITAS PAMULANG</text>
</svg>
SVG;
file_put_contents(__DIR__ . '/../../public/assets/images/logo-unpam.svg', $unpamSvg);
echo "Generated: logo-unpam.svg" . PHP_EOL;

// Generate Yayasan Sasmita Jaya Logo SVG
$sasmitaSvg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%">
  <circle cx="100" cy="100" r="92" fill="#0d6efd" stroke="#ffc107" stroke-width="5"/>
  <path d="M100 35 L145 75 L130 135 L70 135 L55 75 Z" fill="#ffffff" opacity="0.9"/>
  <circle cx="100" cy="95" r="28" fill="#ffc107"/>
  <path d="M85 95 L95 105 L115 85" fill="none" stroke="#003366" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
  <text x="100" y="165" fill="#ffffff" font-family="Arial, sans-serif" font-size="11" font-weight="bold" text-anchor="middle">SASMITA JAYA</text>
</svg>
SVG;
file_put_contents(__DIR__ . '/../../public/assets/images/logo-sasmitajaya.svg', $sasmitaSvg);
echo "Generated: logo-sasmitajaya.svg" . PHP_EOL;

// Generate Hero decorative illustration SVG (Books & Laptop)
$heroIllusSvg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 280" width="100%" height="100%">
  <defs>
    <linearGradient id="laptopGrad" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#3b82f6"/>
      <stop offset="100%" stop-color="#1d4ed8"/>
    </linearGradient>
  </defs>
  <!-- Glow -->
  <circle cx="160" cy="140" r="110" fill="#3b82f6" opacity="0.1"/>
  <!-- Stacked Books below -->
  <rect x="50" y="210" width="220" height="24" rx="6" fill="#f59e0b"/>
  <rect x="60" y="214" width="200" height="16" fill="#fbbf24"/>
  <rect x="40" y="234" width="240" height="26" rx="6" fill="#10b981"/>
  <rect x="50" y="238" width="220" height="18" fill="#34d399"/>
  <!-- Laptop Base -->
  <rect x="70" y="185" width="180" height="16" rx="4" fill="#64748b"/>
  <rect x="135" y="185" width="50" height="4" rx="2" fill="#94a3b8"/>
  <!-- Laptop Screen -->
  <rect x="85" y="65" width="150" height="110" rx="8" fill="#1e293b" stroke="#475569" stroke-width="3"/>
  <rect x="95" y="75" width="130" height="90" rx="4" fill="url(#laptopGrad)"/>
  <!-- Screen content: code/charts -->
  <rect x="105" y="85" width="70" height="6" rx="3" fill="#ffffff" opacity="0.9"/>
  <rect x="105" y="97" width="50" height="6" rx="3" fill="#ffffff" opacity="0.6"/>
  <rect x="105" y="109" width="90" height="6" rx="3" fill="#ffffff" opacity="0.6"/>
  <circle cx="195" cy="140" r="14" fill="#fbbf24"/>
  <path d="M190 140 L198 135 V145 Z" fill="#1e293b"/>
  <!-- Graduation Cap Floating -->
  <polygon points="160,25 210,40 160,55 110,40" fill="#1e293b"/>
  <rect x="140" y="47" width="40" height="14" rx="4" fill="#0f172a"/>
  <circle cx="160" cy="38" r="4" fill="#fbbf24"/>
  <path d="M160 40 Q215 50 215 65" stroke="#fbbf24" stroke-width="2" fill="none"/>
</svg>
SVG;
file_put_contents(__DIR__ . '/../../public/assets/images/hero-illustration.svg', $heroIllusSvg);
echo "Generated: hero-illustration.svg" . PHP_EOL;
