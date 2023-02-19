
let headerNavbtnOn = true
const headerNavBtn =  document.getElementsByClassName('header-nav-btn');
const headerNav =  document.getElementsByClassName('header-nav');

const headerNavClick = () => {
    headerNavbtnOn ? headerNavBtn[0].classList.add("active") :  headerNavBtn[0].classList.remove("active");
    headerNavbtnOn ? headerNav[0].classList.add("active") :  headerNav[0].classList.remove("active");
    headerNavbtnOn = !headerNavbtnOn;
}

headerNavBtn[0].onclick = headerNavClick;

