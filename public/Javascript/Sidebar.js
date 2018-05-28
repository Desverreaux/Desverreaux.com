/*TODO set it up so that if the bar is closed then hovering over it will pop over by a couple pixels just so that its more obvious that it can be opened

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
var navState = false;
var accentColor = "#242424"
const BAR_WIDTH_DEFAULT = "200px";

initSidebar();

function initSidebar() {
    $('.noClick').click(function(e){ 
        e.stopPropagation()
    });
    initHover();
    closeNav();    
}

/*unfortunately there is no a:hover component for js to modify so i have to implement my own version of it if i want to change the color */
function initHover() { 
    let nb = document.getElementsByClassName("navButton");
    for(let item of nb) {
        item.onmouseenter = function() {highlight(item)};
        item.onmouseleave = function() {lowlight(item)};
    }

    let toHide = document.getElementsByClassName("sideNavText");
    
    for (let item of toHide) {
        item.style.visibility= "hidden";
        hideElement(item);
    }
}



function openNav() {
    navState = true;
    document.getElementById("mySidenav").style.width = BAR_WIDTH_DEFAULT;
    document.getElementById("main").style.marginLeft = BAR_WIDTH_DEFAULT;

    let toHide = document.getElementsByClassName("sideNavIcon");
    let toShow = document.getElementsByClassName("sideNavText");
    
    for (let item of toHide) {
        hideElement(item);
    }
    for (let item of toShow) {
        showElement(item);
    }

    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    navState = false;

    document.getElementById("mySidenav").style.width = "64px";
    document.getElementById("main").style.marginLeft = "64px";

    
    let toShow = document.getElementsByClassName("sideNavIcon");
    let toHide = document.getElementsByClassName("sideNavText");
    
    for (let item of toHide) {
        hideElement(item);
    }
    for (let item of toShow) {
        showElement(item);
    }

    document.body.style.backgroundColor = "white";
}

function hideElement(node) {
    node.style.marginLeft = (0 - parseInt((BAR_WIDTH_DEFAULT),10)) + "px"; // removes px from the value, substracts it from zero to get a negative version, and adds px back  
    node.style.visibility = "hidden";
}

function showElement(node) {
    node.style.marginLeft = 0 + "px";
    node.style.visibility = "visible";
}


function toggleNav() {
    navState ? closeNav() : openNav(); 
}

function highlight(item) {
    if(navState) {
        item.style.backgroundColor = accentColor;
    }
}

/* lowlight is simple the reverse of highlight */
function lowlight(item) {
    if(navState) {
        item.style.backgroundColor = "#111111";
    }
}



