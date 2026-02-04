<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>400 - Bad Request | Yummy Technologies</title>

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
            0%, 100% {
                transform: scale(1);
                opacity: 0.08;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.12;
            }
        }

        @keyframes wiggle {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(-8deg); }
            75% { transform: rotate(8deg); }
        }

        @keyframes cross-flash {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
    </style>
</head>
<body>
    <div class="glow"></div>

    <div class="container">
        <!-- SVG Illustration - Broken Document/Data -->
        <svg class="illustration" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Background -->
            <circle cx="200" cy="150" r="120" fill="var(--muted)" opacity="0.3"/>

            <!-- Document 1 (torn left side) -->
            <g>
                <path d="M 140 80 L 180 80 L 180 85 L 175 85 L 175 200 L 140 200 Z"
                      fill="var(--background)" stroke="var(--primary)" stroke-width="3"/>
                <!-- Torn edge -->
                <path d="M 180 80 L 175 83 L 180 87 L 176 90 L 180 93 L 175 96 L 180 100"
                      stroke="var(--primary)" stroke-width="2" fill="none"/>

                <!-- Lines on document -->
                <line x1="150" y1="110" x2="170" y2="110" stroke="var(--border)" stroke-width="2"/>
                <line x1="150" y1="125" x2="165" y2="125" stroke="var(--border)" stroke-width="2"/>
                <line x1="150" y1="140" x2="170" y2="140" stroke="var(--border)" stroke-width="2"/>
                <line x1="150" y1="155" x2="160" y2="155" stroke="var(--border)" stroke-width="2"/>
            </g>

            <!-- Document 2 (torn right side) -->
            <g>
                <path d="M 220 80 L 260 80 L 260 200 L 225 200 L 225 85 L 220 85 Z"
                      fill="var(--background)" stroke="var(--primary)" stroke-width="3"/>
                <!-- Torn edge -->
                <path d="M 220 80 L 225 83 L 220 87 L 224 90 L 220 93 L 225 96 L 220 100"
                      stroke="var(--primary)" stroke-width="2" fill="none"/>

                <!-- Lines on document -->
                <line x1="235" y1="110" x2="250" y2="110" stroke="var(--border)" stroke-width="2"/>
                <line x1="235" y1="125" x2="252" y2="125" stroke="var(--border)" stroke-width="2"/>
                <line x1="235" y1="140" x2="250" y2="140" stroke="var(--border)" stroke-width="2"/>
                <line x1="235" y1="155" x2="245" y2="155" stroke="var(--border)" stroke-width="2"/>
            </g>

            <!-- Big X (Error) in center with animation -->
            <g style="animation: wiggle 2s ease-in-out infinite;">
                <line x1="185" y1="125" x2="215" y2="155" stroke="var(--destructive)" stroke-width="6" stroke-linecap="round"/>
                <line x1="215" y1="125" x2="185" y2="155" stroke="var(--destructive)" stroke-width="6" stroke-linecap="round"/>

                <!-- Circle around X -->
                <circle cx="200" cy="140" r="25" fill="none" stroke="var(--destructive)" stroke-width="3" opacity="0.5">
                    <animate attributeName="opacity" values="0.5;0.8;0.5" dur="2s" repeatCount="indefinite"/>
                </circle>
            </g>

            <!-- Syntax error symbols -->
            <g opacity="0.6">
                <text x="120" y="250" font-family="monospace" font-size="16" fill="var(--destructive)" font-weight="bold">
                    <tspan>{ }</tspan>
                </text>
                <line x1="128" y1="252" x2="142" y2="252" stroke="var(--destructive)" stroke-width="2"/>
            </g>

            <g opacity="0.6">
                <text x="260" y="250" font-family="monospace" font-size="16" fill="var(--destructive)" font-weight="bold">
                    <tspan>&lt;/&gt;</tspan>
                </text>
                <line x1="265" y1="252" x2="285" y2="252" stroke="var(--destructive)" stroke-width="2"/>
            </g>

            <!-- Broken chain link -->
            <g transform="translate(200, 220)">
                <ellipse cx="-15" cy="0" rx="8" ry="12" fill="none" stroke="var(--muted-foreground)" stroke-width="3" opacity="0.5"/>
                <ellipse cx="15" cy="0" rx="8" ry="12" fill="none" stroke="var(--muted-foreground)" stroke-width="3" opacity="0.5"/>
                <!-- Break in chain -->
                <line x1="-7" y1="-5" x2="7" y2="-5" stroke="var(--muted-foreground)" stroke-width="3" stroke-linecap="round" opacity="0.3" stroke-dasharray="2,4"/>
            </g>

            <!-- Warning dots -->
            <circle cx="100" cy="140" r="3" fill="var(--destructive)">
                <animate attributeName="opacity" values="1;0.3;1" dur="1.5s" repeatCount="indefinite"/>
            </circle>
            <circle cx="300" cy="140" r="3" fill="var(--destructive)">
                <animate attributeName="opacity" values="0.3;1;0.3" dur="1.5s" repeatCount="indefinite"/>
            </circle>
        </svg>

        <div class="error-code">400</div>
        <h1>Bad Request</h1>
        <p>The request couldn't be understood by the server. Please check your input and try again.</p>

        <div class="actions">
            <a href="javascript:history.back()" class="btn btn-primary">Go Back</a>
            <a href="/" class="btn btn-secondary">Go Home</a>
        </div>
    </div>
</body>
</html>
