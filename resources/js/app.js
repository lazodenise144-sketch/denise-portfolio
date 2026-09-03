// Particle background (hero)
(function () {
    const canvas = document.getElementById('particle-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let particles = [];
    let w, h, raf;

    function resize() {
        w = canvas.width = canvas.offsetWidth;
        h = canvas.height = canvas.offsetHeight;
    }

    function createParticles() {
        particles = Array.from({ length: Math.min(70, Math.floor(w / 18)) }, () => ({
            x: Math.random() * w,
            y: Math.random() * h,
            r: Math.random() * 2 + 0.5,
            vx: (Math.random() - 0.5) * 0.4,
            vy: (Math.random() - 0.5) * 0.4,
        }));
    }

    function draw() {
        ctx.clearRect(0, 0, w, h);
        ctx.fillStyle = 'rgba(96,165,250,0.7)';
        particles.forEach((p) => {
            p.x += p.vx;
            p.y += p.vy;
            if (p.x < 0 || p.x > w) p.vx *= -1;
            if (p.y < 0 || p.y > h) p.vy *= -1;
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
            ctx.fill();
        });
        // connect lines
        for (let i = 0; i < particles.length; i++) {
            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const dist = Math.hypot(dx, dy);
                if (dist < 120) {
                    ctx.strokeStyle = `rgba(56,189,248,${0.16 * (1 - dist / 120)})`;
                    ctx.lineWidth = 1;
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.stroke();
                }
            }
        }
        raf = requestAnimationFrame(draw);
    }

    resize();
    createParticles();
    draw();
    window.addEventListener('resize', () => {
        resize();
        createParticles();
    });
})();

// Reveal on scroll
(function () {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12 }
    );
    document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
})();

// Mobile nav toggle
(function () {
    const btn = document.getElementById('nav-toggle');
    const menu = document.getElementById('nav-menu');
    if (!btn || !menu) return;
    btn.addEventListener('click', () => {
        const open = menu.classList.toggle('hidden');
        btn.setAttribute('aria-expanded', String(!open));
    });
    menu.querySelectorAll('a').forEach((a) =>
        a.addEventListener('click', () => menu.classList.add('hidden'))
    );
})();

// Active nav link highlight
(function () {
    const links = document.querySelectorAll('.nav-link');
    const sections = [...links].map((l) => document.querySelector(l.getAttribute('href')));
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const id = '#' + entry.target.id;
                    links.forEach((l) =>
                        l.classList.toggle('text-cool-400', l.getAttribute('href') === id)
                    );
                }
            });
        },
        { threshold: 0.35 }
    );
    sections.forEach((s) => s && observer.observe(s));
})();
