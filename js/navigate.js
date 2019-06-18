document.getElementById('submitbtn').addEventListener("click", function(){
    window.btn_clicked = true;      //set btn_clicked to true
});

window.onbeforeunload = function(){
    if(!window.btn_clicked){
        return 'If you leave now your registration will be canceled!';
    }
};