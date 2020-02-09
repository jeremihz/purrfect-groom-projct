@isset($message)
<div class="alert alert-success">
<strong>{{$message}}</strong>
</div>
@endif
@extends('layouts.frontend')
@section('title', 'book')

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
            <h1 style="color:orange;">Schedule an appointment</h1><br>
            <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#scheduleForm">Schedule</button>
            <div id="scheduleForm" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title">Schedule Appointment</h1>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="POST" action="{{url ('send')}}">
                                  {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label">Your Full Name</label>
                                    <div>
                                        <input type="text" class="form-control input-lg" name="name" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Your Email</label>
                                    <div>
                                        <input type="email" class="form-control input-lg" name="email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Message</label>
                                    <div>
                                        <input type="textarea" class="form-control input-lg" name="message" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Appointment Time</label>
                                    <div>
                                        <!-- <input type="time" class="form-control input-lg" name="time" value=""> -->
                                        <input type="time" class="form-control input-lg" name="time" value="<?php echo date('H:i'); ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-success">
                                            SEND
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <br><br><br>
            <br>
            @endauth
          @endif
          </div>
        </section>



    <!-- INTRO -->
 


  </div>
  <!-- End Content -->
  @endsection
