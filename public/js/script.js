/**
 * Created by mahbub on 8/5/15.
 */
var Modal = {
    init: function () {
        this.initEditModal();
        this.initConfirmationModal();
    },
    initEditModal: function() {
        $(document).on('click', '.load-form-modal', function(event){
            console.log('Modal: '+ $(this).attr('data-url'));
            $('#form-modal .modal-body').load($(this).attr('data-url'));
            event.preventDefault();
        });
    },
    initConfirmationModal: function() {
        $(document).on('click', '.load-confirmation-modal', function(event){
            $('#confirmation-modal form').attr('action', $(this).attr('data-url'));
            event.preventDefault();
        });
    }
};

Modal.init();