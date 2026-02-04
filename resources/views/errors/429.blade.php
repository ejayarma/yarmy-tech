<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>429 - Too Many Requests | Yummy Technologies</title>

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
            0%, 100% {
                transform: scale(1);
                opacity: 0.08;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.12;
            }
        }

        @keyframes traffic-light {
            0%, 100% { fill: var(--warning); }
            50% { fill: var(--destructive); }
        }

        @keyframes move-right {
            0% { transform: translateX(0); opacity: 1; }
            100% { transform: translateX(100px); opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="glow"></div>

    <div class="container">
        <!-- SVG Illustration - Traffic/Rate Limit -->
        <svg class="illustration" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Background -->
            <circle cx="200" cy="150" r="120" fill="var(--muted)" opacity="0.3"/>

            <!-- Traffic Light -->
            <g>
                <!-- Traffic light pole -->
                <rect x="195" y="190" width="10" height="50" rx="2" fill="var(--primary)" opacity="0.5"/>

                <!-- Traffic light box -->
                <rect x="175" y="90" width="50" height="110" rx="8" fill="var(--primary)" opacity="0.2"/>
                <rect x="180" y="95" width="40" height="100" rx="6" fill="var(--background)" stroke="var(--primary)" stroke-width="3"/>

                <!-- Red light (active) -->
                <circle cx="200" cy="115" r="12" fill="var(--warning)">
                    <animate attributeName="fill" values="var(--warning);var(--destructive);var(--warning)" dur="2s" repeatCount="indefinite"/>
                </circle>
                <circle cx="200" cy="115" r="15" fill="none" stroke="var(--warning)" stroke-width="2" opacity="0.3">
                    <animate attributeName="opacity" values="0.3;0.7;0.3" dur="2s" repeatCount="indefinite"/>
                </circle>

                <!-- Yellow light -->
                <circle cx="200" cy="145" r="12" fill="var(--warning)" opacity="0.3"/>

                <!-- Green light (inactive) -->
                <circle cx="200" cy="175" r="12" fill="var(--muted)" opacity="0.2"/>
            </g>

            <!-- Stop Hand Sign -->
            <g transform="translate(280, 140)">
                <circle cx="0" cy="0" r="30" fill="var(--destructive)" opacity="0.2"/>
                <circle cx="0" cy="0" r="25" fill="var(--destructive)"/>
                <!-- Hand -->
                <g transform="translate(0, 2)">
                    <rect x="-3" y="-5" width="6" height="12" rx="3" fill="white"/>
                    <rect x="-10" y="-12" width="5" height="10" rx="2.5" fill="white"/>
                    <rect x="-5" y="-15" width="5" height="10" rx="2.5" fill="white"/>
                    <rect x="0" y="-15" width="5" height="10" rx="2.5" fill="white"/>
                    <rect x="5" y="-12" width="5" height="10" rx="2.5" fill="white"/>
                </g>
            </g>

            <!-- Speed limit sign -->
            <g transform="translate(120, 140)">
                <rect x="-25" y="-25" width="50" height="50" rx="5" fill="white" stroke="var(--destructive)" stroke-width="4"/>
                <text x="0" y="-5" text-anchor="middle" font-size="14" font-weight="bold" fill="var(--destructive)">SLOW</text>
                <text x="0" y="12" text-anchor="middle" font-size="14" font-weight="bold" fill="var(--destructive)">DOWN</text>
            </g>

            <!-- Request arrows (moving and fading) -->
            <g opacity="0.6">
                <path d="M 50 180 L 80 180 L 75 175 M 80 180 L 75 185" stroke="var(--accent)" stroke-width="2" fill="none">
                    <animate attributeName="opacity" values="1;0" dur="1.5s" repeatCount="indefinite"/>
                    <animateTransform attributeName="transform" type="translate" from="0 0" to="50 0" dur="1.5s" repeatCount="indefinite"/>
                </path>
            </g>

            <g opacity="0.6">
                <path d="M 50 200 L 80 200 L 75 195 M 80 200 L 75 205" stroke="var(--accent)" stroke-width="2" fill="none">
                    <animate attributeName="opacity" values="1;0" dur="1.5s" repeatCount="indefinite" begin="0.3s"/>
                    <animateTransform attributeName="transform" type="translate" from="0 0" to="50 0" dur="1.5s" repeatCount="indefinite" begin="0.3s"/>
                </path>
            </g>

            <g opacity="0.6">
                <path d="M 50 220 L 80 220 L 75 215 M 80 220 L 75 225" stroke="var(--accent)" stroke-width="2" fill="none">
                    <animate attributeName="opacity" values="1;0" dur="1.5s" repeatCount="indefinite" begin="0.6s"/>
                    <animateTransform attributeName="transform" type="translate" from="0 0" to="50 0" dur="1.5s" repeatCount="indefinite" begin="0.6s"/>
                </path>
            </g>

            <!-- Clock/Timer -->
            <g transform="translate(320, 220)">
                <circle cx="0" cy="0" r="20" fill="var(--background)" stroke="var(--primary)" stroke-width="2"/>
                <!-- Clock hands -->
                <line x1="0" y1="0" x2="0" y2="-10" stroke="var(--primary)" stroke-width="2" stroke-linecap="round">
                    <animateTransform attributeName="transform" type="rotate" from="0 0 0" to="360 0 0" dur="4s" repeatCount="indefinite"/>
                </line>
                <line x1="0" y1="0" x2="7" y2="0" stroke="var(--accent)" stroke-width="2" stroke-linecap="round">
                    <animateTransform attributeName="transform" type="rotate" from="0 0 0" to="360 0 0" dur="60s" repeatCount="indefinite"/>
                </line>
                <circle cx="0" cy="0" r="2" fill="var(--primary)"/>
            </g>

            <!-- Warning bars -->
            <rect x="70" y="100" width="30" height="8" rx="2" fill="var(--warning)" opacity="0.6" transform="rotate(-45 85 104)"/>
            <rect x="70" y="100" width="30" height="8" rx="2" fill="var(--warning)" opacity="0.6" transform="rotate(45 85 104)"/>
        </svg>

        <div class="error-code">429</div>
        <h1>Slow Down There!</h1>
        <p>You've made too many requests in a short period. Please wait a moment and try again.</p>

        <div class="actions">
            <a href="javascript:location.reload()" class="btn btn-primary">Try Again</a>
            <a href="/" class="btn btn-secondary">Go Home</a>
        </div>
    </div>
</body>
</html>
