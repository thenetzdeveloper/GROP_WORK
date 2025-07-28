<!DOCTYPE html>
<html lang="km">

<head>
    <meta charset="UTF-8">
    <title>គេហទំព័រតារាងអគ្គិសនី</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&display=swap');

        body {
            font-family: 'Fredoka', 'Noto Sans Khmer', cursive, sans-serif;
            background: linear-gradient(135deg, #ffe6f2 0%, #e0f7fa 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            overflow: hidden;
        }

        form {
            background: #fff9fc;
            border-radius: 24px;
            padding: 36px 32px;
            width: 400px;
            box-shadow: 0 8px 24px #f5c6e5;
            border: 2px solid #ffb3e6;
            position: relative;
            z-index: 1;
        }

        h2 {
            text-align: center;
            color: #ff66b2;
            font-size: 2em;
            margin-bottom: 18px;
            font-weight: 700;
        }

        label {
            display: block;
            margin: 12px 0 6px;
            font-weight: bold;
            color: #a64ca6;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            border: 1.5px solid #ffd6e7;
            border-radius: 12px;
            margin-bottom: 14px;
            background: #fff6fa;
            transition: border-color 0.2s;
        }

        input:focus,
        select:focus {
            border-color: #ff66b2;
            outline: none;
        }

        button {
            width: 100%;
            background: linear-gradient(90deg, #ff66b2 0%, #a64ca6 100%);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 16px;
            font-size: 1.1em;
            font-weight: bold;
            box-shadow: 0 2px 8px #f5c6e5;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 16px #f5c6e5;
            background: linear-gradient(90deg, #a64ca6 0%, #ff66b2 100%);
        }

        .note {
            background: #fff4d6;
            border-left: 5px solid #ffaa00;
            padding: 12px;
            font-size: 15px;
            margin-top: 24px;
            border-radius: 10px;
            color: #ff8800;
            box-shadow: 0 1px 6px #ffe0b2;
        }

        form::before {
            content: "⚡";
            position: absolute;
            top: -28px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 2.5em;
            color: #ff66b2;
            filter: drop-shadow(0 2px 6px #f5c6e5);
        }

        .back-link {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            color: white;
        }

        canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        @keyframes fall {
            0% {
                transform: translateY(-100px);
                opacity: 1;
            }

            100% {
                transform: translateY(100vh);
                opacity: 0;
            }
        }

        .snowflake {
            position: fixed;
            top: -10px;
            color: white;
            font-size: 1.2em;
            animation: fall linear infinite;
            z-index: 15;
        }

        canvas#effectCanvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            z-index: 10;
        }

        .logo-icon {
            height: 40px;
            vertical-align: middle;
            margin-right: 10px;
        }

        nav a {
            text-decoration: none;
            color: #000000ff;
            font-weight: bold;
            padding: 6px 12px;
            border-radius: 6px;
            transition: background 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #14a308ff;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="snowflake" style="left: 10%; animation-duration: 6s;">❄</div>
    <div class="snowflake" style="left: 30%; animation-duration: 8s;">❄</div>
    <div class="snowflake" style="left: 50%; animation-duration: 5s;">❄</div>
    <div class="snowflake" style="left: 70%; animation-duration: 9s;">❄</div>
    <div class="snowflake" style="left: 90%; animation-duration: 7s;">❄</div>

    <canvas id="effectCanvas"></canvas>

    <form method="POST" action="sub.php">
        <nav>
            <img src="https://cdn-icons-png.flaticon.com/512/8068/8068292.png" alt="Group 6 Logo" class="logo-icon">
        </nav>
        <h2>បំពេញព័ត៏មាន</h2>

        <label>ឈ្មោះពេញ</label>
        <input type="text" name="full_name" required>

        <label>ភេទ</label>
        <select name="gender">
            <option value="ប្រុស">ប្រុស</option>
            <option value="ស្រី">ស្រី</option>
        </select>

        <label>លេខទូរស័ព្ទ</label>
        <input type="text" name="phone" required>

        <label>អាស័យដ្ឋាន</label>
        <input type="text" name="address" required>

        <label>ទីតាំង</label>
        <input type="text" name="location" required>

        <label>កាលបរិច្ឆេទ</label>
        <input type="date" name="date" required>

        <label>បរិមាណប្រើប្រាស់ (kWh)</label>
        <input type="number" name="usage_kwh" required>

        <button type="submit">⚡ គណនា</button>
        <button type="submit"><a href="../home/page.php" class="back-link">ត្រឡប់ក្រោយ</a></button>


        <div class="note">
            <strong>តារាងតម្លៃអគ្គិសនី:</strong><br>
            • &lt; 50 kWh → 350 ៛/kWh<br>
            • 50 ≤ p &lt; 100 → 400 ៛/kWh<br>
            • 100 ≤ p &lt; 150 → 500 ៛/kWh<br>
            • 150 ≤ p &lt; 200 → 600 ៛/kWh<br>
            • ≥ 200 → 700 ៛/kWh
        </div>
    </form>

    <script>
        const canvas = document.getElementById("effectCanvas");
        const ctx = canvas.getContext("2d");
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        let snowflakes = [];
        let raindrops = [];

        function createSnowflake() {
            snowflakes.push({
                x: Math.random() * canvas.width,
                y: 0,
                r: Math.random() * 4 + 1,
                d: Math.random() * 1 + 1
            });
        }

        function createRaindrop() {
            raindrops.push({
                x: Math.random() * canvas.width,
                y: 0,
                l: Math.random() * 15 + 10,
                d: Math.random() * 4 + 2
            });
        }

        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = "white";
            snowflakes.forEach((s) => {
                ctx.beginPath();
                ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
                ctx.fill();
            });

            ctx.strokeStyle = "#9ecfff";
            ctx.lineWidth = 1;
            raindrops.forEach((r) => {
                ctx.beginPath();
                ctx.moveTo(r.x, r.y);
                ctx.lineTo(r.x, r.y + r.l);
                ctx.stroke();
            });

            update();
        }

        function update() {
            snowflakes.forEach((s, i) => {
                s.y += s.d;
                if (s.y > canvas.height) {
                    snowflakes[i] = {
                        ...s,
                        x: Math.random() * canvas.width,
                        y: 0
                    };
                }
            });

            raindrops.forEach((r, i) => {
                r.y += r.d * 2;
                if (r.y > canvas.height) {
                    raindrops[i] = {
                        ...r,
                        x: Math.random() * canvas.width,
                        y: 0
                    };
                }
            });
        }

        function animate() {
            draw();
            requestAnimationFrame(animate);
        }

        setInterval(createSnowflake, 100);
        setInterval(createRaindrop, 60);
        animate();
    </script>

</body>

</html>