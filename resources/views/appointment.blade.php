@extends('layouts.frontend')
@section('title', 'Appointment')

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
                                <div class="row justify-content-center">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6 ml-auto mr-auto">
                                        <a href="{{route('appointments.index')}}" type="button" class="btn btn-primary">View Appointments</a>
                                        <hr>
                                        <h1 style="color:orange;">Add an appointment</h1><br>
                                        @isset($message)
                                            <div class="alert alert-success">
                                                <strong>{{$message}}</strong>
                                            </div>
                                        @endif
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form role="form" method="POST" action="{{url ('send')}}" autocomplete="off">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="control-label">First Name</label>
                                                <div>
                                                    <input type="text" class="form-control input-lg" name="firstName" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Last Name</label>
                                                <div>
                                                    <input type="text" class="form-control input-lg" name="lastName" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Phone</label>
                                                <div>
                                                    <input type="text" class="form-control input-lg" name="phone" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Pet's Name</label>
                                                <div>
                                                    <input type="text" class="form-control input-lg" name="petName" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Appointment Date</label>
                                                <div>
                                                    <!-- <input type="time" class="form-control input-lg" name="time" value=""> -->
                                                    <input type="date" class="form-control input-lg" name="date" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Appointment Time</label>
                                                <div>
                                                    <!-- <input type="time" class="form-control input-lg" name="time" value=""> -->
                                                    <input type="time" class="form-control input-lg" name="time" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-success btn-block">
                                                        SEND
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-3"></div>
                                </div>
                            </div>
                        @endauth
                    @endif
            </div>
            </div>
        </section>
    </div>
@endsection
