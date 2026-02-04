<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>401 - Unauthorized | Yarmy Technologies</title>

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

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.3;
            }
        }
    </style>
</head>

<body>
    <div class="glow"></div>

    <div class="container">
        <!-- SVG Illustration - Key/Login Required -->
        <svg class="illustration" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Background -->
            <circle cx="200" cy="150" r="120" fill="var(--muted)" opacity="0.3" />

            <!-- Door -->
            <rect x="150" y="90" width="100" height="150" rx="8" fill="var(--primary)" opacity="0.2" />
            <rect x="155" y="95" width="90" height="140" rx="6" fill="var(--background)"
                stroke="var(--primary)" stroke-width="3" />

            <!-- Door Handle -->
            <circle cx="220" cy="165" r="8" fill="var(--muted)" stroke="var(--primary)" stroke-width="2" />
            <rect x="220" y="163" width="15" height="4" rx="2" fill="var(--primary)" />

            <!-- Keyhole -->
            <circle cx="220" cy="165" r="4" fill="var(--primary)" />
            <path d="M 220 165 L 220 172" stroke="var(--primary)" stroke-width="3" stroke-linecap="round" />

            <!-- Door Panels -->
            <rect x="165" y="105" width="70" height="50" rx="3" fill="none" stroke="var(--border)"
                stroke-width="2" />
            <rect x="165" y="165" width="70" height="60" rx="3" fill="none" stroke="var(--border)"
                stroke-width="2" />

            <!-- Key (floating) -->
            <g transform="translate(130, 140)" style="animation: float 3s ease-in-out infinite;">
                <!-- Key head -->
                <circle cx="0" cy="0" r="12" fill="none" stroke="var(--accent)" stroke-width="3" />
                <circle cx="0" cy="0" r="5" fill="var(--accent)" />

                <!-- Key shaft -->
                <rect x="8" y="-2" width="30" height="4" rx="2" fill="var(--accent)" />

                <!-- Key teeth -->
                <rect x="32" y="-6" width="3" height="8" rx="1" fill="var(--accent)" />
                <rect x="36" y="-4" width="3" height="6" rx="1" fill="var(--accent)" />
                <rect x="40" y="-6" width="3" height="8" rx="1" fill="var(--accent)" />
            </g>

            @keyframes float {
            0%, 100% {
            transform: translateY(0px) rotate(0deg);
            }
            50% {
            transform: translateY(-15px) rotate(5deg);
            }
            }

            <!-- Question Marks -->
            <text x="280" y="130" font-size="20" fill="var(--muted-foreground)" opacity="0.4"
                style="animation: blink 2s ease-in-out infinite;">?</text>
            <text x="100" y="180" font-size="20" fill="var(--muted-foreground)" opacity="0.4"
                style="animation: blink 2.5s ease-in-out infinite;">?</text>

            <!-- Login Indicator -->
            <g>
                <rect x="170" y="50" width="60" height="25" rx="12" fill="var(--muted)" />
                <circle cx="185" cy="62.5" r="6" fill="none" stroke="var(--primary)" stroke-width="2" />
                <circle cx="185" cy="60" r="2" fill="var(--primary)" />
                <path d="M 185 62 L 185 65 M 183 65 L 187 65" stroke="var(--primary)" stroke-width="1.5"
                    stroke-linecap="round" />
                <text x="200" y="67" font-size="10" fill="var(--primary)" font-weight="500">LOGIN</text>
            </g>

            <!-- Lock Icon on Door -->
            <g transform="translate(200, 120)">
                <rect x="-6" y="2" width="12" height="10" rx="2" fill="var(--primary)"
                    opacity="0.3" />
                <path d="M -4 2 L -4 -2 Q -4 -6 0 -6 Q 4 -6 4 -2 L 4 2" fill="none" stroke="var(--primary)"
                    stroke-width="2" opacity="0.3" />
            </g>
        </svg>

        <div class="error-code">401</div>
        <h1>Authentication Required</h1>
        <p>You need to be logged in to access this page. Please sign in with your credentials to continue.</p>

        <div class="actions">
            <a href="/login" class="btn btn-primary">Sign In</a>
            <a href="/" class="btn btn-secondary">Go Home</a>
        </div>
    </div>
</body>

</html>
