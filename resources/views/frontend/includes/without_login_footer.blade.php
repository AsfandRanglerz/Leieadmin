<footer class="row mx-0 admin-panel-footer">
    <div class="col-sm-6">
        © <span id="current-year"></span> <a href="../" class="text-decoration-none">Garantihuset AS</a>
    </div>
    <div class="col-sm-6 text-sm-right mt-sm-0 mt-1">
        <a href="{{url('/')}}" class="mr-3 text-decoration-none">front page</a>
        <a href="{{url('client/contact-us')}}" class="text-decoration-none">Support</a>
    </div>
</footer>
</body>
@include('frontend.includes.js')
<script src="{{asset('public/front_end/plugins/jquery.steps-1.1.0/jquery.steps.min.js')}}"></script>
</html>
