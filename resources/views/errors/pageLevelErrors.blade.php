     @if(Session::has('failure-message'))
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Failure!</strong> {{Session::get('failure-message')}}.
</div>
@elseif(Session::has('success-message'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> {{Session::get('success-message')}}.
</div>
@endif
{{-- failure-message --}}