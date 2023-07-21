@extends('layouts.app')
@section('slot')
    <div class="rbt-create-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-12">
                    <div class="container">
                        <div class="rbt-accordion-style rbt-accordion-01 rbt-accordion-06 accordion">
                            <div class="accordion" id="tutionaccordionExamplea1">
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="accOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#accCollapseOne" aria-expanded="true"
                                            aria-controls="accCollapseOne">Set quiz
                                        </button>
                                    </h2>
                                    <div id="accCollapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="accOne" data-bs-parent="#tutionaccordionExamplea1">
                                        <div class="accordion-body card-body">
                                            <form action="{{ route('admin.addquiz') }}" method="POST">
                                                @csrf
                                                <div class="course-field mb--15">
                                                    <label for="">Quiz Title</label>
                                                    <input  type="text" name="title" placeholder="New Course">

                                                    <small class="d-block mt_dec--5"><i class="feather-info"></i>
                                                        Title should be 30 charecter.</small>
                                                </div>
                                                <div class="course-field mb--20">
                                                    <h6>Choose Course</h6>
                                                    <div class="rbt-modern-select bg-transparent height-45 w-100 mb--10">
                                                        <select name="course_id" class="w-100" data-live-search="true"
                                                            title="Search Course. " multiple data-size="7"
                                                            data-actions-box="true" data-selected-text-format="count > 2">
                                                            @foreach ($course as $c)
                                                                <option value="{{ $c->id }}">
                                                                    {{ $c->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>


                                                <button type="submit" value="create"
                                                    class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center">
                                                    <i>Create new quiz</i>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>

                                                </button>
                                                <p class="py-3">Info: After creating the quiz, you would be able to set
                                                    questions on the next page</p>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
