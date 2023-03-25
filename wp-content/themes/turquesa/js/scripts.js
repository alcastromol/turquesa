let header =  document.querySelector(".header");

window.addEventListener("scroll", ()=>{
	let scroll = document.documentElement.scrollTop;
	console.log(scroll);
	scroll > 400 ? header.classList.add('bg-obscuro') : header.classList.remove('bg-obscuro');
});