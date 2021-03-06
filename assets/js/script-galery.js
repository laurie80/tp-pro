/* :::::::::::::::::::::::::::::::::
MEN NAVIG PLEIN ECRAN
::::::::::::::::::::::::::::::::: */

const button = document.querySelector('button');
const nav = document.querySelector('nav');
const backdrop = document.querySelector('.backdrop');

button.addEventListener('click', () => {
  nav.classList.add('open');
});

backdrop.addEventListener('click', () => {
    nav.classList.remove('open');
    });

/* :::::::::::::::::::::::::::::::::
UPLOAD IMAGES GALERIE
::::::::::::::::::::::::::::::::: */
let fileToUpload = document.getElementById('fileToUpload');
let imgPreview = document.getElementById('imgPreview');
fileToUpload.addEventListener("change", function () {
	let input = this;
	let oFReader = new FileReader(); 
	oFReader.readAsDataURL(this.files[0]);
	oFReader.onload = function (oFREvent) {
		imgPreview.setAttribute('src', oFREvent.target.result);
	};
})

/* :::::::::::::::::::::::::::::::::
UPLOAD VIDEO GALERIE
::::::::::::::::::::::::::::::::: */
let fileVideoToUpload = document.getElementById('fileVideoToUpload');
let videoPreview = document.getElementById('vdPreview');
fileVideoToUpload.addEventListener("change", function () {
	let input = this;
	let oFReader = new FileReader(); 
	oFReader.readAsDataURL(this.files[0]);
	oFReader.onload = function (oFREvent) {
		videoPreview.setAttribute('src', oFREvent.target.result);
	};
})

