let popup = document.getElementById("popup");

function openPopup(){
    popup.classList.add("open-popup");
    document.body.classList.add("disable-scrolling");
}

function closePopup(){
    popup.classList.remove("open-popup");
    document.body.classList.remove("disable-scrolling");
}