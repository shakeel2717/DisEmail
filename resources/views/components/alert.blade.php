<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if ($errors->any())
@foreach ($errors->all() as $error)
<script>
    swal("{!! $error !!}");
</script>
@endforeach
@endif
@if (session('success') || session('status'))
<script>
    swal("{!! session('success') !!}");
</script>
@endif
@if (session('error'))
<script>
    swal("{!! session('error') !!}");
</script>
@endif