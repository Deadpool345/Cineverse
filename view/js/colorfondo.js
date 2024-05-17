function changeBackground() {
    var section = document.getElementById("mySection");
    var section2 = document.getElementById("mySection");
    var checkbox = document.getElementById("visibleSoon");
    var check= document.getElementById("MyCarte");
    var arriba = document.getElementById("imgprueba1");
    var abajo = document.getElementById("imgprueba2");
    var arriba1 = document.getElementById("imgprueba3");
    var abajo2 = document.getElementById("imgprueba4");

    if (checkbox.checked == true) {
      section.classList.add("checked");
      arriba.classList.add("flechavisible");
      abajo.classList.remove("flechavisible");
    } else {
      section.classList.remove("checked");
      arriba.classList.remove("flechavisible");
      abajo.classList.add("flechavisible");
    }
    if (check.checked == true) {
      section2.classList.add("checked");
      arriba1.classList.add("flechavisible");
      abajo2.classList.remove("flechavisible");
    } else {
      section2.classList.add("checked");
      arriba1.classList.remove("flechavisible");
      abajo2.classList.add("flechavisible");
    }
  }
