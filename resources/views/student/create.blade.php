@extends('layouts.main')
@section('main-section')
    <div class="row">
        <div class="col-12 col-xl-10">

        </div>

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-dark  class="btn btn-primary data-bs-toggle="modal"
                        data-bs-target="#exampleModal">ADD</button>

                </div>
                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th style="width:10%">ID</th> --}}
                            <th style="width:5%">Profile</th>
                            <th style="width:5%">Parent</th>
                            <th style="width:5%;">Name</th>
                            {{-- <th style="width:5%">admission_number</th> --}}
                            <th style="width:5%">RollNo</th>
                            <th style="width:5%">class</th>
                            <th style="width:5%">Gender</th>
                            <th style="width:5%">Mobile_Number</th>
                            <th style="width:5%">Admission_Date</th>
                            {{-- <th style="width:5%">Blood_Group</th> --}}
                            <th style="width:5%">Status</th>
                            {{-- <th style="width:5%">Email</th> --}}
                            <th style="width:5%">Age</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($student as $st)
                            <tr>
                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                <td>
                                    <img src="{{ asset($st->profile_picture) }}" alt="Image 1"
                                        style="height: 80px; width: 100px; border-radius: 50%;">
                                </td>
                                <td>{{ $st->parent->name }}</td>
                                <td>{{ $st->name }}</td>
                                {{-- <td>{{ $st->admission_number }}</td> --}}
                                <td>{{ $st->roll_number }}</td>
                                <td>{{ $st->class }}</td>
                                <td>{{ $st->gender }}</td>
                                <td>{{ $st->mobile_number }}</td>
                                <td>{{ $st->admission_date }}</td>
                                {{-- <td>{{ $st->blood_group }}</td> --}}
                                <td>{{ $st->status }}</td>
                                {{-- <td>{{ $st->email }}</td> --}}
                                <td>{{ $st->age }}</td>
                                {{-- <td class="table-action d-flex"> --}}
                                    <td class="d-flex">
                                        <a href="#" class="btn btn-primary text-white"><i class="align-middle fas fa-fw fa-pen"></i>Edit</a>
                                        <a href="{{ route('student.destroy', $st->id) }}" class="btn btn-danger text-white"><i class="align-middle fas fa-fw fa-trash"></i>Delete</a>
                                        <a href="#" class="btn btn-info text-white"><i class="align-middle fas fa-fw fa-comment"></i>Chat</a>
                                    </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{$student->links()}}
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-12 col-xl-7">
                                <div class="col-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Student Table</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('student.create') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @if (session('status'))
                                                    <div class="alert alert-success"
                                                        style="padding: 15px; font-size: 20px; background-color: #d4edda; border-color: #c3e6cb; color: #155724;">
                                                        <strong>Success!</strong> {{ session('status') }}
                                                    </div>
                                                @endif
                                                <div class="mb-3">
                                                    <label class="form-label">Parent_id</label>
                                                    <select class="form-control" name="parent_id">
                                                        @foreach ($parent as $prt)
                                                            <option value="{{ $prt->id }}">{{ $prt->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control"name="name" id="name"
                                                        placeholder="name">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">admission_number</label>
                                                    <input type="text" class="form-control"name="admission_number"
                                                        id="admission_number" placeholder="admission_number">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">roll_number</label>
                                                    <input type="number" class="form-control"name="roll_number"
                                                        id="roll_number" placeholder="roll_number">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">class</label>
                                                    <input type="text" class="form-control"name="class" id="class"
                                                        placeholder="class">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">age</label>
                                                    <input type="text" class="form-control"name="age" id="age"
                                                        placeholder="age">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">mobile_number</label>
                                                    <input type="number" class="form-control"name="mobile_number"
                                                        id="mobile_number" placeholder="mobile_number">

                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">admission_date</label>
                                                    <input type="date" class="form-control"name="admission_date"
                                                        id="admission_date" placeholder="admission_date">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Profile Picture</label>
                                                    <input type="file" class="form-control" name="profile_picture"
                                                        id="profile_picture" placeholder="Profile Picture">

                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">blood_group</label>
                                                    <input type="text" class="form-control"name="blood_group"
                                                        id="blood_group" placeholder="blood_group">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">status</label>
                                                    <input type="number" class="form-control"name="status"
                                                        id="status" placeholder="status">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">email</label>
                                                    <input type="text" class="form-control"name="email" id="email"
                                                        placeholder="email">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Gender</label>
                                                    <select name="gender" id="gender" class="form-control">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
