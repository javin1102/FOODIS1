const hamburger = document.querySelector('.hamburger');
const ul = document.querySelector('.header ul');
hamburger.addEventListener('click',()=>{
    if(hamburger.classList.contains('open'))
    {
        hamburger.classList.remove('open');
        ul.classList.remove('active');
    }
    else
    {
        hamburger.classList.add('open')
        ul.classList.add('active')
    }
    
})
