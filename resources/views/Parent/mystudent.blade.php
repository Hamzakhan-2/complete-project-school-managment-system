@extends('layouts.main')
@section('main-section')


<div class="row">
    <div class="col-12 col-xl-10">

    </div>

    <div class="row">
        <div class="card">
            <div class="card-header">
            </div>
            <table class="table">
                <thead>
                    <tr>
                        {{-- <th style="width:10%">ID</th> --}}
                        <th style="width:10%">Profile</th>
                        <th style="width:10%">Parent</th>
                        <th style="width:10%;">Name</th>
                        {{-- <th style="width:10%">admission_number</th> --}}
                        <th style="width:10%">RollNo</th>
                        <th style="width:10%">class</th>
                        <th style="width:10%">Gender</th>
                        <th style="width:10%">Mobile_Number</th>
                        {{-- <th style="width:10%">Admission_Date</th> --}}
                        <th style="width:10%">Blood_Group</th>
                        <th style="width:10%">Status</th>
                        <th style="width:10%">Email</th>
                        <th style="width:10%">Age</th>

                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($student as $students)
                        <tr>
                            {{-- <td>{{ $loop->iteration }}</td> --}}
                            <td>
                                <img src="{{ asset($students->profile_picture) }}" alt="Image 1"
                                    style="height: 80px; width: 100px; border-radius: 50%;">
                            </td>
                            <td>{{ $students->parent->name }}</td>
                            <td>{{ $students->name }}</td>
                            <td>{{ $students->roll_number }}</td>
                            <td>{{ $students->class }}</td>
                            <td>{{ $students->gender }}</td>
                            <td>{{ $students->mobile_number }}</td>
                            {{-- <td>{{ $students->admission_date }}</td> --}}
                            <td>{{ $students->blood_group }}</td>
                            <td>{{ $students->status }}</td>
                            <td>{{ $students->email }}</td>
                            <td>{{ $students->age }}</td>
                            <td class="table-action d-flex">
                                {{-- <a href="#"><i class="align-middle fas fa-fw fa-pen"></i></i></a> --}}
                                <a href="{{ route('student.destroy', $students->id) }}"><i
                                        class="align-middle fas fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

@endsection
