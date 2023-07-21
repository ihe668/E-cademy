@extends('layouts.app')
@section('slot')
    <div class="rbt-create-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5">
                <p class=" d-flex align-items-center justify-content-center">NB: now set the questions for the quiz</p>
                <div class="col-lg-12">
                    <div class="container">
                        <div class="rbt-accordion-style rbt-accordion-01 rbt-accordion-06 accordion">
                            <div class="accordion" id="tutionaccordionExamplea1">
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="accOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#accCollapseOne" aria-expanded="true"
                                            aria-controls="accCollapseOne">Add quiz questions
                                        </button>
                                    </h2>
                                    <div id="accCollapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="accOne" data-bs-parent="#tutionaccordionExamplea1">
                                        <div class="accordion-body card-body">
                                            <form action="{{ route('admin.addquestion') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $id }}" name="exam_id">
                                                <div class="rbt-course-field-wrapper rbt-default-form">
                                                    <div class="course-field mb--15">
                                                        <label for="question">Question:</label>
                                                        <input type="text" name="question" id="question" required>
                                                    </div>

                                                    <div class="course-field mb--15">
                                                    </div>
                                                    <label for="option1">Option 1:</label>
                                                    <input type="text" name="options[]" id="option1" required>

                                                    <label for="option2">Option 2:</label>
                                                    <input type="text" name="options[]" id="option2" required>

                                                    <label for="option2">Option 3:</label>
                                                    <input type="text" name="options[]" id="option2" required>

                                                    <label for="option2">Option 4:</label>
                                                    <input type="text" name="options[]" id="option2" required>

                                                    <!-- Add more options as needed -->

                                                    <label for="correct_option">Correct Option:</label>
                                                    <select name="correct_option" id="correct_option" required>
                                                        <option value="0">Option 1</option>
                                                        <option value="1">Option 2</option>
                                                        <option value="2">Option 3</option>
                                                        <option value="3">Option 4</option>
                                                        <!-- Add options dynamically based on the number of options -->
                                                    </select>

                                                    <button type="submit" value="create"
                                                        class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center">
                                                        <i>Add Question</i>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </button>
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
