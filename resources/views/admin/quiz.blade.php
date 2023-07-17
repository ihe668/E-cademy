@extends('layouts.app')
@section('slot')
    <form action="{{route('admin.addquestion')}}" method="POST">
        @csrf
        <label for="question">Question:</label>
        <input type="text" name="question" id="question" required>

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
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <option value="4">Option 4</option>
            <!-- Add options dynamically based on the number of options -->
        </select>

        <button type="submit" value="create"
        class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center">
        <i>Add Question</i>
        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
    </button>
    </form>
@endsection
