@if (\Session::has('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {!! \Session::get('success') !!}
    </div>
@endif

@if (\Session::has('note'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {!! \Session::get('note') !!}
    </div>
@endif
@if (\Session::has('faq_added'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {!! \Session::get('faq_added') !!}
    </div>
@endif
@if (\Session::has('faq_edited'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {!! \Session::get('faq_edited') !!}
    </div>
@endif
@if (\Session::has('successprofile'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {!! \Session::get('successprofile') !!}
    </div>
@endif
@if (\Session::has('addproduct'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {!! \Session::get('addproduct') !!}
    </div>
@endif
@if (\Session::has('delproduct'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {!! \Session::get('delproduct') !!}
    </div>
@endif
@if (\Session::has('faq_deleted'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {!! \Session::get('faq_deleted') !!}
    </div>
@endif
@if (\Session::has('comment'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {!! \Session::get('comment') !!}
    </div>
@endif
@if (\Session::has('permission'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {!! \Session::get('permission') !!}
    </div>
@endif