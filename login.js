document.addEventListener('DOMContentLoaded', function() {
    const openPopUpEmail = document.getElementById('open_pop_up2');
    const popUpEmail = document.getElementById('pop_up2');
    const closePopUpEmail = document.getElementById('close_pop_up2');

    openPopUpEmail.addEventListener('click', function(e) {
        e.preventDefault();
        popUpEmail.classList.add('active');
    });

    closePopUpEmail.addEventListener('click', function() {
        popUpEmail.classList.remove('active');
    });

});