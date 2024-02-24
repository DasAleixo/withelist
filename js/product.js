//Inputs

const title = document.querySelector('.title');
const desc = document.querySelector('.desc');

input = [title, desc];

input.forEach(element => {
    element.addEventListener('focus', () =>{
        element.style.border = '5px  solid rgb(255, 94, 0)'
        element.addEventListener('blur', () =>{
            element.style.border = 'none'
        })   
    });
})

//Options style

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

// categoria

const categorias = document.querySelectorAll('.options');

const games = document.querySelectorAll('#games');
const consoles = document.querySelectorAll('#consoles');
const hardwares = document.querySelectorAll('#hardwares')

const valores = [games, consoles, hardwares];

categorias.forEach(button => {
    button.addEventListener('click', ()=>{
        button.style.backgroundImage = 'linear-gradient(to right, #ffa600,#ff7c43)';
        button.classList.add('selected')     

        categorias.forEach(btn => {
            btn != button && (btn.style.backgroundImage='none');
            btn.classList.remove('selected');
        });

        valores.forEach(classe =>{
            classe.forEach(classes =>{
                if(button.classList.contains(classes.id)){
                    classes.classList.remove('inativo');
                    classes.classList.add('ativo');
                    classes.setAttribute('selected', 'selected')
                    console.log(classes);
                } else{
                    classes.classList.add('inativo');
                    classes.removeAttribute('selected', 'selected')
                }   
            })
        })
    })
})



