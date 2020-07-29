document.getElementById("btn").onfocusout  = disableScreen(){
    // creates <div class="overlay"></div> and 
    // adds it to the DOM
    var div= document.createElement("div");
    div.className += "overlay";
    document.body.appendChild(div);
};

