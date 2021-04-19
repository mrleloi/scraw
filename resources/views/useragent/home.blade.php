@extends('inc.layout.mainlayout',['title'=>'GET USER AGENT'])
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <div class="row">
            <form action="{{ route('useragent.createNewUserAgent') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="createNewUserAgent" value="true">
                <input type="submit" value="GET NEW USER AGENT">
            </form>
            @if(Session::has('newlyUserAgent'))
                <p>
                    <input type="text" value="{{ Session::get('newlyUserAgent') }}" id="newlyUserAgent">
                    <button onclick="copyNewlyUserAgent()">Copy text</button>
                </p>
            @endif
            </div>
        </div>
    </section>
@endsection
@section('after-script')
<script>
    function copyNewlyUserAgent() {
        var copyText = document.getElementById("newlyUserAgent");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
        toastr.success("Copied the text: " + copyText.value);
    }
</script>
@endsection
@section('after-css')
<style>
    .tooltip {
        position: relative;
        display: inline-block;
    }
    .tooltip .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 150%;
        left: 50%;
        margin-left: -75px;
        opacity: 0;
        transition: opacity 0.3s;
    }
    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }
    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
</style>
@endsection
