
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('public/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Select2 -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> -->
<script src="{{ asset('public/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('public/plugins/select2/js/select2.full.min.js') }}"></script>

<!-- date-range-picker -->
<script src="{{ asset('public/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('public/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('public/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('public/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('public/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('public/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('public/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

<!-- Admin App -->
<script src="{{ asset('public/dist/js/assignment.js') }}"></script>
<script src="{{ asset('public/dist/js/custom.js') }}"></script>
<script src="{{ asset('public/dist/js/datepickers.js') }}"></script>
<script src="{{ asset('public/dist/js/validation.js') }}"></script>

<!-- Page specific script -->

<script>
@if(Session::has('success'))
      toastr.success("{{ session('success') }}");
  @endif

  @if(Session::has('error'))
      toastr.error("{{ session('error') }}");
  @endif
   //Timepicker

</script>

</body>
</html>
