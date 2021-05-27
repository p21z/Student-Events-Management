const hello = document.querySelector('.hello');
const remove = document.querySelector('#remove');

remove.addEventListener('click', () => {
    hello.classList.remove('tab');
})