const email = document.querySelector('.email');
const pwd = document.querySelector('.pwd');

const login = document.querySelector('.login');

input = [email, pwd];

input.forEach(element => {
    element.addEventListener('focus', () =>{
        element.style.border = '5px  solid rgb(255, 94, 0)'
        element.addEventListener('blur', () =>{
            element.style.border = 'none'
        })   
    });
})

login.addEventListener('mouseover', () =>{login.style.color = 'rgb(255, 94, 0)'});
login.addEventListener('mouseout', () =>{login.style.color = 'white'});










