jQuery(document).ready(function ($) {
  function checkCookies() {
    let cookieDate = localStorage.getItem('cookieDate');
    let cookieNotification = document.getElementById('cookie-block');
    let cookieBtn = cookieNotification.querySelector('.head-block-modal');

    if( !cookieDate || (+cookieDate + 1200000) < Date.now() ){
        cookieNotification.classList.add('show');
    }

    cookieBtn.addEventListener('click', function(){
        localStorage.setItem( 'cookieDate', Date.now() );
        cookieNotification.classList.remove('show');
    })
  }
  checkCookies();
});
