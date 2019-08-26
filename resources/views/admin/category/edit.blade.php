@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="px-5">
        <span class="admin-big-title">Category</span>
        <span class="admin-small-title">Category edit</span>
        <form action='{{route("admin.category.update",["id" => $category->id])}}' method='POST'>
            <input type="hidden" name="_method" value="put" />
            <div class="row p-5 card mt-3">
                <div class="col-md-2">Name</div>
                <div class="col-md-9">
                    <input type="" name="name" class="form-control" value="{{$category->name}}">
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-9 mt-3">
                    <button class="btn btn-primary">Update</button>
                </div>
            </div>
            @csrf
        </form>

    </div>
</div>
@endsection
