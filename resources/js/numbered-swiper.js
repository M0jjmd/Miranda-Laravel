const swiper = new Swiper('.numbered-swiper', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return `<span class="${className}">${index + 1}</span>`
        },
    },
    on: {
        init: function () {
            updatePagination(this)
        },
        slideChange: function () {
            updatePagination(this)
        },
    },
})

function updatePagination(swiper) {
    const bullets = document.querySelectorAll('.swiper-pagination span')
    const totalBullets = bullets.length
    const activeIndex = swiper.activeIndex
    const visibleCount = 5

    let start = Math.max(activeIndex - Math.floor(visibleCount / 2), 0)
    let end = start + visibleCount

    if (end > totalBullets) {
        end = totalBullets
        start = Math.max(end - visibleCount, 0)
    }

    if (start < 0) {
        start = 0
    }

    bullets.forEach((bullet, index) => {
        bullet.style.display = (index >= start && index < end) ? 'inline-block' : 'none'
    })
}

const goStartButton = document.querySelector('.btn-go-start');
const goEndButton = document.querySelector('.btn-go-end');

if (goStartButton && goEndButton) {
    goStartButton.addEventListener('click', () => {
        swiper.slideTo(0);
        console.log("Navegar a la primera diapositiva");
    });

    goEndButton.addEventListener('click', () => {
        swiper.slideTo(swiper.slides.length - 1);
        console.log("Navegar a la última diapositiva");
    });
} else {
    console.error('Botones no encontrados en el DOM');
}