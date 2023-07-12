@extends('layouts.app')
@section('slot')
    <div class="rbt-create-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="accordion-body card-body">
                    <form action="{{ route('admin.addassignment') }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        @foreach ($errors->all() as $err)
                            <p class="alert alert-danger">
                                {{ $err }}
                            </p>
                        @endforeach
                        <div class="rbt-course-field-wrapper rbt-default-form">
                            <div class="course-field mb--15">
                                <label for="">Assignment name</label>
                                <input type="text" name="name" placeholder="New Assignment" required>

                            </div>
                            <div class="course-field mb--20">
                                <h6>Choose Course</h6>
                                <div class="rbt-modern-select bg-transparent height-45 w-100 mb--10">
                                    <select class="w-100" data-live-search="true" name="course_id"
                                        title="Search Course Category. ex. Design, Development, Business" multiple
                                        data-size="7" data-actions-box="true"
                                        data-selected-text-format="count > 2">
                                        @foreach ($course as $cou)
                                            <option value="{{ $cou->id }}">
                                                {{ $cou->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="course-field mb--15">
                                <label for="">Total Marks</label>
                                <input type="description" name="total_marks" placeholder="Total marks" required>
                            </div>
                            <button type="submit" value="create"
                                class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center">
                                <i>Upload Assignment</i>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
