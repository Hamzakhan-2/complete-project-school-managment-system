@extends('layouts.main')

@section('main-section')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Approved Users</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width:20%;">ID</th>
                                <th style="width:20%;">Name</th>
                                <th style="width:20%;">Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->where('is_approved', 1) as $usr)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $usr->name }}</td>
                                    <td>{{ $usr->email }}</td>
                                    <td>
                                        <a href="{{ route('delete', $usr->id) }}" class="btn btn-danger ml-2">
                                            <i class="fas fa-fw fa-times"></i>Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="card-header">
                        <h3>Unapproved Users</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:20%;">ID</th>
                                    <th style="width:20%;">Name</th>
                                    <th style="width:20%;">Email</th>
                                    <th>Actions</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($user->where('is_approved', 0) as $usr)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $usr->name }}</td>
                                        <td>{{ $usr->email }}</td>
                                        <td class="d-flex">
                                            <form method="POST" action="{{ route('admin.approve', $usr->id) }}">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-fw fa-check"></i> Approve
                                                </button>
                                            </form>


                                            <a href="{{ route('delete', $usr->id) }}" class="btn btn-danger ml-2"><i
                                                    class="fas fa-fw fa-times"></i>Reject</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
