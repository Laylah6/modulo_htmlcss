let conjunto = [10,50,90,7];
let somatoria=0
function calculaMedia() {
    for(i=0;i<conjunto.length;i++){
        somatoria = somatoria + conjunto[i]
    }
let media = somatoria / conjunto.length 
console.log(media)
document.getElementById("media").innerHTML = media;
}
