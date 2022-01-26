const subCircles = document.querySelector('.sub-circles');
const subBubbles = document.querySelector('.sub-bubbles');
const presetCircles = document.querySelector('.preset-circles');
const presetBubbles = document.querySelector('.preset-bubbles');
const cstCircles = document.querySelector('.cst-circles');
const cstBubbles = document.querySelector('.cst-bubbles');
/*---------------Parallax effect function----------------------*/
observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.intersectionRatio > 0) {
            window.addEventListener('scroll', function elementScroll(e) {

                let offset = window.scrollY;
                entry.target.style.transform = "translateY(" + entry.target.dataset.direction + (offset / entry.target.dataset.speed) + "px)";
            })
        }
        else {
            entry.target.style.transform = "translateY(0px)";
        }
    })
})

const bg = [subCircles, subBubbles, presetCircles, presetBubbles, cstBubbles, cstCircles];
bg.forEach(element => {
    observer.observe(element);
})
/*---------------Parallax effect function----------------------*/
