const priceId = document.getElementById("priceId");

const toppingName = document.getElementById("large");
const avocado = document.getElementsByName("avocado");

let pricePizza = 0;
let priceTotal = 0;
let priceSize = 0;
let typePizza = "";

const handlePizza = (value) => {
    pricePizza = 0;
    if(value.value === "pizza1") {
        typePizza = value.value;
        pricePizza = 8;
    } else if(value.value === "pizza2") {
        typePizza = value.value;
        pricePizza = 10;
    } else {
        typePizza = value.value;
        pricePizza = 12;
    }
    priceTotal = pricePizza;
    priceId.innerText = "$" + priceTotal;
}

const handleToppings = () => {

}

//https://www.dropbox.com/s/bp1dt6jtkcukaka/examination_for_backend_engineer%281%29.pdf?dl=0