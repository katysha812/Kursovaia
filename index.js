document.addEventListener('DOMContentLoaded', function() {
    const openPopUp = document.getElementById('open_pop_up');
    const popUp = document.getElementById('pop_up');
    const closePopUp = document.getElementById('close_pop_up');
    /*const OpenReg = document.getElementById('open_reg');*/

    openPopUp.addEventListener('click', function(e) {
        e.preventDefault();
        popUp.classList.add('active');
    });

    closePopUp.addEventListener('click', function() {
        popUp.classList.remove('active');
    });

});