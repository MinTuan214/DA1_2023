const listImages = document.querySelector('.list-images');
const imgs = document.getElementsByClassName('images');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const length = imgs.length;
let index = 0;

    const handle = (function(){
        if(index == length - 1) {
            index = 0;
            let width = imgs[0].offsetWidth;   
            listImages.style.transform = `translateX(0px)`;
        }else{
            index ++;
            let width = imgs[0].offsetWidth;
            console.log(width);
            listImages.style.transform = `translateX(${width * -1 * index}px)`;
        }
    });

let handleEvent = setInterval(handle, 10000);

next.addEventListener('click', function(){
    clearInterval(handleEvent)
    handle(); 
    handleEvent = setInterval(handle, 10000);
});

prev.addEventListener('click', function(){
    clearInterval(handleEvent)
    if(index == 0) {
        index = length - 1;
        let width = imgs[0].offsetWidth;   
        listImages.style.transform = `translateX(${width * -1 * index}px)`;
    }else{
        index --;
        let width = imgs[0].offsetWidth;
        listImages.style.transform = `translateX(${width * -1 * index}px)`;
    }
    handleEvent = setInterval(handle, 10000);
});

//Hiệu ứng đom đóm
let windowCircle = document.querySelector('.slide-show');

let count = 100;
for(let i = 0; i < 100; i++){
    let leftCircle = Math.floor(Math.random() * windowCircle.clientWidth);
    let topCircle = Math.floor(Math.random() * windowCircle.clientHeight);
    console.log(leftCircle);
    let widthCircle = windowCircle * 70;
    let timeCircle = Math.floor((Math.random() * 15) + 20);
    let blurCircle = Math.floor(Math.random() * 30);
    let div = document.createElement('div');
    div.classList.add('circle');
    div.style.left = leftCircle + 'px'
    div.style.top = topCircle + 'px'
    div.style.width = widthCircle + 'px'
    div.style.height = widthCircle + 'px'
    div.style.animationDuration = timeCircle +'s';
    div.style.filter = "blur(" + blurCircle + "px)";
    windowCircle.appendChild(div);
}


function disableAutoSuggest() {
    document.getElementById('datepicker').setAttribute('autocomplete', 'off');
}


