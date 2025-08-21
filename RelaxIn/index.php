<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serenitas - Tempat Peristirahatan Jiwa yang Elegan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Playfair Display', serif;
            background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 30%, #16213e 70%, #0f0f23 100%);
            min-height: 100vh;
            overflow-x: hidden;
            color: #e8e8e8;
        }

        /* Elemen Animasi Latar Belakang */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }

        .floating-orb {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(212, 175, 55, 0.1), rgba(184, 134, 11, 0.05));
            animation: float 25s infinite ease-in-out;
            filter: blur(2px);
        }

        .floating-orb:nth-child(1) {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-orb:nth-child(2) {
            width: 200px;
            height: 200px;
            top: 60%;
            right: 15%;
            animation-delay: -8s;
            background: linear-gradient(45deg, rgba(147, 51, 234, 0.08), rgba(99, 102, 241, 0.04));
        }

        .floating-orb:nth-child(3) {
            width: 250px;
            height: 250px;
            bottom: 20%;
            left: 60%;
            animation-delay: -15s;
            background: linear-gradient(45deg, rgba(59, 130, 246, 0.06), rgba(147, 197, 253, 0.03));
        }

        .geometric-shape {
            position: absolute;
            border: 1px solid rgba(212, 175, 55, 0.15);
            animation: rotate 30s linear infinite;
        }

        .geometric-shape:nth-child(4) {
            width: 100px;
            height: 100px;
            top: 25%;
            right: 25%;
            transform-origin: center;
        }

        .geometric-shape:nth-child(5) {
            width: 80px;
            height: 80px;
            bottom: 30%;
            left: 20%;
            border-radius: 50%;
            animation-delay: -10s;
        }

        .geometric-shape:nth-child(6) {
            width: 60px;
            height: 60px;
            top: 70%;
            right: 40%;
            transform: rotate(45deg);
            animation-delay: -20s;
        }

        /* Garis Gradien */
        .gradient-line {
            position: absolute;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.3), transparent);
            animation: pulse 4s ease-in-out infinite;
        }

        .gradient-line:nth-child(7) {
            width: 300px;
            top: 15%;
            left: 50%;
            transform: translateX(-50%) rotate(-20deg);
        }

        .gradient-line:nth-child(8) {
            width: 200px;
            bottom: 25%;
            right: 20%;
            transform: rotate(30deg);
            animation-delay: -2s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); opacity: 0.3; }
            25% { transform: translateY(-20px) translateX(10px) rotate(90deg); opacity: 0.5; }
            50% { transform: translateY(-40px) translateX(-10px) rotate(180deg); opacity: 0.3; }
            75% { transform: translateY(-20px) translateX(-20px) rotate(270deg); opacity: 0.6; }
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.2; width: 100%; }
            50% { opacity: 0.8; width: 120%; }
        }

        /* Header */
        header {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 80px 20px;
            background: rgba(15, 15, 35, 0.4);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(212, 175, 55, 0.2);
        }

        h1 {
            font-size: 4rem;
            background: linear-gradient(135deg, #d4af37, #f7c948, #b8860b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            animation: shimmer 3s ease-in-out infinite;
            font-weight: 300;
            letter-spacing: 2px;
        }

        @keyframes shimmer {
            0%, 100% { filter: brightness(1); }
            50% { filter: brightness(1.3) drop-shadow(0 0 20px rgba(212, 175, 55, 0.5)); }
        }

        .subtitle {
            font-size: 1.4rem;
            color: rgba(232, 232, 232, 0.8);
            margin-bottom: 40px;
            font-style: italic;
            font-weight: 300;
        }

        /* Navigasi */
        nav {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 40px;
        }

        .nav-btn {
            padding: 18px 35px;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(184, 134, 11, 0.05));
            color: #d4af37;
            text-decoration: none;
            border-radius: 50px;
            border: 1px solid rgba(212, 175, 55, 0.3);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 1.1rem;
            backdrop-filter: blur(15px);
            position: relative;
            overflow: hidden;
            font-weight: 300;
        }

        .nav-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.2), transparent);
            transition: left 0.6s;
        }

        .nav-btn:hover::before {
            left: 100%;
        }

        .nav-btn:hover {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(184, 134, 11, 0.1));
            border-color: rgba(212, 175, 55, 0.6);
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(212, 175, 55, 0.2);
        }

        /* Konten utama */
        main {
            position: relative;
            z-index: 10;
            max-width: 1200px;
            margin: 0 auto;
            padding: 100px 20px;
        }

        .section {
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.6), rgba(15, 15, 35, 0.4));
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 60px;
            margin-bottom: 50px;
            border: 1px solid rgba(212, 175, 55, 0.15);
            position: relative;
            overflow: hidden;
            transform: translateY(30px);
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
        }

        .section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.5), transparent);
        }

        @keyframes fadeInUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .section:nth-child(2) { animation-delay: 0.2s; }
        .section:nth-child(3) { animation-delay: 0.4s; }
        .section:nth-child(4) { animation-delay: 0.6s; }
        .section:nth-child(5) { animation-delay: 0.8s; }

        .section h2 {
            color: #d4af37;
            font-size: 2.8rem;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .section p {
            color: rgba(232, 232, 232, 0.9);
            font-size: 1.2rem;
            line-height: 1.8;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 300;
        }

        /* Bagian kutipan */
        .quote-container {
            text-align: center;
            padding: 50px;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.05), rgba(147, 51, 234, 0.03));
            border-radius: 20px;
            border-left: 3px solid rgba(212, 175, 55, 0.6);
            margin: 40px 0;
            position: relative;
        }

        .quote-container::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: 30px;
            font-size: 4rem;
            color: rgba(212, 175, 55, 0.3);
            font-family: serif;
        }

        .quote {
            font-size: 1.6rem;
            font-style: italic;
            color: #e8e8e8;
            margin-bottom: 20px;
            font-weight: 300;
        }

        .quote-author {
            font-size: 1.1rem;
            color: rgba(212, 175, 55, 0.8);
            font-weight: 300;
        }

        /* Latihan pernapasan */
        .breathing-circle {
            width: 250px;
            height: 250px;
            border: 2px solid rgba(212, 175, 55, 0.6);
            border-radius: 50%;
            margin: 50px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d4af37;
            font-size: 1.3rem;
            animation: breathe 6s ease-in-out infinite;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.08), rgba(26, 26, 46, 0.1));
            backdrop-filter: blur(15px);
            position: relative;
            font-weight: 300;
        }

        .breathing-circle::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 1px solid rgba(212, 175, 55, 0.2);
            animation: ripple 6s ease-in-out infinite;
        }

        @keyframes breathe {
            0%, 100% { 
                transform: scale(1); 
                border-color: rgba(212, 175, 55, 0.6);
                box-shadow: 0 0 20px rgba(212, 175, 55, 0.2);
            }
            50% { 
                transform: scale(1.15); 
                border-color: rgba(212, 175, 55, 0.9);
                box-shadow: 0 0 40px rgba(212, 175, 55, 0.4);
            }
        }

        @keyframes ripple {
            0%, 100% { transform: scale(1); opacity: 0.8; }
            50% { transform: scale(1.3); opacity: 0.3; }
        }

        /* Grid tips */
        .tips-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
            margin-top: 50px;
        }

        .tip-card {
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.4), rgba(15, 15, 35, 0.6));
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            border: 1px solid rgba(212, 175, 55, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .tip-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.6), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .tip-card:hover::before {
            transform: translateX(0);
        }

        .tip-card:hover {
            transform: translateY(-10px);
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.6), rgba(15, 15, 35, 0.8));
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3), 0 0 30px rgba(212, 175, 55, 0.1);
            border-color: rgba(212, 175, 55, 0.3);
        }

        .tip-icon {
            font-size: 3.5rem;
            margin-bottom: 25px;
            opacity: 0.8;
            filter: drop-shadow(0 0 10px rgba(212, 175, 55, 0.3));
        }

        .tip-card h3 {
            color: #d4af37;
            font-size: 1.5rem;
            margin-bottom: 20px;
            font-weight: 300;
        }

        .tip-card p {
            color: rgba(232, 232, 232, 0.9);
            font-size: 1.1rem;
            line-height: 1.7;
            font-weight: 300;
        }

        /* Pemutar musik */
        .music-player {
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.5), rgba(15, 15, 35, 0.7));
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 40px;
            text-align: center;
            border: 1px solid rgba(212, 175, 55, 0.2);
            position: relative;
        }

        .play-btn {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(184, 134, 11, 0.1));
            border: 2px solid rgba(212, 175, 55, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 30px auto;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            color: #d4af37;
            font-size: 2.5rem;
            position: relative;
            overflow: hidden;
        }

        .play-btn::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.1), transparent 70%);
            transform: scale(0);
            transition: transform 0.3s ease;
        }

        .play-btn:hover::before {
            transform: scale(1.5);
        }

        .play-btn:hover {
            transform: scale(1.1);
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.3), rgba(184, 134, 11, 0.2));
            box-shadow: 0 0 30px rgba(212, 175, 55, 0.3);
        }

        /* Timer meditasi */
        .timer-display {
            font-size: 3.5rem;
            color: #d4af37;
            text-align: center;
            margin: 30px 0;
            font-family: 'Courier New', monospace;
            text-shadow: 0 0 20px rgba(212, 175, 55, 0.3);
            font-weight: 300;
        }

        .timer-controls {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-top: 40px;
        }

        .timer-btn {
            padding: 15px 30px;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(184, 134, 11, 0.05));
            color: #d4af37;
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            backdrop-filter: blur(10px);
            font-weight: 300;
        }

        .timer-btn:hover {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(184, 134, 11, 0.1));
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.2);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 60px 20px;
            color: rgba(232, 232, 232, 0.7);
            background: linear-gradient(135deg, rgba(15, 15, 35, 0.8), rgba(26, 26, 46, 0.6));
            backdrop-filter: blur(20px);
            border-top: 1px solid rgba(212, 175, 55, 0.15);
            font-weight: 300;
        }

        .footer-accent {
            color: #d4af37;
            font-weight: 300;
        }

        /* Responsif */
        @media (max-width: 768px) {
            h1 { font-size: 3rem; }
            nav { flex-direction: column; align-items: center; gap: 20px; }
            .nav-btn { padding: 15px 30px; font-size: 1rem; }
            .section { padding: 40px 30px; }
            .section h2 { font-size: 2.2rem; }
            .tips-grid { grid-template-columns: 1fr; }
            .timer-controls { flex-direction: column; align-items: center; }
            .breathing-circle { width: 200px; height: 200px; }
            .floating-orb { display: none; }
        }

        /* Scrollbar kustom */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(15, 15, 35, 0.5);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.5), rgba(184, 134, 11, 0.7));
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.7), rgba(184, 134, 11, 0.9));
        }
    </style>
