const colorSwitch = document.getElementById('checkbox');

colorSwitch.addEventListener('click', checkMode);

function checkMode(){
    if(colorSwitch.checked){
        darkModeOn();
    } else {
        darkModeOff();
    }
}

function darkModeOn(){
    document.body.classList.add('dark-mode')
}
function darkModeOff(){
    document.body.classList.remove('dark-mode')
}
