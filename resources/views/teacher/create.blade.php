@extends('layouts.main')
@section('main-section')
    <div class="row">
        <div class="col-12 col-xl-10">

        </div>
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Teacher Table</h5>
                        <button class="btn btn-dark  class="btn btn-primary data-bs-toggle="modal"
                            data-bs-target="#exampleModal">ADD</button>
                    </div>
                    <table class="table">
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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teacher as $item)
                                <tr>
                                    <td><img src="{{ asset($item->profile_picture) }}" alt="Image 1"
                                            style="height: 60px; width: 60px; border-radius: 50%;"></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->date_of_joining }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->work_experience }}</td>
                                    <td>{{ $item->qualification }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td class="d-flex">
                                        <a href="#" class="btn btn-primary ml-2"><i
                                                class="align-middle fas fa-fw fa-pen"></i>Edit</a>
                                        <a href= "{{ route('teacher.destroy', $item->id) }}"
                                            class="btn btn-danger ml-2">Delete<i
                                                class="align-middle fas fa-fw fa-trash"></i></a>
                                        <a href="#" class="btn btn-primary ml-2"><i
                                                class="align-middle fas fa-fw fa-comments"></i> Chat</a>
                                    </td>
                                </tr>


                            @endforeach

                        </tbody>

                    </table>

                </div>
                {{ $teacher->links() }}
                </div>
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
                                            <h5 class="card-title">Teacher Table</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('teacher.create') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @if (session('status'))
                                                    <div class="alert alert-success" style="padding: 15px; font-size:13px">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif
                                                <div class="mb-3">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control"name="name" id="name"
                                                        placeholder="name">

                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
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
                                                <div class="mb-3">
                                                    <label class="form-label">Password</label>
                                                    <input type="text" class="form-control"name="password" id="password"
                                                        placeholder="password">

                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Date_Of_Joining</label>
                                                    <input type="date" class="form-control"name="date_of_joining"
                                                        id="date_of_joining" placeholder="date_of_joining">

                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Phoneno</label>
                                                    <input type="number" class="form-control"name="phone_number"
                                                        id="phone_number" placeholder="phone_number">

                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input type="address" class="form-control"name="address"
                                                        id="address" placeholder="address">

                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Work_Experience</label>
                                                    <input type="text" class="form-control"name="work_experience"
                                                        id="work_experience" placeholder="work_experience">

                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">qualification </label>
                                                    <input type="text" class="form-control"name="qualification"
                                                        id="qualification" placeholder="qualification">

                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">status</label>
                                                    <input type="number" class="form-control"name="status"
                                                        id="status" placeholder="status">

                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">profile_picture</label>
                                                    <input type="file" class="form-control"name="profile_picture"
                                                        id="profile_picture" placeholder="profile_picture">

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
