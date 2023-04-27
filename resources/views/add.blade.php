@extends('layouts.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper content-page">
        <section class="content">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Appointment</h3>
                            <div id="categoryExport" style="float:right">
                                <a href="{{ route('doctor.index') }}" class="btn btn-button-store">
                                    <i class="fa fa-arrow-left"></i> Back
                                </a>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="add-form" action="{{ route("doctor.store")}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Doctors</label>
                                            <select class="form-control select2" name="doctor_id" style="width: 100%;">
                                                <option value="">--Select--</option>
                                                @foreach ($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Time Availability</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Day</label>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" class="form-control" name="monday" id="monday">
                                                            <label for="monday">
                                                                Monday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" class="form-control" name="tuesday" id="tuesday">
                                                            <label for="tuesday">
                                                                Tuesday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" class="form-control" name="wednesday" id="wednesday">
                                                            <label for="wednesday">
                                                                Wednesday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" class="form-control" name="thursday" id="thursday">
                                                            <label for="thursday">
                                                                Thursday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" class="form-control" name="friday" id="friday">
                                                            <label for="friday">
                                                                Friday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" class="form-control" id="saturday" name="saturday">
                                                            <label for="saturday">
                                                                Saturday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" class="form-control" id="sunday" name="sunday">
                                                            <label for="sunday">
                                                                Sunday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Start Time</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group date" id="monday-start-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                                name="monday_start_time" id="monday-start_time"
                                                                placeholder="Start Time"
                                                                data-target="#monday-start-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off" />
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="input-group date" id="tuesday-start-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                                name="tuesday_start_time" id="tuesday-start_time"
                                                                placeholder="Start Time"
                                                                data-target="#tuesday-start-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="input-group date" id="wednesday-start-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                name="wednesday_start_time" id="wednesday-start_time"
                                                                placeholder="Start Time"
                                                                data-target="#wednesday-start-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="input-group date" id="thursday-start-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                name="thursday_start_time" id="thursday-start_time"
                                                                placeholder="Start Time"
                                                                data-target="#thursday-start-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="input-group date" id="friday-start-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                name="friday_start_time" id="friday-start_time"
                                                                placeholder="Start Time"
                                                                data-target="#friday-start-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="input-group date" id="saturday-start-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                name="saturday_start_time" id="saturday-start_time"
                                                                placeholder="Start Time"
                                                                data-target="#saturday-start-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group date" id="sunday-start-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                name="sunday_start_time" id="sunday-start_time"
                                                                placeholder="Start Time"
                                                                data-target="#sunday-start-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>End Time</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group date" id="monday-end-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                name="monday_end_time" id="monday-end_time"
                                                                placeholder="End Time"
                                                                data-target="#monday-end-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="input-group date" id="tuesday-end-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                name="tuesday_end_time" id="tuesday-end_time"
                                                                placeholder="End Time"
                                                                data-target="#tuesday-end-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="input-group date" id="wednesday-end-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                name="wednesday_end_time" id="wednesday-end_time"
                                                                placeholder="End Time"
                                                                data-target="#wednesday-end-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="input-group date" id="thursday-end-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                name="thursday_end_time" id="thursday-end_time"
                                                                placeholder="End Time"
                                                                data-target="#thursday-end-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="input-group date" id="friday-end-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                name="friday_end_time" id="friday-end_time"
                                                                placeholder="End Time"
                                                                data-target="#friday-end-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="input-group date" id="saturday-end-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                name="saturday_end_time" id="saturday-end_time"
                                                                placeholder="End Time"
                                                                data-target="#saturday-end-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                        <div class="input-group date" id="sunday-end-timepicker"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                name="sunday_end_time" id="sunday-end_time"
                                                                placeholder="End Time"
                                                                data-target="#sunday-end-timepicker"
                                                                data-toggle="datetimepicker"
                                                                autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                         <div class="form-group">
                                            <button class="btn btn-button-store" type="submit">Submit</button>
                                        </div>
                                         <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
    </div>


@stop
