<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>503 - Service Unavailable | Yarmy Technologies</title>

    <style>
        :root {
            --background: hsl(0 0% 100%);
            --foreground: hsl(225 50% 10%);
            --primary: hsl(225 60% 20%);
            --primary-foreground: hsl(0 0% 98%);
            --muted: hsl(220 35% 95%);
            --muted-foreground: hsl(225 20% 45%);
            --accent: hsl(195 100% 50%);
            --border: hsl(220 30% 88%);
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --background: hsl(225 60% 8%);
                --foreground: hsl(195 100% 90%);
                --primary: hsl(195 100% 50%);
                --primary-foreground: hsl(225 60% 8%);
                --muted: hsl(225 45% 20%);
                --muted-foreground: hsl(195 60% 70%);
                --accent: hsl(195 100% 60%);
                --border: hsl(225 45% 22%);
            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: var(--background);
            color: var(--foreground);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .container {
            max-width: 48rem;
            width: 100%;
            text-align: center;
        }

        .illustration {
            width: 100%;
            max-width: 400px;
            height: auto;
            margin: 0 auto 2rem;
        }

        .error-code {
            font-size: clamp(4rem, 15vw, 8rem);
            font-weight: bold;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            line-height: 1;
        }

        h1 {
            font-size: clamp(1.5rem, 5vw, 2.5rem);
            font-weight: bold;
            margin-bottom: 1rem;
            color: var(--foreground);
        }

        p {
            font-size: clamp(1rem, 3vw, 1.25rem);
            color: var(--muted-foreground);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .actions {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
        }

        @media (min-width: 640px) {
            .actions {
                flex-direction: row;
                justify-content: center;
            }
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s;
            font-size: 1rem;
            width: 100%;
            max-width: 200px;
        }

        .btn-primary {
            background: var(--primary);
            color: var(--primary-foreground);
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: var(--muted);
            color: var(--foreground);
        }

        .btn-secondary:hover {
            opacity: 0.8;
            transform: translateY(-2px);
        }

        .glow {
            position: absolute;
            width: 300px;
            height: 300px;
            background: var(--accent);
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.1;
            z-index: -1;
            animation: pulse 4s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.1;
            }

            50% {
                transform: scale(1.2);
                opacity: 0.15;
            }
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            75% {
                transform: translateX(5px);
            }
        }
    </style>
</head>

<body>
    <div class="glow"></div>

    <div class="container">
        <!-- SVG Illustration - Maintenance/Tools -->
        <svg class="illustration" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Background -->
            <circle cx="200" cy="150" r="120" fill="var(--muted)" opacity="0.3" />

            <!-- Toolbox -->
            <rect x="140" y="160" width="120" height="80" rx="8" fill="var(--primary)" opacity="0.2" />
            <rect x="145" y="165" width="110" height="70" rx="6" fill="var(--background)"
                stroke="var(--primary)" stroke-width="3" />

            <!-- Toolbox Handle -->
            <path d="M 175 165 Q 175 145 200 145 Q 225 145 225 165" stroke="var(--primary)" stroke-width="3"
                fill="none" stroke-linecap="round" />

            <!-- Toolbox Latch -->
            <rect x="195" y="195" width="10" height="15" rx="2" fill="var(--accent)" />
            <circle cx="200" cy="202" r="3" fill="var(--background)" />

            <!-- Wrench (animated) -->
            <g style="animation: shake 2s ease-in-out infinite;">
                <rect x="100" y="90" width="8" height="60" rx="4" fill="var(--primary)" />
                <circle cx="104" cy="85" r="12" fill="none" stroke="var(--primary)" stroke-width="4" />
                <circle cx="104" cy="85" r="6" fill="var(--primary)" />
            </g>

            <!-- Screwdriver -->
            <g transform="rotate(30 280 120)">
                <rect x="276" y="80" width="8" height="50" rx="2" fill="var(--accent)" />
                <polygon points="280,75 275,80 285,80" fill="var(--primary)" />
                <rect x="277" y="130" width="6" height="20" rx="3" fill="var(--primary)" />
            </g>

            <!-- Gear 1 (spinning) -->
            <g style="transform-origin: 250px 100px; animation: spin 4s linear infinite;">
                <circle cx="250" cy="100" r="20" fill="none" stroke="var(--primary)" stroke-width="4" />
                <circle cx="250" cy="100" r="8" fill="var(--primary)" />
                <rect x="248" y="80" width="4" height="10" rx="2" fill="var(--primary)" />
                <rect x="248" y="110" width="4" height="10" rx="2" fill="var(--primary)" />
                <rect x="260" y="98" width="10" height="4" rx="2" fill="var(--primary)" />
                <rect x="230" y="98" width="10" height="4" rx="2" fill="var(--primary)" />
            </g>

            <!-- Gear 2 (spinning opposite) -->
            <g style="transform-origin: 150px 110px; animation: spin 3s linear infinite reverse;">
                <circle cx="150" cy="110" r="15" fill="none" stroke="var(--accent)" stroke-width="3" />
                <circle cx="150" cy="110" r="6" fill="var(--accent)" />
                <rect x="148" y="95" width="4" height="8" rx="2" fill="var(--accent)" />
                <rect x="148" y="117" width="4" height="8" rx="2" fill="var(--accent)" />
                <rect x="157" y="108" width="8" height="4" rx="2" fill="var(--accent)" />
                <rect x="135" y="108" width="8" height="4" rx="2" fill="var(--accent)" />
            </g>

            <!-- Sparks/Progress dots -->
            <circle cx="280" cy="180" r="3" fill="var(--accent)" opacity="0.8">
                <animate attributeName="opacity" values="0.8;0.2;0.8" dur="1.5s" repeatCount="indefinite" />
            </circle>
            <circle cx="120" cy="190" r="3" fill="var(--accent)" opacity="0.6">
                <animate attributeName="opacity" values="0.6;0.2;0.6" dur="1.8s" repeatCount="indefinite" />
            </circle>
            <circle cx="290" cy="120" r="2" fill="var(--accent)" opacity="0.7">
                <animate attributeName="opacity" values="0.7;0.2;0.7" dur="1.2s" repeatCount="indefinite" />
            </circle>
        </svg>

        <div class="error-code">503</div>
        <h1>Under Maintenance</h1>
        <p>We're currently performing some upgrades to serve you better. We'll be back online shortly!</p>

        <div class="actions">
            <a href="/" class="btn btn-primary">Try Again</a>
            <a href="mailto:hello@yarmy.tech" class="btn btn-secondary">Contact Us</a>
        </div>
    </div>
</body>

</html>
