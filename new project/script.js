// console.log(document.querySelector(".chose_time_btn_repeat"))

let btn = document.getElementById("button");
let time = document.querySelector(".chose_time_btn_repeat");
let number = 0;
let ChoseTime = document.querySelectorAll(".chose_time_btn");


console.log(ChoseTime);

function btn_time() {

    if(number === 0){
        time.style.display = "flex"
       number = number + 1;
    }
    else{
        time.style.display = "none"
        number = number - 1;
    }

};

