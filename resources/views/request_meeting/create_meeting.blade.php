@extends('layouts.main')
@section('main-section')
    <div class="row">
        <div class="col-12 col-xl-12">
            
        </div>

        <div class="row">

                <div class="card">
                    <div class="card-header">
                        <h3>Request Meeting Table</h3>
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
                                <th style="width:20%;">Parent_name</th>
                                <th style="width:20%;">Teacher_name</th>
                                <th style="width:20%;">Meeting_Date</th>
                                <th style="width:20%">Meeting_Start_Time</th>
                                <th style="width:20%">Meeting_End_Time</th>
                                <th style="width:10%">Purpose</th>
                                <th style="width:10%">status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($meeting as $mt)
                                <tr>
                                    <td>{{ $mt->parent->name}}</td>
                                    <td>{{ $mt->teacher->name}}</td>
                                    <td>{{ $mt->meeting_date }}</td>
                                    <td>{{ $mt->meeting_start_time }}</td>
                                    <td>{{ $mt->meeting_end_time }}</td>
                                    <td>{{ $mt->purpose }}</td>
                                    <td>{{ $mt->status }}</td>
                                    <td class="table-action">
                                        <a href="#"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                        <a href="{{route('request.destroy',$mt->id)}}"><i class="align-middle fas fa-fw fa-trash"></i></a>
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
                                        <h5 class="card-title">Parent Table</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('add.request.meeting') }}" method="POST">
                                            @csrf

                                            <div class="mb-3">
                                                <label class="form-label">Select Parent</label>
                                                <select class="form-control" name="parent_id">
                                                    @foreach ($parent as $part)
                                                      <option value="{{ $part->id }}">{{ $part->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="form-control"> Select Teacher</label>
                                                <select class="form-control" name="teacher_id">
                                                    @foreach ($teacher as $tec)
                                                    <option value="{{$tec->id}}">{{$tec->name}}
                                                    </option>
                                                    @endforeach
                                                </select>

                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Meeting_Date</label>
                                                <input type="date" class="form-control"name="meeting_date"
                                                    id="meeting_date" placeholder="meeting_date">

                                                @error('meeting_date')
                                                    <div class="alert alert-danger">{{ 'Enter meeting_date !!!' }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Meeting_Start_Time</label>
                                                <input type="time" class="form-control" name="meeting_start_time"
                                                    id="meeting_start_time" placeholder="meeting_start_time">

                                                @error('meeting_start_time')
                                                    <div class="alert alert-danger">{{ 'Enter meeting_start_time !!!' }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Meeting_End_Time</label>
                                                <input type="time" class="form-control"name="meeting_end_time"
                                                    id="meeting_end_time" placeholder="meeting_end_time">

                                                @error('meeting_end_time')
                                                    <div class="alert alert-danger">{{ 'Enter meeting_end_time !!!' }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Purpose</label>
                                                <input type="text" class="form-control"name="purpose" id="purpose"
                                                    placeholder="Purpose">

                                                @error('purpose')
                                                    <div class="alert alert-danger">{{ 'Enter purpose !!!' }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <input type="text" class="form-control"name="status" id="status"
                                                    placeholder="status">
                                                    @error('status')
                                                    <div class="alert alert-danger">{{ 'Enter status !!!' }}</div>
                                                @enderror
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
