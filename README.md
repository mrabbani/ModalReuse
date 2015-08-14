#Basic Idea( [Source code](https://github.com/mrabbani/ModalReUse))

- [Uses of Modal](#uses)
- [What are needed](#requirement)
- [Modal file](#modal)


---
<a name="uses"></a>
## Uses of Modal:
  
  Generally we use modal for confirmation message and to laod a form to edit or update an item.
  
---
<a name="requirement"></a>
## What are needed:
  - [Laravel](http://laravel.com/)
  - [jQuery](https://jquery.com/)
  - [Bootstrap](http://getbootstrap.com/)
  

<a name="modal"></a>
## Modal File:

- form-modal.blade.php

```
<div class="modal fade" id="form-modal" tabindex="8" role="dialog" aria-labelledby="form-modal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="form-modal">{{$title}}</h4>
            </div>
            <div class="modal-body" >
                @yield('body')
            </div>
        </div>
    </div>
</div>
```
The body of this form-modal will be loaded by using the followinng button's data-url :
```
  <button class="btn btn-info load-form-modal" data-url="{{your url}}" data-toggle ="modal" data-target='#form-modal' >
                        Edit
                    </button>
```
- confirmation-modal.blade.php

```
<div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-labelledby="confirmation-modal-title">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="confirmation-modal-title">{{ $title }}</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure about this action?</p>
            </div>
            <div class="modal-footer">
                <!-- delete form -->
                {!! Form::open(['url' => '', 'method' => 'delete']) !!}
                <button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
                <button type="submit" class="btn btn-danger">confirm</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
```
The action of modal's  will be replaced by using the followinng button's data-url :
```
  <button class="btn btn-danger load-confirmation-modal" data-url="{{ item delete url }}" data-toggle ="modal" data-target='#confirmation-modal' >
                        Delete
                    </button>
```
## js Script:
```load-confirmation-modal``` and ```load-form-modal``` class of button are used to handle the functionality.

- script.js file is 
```
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
```
