const aside = document?.querySelector('#aside');
const main = document?.querySelector('#main');
const btn_close_aside = document?.querySelector('#btn_close_aside');
const btn_open_aside = document?.querySelector('#btn_open_aside');

const open_aside = () => {
    btn_open_aside.classList.add('d-none');
    main.style.marginLeft = '250px';
    aside.classList.replace('animate__zoomOutLeft', 'animate__zoomInLeft');
}

const close_aside = () => {
    aside.classList.add('animate__animated');
    aside.classList.add('animate__zoomOutLeft');
    main.classList.remove('position-absolute');
    main.classList.add('animate__animated');
    main.classList.add('animate__fadeInRightBig');
    btn_open_aside.classList.remove('d-none');
    btn_open_aside.classList.remove('position-absolute');
    btn_open_aside.classList.add('position-fixed');
    main.style.marginLeft = 0;
    
}

btn_open_aside.addEventListener('click', open_aside);
btn_close_aside.addEventListener('click', close_aside);