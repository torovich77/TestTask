let time = document.getElementById('route');
let bina = document.getElementById('time2');
let abin = document.getElementById('time');
let multiple = document.getElementById('time3')
let text = document.querySelector('.text')
let text2 = document.querySelector('.text2')
let input = document.getElementById('num');
let btn = document.getElementById('button')


function test(){
    if(time.selectedIndex === 0) {
        abin.style.display = 'block'
        bina.style.display = 'none'
        multiple.style.display = 'none';
        text.style.display = 'block'
        text2.style.display = 'none'
    }
        else if(time.selectedIndex === 1){
            bina.style.display = 'block';
            abin.style.display = 'none';
            multiple.style.display = 'none';
            text2.style.display = 'none'
        }
        else{
        bina.style.display = 'none';
        abin.style.display = 'none';
        multiple.style.display = 'block';
        text.style.display = 'none'
        text2.style.display = 'block'


    }

}



function price(){
    let price1 = 0;
    if (time.selectedIndex < 2) {
        price1 = 700
    }
    else{
            price1 = 1200;
        }
    return price1;
}




btn.onclick = event => {
    let ticket = input.value * price();
    let itog = document.querySelector('.itog')
    itog.innerHTML = 'Вы выбрали ' + input.value + ' билета по маршруту ' + time.value + ' стоимостью ' + ticket + '<br>' + 'Это путешествие займет у вас 50 минут.'
}



