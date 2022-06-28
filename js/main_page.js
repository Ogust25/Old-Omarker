const page = document.querySelector('#page');
const nav = document.querySelector('#nav');
const bio = document.querySelector('#bio');

window.addEventListener('scroll', () => {
    let scrollY = this.scrollY;
    if(scrollY >= 775){
        bio.classList.remove('invert');
        nav.classList.add('text-white');
    }else{
        bio.classList.add('invert');
        nav.classList.remove('text-white');
    }
})  