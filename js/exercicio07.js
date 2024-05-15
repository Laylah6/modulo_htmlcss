function idadeAno (x) {
if (x <=12) {
    return "É criança"
}
 else if(x=12, x<18){
   return "É adolescente"
}
else if(x>18){
    return "É adulto"
}
}

document.getElementById("if").innerHTML=idadeAno(20)
console.log(idadeAno(20))