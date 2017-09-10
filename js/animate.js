
function initiate () {
    console.log("it works");
    
    click_btn = document.getElementById('action');
    click_btn.addEventListener('click', animate);
};

function animate () {
    console.log("animating...");
    
    var box = document.getElementById('box'); 
    box.className = "animated wobble";  
};
