const Logindialog = document.querySelector('#login-dialog');
const openLoginDialog = document.querySelector('#login-btn');
const closeLoginDialog = document.querySelector('#close-login-btn');

openLoginDialog.addEventListener('click', () => {
    Logindialog.showModal();
});

closeLoginDialog.addEventListener('click', () => {
    Logindialog.close();
});
