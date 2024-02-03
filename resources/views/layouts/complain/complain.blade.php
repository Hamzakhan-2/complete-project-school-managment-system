@extends('layouts.main')

@section('main-section')
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3>Complain</h3>
                <div class="card-body">
                    <form action="{{ route('add.complain') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="title"
                                    style="font-size: 16px; height: 40px;">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Notice Date</label>
                                <input type="date" class="form-control" name="notice_date" id="notice_date"
                                    style="font-size: 16px; height: 40px;">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Publish Date</label>
                                <input type="date" class="form-control" name="publish_date" id="publish_date"
                                    style="font-size: 16px; height: 40px;">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Message To</label>

                                <select class="form-control" name="messageto">
                                    <option >--Select---</option>
                                    @foreach ($parent as $ptr)
                                        <option value="{{ $ptr->name }}">{{ $ptr->name }}</option>
                                    @endforeach
                                </select>


                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Message</label>
                                <textarea type="text" class="form-control" name="messagebox" id="messagebox" placeholder="Message"
                                    style="font-size: 16px; height: 120px;"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>


                </div>
            </div>
        @endsection
