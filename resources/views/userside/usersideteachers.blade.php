@include('userside.userheader')

<div class="container py-4">
    <a href="#" class="btn btn-success mb-4">Back</a>
    <div class="row">
        <div class="col">
            <span id="notification"></span>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <i class="fas fa-table me-1"></i>Teacher
                </div>
                <div class="col col-md-6" align="right">
                </div>
            </div>
        </div>
        <div class="card-body">

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered text-center table-striped table-dark w-100 ">
                    <thead>
                        <tr>
                            <th style="width:10%;">Profile</th>
                            <th style="width:20%;">Name</th>
                            <th style="width20%">Email</th>
                            <th style="width20%">Gender</th>
                            {{-- <th style="width20%">Password</th> --}}
                            <th style="width10%">Date Joining</th>
                            <th style="width20%">Phone</th>
                            <th style="width20%">Address</th>
                            <th style="width20%">Work Expirence</th>
                            <th style="width20%">Qualification</th>
                            <th style="width20%">Status</th>
                            {{-- <th>Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teacher as $teacher)
                                <tr>
                                    <td><img src="{{asset($teacher->profile_picture)}}" alt="Image 1"
                                        style="height: 80px; width: 100px; border-radius: 50%;"></td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->gender }}</td>
                                    <td>{{ $teacher->date_of_joining }}</td>
                                    <td>{{ $teacher->phone_number }}</td>
                                    <td>{{ $teacher->address }}</td>
                                    <td>{{ $teacher->work_experience }}</td>
                                    <td>{{ $teacher->qualification }}</td>
                                    <td>{{ $teacher->status }}</td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </form>


        </div>
    </div>
</div>

{{-- @include('userside.footer') --}}
