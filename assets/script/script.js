
/* Fiz um menu que é ativado por meio de um menu hamburger quando
 o site fica no tamanho de dispositivos móveis  */

function openMenu() {
    let menuIcon = document.querySelector('.menu-icon');
    let menuBody = document.querySelector('.menu-mobile');

    menuIcon.addEventListener('click', function () {
        if (menuBody.style.display === 'flex') {
            menuBody.style.display = 'none';
        } else {
            menuBody.style.display = 'flex';
        }
    })
}

openMenu()