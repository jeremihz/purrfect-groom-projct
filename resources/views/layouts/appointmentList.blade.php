@extends('layouts.frontend')
@section('title', 'Appointments')

@section('content')

    <!-- Content -->
    <div id="content">

        <!-- What We do -->
        <section class="intro padding-top-100 padding-bottom-100">
            <div class="container">
                <!-- Tittle -->
                <div class="heading-block text-center">
                    @if (Route::has('login'))
                        @auth
                            <div class="container">
                                <h1 style="color:orange;">Appointments List</h1><br>
                                <button type="button" class="btn btn-primary" onclick="window.location='{{ url("/csv") }}'">Get CSV</button>
                                <br><br>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <td><b>First Name</b></td>
                                        <td><b>Last Name</b></td>
                                        <td><b>Phone</b></td>
                                        <td><b>Pet's Name</b></td>
                                        <td><b>Appointment Date</b></td>
                                        <td><b>Appointment Time</b></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($appointments as $appointment)
                                        <tr>
                                            <td>{{ $appointment-> firstName }}</td>
                                            <td>{{ $appointment-> lastName }}</td>
                                            <td>{{ $appointment-> phone }}</td>
                                            <td>{{ $appointment-> petName }}</td>
                                            <td>{{ $appointment-> appointmentDate }}</td>
                                            <td>{{ $appointment-> appointmentTime }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        @endauth
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection
