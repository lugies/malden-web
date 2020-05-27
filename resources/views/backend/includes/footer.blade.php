<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Nako Play
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020- <a target="_blank" href="https://kroppa.com">Kroppa.com</a></strong>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/adminlte.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/datatables.min.js')}}"></script>
{{--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
<script src="{{asset('assets/pv-tool/js/config.js')}}"></script>
<script src="{{asset('assets/pv-tool/js/util.js')}}"></script>
<script src="{{asset('assets/pv-tool/js/jquery.emojiarea.js')}}"></script>
<script src="{{asset('assets/pv-tool/js/EmojiPopup.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{asset('assets/pv-tool/js/custom.js')}}"></script>
<script src="{{asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
@yield('js')
@include('sweet::alert')
</body>
</html>
