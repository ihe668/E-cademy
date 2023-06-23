@extends('layouts.app')
@section('slot')
    <div class="rbt-create-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="accordion-body card-body">
                    <form action="{{ route('admin.addannouncement') }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        @foreach ($errors->all() as $err)
                            <p class="alert alert-danger">
                                {{ $err }}
                            </p>
                        @endforeach
                        <div class="rbt-course-field-wrapper rbt-default-form">
                            <div class="course-field mb--15">
                                <label for="">Announcement Title</label>
                                <input type="text" name="title" placeholder="New Announcement" required>

                            </div>
                            <div class="course-field mb--15">
                                <label for="">Announcement content</label>
                                <input type="description" name="content" placeholder="Announcement content" required>
                            </div>
                            <button type="submit" value="create"
                                class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center">
                                <i>upload announcement</i>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
