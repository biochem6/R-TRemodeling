function windowSize() {
   let width = window.innerWidth;
   displayImage(width);
}

function displayImage(width) {
    if (width <=  900) {
        document.getElementById("image").style.display = "none";
    }
    else if (width > 900) {
        document.getElementById("image").style.display = "block";
    }
    
}

window.onload = () => {
    windowSize();
    window.addEventListener("resize", () => {
        windowSize();
    })
}

