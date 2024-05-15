const PI= 3.14159;
function calculaAreaCirculo (raio) {
    let areaCirculo = PI * raio * raio
    return areaCirculo;
}
console.log (calculaAreaCirculo(7));
document.getElementById("circulo").innnerHTML= calculaAreaCirculo(7);
