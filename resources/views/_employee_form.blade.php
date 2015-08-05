@if(isset($employee))
    <form action="{{url('modal'. '/'. $employee['id'])}}" method="post">
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$employee['name']}}">
        </div>
        <div class="form-group">
            <label for="designation">Name</label>
            <input type="text" name="designation" id="designation" class="form-control" value="{{$employee['designation']}}">
        </div>

        <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button class="btn btn-success" type="submit">Update</button>
    </form>

@endif