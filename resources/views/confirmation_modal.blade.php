<div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-labelledby="confirmation-modal-title">
    <div class="modal-dialog modal-sm" role="document">
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
                <form action="#" method="post">
                    <input name="_method" value="delete" type="hidden">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
                    <button type="submit" class="btn btn-danger">confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>