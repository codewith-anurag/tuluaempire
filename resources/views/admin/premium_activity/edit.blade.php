@extends('layouts.app')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                Edit Premium Activity
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Premium Activity</li>
                </ol>
            </nav>
          </div>

          <div class="row">
            <div class="col-md-12  grid-margin stretch-card">
              <div class="card">
                <form class="forms-sample" method="POST" action="{{route('update-premium-activity')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Edit Premium Activity</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Title <span class="required_class">*</span></label>
                                        <input type="text" name="premiumactivity_title" class="form-control" id="title" value="{{$edit_premiumactivity->premiumactivity_title}}">
                                        <input type="hidden" name="premiumactivity_id" class="form-control" id="premiumactivity_id" value="{{$edit_premiumactivity->id}}">
                                        @error('premiumactivity_title')
                                            <div class="input_error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="d-block">Upload Image <span class="required_class">* (Upload Image minimum 782 X 521)</span></label>
                                        <label for="image" class="btn btn-info btn-rounded">Upload Image </label>
                                        <input type="file" name="image" class="image @error('image') is-invalid @enderror d-none" id="image" require>
                                        <input type="hidden" name="old_image" class="fomr-controls" value="{{$edit_premiumactivity->image}}"/>
                                        @error('image')
                                            <div class="input_error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="d-block">Premium Activity Image</label>
                                        <img src="{{asset('premiumactivity_image/').'/'.$edit_premiumactivity->image}}" height="100"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Description <span class="required_class">*</span></label>
                                        <textarea class="ckeditor form-control" name="description">{{$edit_premiumactivity->description}}</textarea>
                                        @error('description')
                                            <div class="input_error">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{route('premiumactivity')}}" class="btn btn-light">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
    @endsection
