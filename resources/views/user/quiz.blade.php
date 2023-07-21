@extends('layouts.user')
@section('slot')
      <!-- Start Enrole Course  -->
      <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">
            <div class="section-title">
                <h4 class="rbt-title-style-3">My Quiz Attempts
                </h4>
            </div>

            <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                <table class="rbt-table table table-borderless">
                    <thead>
                        <tr>
                            <th>Quiz</th>
                            <th>Status</th>
                            <th>Result</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quiz as $q)
                        <tr>
                            <th>
                                <p class="b3 mb--5">{{$q->created_at}}</p>
                                <span class="h6 mb--5">{{$q->title}}</span>
                                <p class="b3">Student: <a href="#">John Due</a></p>
                            </th>

                            <td>
                                <p class="b3">completed</p>
                            </td>
                            <td>
                                <span class="rbt-badge-5 bg-color-success-opacity color-success">Pass</span>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="{{route('user.questions.view',$q)}}" title="Edit"><i class="feather-edit pl--0"></i></a>

                                </div>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>

                </table>
            </div>

        </div>
    </div>
    <!-- End Enrole Course  -->
@endsection
