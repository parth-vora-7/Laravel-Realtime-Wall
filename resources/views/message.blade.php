@if(session('message'))
<div class="alert {{ session('alert-class', 'alert-info') }}">
    {{ session('message') }}
</div>
@endif