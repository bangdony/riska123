<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untuk Kamu 💖</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        :root {
            --primary-color: #ff6b9d;
            --secondary-color: #d63384;
            --light-pink: #ffcce0;
            --dark-pink: #b52a6f;
        }
        
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fff5f5, var(--light-pink));
            min-height: 100vh;
            overflow-x: hidden;
            color: #333;
        }
        
        /* Background hearts */
        .heart-bg {
            position: fixed;
            top: -10%;
            color: rgba(255, 107, 157, 0.3);
            font-size: 24px;
            animation: fall linear infinite;
            z-index: 0;
            user-select: none;
        }
        
        @keyframes fall {
            to {
                transform: translateY(110vh) rotate(360deg);
                opacity: 0;
            }
        }
        
        /* Main container */
        .container {
            position: relative;
            max-width: 600px;
            margin: 50px auto;
            padding: 40px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(214, 51, 132, 0.2);
            z-index: 10;
            text-align: center;
            animation: fadeIn 1s ease-out;
            border: 2px solid var(--light-pink);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Photo frame */
        .photo-frame {
            width: 220px;
            height: 220px;
            margin: 0 auto 25px;
            border-radius: 50%;
            overflow: hidden;
            border: 8px solid white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15), 
                        inset 0 0 20px rgba(214, 51, 132, 0.3);
            position: relative;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(214, 51, 132, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(214, 51, 132, 0); }
            100% { box-shadow: 0 0 0 0 rgba(214, 51, 132, 0); }
        }
        
        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .photo-frame:hover img {
            transform: scale(1.05);
        }
        
        /* Title styling */
        h1 {
            color: var(--secondary-color);
            margin-bottom: 20px;
            font-weight: 700;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
        }
        
        .heart-icon {
            font-size: 3rem;
            color: var(--primary-color);
            animation: heartbeat 1.5s infinite;
            margin: 15px 0;
            display: inline-block;
        }
        
        @keyframes heartbeat {
            0% { transform: scale(1); }
            25% { transform: scale(1.2); }
            50% { transform: scale(1); }
            75% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        
        /* Message styling */
        .message {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 15px;
            box-shadow: inset 0 0 10px rgba(214, 51, 132, 0.1);
        }
        
        /* Buttons */
        .btn-confess {
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
            margin: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }
        
        .btn-yes {
            background: linear-gradient(45deg, var(--secondary-color), var(--primary-color));
            color: white;
        }
        
        .btn-no {
            background: linear-gradient(45deg, #6c757d, #495057);
            color: white;
        }
        
        .btn-confess:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        
        .btn-confess:active {
            transform: translateY(1px);
        }
        
        /* Music player */
        .music-player {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: white;
            padding: 10px 15px;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            z-index: 100;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .music-control {
            background: none;
            border: none;
            font-size: 1.2rem;
            color: var(--secondary-color);
            cursor: pointer;
        }
        
        /* Floating hearts */
        .floating-heart {
            position: fixed;
            font-size: 24px;
            color: var(--primary-color);
            animation: float 5s ease-in-out infinite;
            z-index: 5;
            pointer-events: none;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(10px, -10px) rotate(5deg); }
            50% { transform: translate(-5px, 5px) rotate(-5deg); }
            75% { transform: translate(5px, -5px) rotate(3deg); }
        }
        
        /* Responsive design */
        @media (max-width: 576px) {
            .container {
                padding: 30px 20px;
                margin: 20px auto;
            }
            
            .photo-frame {
                width: 180px;
                height: 180px;
            }
            
            .btn-confess {
                padding: 10px 25px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

<!-- Background hearts -->
<?php for ($i = 0; $i < 30; $i++): ?>
    <div class="heart-bg" style="left: <?= rand(0,100); ?>%; animation-duration: <?= rand(10,20); ?>s; animation-delay: <?= rand(0,10); ?>s;">❤️</div>
<?php endfor; ?>

<!-- Floating hearts -->
<div id="floatingHearts"></div>

<!-- Main container -->
<div class="container">
    <div class="photo-frame">
        <img src="img/lopo.jpeg" alt="Foto Kamu">
    </div>
    
    <h1>Untuk Kamu 💖</h1>
    
    <div class="heart-icon">
        <i class="fas fa-heart"></i>
    </div>
    
    <div class="message">
        Hai Sayang,<br>
        Setiap hari bersamamu adalah anugerah terindah dalam hidupku.<br>
        Kamu membuat dunia terasa lebih berwarna...<br><br>
        <strong>Maukah kamu menjadi pacarku? 🌹</strong>
    </div>
    
    <div class="buttons">
        <button class="btn-confess btn-yes animate__animated animate__pulse animate__infinite" onclick="jawab('ya')">
            <i class="fas fa-heart"></i> Mau Dong!
        </button>
        <button class="btn-confess btn-no" id="noBtn" onmouseover="runAway()">
            <i class="fas fa-times"></i> Nggak Dulu
        </button>
    </div>
</div>

<!-- Music player -->
<div class="music-player">
    <button class="music-control" onclick="toggleMusic()">
        <i class="fas fa-music"></i>
    </button>
    <span>Romantic Song</span>
</div>

<!-- Audio element -->
<audio id="bgMusic" loop>
    <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
    Your browser does not support audio element.
</audio>

<script>
    // Music control
    const bgMusic = document.getElementById('bgMusic');
    let isPlaying = false;
    
    // Auto play music after user interaction
    document.addEventListener('click', function() {
        if (!isPlaying) {
            bgMusic.play();
            isPlaying = true;
            document.querySelector('.music-control i').classList.replace('fa-music', 'fa-pause');
        }
    }, { once: true });
    
    function toggleMusic() {
        if (isPlaying) {
            bgMusic.pause();
            document.querySelector('.music-control i').classList.replace('fa-pause', 'fa-music');
        } else {
            bgMusic.play();
            document.querySelector('.music-control i').classList.replace('fa-music', 'fa-pause');
        }
        isPlaying = !isPlaying;
    }
    
    // Create floating hearts
    function createFloatingHearts() {
        const heartsContainer = document.getElementById('floatingHearts');
        const hearts = ['❤️', '💖', '💕', '💗', '💓', '💘'];
        
        for (let i = 0; i < 15; i++) {
            const heart = document.createElement('div');
            heart.className = 'floating-heart';
            heart.textContent = hearts[Math.floor(Math.random() * hearts.length)];
            heart.style.left = Math.random() * 100 + 'vw';
            heart.style.top = Math.random() * 100 + 'vh';
            heart.style.fontSize = (Math.random() * 20 + 15) + 'px';
            heart.style.animationDuration = (Math.random() * 5 + 5) + 's';
            heart.style.animationDelay = (Math.random() * 5) + 's';
            heart.style.opacity = Math.random() * 0.5 + 0.3;
            
            heartsContainer.appendChild(heart);
        }
    }
    
    // Run away button
    function runAway() {
        const noBtn = document.getElementById('noBtn');
        const container = document.querySelector('.container');
        const containerRect = container.getBoundingClientRect();
        
        const maxX = containerRect.width - noBtn.offsetWidth - 30;
        const maxY = containerRect.height - noBtn.offsetHeight - 30;
        
        const randomX = Math.floor(Math.random() * maxX);
        const randomY = Math.floor(Math.random() * maxY);
        
        noBtn.style.position = 'absolute';
        noBtn.style.left = randomX + 'px';
        noBtn.style.top = randomY + 'px';
        
        // Change button text
        const responses = [
            'Yakin?', 
            'Jangan dong', 
            'Aku sedih lho', 
            'Coba dipikir lagi', 
            'Pleaseee',
            'Kasihan aku',
            'Hiks :(',
            'Sayang...'
        ];
        noBtn.innerHTML = `<i class="fas fa-times"></i> ${responses[Math.floor(Math.random() * responses.length)]}`;
        
        // Reset button after 3 seconds
        setTimeout(() => {
            noBtn.style.position = '';
            noBtn.style.left = '';
            noBtn.style.top = '';
            noBtn.innerHTML = '<i class="fas fa-times"></i> Nggak Dulu';
        }, 3000);
    }
    
    // Confession response
    function jawab(pilihan) {
        if (pilihan === 'ya') {
            // Create celebration effects
            createFireworks();
            
            Swal.fire({
                title: '<span style="color: var(--secondary-color);">Yeay! ❤️</span>',
                html: `
                    <div style="font-size: 1.2rem; line-height: 1.6;">
                        <p>Terima kasih sudah mau menerima aku!</p>
                        <p>Ini adalah hari terindah dalam hidupku.</p>
                        <p>Aku berjanji akan membuatmu bahagia selalu.</p>
                    </div>
                `,
                imageUrl: 'https://i.pinimg.com/564x/4c/ec/3f/4cec3f0f5e8d5a2c4f8e5a2c4f8e5a2c.jpg',
                imageWidth: 200,
                imageHeight: 200,
                imageAlt: 'Kita',
                confirmButtonText: 'Aamiin Ya Allah',
                background: 'rgba(255, 255, 255, 0.9)',
                backdrop: `
                    rgba(214, 51, 132, 0.4)
                    url("https://i.gifer.com/7efs.gif")
                    center top
                    no-repeat
                `,
                showClass: {
                    popup: 'animate__animated animate__zoomIn'
                },
                customClass: {
                    confirmButton: 'btn-confess btn-yes',
                    popup: 'swal-popup'
                }
            });
        } else {
            Swal.fire({
                icon: 'info',
                title: '<span style="color: var(--secondary-color);">Aduh 😢</span>',
                html: `
                    <div style="font-size: 1.1rem;">
                        Tidak apa-apa...<br>
                        Aku akan tetap menunggu dan mendoakanmu yang terbaik selalu.
                    </div>
                `,
                confirmButtonText: 'Terima kasih',
                background: 'rgba(255, 255, 255, 0.9)',
                backdrop: `
                    rgba(0, 0, 0, 0.4)
                    url("https://i.gifer.com/7XUx.gif")
                    center top
                    no-repeat
                `,
                showClass: {
                    popup: 'animate__animated animate__fadeIn'
                }
            });
        }
    }
    
    // Create fireworks effect
    function createFireworks() {
        const colors = ['#ff0000', '#ff69b4', '#ff1493', '#00ff00', '#ffff00', '#ff4500'];
        
        for (let i = 0; i < 50; i++) {
            setTimeout(() => {
                const firework = document.createElement('div');
                firework.style.position = 'fixed';
                firework.style.width = '6px';
                firework.style.height = '6px';
                firework.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                firework.style.borderRadius = '50%';
                firework.style.left = Math.random() * 100 + 'vw';
                firework.style.top = Math.random() * 100 + 'vh';
                firework.style.boxShadow = `0 0 10px 2px ${colors[Math.floor(Math.random() * colors.length)]}`;
                firework.style.zIndex = '100';
                firework.style.animation = `firework 1s ease-out forwards`;
                
                document.body.appendChild(firework);
                
                // Remove after animation
                setTimeout(() => {
                    firework.remove();
                }, 1000);
            }, i * 100);
        }
        
        // Add keyframes
        const style = document.createElement('style');
        style.innerHTML = `
            @keyframes firework {
                0% { transform: translate(0, 0); opacity: 1; }
                100% { transform: translate(${Math.random() * 200 - 100}px, ${Math.random() * 200 - 100}px); opacity: 0; }
            }
        `;
        document.head.appendChild(style);
        
        setTimeout(() => {
            style.remove();
        }, 2000);
    }
    
    // Initialize effects when page loads
    window.onload = function() {
        createFloatingHearts();
    };
</script>

</body>
</html>