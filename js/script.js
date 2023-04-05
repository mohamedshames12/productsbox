const menuBtn = document.getElementById("menu");
const navBar = document.querySelector(".navbar");
let closeMenu = document.getElementById('close-menu');

menuBtn.addEventListener("click", (eo) => {
    navBar.classList.add("active");
    closeMenu.style.display = "block";
    
})

closeMenu.addEventListener("click", (eo) => {
    navBar.classList.remove("active");
    closeMenu.style.display = "none";
})


// scroll ++ header
const scrollHeader = () =>{
    const header = document.getElementById('header');
    this.scrollY >= 50 ? header.classList.add('scroll-header')
                       : header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader);



// const options = {
// 	method: 'GET',
// 	headers: {
// 		'X-RapidAPI-Key': '349e548675mshcaaa241ea46b9d0p137e90jsndcdee3152e11',
// 		'X-RapidAPI-Host': 'real-time-product-search.p.rapidapi.com'
// 	}
// };

// fetch('https://real-time-product-search.p.rapidapi.com/search?q=Nike%20shoes&country=us&language=en', options)
// 	.then(response => response.json())
// 	.then(response => console.log(response))
// 	.catch(err => console.error(err));

// const options = {
// 	method: 'GET',
// 	headers: {
// 		'X-RapidAPI-Key': '349e548675mshcaaa241ea46b9d0p137e90jsndcdee3152e11',
// 		'X-RapidAPI-Host': 'temu-com-shopping-api-realtime-api-scrapper-from-temu-com.p.rapidapi.com'
// 	}
// };

// fetch('https://temu-com-shopping-api-realtime-api-scrapper-from-temu-com.p.rapidapi.com/search?keyword=tv', options)
// 	.then(response => response.json())
// 	.then(response => console.log(response.data.goodsList))
// 	.catch(err => console.error(err));


// const options = {
// 	method: 'GET',
// 	headers: {
// 		'X-RapidAPI-Key': '349e548675mshcaaa241ea46b9d0p137e90jsndcdee3152e11',
// 		'X-RapidAPI-Host': 'target-com-shopping-api.p.rapidapi.com'
// 	}
// };

// fetch('https://target-com-shopping-api.p.rapidapi.com/product_search?store_id=1122&keyword=womens%20shoes&offset=0&count=25', options)
// 	.then(response => response.json())
// 	.then(response => console.log(response))
// 	.catch(err => console.error(err));

