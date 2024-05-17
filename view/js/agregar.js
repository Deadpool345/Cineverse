let imagen  = document.querySelector('#imagen');
imagen.addEventListener('change',() => {
    document.querySelector('#nombre-a').innerText = imagen.files[0].name;
});
