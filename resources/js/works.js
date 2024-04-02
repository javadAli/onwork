function openModal(modalId){
    let modal=document.getElementById(modalId);
    modal.classList.remove("hidden");
}

function closeModal(modalId){
    let modal=document.getElementById(modalId);
    modal.classList.add("hidden");
}