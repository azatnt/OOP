<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<div class="modal-body">
    <form method="post" action="{{ route('admin_course_update', $data->id)}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label> Description</label>
            <input type="text" class="form-control" name="description" value="{{$data->description}}">

        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image" value="{{$data->image}}">
        </div>
        <div class="form-group">
            <label>Amount</label>
            <input type="integer" class="form-control" name="amount" value="{{$data->amount}}">
        </div>

        <div class="form-group">
            <button class="btn btn-success" type="submit" >Add</button>
        </div>
    </form>
</div>
