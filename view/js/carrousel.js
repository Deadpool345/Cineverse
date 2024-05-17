const productContainers = [...document.querySelectorAll('.SectionCarrusel-Contenedor')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})


/* carrousel 2 */
const productContainers2 = [...document.querySelectorAll('.SectionCarrusel-Contenedor2')];
const nxtBtn2 = [...document.querySelectorAll('.nxt-btn2')];
const preBtn2 = [...document.querySelectorAll('.pre-btn2')];

productContainers2.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn2[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn2[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})
