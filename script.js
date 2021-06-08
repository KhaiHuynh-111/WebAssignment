$ = function(id) {
    return document.getElementById(id);
}

var show = function(id) {
    $(id).classList.add('concealed');
    setTimeout(function () {
        $(id).classList.add('visuallyconcealed');
    }, 20);
    // $(id).style.transition = 'all 3s ease 0.5s';
    // $(id).style.display ='block';
    // $(id).style.opacity = '1';
    // console.log("asdalsdj");
}
var hide = function(id) {
    $(id).classList.remove('visuallyconcealed');    
    $(id).addEventListener('transitionend', function(e) {
        $(id).classList.remove('concealed');
    }, {
        capture: false,
        once: true,
        passive: false
      });
    
      
    // $(id).style.opacity ='0';
    // $(id).style.display ='none';
}

