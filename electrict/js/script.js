const canvas = document.getElementById("effectCanvas");
const ctx = canvas.getContext("2d");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
let snowflakes = [], raindrops = [];

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
    ctx.beginPath();
    snowflakes.forEach((s) => {
        ctx.moveTo(s.x, s.y);
        ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2, true);
    });
    ctx.fill();

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
            snowflakes[i] = { x: Math.random() * canvas.width, y: 0, r: s.r, d: s.d };
        }
    });
    raindrops.forEach((r, i) => {
        r.y += r.d * 2;
        if (r.y > canvas.height) {
            raindrops[i] = { x: Math.random() * canvas.width, y: 0, l: r.l, d: r.d };
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

function changeSlider1(newIndex = null) {
    if (newIndex !== null) {
        index1 = newIndex;
    } else {
        index1 = (index1 + 1) % slider1Images.length;
    }
    document.getElementById("slider1").src = slider1Images[index1];
}

let autoSlideInterval = setInterval(changeSlider1, 2000);

document.getElementById("prevBtn").addEventListener("click", () => {
    clearInterval(autoSlideInterval);
    index1 = (index1 - 1 + slider1Images.length) % slider1Images.length;
    changeSlider1(index1);
    autoSlideInterval = setInterval(changeSlider1, 2000);
});

document.getElementById("nextBtn").addEventListener("click", () => {
    clearInterval(autoSlideInterval);
    index1 = (index1 + 1) % slider1Images.length;
    changeSlider1(index1);
    autoSlideInterval = setInterval(changeSlider1, 2000);
});

const menuIcon = document.getElementById('menuIcon');
menuIcon.addEventListener('click', () => {
    menuIcon.classList.toggle('active');
});