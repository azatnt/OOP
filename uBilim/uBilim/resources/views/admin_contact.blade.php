<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

<!-- Navbar  -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="/admin" style="color: white">ADMIN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                    Tables
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Users</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/get_contacts">Contacts</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/admin_courses">Courses</a>
                </div>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white">View Site</a>
            </li>
            </li>
        </ul>
    </div>
</nav>

<!-- Navbar end -->

<div class="container">
    <button type="button" style="margin-left: 10px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add</button>


    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{--        <div class="alert alert-success">--}}
    {{--            {{ session()->get('success') }}--}}
    {{--        </div>--}}
    {{--    @if(session()->has('success'))--}}

    {{--    @endif--}}
    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add course</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('course_create') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label> Description</label>
                            <input type="text" class="form-control" name="description">

                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="integer" class="form-control" name="amount" >
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" >
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success" type="submit" >Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{--    <table class="table">--}}
    {{--        <thead>--}}
    {{--        <tr>--}}
    {{--            <th scope="col">#</th>--}}
    {{--            <th scope="col">First</th>--}}
    {{--            <th scope="col">Last</th>--}}
    {{--            <th scope="col">Handle</th>--}}
    {{--        </tr>--}}
    {{--        </thead>--}}
    {{--        <tbody>--}}
    {{--        <tr>--}}
    {{--            <th scope="row">1</th>--}}
    {{--            <td>Mark</td>--}}
    {{--            <td>Otto</td>--}}
    {{--            <td>@mdo</td>--}}
    {{--        </tr>--}}
    {{--        <tr>--}}
    {{--            <th scope="row">2</th>--}}
    {{--            <td>Jacob</td>--}}
    {{--            <td>Thornton</td>--}}
    {{--            <td>@fat</td>--}}
    {{--        </tr>--}}
    {{--        <tr>--}}
    {{--            <th scope="row">3</th>--}}
    {{--            <td>Larry</td>--}}
    {{--            <td>the Bird</td>--}}
    {{--            <td>@twitter</td>--}}
    {{--        </tr>--}}
    {{--        </tbody>--}}
    {{--    </table>--}}

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Name
                </th>
                <th>
                    Image
                </th>
                <th>
                    Description
                </th>
                <th>
                    Amount
                </th>
                <th>
                    Operations
                </th>

            </tr>
            @foreach($contact as $row)
                <tr>

                    <td>
                        {{ $row->id }}
                    </td>
                    <td>
                        {{ $row->name }}
                    </td>
                    <td>
                        {{ $row->email }}
                    </td>
                    <td>
                        {{ $row->subject }}
                    </td>
                    <td>
                        {{ $row->message }}
                    </td>

                    <td>
                        <form action="{{route('admin_contact_delete', $row->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" style="margin-left: 10px;" class="btn btn-danger btn-sm" data-toggle="modal">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

</div>
</body>
</html>
