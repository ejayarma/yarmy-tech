<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 - Page Not Found | Yarmy Technologies</title>

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
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
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
    </style>
</head>

<body>
    <div class="glow"></div>

    <div class="container">
        <!-- SVG Illustration -->
        <svg class="illustration" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Background Circle -->
            <circle cx="200" cy="150" r="120" fill="var(--muted)" opacity="0.3" />

            <!-- Astronaut Helmet -->
            <ellipse cx="200" cy="140" rx="60" ry="65" fill="var(--primary)" opacity="0.2" />
            <ellipse cx="200" cy="140" rx="50" ry="55" fill="var(--background)"
                stroke="var(--primary)" stroke-width="3" />

            <!-- Visor -->
            <ellipse cx="200" cy="135" rx="35" ry="30" fill="var(--accent)" opacity="0.3" />
            <ellipse cx="200" cy="135" rx="30" ry="25" fill="var(--accent)" opacity="0.5" />

            <!-- Reflection on visor -->
            <ellipse cx="190" cy="130" rx="10" ry="8" fill="white" opacity="0.6" />

            <!-- Antenna -->
            <line x1="200" y1="80" x2="200" y2="50" stroke="var(--primary)" stroke-width="3"
                stroke-linecap="round" />
            <circle cx="200" cy="50" r="5" fill="var(--accent)">
                <animate attributeName="opacity" values="1;0.3;1" dur="2s" repeatCount="indefinite" />
            </circle>

            <!-- Body -->
            <rect x="160" y="180" width="80" height="60" rx="10" fill="var(--primary)" opacity="0.2" />
            <rect x="165" y="185" width="70" height="50" rx="8" fill="var(--background)"
                stroke="var(--primary)" stroke-width="3" />

            <!-- Control Panel -->
            <rect x="180" y="200" width="40" height="20" rx="3" fill="var(--muted)" />
            <circle cx="190" cy="210" r="3" fill="var(--accent)" />
            <circle cx="200" cy="210" r="3" fill="var(--primary)" />
            <circle cx="210" cy="210" r="3" fill="var(--accent)" />

            <!-- Stars -->
            <circle cx="80" cy="60" r="2" fill="var(--accent)" opacity="0.6">
                <animate attributeName="opacity" values="0.6;1;0.6" dur="3s" repeatCount="indefinite" />
            </circle>
            <circle cx="320" cy="80" r="2" fill="var(--accent)" opacity="0.6">
                <animate attributeName="opacity" values="1;0.6;1" dur="2.5s" repeatCount="indefinite" />
            </circle>
            <circle cx="100" cy="200" r="2" fill="var(--accent)" opacity="0.6">
                <animate attributeName="opacity" values="0.6;1;0.6" dur="2s" repeatCount="indefinite" />
            </circle>
            <circle cx="300" cy="220" r="2" fill="var(--accent)" opacity="0.6">
                <animate attributeName="opacity" values="1;0.6;1" dur="3.5s" repeatCount="indefinite" />
            </circle>
            <circle cx="150" cy="50" r="1.5" fill="var(--accent)" opacity="0.4" />
            <circle cx="250" cy="50" r="1.5" fill="var(--accent)" opacity="0.4" />
            <circle cx="350" cy="150" r="1.5" fill="var(--accent)" opacity="0.4" />
            <circle cx="50" cy="150" r="1.5" fill="var(--accent)" opacity="0.4" />

            <!-- Planet in background -->
            <circle cx="320" cy="200" r="30" fill="var(--primary)" opacity="0.1" />
            <circle cx="320" cy="200" r="25" fill="var(--primary)" opacity="0.05" />
        </svg>

        <div class="error-code">404</div>
        <h1>Lost in Space</h1>
        <p>Oops! The page you're looking for has drifted into the void. Let's get you back on track.</p>

        <div class="actions">
            <a href="/" class="btn btn-primary">Go Home</a>
            <a href="javascript:history.back()" class="btn btn-secondary">Go Back</a>
        </div>
    </div>
</body>

</html>
