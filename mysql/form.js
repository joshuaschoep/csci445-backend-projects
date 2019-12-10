function displayPic(){
    var selector = document.getElementById("itemlist");
    var selected = selector.options[selector.selectedIndex].getAttribute("data-img");
    console.log("Selected", selected);
    document.getElementById("itempicture").setAttribute("src", ".." + selected);
}

function removePic(){
    var img = document.getElementById("itempicture").setAttribute("src", "")
}