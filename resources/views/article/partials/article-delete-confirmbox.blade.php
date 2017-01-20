<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete article</h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to do this?</p>
      </div>
      <div class="modal-footer">
        {!! Form::open(['method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn-danger btn btn-blog pull-right marginBottom10']) !!}
        {!! Form::close() !!}
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>