@extends('layouts.admin')

@section('page_name')
    Edit Company Slider
 
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('companySliderUpdate',$slider->id) }}" method="Post" enctype="multipart/form-data">
                    @csrf

                    <div class="pb-4 col-md-12">
                        
                        @if ($slider->image)
                           <img src="{{ asset('assets/sliders/' . $slider->image) }}" height="100" class="d-block">
                       @endif

                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

             

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
