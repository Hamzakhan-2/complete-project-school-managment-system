@extends('layouts.main')
@section('main-section')
    <div class="row">
        <div class="col-12 col-xl-6">

        </div>

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header">

                        <button class="btn btn-dark  class="btn btn-primary data-bs-toggle="modal"
                            data-bs-target="#exampleModal">ADD</button>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width:20%">Parent_Name</th>
                                <th style="width:20%">Student_Name</th>
                                <th style="width:20%">Bus_Name</th>
                                <th style="width:20%;">Location</th>
                                <th style="width:20%">Detail</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($trans as $tpr)
                                <tr>
                                    <td>{{ $tpr->parent->name}}</td>
                                    <td>{{ $tpr->student->name}}</td>
                                    <td>{{ $tpr->bus_number}}</td>
                                    <td>{{ $tpr->location }}</td>
                                    <td>{{ $tpr->detail }}</td>
                                    <td class="table-action">
                                        <a href="#"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                        <a href="{{route('transportation.destroy',$tpr->id)}}"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
                                                    <h5 class="card-title">Transportation Table</h5>
                                                </div>
                                                <div class="card-body">
                                                    <form action="{{ route('add.transportation') }}" method="POST">
                                                        @csrf
                                                        @if (session('status'))
                                                            <div class="alert alert-success" style="padding: 15px; font-size:20px">
                                                                {{ session('status') }}
                                                            </div>
                                                        @endif
                                                        <div class="mb-3">
                                                            <label for="form-control">Select Parent</label>
                                                            <select class="form-control" name="parent_id">
                                                                @foreach ($parent as $prt)
                                                                    <option value="{{ $prt->id }}">{{ $prt->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="form-control">Select Student</label>
                                                            <select class="form-control" name="student_id">
                                                                @foreach ($student as $stu)
                                                                <option value=""></option>
                                                                <option value=""></option>
                                                                    <option value="{{ $stu->id }}">{{ $stu->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Bus_Number</label>
                                                            <input type="text" class="form-control"name="bus_number" id="bus_number" placeholder="name">
                                                            @error('bus_number')
                                                                <div class="alert alert-danger">{{ 'Enter  Bus_Number !!!' }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Location</label>
                                                            <input type="text" class="form-control"name="location" id="location" placeholder="location">
                                                            @error('location')
                                                                <div class="alert alert-danger">{{ 'Enter location !!!' }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">detail</label>
                                                            <input type="text" class="form-control"name="detail" id="location" placeholder="detail">
                                                            @error('detail')
                                                                <div class="alert alert-danger">{{ 'Enter detail !!!' }}</div>
                                                            @enderror
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
