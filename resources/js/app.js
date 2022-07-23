require('./bootstrap');

import bootstrap from 'bootstrap'

const deleteAlert = document.querySelectorAll('.alert');

if (deleteAlert) {
    const deleteCard = document.querySelectorAll('delete-card');
    const deleteCheck = document.querySelector('.alert-spawn');

    deleteCard.forEach(action => {
        action.addEventListener('click',
            function () {
                deleteAlert.classList.remove('d-none');
                const id = this.closest('[data-id]').dataset.id
                const pattern = deleteCheck.dataset.action;
                const newAction = pattern.replace('*****', id);
                deleteCheck.action = newAction;
        })
    });

    document.querySelector('.choice-no').addEventListener('click',
        function () {
            deleteAlert.classList.add('d-none');
    })
}
