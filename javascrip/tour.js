const formLogin = document.querySelector('.form-login');
const modal = document.querySelector('.modal');
const removeLogin = document.querySelector('.remove-login');
const removeRegisterin = document.querySelector('.remove-register');
const loginProducts = document.querySelectorAll('.login-product');

for(var loginProduct of loginProducts) {
    loginProduct.addEventListener('click', function(){
        formLogin.classList.add('active');
    });
    formLogin.addEventListener('click', function(){
        formLogin.classList.remove('active');
    });
    removeLogin.addEventListener('click', function(){
        formLogin.classList.remove('active');
    });
    removeRegisterin.addEventListener('click', function(){
        formLogin.classList.remove('active');
    });
    modal.addEventListener('click', function(event){
        event.stopPropagation();
    });
}
// form đăng ký
const formRegister = document.querySelector('.form-register');
const register = document.querySelector('.register');
const formLoginin = document.querySelector('.form-login');
const removeRegister = document.querySelector('.remove-register');
const registerProducts = document.querySelectorAll('.register-product');

for(var registerProduct of registerProducts) {
    registerProduct.addEventListener('click', function(){
        formRegister.classList.add('active');
    });
    formRegister.addEventListener('click', function(){
        formRegister.classList.remove('active');
    });
    removeRegister.addEventListener('click', function(){
        formRegister.classList.remove('active');
    });
    formRegister.addEventListener('click', function(){
        formLoginin.classList.remove('active');
    });
    register.addEventListener('click', function(event){
        event.stopPropagation();
    });
}