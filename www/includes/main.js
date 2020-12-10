document.querySelector('nav.menu-nav ul li.button a.navhistoire').addEventListener('click',function() {
	alert('La suite est en cours de travail 😉 !!!');
});

let myImage = document.querySelector('div#content div.premierBloc div.exemple div.exempleImg img.test');

myImage.addEventListener('click', function() {
    let mySrc = myImage.getAttribute('src');
    if (mySrc === 'includes/css/img/Warspear.png') {
      myImage.setAttribute('src', 'includes/css/img/warspearMap.jpg');
    } else {
      myImage.setAttribute('src', 'includes/css/img/Warspear.png');
    }
});  