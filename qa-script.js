let popup = document.getElementById("popup");

function openPopup(){
    popup.classList.add("open-popup");
    document.body.classList.add("disable-scrolling");
}

function closePopup(){
    popup.classList.remove("open-popup");
    document.body.classList.remove("disable-scrolling");
}

let headerPopup = document.getElementById("header-popup");

function openHeaderPopup(){
    headerPopup.classList.add("header-popup-open");
    document.body.classList.add("disable-scrolling");
}

function closeHeaderPopup(){
    headerPopup.classList.remove("header-popup-open");
    document.body.classList.remove("disable-scrolling");
}
