let trailers  = document.querySelector('#trailer');
trailers.addEventListener('change',() => {
    document.querySelector('#nombre-v').innerText = trailers.files[0].name;
});
