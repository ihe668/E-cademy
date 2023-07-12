@extends('layouts.user')
@section('slot')
 <!-- Start Enrole Course  -->
 <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
    <div class="content">
        <div class="section-title">
            <h4 class="rbt-title-style-3">My Enrollment History</h4>
        </div>

        <div class="rbt-dashboard-table table-responsive mobile-table-750">
            <table class="rbt-table table table-borderless">
                <thead>
                    <tr>
                        <th>Enrollment ID</th>
                        <th>Course Name</th>
                        <th>Date</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
                </thead>
                

                <tbody>
                    @foreach ($enrollment_history as $enroll)
                    <tr>
                        <th>#{{$enroll->id}}</th>
                        <td>{{$enroll->first_name}} {{$enroll->last_name}}</td>
                        <td>{{$enroll->created_at->format('d M y h:ia')}}</td>
                        <td>₦{{ number_format($enroll->amount / 100, 2) }}</td>
                        <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span></td>
                        {{-- <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td> --}}
                        {{-- <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span></td> --}}
                        {{-- <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span></td> --}}



                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- End Enrole Course  -->
@endsection
