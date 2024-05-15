function calculaDesconto (precoOriginal, desconto){
   
    return precoOriginal - ((precoOriginal / 100) * desconto); 
}
console.log(calculaDesconto(37.50,15));
document.getElementById("Preco").innerHTML=calculaDesconto(37.50,15);

