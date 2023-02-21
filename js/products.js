const productsNav = document.querySelector('.products-nav');

const productsNavLi = productsNav.querySelectorAll('ul li')
const productsNavLiArr = Array.from(productsNavLi)

const productItemTitle = document.querySelectorAll('.product-item-title');
const productItemTitleArr =  Array.from(productItemTitle)

const scrollProduct = (index) => {
    window.scroll({ top: productItemTitleArr[index].offsetTop, behavior: "smooth" });
}

productsNavLiArr.map((li,index)=>{
    li.addEventListener('click',() => {scrollProduct(index)})
})