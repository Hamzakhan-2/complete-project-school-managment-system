@extends('layouts.main')

@section('main-section')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 shadow">
                    <?php
                 $data=App\Models\Student::all();
                 $count=count($data);

                   ?>
                    <div class="card-header">
                        <h3>Total Students</h3>
                    </div>
                    <div class="card-body">
                    <h3 class="text-bold mb-10">{{$count}}</h3>
                        
                    </div>
                </div>
            </div>
       <?php

        $data=App\Models\Teacher::all();
        $count=count($data);
         ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header">
                        <h3>Total Teacher</h3>
                    </div>
                    <div class="card-body">
                    <h3 class="text-bold mb-10">{{$count}}</h3>
                    </div>
                </div>
            </div>
<?php

$data=App\Models\User::all()->count();
?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header">
                        <h3>Total Users</h3>
                        
                    </div>
                    <div class="card-body">
                    <h3 class="text-bold mb-10">{{$data}}</h3>
                    </div>
                </div>
            </div>

            <?php
            $data=App\Models\RequestMeeting::all();
           $count=count($data);
            ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-header">
                        <h3>Total Meetings</h3>
                    </div>
                    <div class="card-body">
                    <h3 class="text-bold mb-10">{{$count}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
