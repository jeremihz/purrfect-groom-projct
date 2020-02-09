@isset($message)
    <div class="alert alert-success">
        <strong>{{$message}}</strong>
    </div>
@endif
@extends('layouts.frontend')
@section('title', 'Services')

@section('content')

    <!-- Content -->
    <div id="content">

        <!-- What We do -->
        <section class="intro padding-top-100 padding-bottom-100">
            <div class="container">
                <!-- Tittle -->
                <div class="heading-block text-center margin-bottom-80">
                    @if (Route::has('login'))
                        @auth
                            <h1 style="color:orange;">Add an appointment</h1><br>

                            <div class="row">
                                <div class="col-sm-5 ml-auto mr-auto">
                                    <form role="form" method="POST" action="{{url ('send')}}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="control-label float-left">First Name</label>
                                            <div>
                                                <input type="text" class="form-control input-lg" name="firstName" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label float-left">Last Name</label>
                                            <div>
                                                <input type="text" class="form-control input-lg" name="lastName" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label float-left">Phone</label>
                                            <div>
                                                <input type="text" class="form-control input-lg" name="phone" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label float-left">Pet's Name</label>
                                            <div>
                                                <input type="text" class="form-control input-lg" name="petName" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label float-left">Appointment Date and Time</label>
                                            <div>
                                                <!-- <input type="time" class="form-control input-lg" name="time" value=""> -->
                                                <input type="datetime-local" class="form-control input-lg" name="time" value="<?php echo date('H:i'); ?>" />
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
                            </div>
                            <br><br><br>
                            <br>
                        @endauth
                    @endif
            </div>
            </div>
        </section>



        <!-- INTRO -->



    </div>
    <!-- End Content -->
@endsection
