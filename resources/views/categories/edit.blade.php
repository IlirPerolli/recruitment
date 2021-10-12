@extends('layouts.index')
@section('title')
    <title>
        {{ $category->name.' - EmployingX'}}
    </title>
@endsection
@section('content')
    <div class="container-fluid py-4">
        <form action="{{route('admin.category.update',$category->slug)}}" method="POST">
        @csrf
        @method('PATCH')
        <!-- Card Basic Info -->
            <div class="card mt-4" id="basic-info">
                <div class="card-header">
                    <h5>Update Category</h5>

                </div>
                <div class="card-body pt-0">
                    <div class="row d-flex justify-content-center">
                        <div class="col-6">
                            <label class="form-label">Category</label>
                            <div class="input-group">
                                <input id="name" name="name" class="form-control" type="text" placeholder="Write Category" required="required" value="{{$category->name}}" autocomplete="off">
                            </div>
                            @error('name')
                            <span style="color:red; ">{{ $message }}</span>
                            @enderror
                            <button class="btn bg-gradient-dark btn-sm float-end mt-2 mb-0">Update</button>
                        </div>





                    </div>
                </div>
            </div>
        </form>


@endsection
