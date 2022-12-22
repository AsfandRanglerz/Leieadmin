@if (session()->has('message')){
<script>
    toastr.success('{{session()->get('message')}}');
</script>
@endif
@if (session()->has('err_message')){
<script>
    toastr.error('{{session()->get('err_message')}}');
</script>
@endif
