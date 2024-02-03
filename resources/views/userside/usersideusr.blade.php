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
                    <i class="fas fa-table me-1"></i>Students
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
                            <th>NAME</th>
                            <th>Admission_Number</th>
                            <th>Roll_Number</th>
                            <th>Class</th>
                            <th>Gender</th>
                            <th>Mobile_Number</th>
                            <th>Admission_Date</th>
                            <th>Profile_Picture</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $st)
                            <tr>
                                <td>{{$st->name}}</td>
                                <td>{{$st->admission_number}}</td>
                                <td>{{$st->roll_number}}</td>
                                <td>{{$st->class}}</td>
                                <td>{{$st->gender}}</td>
                                <td>{{$st->mobile_number}}</td>
                                <td>{{$st->admission_date}}</td>
                                <td>
                                    <img src="{{ asset($st->profile_picture) }}" alt="Image 1"
                                        style="height: 80px; width: 100px; border-radius: 50%;">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>


        </div>
    </div>
</div>

{{-- @include('userside.footer') --}}