</head>
<body>
    <!-- Elemen Animasi Latar Belakang -->
    <div class="bg-animation">
        <div class="floating-orb"></div>
        <div class="floating-orb"></div>
        <div class="floating-orb"></div>
        <div class="geometric-shape"></div>
        <div class="geometric-shape"></div>
        <div class="geometric-shape"></div>
        <div class="gradient-line"></div>
        <div class="gradient-line"></div>
    </div>

    <!-- Header -->
    <header>
        <h1>✨ SERENITAS</h1>
        <p class="subtitle">Tempat peristirahatan jiwa yang elegan</p>
        <nav>
            <a href="#meditasi" class="nav-btn">Meditasi</a>
            <a href="#kebijaksanaan" class="nav-btn">Kebijaksanaan</a>
            <a href="#panduan" class="nav-btn">Panduan</a>
            <a href="#harmoni" class="nav-btn">Harmoni</a>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main>
        <!-- Bagian Selamat Datang -->
        <section class="section">
            <h2>🌙 Selamat Datang di Tempat Suci Batin Anda</h2>
            <p>Di tengah simfoni kehidupan yang kompleks, kita sering lupa akan keindahan mendalam dari ketenangan. Tempat suci yang elegan ini hadir sebagai pelindung bagi jiwa-jiwa yang lelah, tempat di mana kemewahan bertemu dengan ketenangan, dan setiap momen adalah undangan untuk menemukan kembali kedamaian batin Anda.</p>
            <p>Biarkan diri Anda diselimuti oleh ketenangan, bernapas dalam-dalam, dan temukan kedamaian dalam ritme lembut kehadiran saat ini.</p>
        </section>

        <!-- Bagian Meditasi -->
        <section class="section" id="meditasi">
            <h2>🧘‍♀️ Pernapasan Sadar</h2>
            <p>Ikuti ritme elegan lingkaran pernapasan di bawah ini. Hirup napas saat lingkaran mengembang, buang napas saat menyusut. Biarkan tarian lembut ini membimbing Anda ke kesadaran yang lebih dalam.</p>
            <div class="breathing-circle">
                <span id="breathingText">Tarik Napas</span>
            </div>
            
            <!-- Timer Meditasi -->
            <h3 style="color: #d4af37; text-align: center; margin-top: 50px; margin-bottom: 25px; font-weight: 300;">Timer Meditasi</h3>
            <div class="timer-display" id="timerDisplay">05:00</div>
            <div class="timer-controls">
                <button class="timer-btn" onclick="startTimer()">Mulai</button>
                <button class="timer-btn" onclick="pauseTimer()">Jeda</button>
                <button class="timer-btn" onclick="resetTimer()">Reset</button>
            </div>
        </section>

        <!-- Bagian Kebijaksanaan -->
        <section class="section" id="kebijaksanaan">
            <h2>💫 Kebijaksanaan Abadi</h2>
            <div class="quote-container">
                <div class="quote" id="currentQuote">
                    "Di kedalaman musim dingin, akhirnya aku mengetahui bahwa dalam diriku terbentang musim panas yang tak terkalahkan."
                </div>
                <div class="quote-author" id="quoteAuthor">— Albert Camus</div>
            </div>
            <div style="text-align: center; margin-top: 30px;">
                <button class="timer-btn" onclick="changeQuote()">Kebijaksanaan Baru</button>
            </div>
        </section>

        <!-- Bagian Panduan -->
        <section class="section" id="panduan">
            <h2>🌸 Ritual Perawatan Diri yang Elegan</h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <div class="tip-icon">🌿</div>
                    <h3>Pelukan Alam</h3>
                    <p>Masuklah ke katedral alam. Rasakan bumi di bawah kaki Anda, hirup udara murni, dan biarkan dunia alami memulihkan semangat Anda dengan kebijaksanaan abadi.</p>
                </div>
                <div class="tip-card">
                    <div class="tip-icon">📖</div>
                    <h3>Jurnal Sakral</h3>
                    <p>Ubah pikiran Anda menjadi prosa yang elegan. Biarkan pena menari di atas halaman, menciptakan dialog suci antara diri batin dan kebijaksanaan dalam.</p>
                </div>
                <div class="tip-card">
                    <div class="tip-icon">🛁</div>
                    <h3>Ritual Mandi</h3>
                    <p>Ciptakan tempat suci di kamar mandi Anda. Nyalakan lilin, tambahkan minyak esensial, dan biarkan air hangat membasuh beban hari dalam tindakan perawatan diri yang mewah.</p>
                </div>
                <div class="tip-card">
                    <div class="tip-icon">🍵</div>
                    <h3>Upacara Teh Sadar</h3>
                    <p>Tingkatkan waktu minum teh menjadi ritual sakral. Pilih teh berkualitas, gunakan cangkir indah, dan nikmati setiap tegukan sebagai meditasi kesadaran dan syukur.</p>
                </div>
                <div class="tip-card">
                    <div class="tip-icon">📚</div>
                    <h3>Pelarian Sastra</h3>
                    <p>Hilangkan diri Anda dalam halaman-halaman sastra yang indah. Biarkan kata-kata mengangkut Anda ke alam lain, memberikan peristirahatan dan memperluas kesadaran.</p>
                </div>
                <div class="tip-card">
                    <div class="tip-icon">🎨</div>
                    <h3>Ekspresi Kreatif</h3>
                    <p>Salurkan emosi Anda melalui seni. Baik melukis, menggambar, atau berkarya, biarkan kreativitas menjadi meditasi dan jalan menuju kedamaian batin.</p>
                </div>
            </div>
        </section>

        <!-- Bagian Harmoni -->
        <section class="section" id="harmoni">
            <h2>🎵 Suara Harmonis</h2>
            <div class="music-player">
                <p style="color: #e8e8e8; margin-bottom: 20px; font-weight: 300;">Rasakan simfoni ketenangan</p>
                <div class="play-btn" onclick="toggleNatureSound()">
                    <span id="playIcon">▶</span>
                </div>
                <p style="color: rgba(232, 232, 232, 0.7); font-size: 1rem; font-weight: 300;">Klik untuk memulai perjalanan pendengaran Anda</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>✨ Ingatlah, Anda adalah <span class="footer-accent">karya seni</span> yang sedang dalam proses, layak mendapatkan semua <span class="footer-accent">keindahan</span> dan <span class="footer-accent">kedamaian</span> yang ditawarkan dunia ini ✨</p>
        <p style="margin-top: 20px; font-size: 0.9rem; opacity: 0.6;">Dibuat dengan ❤️ untuk kesehatan jiwa Anda</p>
    </footer>

    <script>
        // Animasi pernapasan teks
        let breathingInterval;
        function startBreathingAnimation() {
            const breathingText = document.getElementById('breathingText');
            let isInhaling = true;
            
            breathingInterval = setInterval(() => {
                if (isInhaling) {
                    breathingText.textContent = 'Buang Napas';
                } else {
                    breathingText.textContent = 'Tarik Napas';
                }
                isInhaling = !isInhaling;
            }, 3000);
        }

        // Timer Meditasi
        let timerInterval;
        let timeLeft = 300; // 5 menit dalam detik
        let isTimerRunning = false;

        function updateTimerDisplay() {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            document.getElementById('timerDisplay').textContent = 
                `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }

        function startTimer() {
            if (!isTimerRunning && timeLeft > 0) {
                isTimerRunning = true;
                timerInterval = setInterval(() => {
                    timeLeft--;
                    updateTimerDisplay();
                    
                    if (timeLeft <= 0) {
                        clearInterval(timerInterval);
                        isTimerRunning = false;
                        alert('🧘 Sesi meditasi selesai! Anda telah melakukan hal yang luar biasa untuk kesehatan mental Anda.');
                    }
                }, 1000);
            }
        }

        function pauseTimer() {
            if (isTimerRunning) {
                clearInterval(timerInterval);
                isTimerRunning = false;
            }
        }

        function resetTimer() {
            clearInterval(timerInterval);
            isTimerRunning = false;
            timeLeft = 300;
            updateTimerDisplay();
        }

        // Kutipan-kutipan
        const quotes = [
            {
                text: "Di kedalaman musim dingin, akhirnya aku mengetahui bahwa dalam diriku terbentang musim panas yang tak terkalahkan.",
                author: "— Albert Camus"
            },
            {
                text: "Napas adalah jembatan yang menghubungkan kehidupan dan kesadaran.",
                author: "— Thích Nhất Hạnh"
            },
            {
                text: "Kamu tidak dapat menghentikan ombak, tetapi kamu bisa belajar berselancar.",
                author: "— Jon Kabat-Zinn"
            },
            {
                text: "Kedamaian datang dari dalam. Jangan mencarinya dari luar.",
                author: "— Buddha"
            },
            {
                text: "Saat ini adalah hadiah. Itulah mengapa disebut present.",
                author: "— Eleanor Roosevelt"
            },
            {
                text: "Kebahagiaan bukanlah tujuan, melainkan cara hidup.",
                author: "— Burton Hills"
            },
            {
                text: "Hidup ini seperti mengendarai sepeda. Untuk menjaga keseimbangan, kamu harus terus bergerak.",
                author: "— Albert Einstein"
            },
            {
                text: "Dalam keheningan, kita menemukan suara jiwa kita yang sesungguhnya.",
                author: "— Rumi"
            },
            {
                text: "Setiap hari adalah kesempatan baru untuk menjadi versi terbaik dari diri kita.",
                author: "— Anonim"
            },
            {
                text: "Ketenangan bukanlah ketiadaan badai, tetapi kedamaian di tengah badai.",
                author: "— Anonim"
            }
        ];

        function changeQuote() {
            const randomIndex = Math.floor(Math.random() * quotes.length);
            document.getElementById('currentQuote').textContent = quotes[randomIndex].text;
            document.getElementById('quoteAuthor').textContent = quotes[randomIndex].author;
        }

        // Simulasi suara alam
        let isPlaying = false;

        function toggleNatureSound() {
            const playIcon = document.getElementById('playIcon');
            
            if (!isPlaying) {
                // Simulasi suara alam (dalam implementasi nyata, Anda akan menggunakan file audio yang sebenarnya)
                playIcon.textContent = '⏸️';
                isPlaying = true;
                
                // Umpan balik visual untuk status "bermain"
                const playBtn = document.querySelector('.play-btn');
                playBtn.style.animation = 'pulse 2s ease-in-out infinite';
                
            } else {
                playIcon.textContent = '▶';
                isPlaying = false;
                
                const playBtn = document.querySelector('.play-btn');
                playBtn.style.animation = 'none';
            }
        }

        // Tambahkan animasi pulse
        const style = document.createElement('style');
        style.textContent = `
            @keyframes pulse {
                0% { box-shadow: 0 0 0 0 rgba(212, 175, 55, 0.4); }
                70% { box-shadow: 0 0 0 20px rgba(212, 175, 55, 0); }
                100% { box-shadow: 0 0 0 0 rgba(212, 175, 55, 0); }
            }
        `;
        document.head.appendChild(style);

        // Scroll halus untuk navigasi
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Inisialisasi semua saat halaman dimuat
        window.addEventListener('load', function() {
            startBreathingAnimation();
            updateTimerDisplay();
        });

        // Tambahkan animasi fade-in lembut untuk bagian
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Amati semua bagian
        document.querySelectorAll('.section').forEach(section => {
            observer.observe(section);
        });

        // Efek parallax halus untuk elemen latar belakang
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            
            document.querySelector('.bg-animation').style.transform = `translateY(${rate}px)`;
        });

        // Animasi hover untuk kartu tips
        document.querySelectorAll('.tip-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Efek teks mengetik untuk kutipan
        function typeWriter(element, text, speed = 50) {
            element.textContent = '';
            let i = 0;
            const timer = setInterval(function() {
                if (i < text.length) {
                    element.textContent += text.charAt(i);
                    i++;
                } else {
                    clearInterval(timer);
                }
            }, speed);
        }

        // Fungsi untuk menambah efek khusus pada kutipan baru
        function changeQuoteWithEffect() {
            const quoteElement = document.getElementById('currentQuote');
            const authorElement = document.getElementById('quoteAuthor');
            const randomIndex = Math.floor(Math.random() * quotes.length);
            
            // Fade out
            quoteElement.style.opacity = '0';
            authorElement.style.opacity = '0';
            
            setTimeout(() => {
                // Ganti teks dan fade in
                quoteElement.textContent = quotes[randomIndex].text;
                authorElement.textContent = quotes[randomIndex].author;
                quoteElement.style.opacity = '1';
                authorElement.style.opacity = '1';
            }, 300);
        }

        // Ganti fungsi changeQuote dengan yang memiliki efek
        function changeQuote() {
            changeQuoteWithEffect();
        }

        // Auto-change quote setiap 30 detik
        setInterval(changeQuoteWithEffect, 30000);

        // Tambahkan efek cahaya mengikuti kursor
        document.addEventListener('mousemove', (e) => {
            const cursor = document.querySelector('.cursor-light');
            if (!cursor) {
                const light = document.createElement('div');
                light.className = 'cursor-light';
                light.style.cssText = `
                    position: fixed;
                    width: 300px;
                    height: 300px;
                    background: radial-gradient(circle, rgba(212, 175, 55, 0.03), transparent 70%);
                    border-radius: 50%;
                    pointer-events: none;
                    z-index: 5;
                    transform: translate(-50%, -50%);
                    transition: opacity 0.3s ease;
                `;
                document.body.appendChild(light);
            }
            
            const light = document.querySelector('.cursor-light');
            light.style.left = e.clientX + 'px';
            light.style.top = e.clientY + 'px';
        });

        // Sembunyikan efek cahaya kursor saat mouse keluar dari window
        document.addEventListener('mouseleave', () => {
            const light = document.querySelector('.cursor-light');
            if (light) {
                light.style.opacity = '0';
            }
        });

        document.addEventListener('mouseenter', () => {
            const light = document.querySelector('.cursor-light');
            if (light) {
                light.style.opacity = '1';
            }
        });
    </script>
</body>
</html>