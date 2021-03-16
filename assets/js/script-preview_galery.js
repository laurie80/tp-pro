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
