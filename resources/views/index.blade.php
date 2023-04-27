@extends('layouts.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper content-page">
        <!-- Content Header (Page header) -->
        <!-- <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                        </ol>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Docters List</h3>
                            <div id="categoryExport" style="float:right">
                                <a href="{{ route('doctor.create') }}" class="btn btn-button-store">
                                    Add Appointment Time
                                </a>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form>
                            <table class="table table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            <div class="form-group">Filter</div>
                                        </th>
                                        <th>
                                            <div class="form-group">
                                                <select class="form-control select2"  name="name" id="name" style="width: 100%;">
                                                    <option value="">--Select Doctor--</option>
                                                    @foreach ($doctors as $doctor)
                                                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group">
                                                <select class="form-control select2" name="day"  id="day" style="width: 100%;">
                                                    <option value="">--Select Day--</option>
                                                    <option value="1">Monday</option>
                                                    <option value="2">Tuesday</option>
                                                    <option value="3">Wednesday</option>
                                                    <option value="4">Thursday</option>
                                                    <option value="5">Friday</option>
                                                    <option value="6">Saturday</option>
                                                    <option value="7">Sunday</option>

                                                </select>
                                            </div>
                                        </th>
                                        {{-- <th>
                                            <div class="form-group">
                                                <div class="input-group date" id="start-timepicker"
                                                    data-target-input="nearest">
                                                    <input type="text"
                                                        class="form-control datetimepicker-input"
                                                        name="startTime" id="startTime"
                                                        placeholder="Start Time"
                                                        data-target="#start-timepicker"
                                                        data-toggle="datetimepicker"
                                                        autocomplete="off"/>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-group">
                                                <div class="input-group date" id="end-timepicker"
                                                    data-target-input="nearest">
                                                    <input type="text"
                                                        class="form-control datetimepicker-input"
                                                        name="endTime" id="endTime"
                                                        placeholder="End Time"
                                                        data-target="#end-timepicker"
                                                        data-toggle="datetimepicker"
                                                        autocomplete="off"/>
                                                </div>
                                            </div>
                                        </th> --}}
                                        {{-- <th>Description</th> --}}
                                        <th>
                                            <div class="form-group">
                                                <a href="javascript:void(0)" id="search-doctor" class="btn btn-danger">Search</a>
                                                <a href="{{ route('doctor.index') }}" class="btn btn-danger">Reset</a>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                          </div>
                        <div class="card-body" id="show-doctor">
                            <table id="doctor-table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($doctors as $doctor)
                                        <tr id="delete-row-{{ $doctor->id }}">
                                            <td>
                                                <a href="javascript:void(0)" onclick="showAvaibility({{ $doctor->id  }})" style="color:#0c7dee;">
                                                    {{ $doctor->name }}
                                                </a>
                                            </td>
                                            <td>
                                                {{ $doctor->address }}
                                            </td>

                                            <td>
                                                <form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-button-store delete-book"
                                                        onclick="return confirm('Are you sure want to delete this Doctor!')"><i
                                                            class="fa fa-trash"></i></button>
                                                    <a href="{{ route('doctor.edit', $doctor->id) }}" id="edit-book"
                                                        class="btn btn-button-store"><i class="fa fa-pencil"></i></a>

                                                </form>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="no-data-row">
                                            <td colspan="4" rowspan="2" align="center">
                                                <div class="message">
                                                    <p>No data available in table</p>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
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



<div class="modal fade" id="show-time"   tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Category</h4>

        </div>
        <div class="modal-body">
            <div class="card card-primary" id="show-avaibility">

            </div>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
</div>


@stop
