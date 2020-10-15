var toggleMenu = document.querySelector('#toggle-menu'),
	menu = document.querySelector('.navigation');

var toggleSearch = document.querySelector('#toggle-search'),
	search = document.querySelector('.search');

toggleMenu.addEventListener("click", function() {
 	if (menu.style.display == "block") {
 		menu.style.display = "none";
 	} else {
 		menu.style.display = "block";
 	}
});

toggleSearch.addEventListener("click", function() {
 	if (search.style.display == "block") {
 		search.style.display = "none";
 	} else {
 		search.style.display = "block";
 	}
});