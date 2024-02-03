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
                    <i class="fas fa-table me-1"></i>Attendence
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
                            <th style="width:20%;">parent Name</th>
                            <th style="width:20%;">Teacher Name</th>
                            <th style="width:20%">Date</th>
                            <th style="width:20%">Time</th>
                            {{-- <th style="width:10%">reqularity</th> --}}
                            <th style="width:10%">othermetrics</th>
                            {{-- <th>Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendence as $atn)
                                <tr>
                                    <td>{{ $atn->parent->name }}</td>
                                    <td>{{ $atn->teacher->name }}</td>
                                    <td>{{ $atn->date }}</td>
                                    <td>{{ $atn->time }}</td>
                                    {{-- <td>{{ $atn->reqularity }}</td> --}}
                                    <td>{{ $atn->othermetrics }}</td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </form>


        </div>
    </div>
</div>

{{-- @include('userside.footer') --}}
