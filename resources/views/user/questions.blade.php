@extends('layouts.user')
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
                                            aria-controls="accCollapseOne">Add quiz questions
                                        </button>
                                    </h2>
                                    <div id="accCollapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="accOne" data-bs-parent="#tutionaccordionExamplea1">
                                        <div class="accordion-body card-body">
                                            <form action="{{ route('user.answers.submit') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $id }}" name="quiz_id">
                                                @foreach ($questions as $question)
                                                    <p class=" text-dark">{{ $question->id }}. {{ $question->question }}</p>
                                                    <input type="hidden" value="{{ $question->mark }}" name="mark">
                                                    <!-- Display options -->
                                                    @foreach ($question->options as $key => $option)
                                                        <div>
                                                            <input type="radio"
                                                                id="option_{{ $question->id }}_{{ $key }}"
                                                                name="answers[{{ $question->id }}]"
                                                                value="{{ $key }}">
                                                            <label
                                                                for="option_{{ $question->id }}_{{ $key }}">{{ $option }}</label>

                                                        </div>
                                                    @endforeach
                                                @endforeach
                                                <br>
                                                <button type="submit" value="create"
                                                    class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center">
                                                    <i>submit answer</i>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                </button>
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
