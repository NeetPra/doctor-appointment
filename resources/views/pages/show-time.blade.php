  <!-- /.card-header -->
          <!-- form start -->


          <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Day</label>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" class="form-control" name="monday" id="" {{ ($monday->open_status == 1) ? "checked" : ""}}>
                        <label for="">
                            Monday
                        </label>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" class="form-control" name="tuesday" id="" {{ ($tuesday->open_status == 1) ? "checked" : ""}}>
                        <label for="">
                            Tuesday
                        </label>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" class="form-control" name="wednesday" id="" {{ ($tuesday->open_status == 1) ? "checked" : ""}}>
                        <label for="">
                            Wednesday
                        </label>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" class="form-control" name="thursday" id="" {{ ($thursday->open_status == 1) ? "checked" : ""}}>
                        <label for="">
                            Thursday
                        </label>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" class="form-control" name="friday" id="" {{ ($friday->open_status == 1) ? "checked" : ""}}>
                        <label for="">
                            Friday
                        </label>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" class="form-control" id="saturday" name="" {{ ($saturday->open_status == 1) ? "checked" : ""}}>
                        <label for="">
                            Saturday
                        </label>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" class="form-control" id="sunday" name="" {{ ($sunday->open_status == 1) ? "checked" : ""}}>
                        <label for="">
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
                            placeholder="Not Availeble"
                            data-target="#monday-start-timepicker"
                            data-toggle="datetimepicker"
                            value="{{ old('monday_start_time', $monday->start_time) }}"
                            autocomplete="off" 
                            disabled
                            />
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="input-group date" id="tuesday-start-timepicker"
                        data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input"
                            name="tuesday_start_time" id="tuesday-start_time"
                            placeholder="Not Availeble"
                            data-target="#tuesday-start-timepicker"
                            value="{{ old('tuesday_start_time', $tuesday->start_time) }}"
                            data-toggle="datetimepicker"
                            disabled
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
                            placeholder="Not Availeble"
                            data-target="#wednesday-start-timepicker"
                            disabled
                            value="{{ old('wednesday_start_time', $wednesday->start_time) }}"
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
                            placeholder="Not Availeble"
                            data-target="#thursday-start-timepicker"
                            disabled
                            value="{{ old('thursday_start_time', $thursday->start_time) }}"
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
                            placeholder="Not Availeble"
                            data-target="#friday-start-timepicker"
                            disabled
                            value="{{ old('friday_start_time', $friday->start_time) }}"
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
                            placeholder="Not Availeble"
                            disabled
                            data-target="#saturday-start-timepicker"
                            value="{{ old('saturday_start_time', $saturday->start_time) }}"
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
                            placeholder="Not Availeble"
                            data-target="#sunday-start-timepicker"
                            disabled
                            value="{{ old('sunday_start_time', $sunday->start_time) }}"
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
                            placeholder="Not Availeble"
                            data-target="#monday-end-timepicker"
                            disabled
                            value="{{ old('monday_end_time', $monday->end_time) }}"
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
                            placeholder="Not Availeble"
                            data-target="#tuesday-end-timepicker"
                            disabled
                            value="{{ old('tuesday_end_time', $tuesday->end_time) }}"
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
                            placeholder="Not Availeble"
                            data-target="#wednesday-end-timepicker"
                            disabled
                            value="{{ old('wednesday_end_time', $wednesday->end_time) }}"
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
                            placeholder="Not Availeble"
                            data-target="#thursday-end-timepicker"
                            disabled
                            value="{{ old('thursday_end_time', $thursday->end_time) }}"
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
                            placeholder="Not Availeble"
                            data-target="#friday-end-timepicker"
                            disabled
                            value="{{ old('friday_end_time', $friday->end_time) }}"
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
                            placeholder="Not Availeble"
                            disabled
                            value="{{ old('saturday_end_time', $saturday->end_time) }}"
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
                            placeholder="Not Availeble"
                            value="{{ old('sunday_end_time', $sunday->end_time) }}"
                            data-target="#sunday-end-timepicker"
                            disabled
                            data-toggle="datetimepicker"
                            autocomplete="off"/>
                    </div>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
        </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default edit-model-close" data-dismiss="modal">Close</button>
            </div>
<script>
$(function() {

$('#monday-start-timepicker').datetimepicker({
    format: 'LT'
})
$('#monday-end-timepicker').datetimepicker({
    format: 'LT'
})
$('#tuesday-start-timepicker').datetimepicker({
    format: 'LT'
})
$('#tuesday-end-timepicker').datetimepicker({
    format: 'LT'
})
$('#wednesday-start-timepicker').datetimepicker({
    format: 'LT'
})
$('#wednesday-end-timepicker').datetimepicker({
    format: 'LT'
})
$('#thursday-start-timepicker').datetimepicker({
    format: 'LT'
})
$('#thursday-end-timepicker').datetimepicker({
    format: 'LT'
})
$('#friday-start-timepicker').datetimepicker({
    format: 'LT'
})
$('#friday-end-timepicker').datetimepicker({
    format: 'LT'
})
$('#saturday-start-timepicker').datetimepicker({
    format: 'LT'
})
$('#saturday-end-timepicker').datetimepicker({
    format: 'LT'
})
$('#sunday-start-timepicker').datetimepicker({
    format: 'LT'
})
$('#sunday-end-timepicker').datetimepicker({
    format: 'LT'
})

});
      
</script>