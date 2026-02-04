<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>500 - Server Error | Yarmy Technologies</title>

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
            --destructive: hsl(0 84% 60%);
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
                --destructive: hsl(0 84% 60%);
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
            background: linear-gradient(135deg, var(--destructive) 0%, var(--primary) 100%);
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
            background: var(--destructive);
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.08;
            z-index: -1;
            animation: pulse 4s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.08;
            }

            50% {
                transform: scale(1.2);
                opacity: 0.12;
            }
        }

        @keyframes glitch {

            0%,
            100% {
                transform: translate(0);
            }

            20% {
                transform: translate(-2px, 2px);
            }

            40% {
                transform: translate(2px, -2px);
            }

            60% {
                transform: translate(-2px, -2px);
            }

            80% {
                transform: translate(2px, 2px);
            }
        }

        @keyframes spark {

            0%,
            100% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="glow"></div>

    <div class="container">
        <!-- SVG Illustration - Server/Circuit Error -->
        <svg class="illustration" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Background -->
            <circle cx="200" cy="150" r="120" fill="var(--muted)" opacity="0.3" />

            <!-- Server Rack -->
            <rect x="150" y="100" width="100" height="140" rx="8" fill="var(--primary)" opacity="0.2" />
            <rect x="155" y="105" width="90" height="130" rx="6" fill="var(--background)"
                stroke="var(--primary)" stroke-width="3" />

            <!-- Server Units -->
            <rect x="165" y="115" width="70" height="25" rx="3" fill="var(--muted)"
                stroke="var(--border)" stroke-width="1" />
            <rect x="165" y="145" width="70" height="25" rx="3" fill="var(--muted)"
                stroke="var(--border)" stroke-width="1" />
            <rect x="165" y="175" width="70" height="25" rx="3" fill="var(--muted)"
                stroke="var(--border)" stroke-width="1" />
            <rect x="165" y="205" width="70" height="25" rx="3" fill="var(--muted)"
                stroke="var(--border)" stroke-width="1" />

            <!-- Status Lights - Most Red (Error) -->
            <circle cx="172" cy="127" r="3" fill="var(--destructive)">
                <animate attributeName="opacity" values="1;0.3;1" dur="0.8s" repeatCount="indefinite" />
            </circle>
            <circle cx="182" cy="127" r="3" fill="var(--destructive)">
                <animate attributeName="opacity" values="0.3;1;0.3" dur="0.6s" repeatCount="indefinite" />
            </circle>
            <circle cx="192" cy="127" r="3" fill="var(--accent)" opacity="0.3" />

            <circle cx="172" cy="157" r="3" fill="var(--destructive)">
                <animate attributeName="opacity" values="1;0.4;1" dur="1s" repeatCount="indefinite" />
            </circle>
            <circle cx="182" cy="157" r="3" fill="var(--destructive)" />
            <circle cx="192" cy="157" r="3" fill="var(--accent)" opacity="0.3" />

            <circle cx="172" cy="187" r="3" fill="var(--accent)" opacity="0.3" />
            <circle cx="182" cy="187" r="3" fill="var(--destructive)">
                <animate attributeName="opacity" values="0.5;1;0.5" dur="0.7s" repeatCount="indefinite" />
            </circle>
            <circle cx="192" cy="187" r="3" fill="var(--destructive)" />

            <circle cx="172" cy="217" r="3" fill="var(--destructive)">
                <animate attributeName="opacity" values="1;0.2;1" dur="0.9s" repeatCount="indefinite" />
            </circle>
            <circle cx="182" cy="217" r="3" fill="var(--accent)" opacity="0.3" />
            <circle cx="192" cy="217" r="3" fill="var(--destructive)" />

            <!-- Warning Symbol -->
            <g style="animation: glitch 3s ease-in-out infinite;">
                <circle cx="200" cy="80" r="25" fill="var(--destructive)" opacity="0.2" />
                <path d="M 200 65 L 210 90 L 190 90 Z" fill="var(--destructive)" />
                <circle cx="200" cy="82" r="2" fill="white" />
                <rect x="198.5" y="72" width="3" height="7" rx="1.5" fill="white" />
            </g>

            <!-- Error Sparks -->
            <circle cx="140" cy="150" r="2" fill="var(--destructive)">
                <animate attributeName="opacity" values="0;1;0" dur="1.5s" repeatCount="indefinite" />
            </circle>
            <circle cx="260" cy="140" r="2" fill="var(--destructive)">
                <animate attributeName="opacity" values="0;1;0" dur="1.2s" repeatCount="indefinite"
                    begin="0.3s" />
            </circle>
            <circle cx="145" cy="200" r="2" fill="var(--destructive)">
                <animate attributeName="opacity" values="0;1;0" dur="1.8s" repeatCount="indefinite"
                    begin="0.6s" />
            </circle>

            <!-- Broken Circuit Lines -->
            <path d="M 120 160 L 140 160" stroke="var(--primary)" stroke-width="2" stroke-dasharray="5,5" />
            <path d="M 260 160 L 280 160" stroke="var(--primary)" stroke-width="2" stroke-dasharray="5,5" />
            <circle cx="118" cy="160" r="3" fill="var(--destructive)" opacity="0.6" />
            <circle cx="282" cy="160" r="3" fill="var(--destructive)" opacity="0.6" />
        </svg>

        <div class="error-code">500</div>
        <h1>Something Went Wrong</h1>
        <p>Our servers encountered an unexpected error. Our team has been notified and we're working on a fix.</p>

        <div class="actions">
            <a href="/" class="btn btn-primary">Go Home</a>
            <a href="mailto:hello@yarmy.tech" class="btn btn-secondary">Report Issue</a>
        </div>
    </div>
</body>

</html>
