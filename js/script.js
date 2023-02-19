
let headerNavbtnOn = true
const headerNavBtn =  document.getElementsByClassName('header-nav-btn');
const headerNav =  document.getElementsByClassName('header-nav');

const headerNavClick = () => {
    headerNavbtnOn ? headerNavBtn[0].classList.add("active") :  headerNavBtn[0].classList.remove("active");
    headerNavbtnOn ? headerNav[0].classList.add("active") :  headerNav[0].classList.remove("active");
    headerNavbtnOn = !headerNavbtnOn;
}

headerNavBtn[0].onclick = headerNavClick;

const pageTop = document.getElementsByClassName('pageTop')[0];
let pageTopOn = 0;
const scrollTop = () => {
    window.scroll({ top: 0, behavior: "smooth" });
}

pageTop.addEventListener('click',scrollTop)

window.addEventListener('scroll',function(){

   if(window.pageYOffset > 150 && pageTopOn === 0){
    pageTopOn = 1;
    pageTop.animate([{opacity: '0'}, {opacity: '1'}], 500)
    pageTop.classList.add('active')
}else if(window.pageYOffset <= 150 && pageTopOn === 1){
    pageTopOn = 0;
    pageTop.animate([{opacity: '1'}, {opacity: '0'}], 500)
    pageTop.classList.remove('active')
}

});   