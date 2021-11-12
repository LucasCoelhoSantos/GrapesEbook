const products = document.getElementsByClassName("product");
const img = querySelectorAll(".product img");

let idx = 0;

function carrossel() {
    idx++;

    if(idx > img.lenght - 1) {
        idx = 0;
    }

    products.style.transform = `translateX(${-idx * 200}px)`;
}

setInterval(carrossel, 1800);