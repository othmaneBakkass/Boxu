const modalContainer = document.querySelector('.pop-up-message');
const modalBtn = document.querySelector('.pop-up-btn');

modalBtn.addEventListener('click', () => {
    modalContainer.style.visibility = "hidden";
    modalContainer.style.opacity = "0";
})


let key;



for (let i = 0; i < localStorage.length; i++) {
    if (localStorage.key(i) == "show") {
        key = localStorage.key(i);
    }
}
const value = localStorage.getItem(key);
if (value == "true") {
    window.addEventListener('load', () => {
        setTimeout(() => {
            modalContainer.classList.add('pop-up-show')
        }, 1000);
        setTimeout(() => {
            modalContainer.classList.remove('pop-up-show')
        }, 4000);
    });

    localStorage.setItem("show", "false");
}

