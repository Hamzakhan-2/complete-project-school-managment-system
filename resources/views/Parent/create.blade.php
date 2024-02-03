@extends('layouts.main')

@section('main-section')
    <div class="row">
        <div class="col-12 col-xl-10">

        </div>

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3>Parent Table</h3>
                    @if (session('status'))
                        <div class="alert alert-success"
                            style="padding: 15px; font-size: 20px; background-color: #d4edda; border-color: #c3e6cb; color: #155724;">
                            <strong>Success!</strong> {{ session('status') }}
                        </div>
                    @endif

                    <button class="btn btn-dark  class="btn btn-primary data-bs-toggle="modal"
                        data-bs-target="#exampleModal">{{ __('ADD') }}</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th style="width:5%;">ID</th> --}}
                            <th style="width:10%">Profile</th>
                            <th style="width:10%;">Name</th>
                            <th style="width:10%">Email</th>
                            {{-- <th style="width:20%">Password</th> --}}
                            <th style="width:10%">Phone</th>
                            <th style="width:10%">Address</th>
                            <th style="width:10%">Gender</th>
                            <th style="width:10%">Status</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parents as $parent)
                            <tr>
                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                <td>
                                    <img src="{{ asset($parent->profile_picture) }}" alt="Image 1"
                                        style="height: 80px; width: 100px; border-radius: 50%;">
                                </td>
                                <td>{{ $parent->name }}</td>
                                <td>{{ $parent->email }}</td>
                                {{-- <td>{{ $parent->password }}</td> --}}
                                <td>{{ $parent->phoneno }}</td>
                                <td>{{ $parent->address }}</td>
                                <td>{{ $parent->gender }}</td>
                                {{-- <td>{{ $parent->status }}</td> --}}

                                <td class="table-action d-flex">
                                    @if ($parent->status ==0)
                                        <a href="{{ route('parent.unlock', $parent->id) }}"
                                            class="btn btn-warning text-white"><i
                                                class="align-middle fas fa-fw fa-lock-open"></i> Unlock</a>
                                    @else
                                        <a href="{{ route('parent.lock', $parent->id) }}"
                                            class="btn btn-secondary text-white"><i
                                                class="align-middle fas fa-fw fa-lock"></i> Lock</a>
                                    @endif

                                    <a href="#" class="btn btn-primary text-white"><i
                                            class="align-middle fas fa-fw fa-pen"></i> Edit</a>
                                    <a href="{{ route('parent.destroy', $parent->id) }}"
                                        class="btn btn-danger text-white"><i class="align-middle fas fa-fw fa-trash"></i>
                                        Delete</a>
                                    <a href="{{ route('my.student', $parent->id) }}" class="btn btn-success text-white"><i
                                            class="align-middle fas fa-fw fa-user"></i> Students</a>
                                    <a href="{{route('chatify')}}" class="btn btn-info text-white"><i
                                            class="align-middle fas fa-fw fa-comment"></i> Chat</a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>
                {{ $parents->links() }}

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
                            <div class="col-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Parent Table</h5>
                                    </div>

                                    <div class="card-body">
                                        <form action="{{ route('parent.create') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Name">

                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Email">

                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Password</label>
                                                    <input type="text" class="form-control" name="password"
                                                        id="password" placeholder="Password">

                                                </div>
                                            </div>
                                            <!-- Repeat the pattern for other form fields -->
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="tel" class="form-control" name="phoneno" id="phoneno"
                                                        placeholder="Phone Number">

                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" class="form-control" name="address" id="address"
                                                        placeholder="Address">

                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Gender</label>
                                                    <select name="gender" id="gender" class="form-control">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label class="form-label">Status</label>
                                                    <input type="text" class="form-control" name="status"
                                                        id="status" placeholder="Status">

                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Occupation</label>
                                                    <input type="text" class="form-control" name="occupation"
                                                        id="occupation" placeholder="Occupation">

                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Profile Picture</label>
                                                    <input type="file" class="form-control" name="profile_picture"
                                                        id="profile_picture" placeholder="Profile Picture">

                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
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
