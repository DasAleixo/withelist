const painel = document.querySelector('.painel');
const logout = document.querySelector('.logout');

options = [painel, logout];

options.forEach(element => {
    element.addEventListener('mouseover', () =>{
        element.style.color = 'rgb(255, 94, 0)';
        element.addEventListener('mouseout', ()=>{
            element.style.color= 'white';
        })
    });
});









