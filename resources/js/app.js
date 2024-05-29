import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
// import.meta.glob([
//     '../img/**'
// ])

/* modale to delete */
const deleteButton = document.getElementById("comicDelete");
//console.log(deleteButton);
deleteButton.addEventListener('click', (e) => {
    e.preventDefault();
    const modale = document.getElementById("exampleModal");
    const myModal = new bootstrap.Modal(modale);
    myModal.show();
    const btnSave = modale.querySelector('.btn-danger');
    // console.log(btnSave);
    btnSave.addEventListener('click', ()=>{
        //invia il form che è il suo parent 
        deleteButton.parentElement.submit(); 
    })
});