function displayPic(){
    var selector = document.getElementById("itemlist");
    var selected = selector.options[selector.selectedIndex].getAttribute("data-img");
    console.log("Selected", selected);
    document.getElementById("itempicture").setAttribute("src", ".." + selected);
}

function removePic(){
    var img = document.getElementById("itempicture").setAttribute("src", "")
}

function updateInfo(input_values) {
    let values = input_values.split(" ");
    document.getElementById("first").value = values[0];
    document.getElementById("last").value = values[1];
    document.getElementById("email").value = values[2];
}

function getResultsFirstName(str) {
    if (str.length==0) {
        document.getElementById("firstname").innerHTML="";
        document.getElementById("firstname").style.border="0px";
        return;
    }
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("firstname").innerHTML = this.responseText;
            document.getElementById("firstname").style.border="1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET","gethint.php?t=first&q="+str,true);
    xmlhttp.send();
}

function getResultsLastName(str) {
    if (str.length==0) {
        document.getElementById("lastname").innerHTML="";
        document.getElementById("lastname").style.border="0px";
        return;
    }
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("lastname").innerHTML = this.responseText;
            document.getElementById("lastname").style.border="1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET","gethint.php?t=last&q="+str,true);
    xmlhttp.send();
}

function getResultsEmail(str) {
    if (str.length==0) {
        document.getElementById("email_address").innerHTML="";
        document.getElementById("email_address").style.border="0px";
        return;
    }
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("email_address").innerHTML = this.responseText;
            document.getElementById("email_address").style.border="1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET","gethint.php?t=first&q="+str,true);
    xmlhttp.send();
}