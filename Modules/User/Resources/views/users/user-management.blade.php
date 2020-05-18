@extends('layouts.app')

@section('content')
<div class="container justify-content-center pt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <button class="btn btn-info btn-request">Request data</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script>
    $(document).ready(function() {
    $(".btn-request").click(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
            }
        })

        $.ajax({
            url: `${window.location.href}/all-users`,
            type: 'GET',
            success: function (data) {
                console.log(data);                
            }
        });
    });
});

</script>
@endsection