function diaDaSemana(x) {
switch (x) {
    case '1':
        console.log('Segunda-feira');
        break;
    case '2':
        console.log('Terça-feira');
        break;
    case '3':
        console.log('Quarta-feira');
        break;
    case '4':
        console.log('Quinta-feira');
        break;
    case'5':
        console.log('Sexta-feira');
        break;
    case'6':
        console.log('Sábado');
        break;
    case 7:
        return 'Domingo';
}
}
document.getElementById('dia').innerHTML = diaDaSemana(7);
console.log(diaDaSemana(7));