const productsNav = document.querySelector('.products-nav');

const productsNavLi = productsNav.querySelectorAll('ul li')
const productsNavLiArr = Array.from(productsNavLi)

const productItemTitle = document.querySelectorAll('.product-item-title');
const productItemTitleArr =  Array.from(productItemTitle)

const scrollProduct = (index) => {
    const headerEl = document.querySelector('header')
    window.scroll({ top: productItemTitleArr[index].offsetTop - headerEl.clientHeight, behavior: "smooth" });
}

productsNavLiArr.map((li,index)=>{
    li.addEventListener('click',() => {scrollProduct(index)})
})