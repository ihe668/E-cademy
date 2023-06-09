@extends('layouts.app')
@section('slot')
    <!-- Start Modal Area  -->
    <div class="rbt-default-modal " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="feather-x"></i>
                    </button>
                </div>
                <form action="{{route('admin.addcoursecontent')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="inner rbt-default-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="modal-title mb--20" id="exampleModalLabel">Add Topic</h5>
                                    <div class="course-field mb--20">
                                        <label for="modal-field-1"> Name</label>
                                        <input id="modal-field-1" type="text" name="name">
                                        <small><i class="feather-info"></i> Topic titles are displayed publicly wherever
                                            required. Each topic may contain one or more lessons, quiz and assignments.</small>
                                    </div>
                                    <div class="course-field mb--20">
                                        <label for="modal-field-2"> Summary</label>
                                        <textarea id="modal-field-2" name="summary"></textarea>
                                        <small><i class="feather-info"></i> Add a summary of short text to prepare students for
                                            the activities for the topic. The text is shown on the course page beside the
                                            tooltip beside the topic name.</small>
                                    </div>
                                    <div class="course-field mb--20">
                                        <label for="modal-field-2"> Content</label>
                                        <textarea id="modal-field-2" name="content"></textarea>
                                        <small><i class="feather-info"></i> Add a more detailed text to emphasize and butress
                                            your summary.</small>
                                    </div>
                                    <div class="course-field mb--20">
                                        <label for="modal-field-1"> Video link (optional)</label>
                                        <input id="modal-field-1" type="text" name="link">
                                        <small><i class="feather-info"></i> Copy the URL of your youtube video and paste it
                                            here.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-circle-shape"></div>

                    <div class="modal-footer pt--30">
                        <button type="submit" class="rbt-btn btn-border btn-md radius-round-10"
                            data-bs-dismiss="modal">Upload</button>
                        <button type="button" class="rbt-btn btn-border btn-md radius-round-10 px-3 bg-danger"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Area  -->
@endsection
