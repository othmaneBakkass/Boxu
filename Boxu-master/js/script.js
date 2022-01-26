const navTabs = document.querySelector('.nav-tabs');
const navOpen = document.querySelector('.nav-icon-open');
const navClose = document.querySelector('.nav-icon-close');
const logo = document.querySelector('.logo');


/*-------------------navbar---------------- */
function navAnimation() {
    navOpen.classList.toggle('nav-hidden');
    navClose.classList.toggle('nav-hidden');
    navTabs.classList.toggle('nav-tabs-show');
    setTimeout(() => {
        logo.classList.toggle('logo-drk');
    }, 150);
}


navOpen.addEventListener('click', () => {
    navClose.classList.add('nav-icon-animation');
    navAnimation();
    setTimeout(() => {
        navClose.classList.remove('nav-icon-animation');
    }, 700);


})
navClose.addEventListener('click', () => {
    navOpen.classList.add('nav-icon-animation');
    navAnimation();
    setTimeout(() => {
        navOpen.classList.remove('nav-icon-animation');
    }, 700);
})
/*-------------------navbar---------------- */
