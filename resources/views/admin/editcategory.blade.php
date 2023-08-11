@extends('layouts.app')
@section('slot')
<div class="col-lg-5">
    <div class=" card card-body ">
        <form action="{{ route('update.category',[$category]) }}" method="post" enctype="multipart/form-data">@csrf

            <div class="mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
            </div>

            <div><button class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center" type="submit">Change</button></div>
        </form>
    </div>
</div>

@endsection
