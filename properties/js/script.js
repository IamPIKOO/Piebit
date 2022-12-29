

// VIEW MODE AND SEARCH
const body = document.querySelector("body"),
      navigationBar = document.querySelector("#navigationBar"),
      modeToggle = document.querySelector(".darkLight"),
      searchToggle = document.querySelector(".searchToggle");


let getMode = localStorage.getItem("mode");
    if(getMode && getMode === "dark-mode"){
      body.classList.add("dark");
}

// js code to toggle dark and light mode
modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");

        // js code to keep user selected mode even page refresh or file reopen
        if(!body.classList.contains("dark")){
            localStorage.setItem("mode" , "light-mode");
        }else{
            localStorage.setItem("mode" , "dark-mode");
        }
    });

// js code to toggle search box
searchToggle.addEventListener("click" , () => {
    searchToggle.classList.toggle("active");

});



// PROFILE DROPDOWN
const profileContents = document.querySelector('#navigationBar .profileContents');
const imgProfile = profileContents.querySelector('img');
const dropdownProfile = profileContents.querySelector('.profileLink');

imgProfile.addEventListener('click', function () {
	  dropdownProfile.classList.toggle('show');
})

// PROFILE DROPDOWN DISAPPEARS WHEN CLICK OUTSIDE IT 
window.addEventListener('click', function (e) {
	if(e.target !== imgProfile) {
		if(e.target !== dropdownProfile) {
			if(dropdownProfile.classList.contains('show')) {
				dropdownProfile.classList.remove('show');
			}
		}
	}

});



// //MENU OPEN AND CLOSE METHOD 2

// const menuController = document.querySelector("#menuController");
// const sideMenu = document.querySelector("#sideMenu");

// menuController.addEventListener("click", () => {
//     menuController.classList.toggle("active");
//     sideMenu.classList.toggle("active");
// });

// //MENU DISAPPEARS WHEN CLICK ANY OF IT'S ITEMS
// document.querySelectorAll(".menuItem").forEach(n => n.
//     addEventListener("click", () => {
//         menuController.classList.remove("active");
//         sideMenu.classList.remove("active");
// }));



// MENU DROPDOWN OPTION 
const allDropdown = document.querySelectorAll('#navigationBar .sideMenudropdown');
const sidebar = document.getElementById('#navigationBar');

allDropdown.forEach(item=> {
	const a = item.parentElement.querySelector('a:first-child');
	a.addEventListener('click', function (e) {
		e.preventDefault();

		if(!this.classList.contains('active')) {
			allDropdown.forEach(i=> {
				const aLink = i.parentElement.querySelector('a:first-child');

				aLink.classList.remove('active');
				i.classList.remove('view');
			})
		}

		this.classList.toggle('active');
		item.classList.toggle('view');
	})
})

















