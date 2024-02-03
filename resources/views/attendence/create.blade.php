@extends('layouts.main')
@section('main-section')
    <div class="row">
        <div class="col-12 col-xl-12">

        </div>


        <div class="row">

                <div class="card">
                    <div class="card-header">
                        <h3>Attendence Table</h3>
                        @if (session('status'))
                            <div class="alert alert-success" style="padding: 15px; font-size:20px">
                                {{ session('status') }}
                            </div>
                        @endif

                        <button class="btn btn-dark  class="btn btn-primary data-bs-toggle="modal"
                            data-bs-target="#exampleModal">ADD</button>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width:20%;">parent Name</th>
                                <th style="width:20%;">Teacher Name</th>
                                <th style="width:20%">Date</th>
                                <th style="width:20%">Time</th>
                                <th style="width:10%">reqularity</th>
                                <th style="width:10%">othermetrics</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendence as $attendence)
                                <tr>
                                    <td>{{ $attendence->parent->name }}</td>
                                    <td>{{ $attendence->teacher->name }}</td>
                                    <td>{{ $attendence->date }}</td>
                                    <td>{{ $attendence->time }}</td>
                                    <td>{{ $attendence->reqularity }}</td>
                                    <td>{{ $attendence->othermetrics }}</td>
                                    <td class="table-action">
                                        <a href="#"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                        <a href="{{route('attendence.destroy',$attendence->id)}}"><i class="align-middle fas fa-fw fa-trash"></i></a>
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
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Attendence Table</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('add.attendence') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="form-control">Parent_Name</label>
                                                <select class="form-control" name="parent_id">
                                                    @foreach ($parent as $prt)
                                                        <option value="{{ $prt->id }}">{{ $prt->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="form-control">Teacher_Name</label>
                                                <select class="form-control" name="teacher_id">
                                                    @foreach ($teacher as $thr)
                                                    <option value="{{$thr->id}}">{{$thr->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Date</label>
                                                <input type="date" class="form-control"name="date" id="date"
                                                    placeholder="date">

                                                @error('date')
                                                    <div class="alert alert-danger">{{ 'Enter Date !!!' }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Time</label>
                                                <input type="time" class="form-control" name="time" id="time"
                                                    placeholder="time">

                                                @error('time')
                                                    <div class="alert alert-danger">{{ 'Enter time !!!' }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Reqularity</label>
                                                <input type="text" class="form-control" name="reqularity" id="reqularity"
                                                    placeholder="regularity">

                                                @error('reqularity')
                                                    <div class="alert alert-danger">{{ 'Enter Regular !!!' }}</div>
                                                @enderror

                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Othermetrics</label>
                                                <input type="text" class="form-control"name="othermetrics"
                                                    id="othermetrics" placeholder="othermetrics">

                                                @error('othermetrics')
                                                    <div class="alert alert-danger">{{ 'Enter Othermetrics !!!' }}</div>
                                                @enderror
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
