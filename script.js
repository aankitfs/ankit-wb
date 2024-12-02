let navbarDiv = document.querySelector('.navbar');
window.addEventListener('scroll',()=> {
    if(document.body.scrollTop > 40 || document.documentElement.scrollTop > 40){
        navbarDiv.classList.add('navbar-cng');
    } else{
        navbarDiv.classList.remove('.navbar-cng');
    }
});



const navbarCollapseDiv = document.getElementById
('navbar-collapse');
const navbarShowBtn = document.getElementById
('navbar-show-btn');
const navbarCloseBtn = document.getElementById
('navbar-close-btn');
// show navbar
navbarShowBtn.addEventListener('click', () => {
    navbarCollapseDiv.classList.add('navbar-collapse-rmw');
});

// Hide sidebar
navbarCloseBtn.addEventListener('click', () => {
    navbarCollapseDiv.classList.remove('navbar-collapse-rmw');
});

document.addEventListener('click', (e) => {
    if (
        e.target.id !== "navbar-collapse" &&
        e.target.id !== "navbar-show-btn" &&
        e.target.parentElement?.id !== "navbar-show-btn"
    ) {
        navbarCollapseDiv.classList.remove('navbar-collapse-rmw');
    }
});
//stop transition and animation duruing windows resizing
let resizeTimer;
window.addEventListener('resize',()=> {
    document.body.classList .add("resize-animation-stopper");
    clearTimeout(resizeTimer);
    resizeTimer=setTimeout(()=> { 
        document.body.classList.remove("resize-animation-stopper");
    },400);

    
});

// light /dark mode toggle
// Light/Dark mode toggle
// Retrieve dark mode preference from localStorage
let darkmode = localStorage.getItem('darkmode');
const modeToggleBtn = document.getElementById('theme-toggle-btn');

// Check if dark mode is enabled on page load
if (darkmode !== null) {
  if (darkmode === 'on') {
    modeToggleBtn.checked = true;
    document.querySelector('body').classList.add('dark-mode');
  }
}

// Toggle dark mode on button click
modeToggleBtn.addEventListener('click', () => {
  if (modeToggleBtn.checked) {
    document.querySelector('body').classList.add('dark-mode');
    localStorage.setItem("darkmode", "on"); // Save preference
  } else {
    document.querySelector('body').classList.remove('dark-mode');
    localStorage.setItem("darkmode", "off"); // Save preference
  }
});




