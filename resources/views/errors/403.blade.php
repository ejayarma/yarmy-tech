<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>403 - Access Forbidden | Yarmy Technologies</title>

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
            --warning: hsl(43 96% 56%);
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
                --warning: hsl(43 96% 56%);
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
            background: linear-gradient(135deg, var(--warning) 0%, var(--primary) 100%);
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
            background: var(--warning);
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

        @keyframes shake {

            0%,
            100% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(-5deg);
            }

            75% {
                transform: rotate(5deg);
            }
        }
    </style>
</head>

<body>
    <div class="glow"></div>

    <div class="container">
        <!-- SVG Illustration - Locked Door/Shield -->
        <svg class="illustration" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Background -->
            <circle cx="200" cy="150" r="120" fill="var(--muted)" opacity="0.3" />

            <!-- Shield -->
            <path d="M 200 80 L 240 100 L 240 160 Q 240 200 200 220 Q 160 200 160 160 L 160 100 Z" fill="var(--primary)"
                opacity="0.2" />
            <path d="M 200 85 L 235 103 L 235 160 Q 235 195 200 213 Q 165 195 165 160 L 165 103 Z"
                fill="var(--background)" stroke="var(--primary)" stroke-width="3" />

            <!-- Lock on Shield -->
            <g style="animation: shake 3s ease-in-out infinite;">
                <rect x="190" y="135" width="20" height="25" rx="3" fill="var(--warning)" />
                <circle cx="200" cy="125" r="12" fill="none" stroke="var(--warning)" stroke-width="4" />
                <circle cx="200" cy="125" r="8" fill="var(--background)" />
                <rect x="198" y="145" width="4" height="8" rx="2" fill="var(--background)" />
            </g>

            <!-- Warning Lines -->
            <line x1="140" y1="140" x2="120" y2="140" stroke="var(--warning)" stroke-width="2"
                stroke-linecap="round" />
            <line x1="260" y1="140" x2="280" y2="140" stroke="var(--warning)" stroke-width="2"
                stroke-linecap="round" />

            <!-- Caution Symbols -->
            <g opacity="0.6">
                <path d="M 100 100 L 110 120 L 90 120 Z" fill="var(--warning)" />
                <circle cx="100" cy="115" r="1.5" fill="var(--background)" />
                <rect x="99" y="108" width="2" height="5" rx="1" fill="var(--background)" />
            </g>

            <g opacity="0.6">
                <path d="M 300 100 L 310 120 L 290 120 Z" fill="var(--warning)" />
                <circle cx="300" cy="115" r="1.5" fill="var(--background)" />
                <rect x="299" y="108" width="2" height="5" rx="1" fill="var(--background)" />
            </g>

            <!-- Access Denied Display -->
            <rect x="165" y="180" width="70" height="25" rx="3" fill="var(--muted)" />
            <text x="200" y="197" text-anchor="middle" font-family="monospace" font-size="10" fill="var(--warning)"
                font-weight="bold">
                ACCESS DENIED
                <animate attributeName="opacity" values="1;0.3;1" dur="2s" repeatCount="indefinite" />
            </text>

            <!-- Keyhole Detail -->
            <circle cx="200" cy="147" r="2" fill="var(--background)" />

            <!-- Shield Decorative Lines -->
            <path d="M 200 95 L 200 205" stroke="var(--primary)" stroke-width="1" opacity="0.3"
                stroke-dasharray="3,3" />
            <path d="M 175 120 L 225 120" stroke="var(--primary)" stroke-width="1" opacity="0.3"
                stroke-dasharray="3,3" />
            <path d="M 175 175 L 225 175" stroke="var(--primary)" stroke-width="1" opacity="0.3"
                stroke-dasharray="3,3" />
        </svg>

        <div class="error-code">403</div>
        <h1>Access Forbidden</h1>
        <p>You don't have permission to access this resource. If you believe this is an error, please contact us.</p>

        <div class="actions">
            <a href="/" class="btn btn-primary">Go Home</a>
            <a href="javascript:history.back()" class="btn btn-secondary">Go Back</a>
        </div>
    </div>
</body>

</html>
