/**
 * Project: nine-march-two | "Инновации на пальцах"
 * Edition: Final Stable Build 2026
 * Description: Автозагрузка библиотек + Three.js + Исправленные счетчики + Валидация
 */

(function() {
    // 1. КОНФИГУРАЦИЯ БИБЛИОТЕК
    const LIBRARIES = [
        { name: 'THREE', url: 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js' },
        { name: 'anime', url: 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js' },
        { name: 'AOS', url: 'https://unpkg.com/aos@next/dist/aos.js' },
        { name: 'lucide', url: 'https://unpkg.com/lucide@latest' }
    ];

    // Загрузчик скриптов
    const loadScript = (lib) => {
        return new Promise((resolve, reject) => {
            if (window[lib.name] || (lib.name === 'anime' && window.anime)) return resolve();
            const s = document.createElement('script');
            s.src = lib.url;
            s.async = true;
            s.onload = resolve;
            s.onerror = () => reject(`Ошибка загрузки: ${lib.url}`);
            document.head.appendChild(s);
        });
    };

    // 2. ГЛАВНАЯ ФУНКЦИЯ ИНИЦИАЛИЗАЦИИ (запускается после загрузки всех либ)
    const initApp = () => {
        console.log("🚀 Все системы готовы. Запуск интерактивности...");

        // --- ИНИЦИАЛИЗАЦИЯ ТРЕТЬИХ ЛИЦ ---
        if (window.lucide) lucide.createIcons();
        if (window.AOS) AOS.init({ duration: 1000, once: true, offset: 100 });

        // --- [A] THREE.JS: HERO BACKGROUND ---
        const initHeroThree = () => {
            const container = document.getElementById('three-container');
            if (!container) return;

            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            camera.position.z = 30;

            const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            
            // Стили холста, чтобы не мешал кнопкам
            Object.assign(renderer.domElement.style, {
                position: 'absolute', top: '0', left: '0',
                width: '100%', height: '100%', zIndex: '1', pointerEvents: 'none'
            });
            container.appendChild(renderer.domElement);

            const geometry = new THREE.IcosahedronGeometry(15, 1);
            const points = new THREE.Points(geometry, new THREE.PointsMaterial({ color: 0x6366f1, size: 0.35 }));
            const wire = new THREE.LineSegments(geometry, new THREE.LineBasicMaterial({ color: 0x6366f1, transparent: true, opacity: 0.15 }));
            scene.add(points, wire);

            let mX = 0, mY = 0;
            window.addEventListener('mousemove', (e) => {
                mX = (e.clientX - window.innerWidth / 2) * 0.0008;
                mY = (e.clientY - window.innerHeight / 2) * 0.0008;
            });

            const animate = () => {
                requestAnimationFrame(animate);
                points.rotation.y += 0.0012;
                wire.rotation.y += 0.0012;
                scene.rotation.y += (mX - scene.rotation.y) * 0.05;
                scene.rotation.x += (mY - scene.rotation.x) * 0.05;
                renderer.render(scene, camera);
            };
            animate();

            window.addEventListener('resize', () => {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            });
        };
        initHeroThree();

        // --- [B] СЧЕТЧИКИ: ИСПРАВЛЕННАЯ ЛОГИКА ---
        const animateStats = () => {
            document.querySelectorAll('.stat-item__number').forEach(num => {
                const target = parseInt(num.getAttribute('data-target'));
                if (isNaN(target)) return;
                
                anime({
                    targets: num,
                    innerHTML: [0, target],
                    round: 1,
                    easing: 'easeOutExpo',
                    duration: 2500
                });
            });
        };

        const statsSection = document.querySelector('#about');
        if (statsSection && 'IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    console.log("📊 Запуск счетчиков...");
                    animateStats();
                    observer.unobserve(statsSection);
                }
            }, { threshold: 0.2 }); // Срабатывает раньше (20% видимости)
            observer.observe(statsSection);
        }

        // --- [C] ХЕДЕР И МОБИЛЬНОЕ МЕНЮ ---
        const header = document.querySelector('.header');
        const burger = document.querySelector('.burger');
        const mobileMenu = document.getElementById('mobile-menu');

        window.addEventListener('scroll', () => {
            if (header) header.classList.toggle('header--scrolled', window.scrollY > 50);
        });

        if (burger && mobileMenu) {
            const toggleMenu = () => {
                burger.classList.toggle('active');
                mobileMenu.classList.toggle('active');
                document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
            };
            burger.addEventListener('click', toggleMenu);
            document.querySelectorAll('.mobile-link').forEach(l => l.onclick = toggleMenu);
        }

        // --- [D] FAQ АККОРДЕОН ---
        document.querySelectorAll('.faq-item__trigger').forEach(trigger => {
            trigger.onclick = () => {
                const parent = trigger.parentElement;
                const isActive = parent.classList.contains('active');
                document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
                if (!isActive) parent.classList.add('active');
            };
        });

        // --- [E] ФОРМА, ВАЛИДАЦИЯ И КАПЧА ---
        const form = document.getElementById('main-form');
        const phone = document.getElementById('phone-input');
        if (phone) phone.oninput = (e) => e.target.value = e.target.value.replace(/\D/g, '');

        if (form) {
            const captchaLabel = document.getElementById('captcha-question');
            const n1 = Math.floor(Math.random() * 10), n2 = Math.floor(Math.random() * 7);
            if (captchaLabel) captchaLabel.innerText = `${n1} + ${n2}`;

            form.onsubmit = (e) => {
                e.preventDefault();
                const ans = document.getElementById('captcha-answer').value;
                if (parseInt(ans) !== (n1 + n2)) {
                    anime({ targets: '#captcha-answer', translateX: [-10, 10, 0], duration: 300 });
                    alert("Неверный ответ капчи!");
                    return;
                }
                form.style.display = 'none';
                document.getElementById('form-success').style.display = 'block';
            };
        }

        // --- [F] COOKIE POPUP ---
        const cookieBox = document.getElementById('cookie-popup');
        if (cookieBox && !localStorage.getItem('cookies_accepted_v2')) {
            setTimeout(() => cookieBox.classList.add('active'), 3000);
            document.getElementById('cookie-accept').onclick = () => {
                localStorage.setItem('cookies_accepted_v2', 'true');
                cookieBox.classList.remove('active');
            };
        }

        // --- [G] МИКРО-АНИМАЦИИ ---
        anime({
            targets: '.anime-float',
            translateY: [-10, 10],
            duration: 3000,
            direction: 'alternate',
            loop: true,
            easing: 'easeInOutSine'
        });
    };

    // СТАРТ ЗАГРУЗКИ
    Promise.all(LIBRARIES.map(loadScript))
        .then(() => initApp())
        .catch(err => console.error("❌ Критическая ошибка загрузки:", err));
})();