
const menu_cont = document.getElementById('ddd-menu');
const menu_main = menu_cont.querySelector('.menu-main');
const menubtn = menu_cont.querySelector('.hamburger');
const menu_has_sub = menu_main.querySelectorAll('.has-submenu > a');

menubtn.addEventListener('click', () => {
	menu_main.classList.toggle('open');
	menubtn.classList.toggle('open');
})

Array.from(menu_has_sub).forEach((el) => {
	//console.debug({el});
	el.addEventListener('click', () => {
		el.preventDefault();
		el.nextSibling.classList.toggle('hidden');
	})
})

let about_txt='';

let observer = new IntersectionObserver(function (entries, observer) {
	console.debug('An intersection happened!');
	console.debug(entries[0].target.id,entries);
	setTimeout(()=>{
		entries[0].target.classList.add('in_view');		
	}, 500);

	if (entries[0].target.id == 'ddd-about-home') {
		const target = entries[0].target.querySelector('.about-us');
		

		if ( entries[0].target.classList.contains("typew-done") === false ) {
			about_txt = target.innerHTML;
			var typewriter = new Typewriter(target, {
				loop: false,
				delay: 15,
				cursor: ''
			});		

			typewriter
			.pauseFor(1000)
			.typeString(about_txt)
			.start();

			entries[0].target.classList.add("typew-done");
		} else {
			entries[0].target.querySelector('.about-us').innerHTML = about_txt;
		}
	}

});

// The element to observe
let app = document.querySelectorAll('.ddd-homepage .slanted-container section');

// Observe the #app element
Array.from(app).forEach((el)=>{
	observer.observe(el);
})

let initOpening = () => {
	const opening = document.querySelector('.opening-line > span');
	var typewriterz = new Typewriter(opening, {
		loop: false,
		delay: 50,
		cursor: ''
	});

	// console.debug(opening);

	typewriterz
	.pauseFor(500)
	.typeString('Get your')
	.pauseFor(700)
	.typeString('<br><br>')
	.typeString('quote.')
	.start();

}

/*
let detectAnchors = () => {
	const urlHash = location.hash;
	if (urlHash != '' && urlHash.includes('#!') ) {
		cleanHash = urlHash.replace("#!", '')
		console.debug(cleanHash);
		// document.getElementById(cleanHash).scrollIntoView();
		var scrollDiv = document.getElementById(cleanHash).getBoundingClientRect().top;
		window.scrollTo({ top: scrollDiv-100, behavior: 'smooth'});
		//document.getElementById(cleanHash).classlist.add('highlighted');
	}

}
*/

function smoothScrollToParagraph(selector) {
  const targetElement = document.querySelector(selector);

  if (targetElement) {
    const offsetTop = targetElement.offsetTop;
    setTimeout(() => {
    	window.scrollTo({
		  top: offsetTop+280,
		  behavior: 'smooth'
		});
		targetElement.classList.add('highlighted');
    }, 1500);
  } else {
    console.error("Element not found with selector:", selector);
  }
}

// Check if the URL has a hash or parameter
const urlParams = new URLSearchParams(window.location.search);
const hash = window.location.hash;





let initH1 = () => {
	const opening = document.querySelector('#ddd-page-title > h1');
	// console.debug(opening.innerText);
	if (opening !== null) {		

		opening_txt = opening.innerHTML;
		
		var typewriterH1 = new Typewriter(opening, {
			loop: false,
			delay: 50,
			cursor: '_'
		});

		typewriterH1
		.pauseFor(500)
		.typeString(opening_txt)
		.pauseFor(500)
		.start();
	}

}


if (document.readyState !== 'loading') {
    initOpening();
    initH1();

    if (hash) {
	  smoothScrollToParagraph(hash);
	} 
	else if (urlParams.has('paragraph')) {
	  const paragraphId = urlParams.get('paragraph');
	  smoothScrollToParagraph(`#${paragraphId}`);
	}
} else {
	document.addEventListener('DOMContentLoaded', () => {
		initOpening();
		initH1();
	});
	if (hash) {
	  smoothScrollToParagraph(hash);
	} 
	else if (urlParams.has('paragraph')) {
	  const paragraphId = urlParams.get('paragraph');
	  smoothScrollToParagraph(`#${paragraphId}`);
	}
}



let dddcar = document.querySelectorAll('.dddCarousel');
Array.from(dddcar).forEach((c) => {
	let cSlides = c.querySelectorAll('.dddCarouselItem');
	// console.debug(cSlides.length);

	// pallini: tot slides/data-passo
	const cDots = parseInt( cSlides.length / c.dataset.passo );
	// console.debug(cDots);

	for(var i = 0; i < cDots; i++) {
		const cDotsCont = document.querySelector('.dddCarouselNavi[data-target="#'+c.id+'"');
		let cDot = document.createElement('li');
		if (i==0) {
			cDot.classList = 'dddCarouselDot dddCarouselDotActive';
		} else {
			cDot.classList = 'dddCarouselDot';
		}
		cDot.innerHTML = i+1;
		cDotsCont.append(cDot);
	}

});

document.addEventListener('dddCarouselSlideAttivata',(e) => {
    // console.debug(e.detail);
    const dddnavi = document.querySelector('.dddCarouselNavi[data-target="#'+e.detail.carouselId+'"');
    let dddcar = document.getElementById(e.detail.carouselId);
    let dddnaviDots = dddnavi.children;
	for (var i = 0; i < dddnaviDots.length; i++) {
		dddnaviDots[i].classList.remove('dddCarouselDotActive');
		// console.debug('#pallino: ',parseInt(e.detail.indexSlide/dddcar.dataset.passo))
		if (i === parseInt(e.detail.indexSlide/dddcar.dataset.passo)) {
			dddnaviDots[i].classList.add('dddCarouselDotActive');
		}
	}
	if (dddcar) {
		dddcar.scrollIntoView({ behavior: 'smooth' });

		const elementPosition = dddcar.getBoundingClientRect().top;
		const offsetPosition = elementPosition + window.pageYOffset - 100;

		window.scrollTo({
			top: offsetPosition,
			behavior: 'smooth'
		});
	}
});