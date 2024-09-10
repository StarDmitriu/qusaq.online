// Код для работы с элементами collapse
let collapse = document.querySelectorAll('.collapse');
collapse.forEach(item => {
    item.addEventListener('click', () => {
        item.querySelector('.wrapper').classList.toggle('open');
        item.querySelector('.collapse__content svg').classList.toggle('rotate');
    });
});

// Функция для работы с footer
// function footerFunction() {
//     let x = document.getElementById('footer__f');
//     let img = document.getElementById('footer__img');
//     if (x.style.display === 'none') {
//         x.style.display = 'flex';
//         img.style.transform = 'rotate(180deg)';
//     } else {
//         x.style.display = 'none';
//         img.style.transform = 'rotate(0deg)';
//     }
// }


// footerFunction();

// Инициализация внутреннего слайдера


const teamSwiper = new Swiper(".team__slider", {
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay:{
        delay:2000,
        disableOnInteraction:true
    },
    speed:800,
    loop:true,
    breakpoints:{
        1300:{
            slidesPerView: 3,
        },
        1301:{
            slidesPerView: 4,
        }
    },
});

const innerSwiper = new Swiper(".mySwiper", {
    // slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay:{
        delay:2000,
        disableOnInteraction:true
    },
    loop: true,
    speed:800,
    breakpoints:{
        900:{
            slidesPerView: 1,
        },
        901:{
            slidesPerView: 3,
        }
    }
});

// Инициализация основного слайдера
const mainSwiper = new Swiper(".mySwiperMain", {
    navigation: {
        nextEl: '.portfolio__info-button-cont .s-button-next',
        prevEl: '.portfolio__info-button-cont .s-button-prev',
    },
    allowTouchMove: false,
    nested: true, 
    speed:800,
    loop: true,

});



// Работа с бургер-меню
const burger = document.getElementById('burger__menu');
const headerInner = document.getElementById('header__inner');
const headerInfo = document.getElementById('header__info');

function toggleClass() {
    burger.classList.toggle('burgerBlock');
    if (headerInner.style.display === 'none') {
        headerInner.style.display = 'flex';
        headerInfo.style.paddingTop = '0px';
    } else {
        headerInner.style.display = 'none';
        headerInfo.style.paddingTop = '183px';
    }
}

function burgerNoneFunc() {
    burger.classList.remove('burgerBlock');
    headerInner.style.display = 'flex';
    headerInfo.style.paddingTop = '0px';
}

// Работа с изображениями
const images = document.querySelectorAll('.reviwsImg');

images.forEach((image) => {
    image.addEventListener('click', toggleImage);
});

function toggleImage(event) {
    const image = event.target;
    const body = document.body;
    const overlay = document.querySelector('.overlay');

    image.classList.toggle('enlarged');
    body.classList.toggle('bodyClass');
    overlay.classList.toggle('active');
}

// Открытие PDF в новом окне
document.getElementById('openPdfButton').addEventListener('click', function () {
    window.open('Расход_по_статье.pdf', '_blank');
});

// Новый функционал: Переключение темы (светлая/тёмная)
document.getElementById('themeToggleButton').addEventListener('click', function () {
    document.body.classList.toggle('dark-theme');
});
