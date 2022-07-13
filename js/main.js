//Para la fuccion de dark mode
const switchButton = document.getElementById('switch');
 
switchButton.addEventListener('click', () => {
    document.body.classList.toggle('dark'); 
    switchButton.classList.toggle('active');

    //Se guarda el valor en localStorage
    if(document.body.classList.contains('dark')){
        localStorage.setItem('dark-mode', 'true');
    } else{
        localStorage.setItem('dark-mode', 'false');
    }
});

//Se obtiene el valor en localStorage
if(localStorage.getItem('dark-mode') === 'true'){
    document.body.classList.add('dark'); 
    switchButton.classList.add('active');
} else{
    document.body.classList.remove('dark'); 
    switchButton.classList.remove('active');
}

//Ir hacia arriba
const up = document.querySelector('.up');
up.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

/* Ventana emergente de conacto*/
var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});

/* Modificacion al enviar formulario*/
const $form = document.querySelector('#form')

$form.addEventListener('submit', handleSubmit)

async function handleSubmit(event){
    event.preventDefault()
    const form = new FormData(this)
    const response = await fetch(this.action, {
        method: this.method,
        body: form,
        headers: {
            'Accept': 'application/json'
        }
    })
    if(response.ok){
        this.reset()
        alert('El formulario ha sido enviado.')
    }
}

/* Generar en frame para Youtube */

(function() {
    var v = document.getElementsByClassName("reproductor");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = labnolThumb(v[n].dataset.id);
        p.onclick = labnolIframe;
        v[n].appendChild(p);
    }
})();
function labnolThumb(id) {
    return '<img class="imagen-previa" alt="Video de Youtube" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="youtube-play"></div>';
}
function labnolIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    this.parentNode.replaceChild(iframe, this);
}

//Eliminar anuncios chicos en Movil
var mediaqueryList = window.matchMedia("(max-width: 739.98px)");
/*const element1 = document.getElementById('re1');
const element2 = document.getElementById('re2');
const element3 = document.getElementById('re3');
element1.remove();
element2.remove();
element3.remove();*/