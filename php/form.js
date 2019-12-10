function displayPic(){
    var selector = document.getElementById("itemlist");
    var selected = selector.options[selector.selectedIndex].value;
    document.getElementById("itempicture").setAttribute("src", "../images/" + selected + ".jpg")
}

function removePic(){
    var img = document.getElementById("itempicture").setAttribute("src", "")
}