@extends('layouts.app')
@section('slot')
    <div class="rbt-create-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5">


                <form action="{{ route('admin.addcategory') }}" enctype="multipart/form-data" method="POST">
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">
                            {{ $err }}
                        </p>
                    @endforeach
                    @csrf
                    <div class="rbt-accordion-style rbt-accordion-01 rbt-accordion-06 accordion">
                        <div class="accordion" id="tutionaccordionExamplea1">
                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="accOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#accCollapseOne" aria-expanded="true"
                                        aria-controls="accCollapseOne">Add Category
                                    </button>
                                </h2>
                                <div id="accCollapseOne" class="accordion-collapse collapse show" aria-labelledby="accOne"
                                    data-bs-parent="#tutionaccordionExamplea1">
                                    <div class="accordion-body card-body">
                                        <!-- Start Course Field Wrapper  -->
                                        <div class="rbt-course-field-wrapper rbt-default-form">
                                            <div class="course-field mb--15">
                                                <label for="field-1">Category name</label>
                                                <input id="field-1" type="text" placeholder="New Category"
                                                    name="name" required>
                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> Title should
                                                    be 30 charecter.</small>
                                            </div>
                                        </div>
                                        <!-- End Course Field Wrapper  -->
                                    </div>
                                </div>
                            </div>
                            <button type="submit" value="create"
                                class="rbt-btn btn-gradient hover-icon-reverse w-20 text-center">
                                <i>Add category</i>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
