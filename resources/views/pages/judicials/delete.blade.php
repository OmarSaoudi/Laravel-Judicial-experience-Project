<!-- Delete Judicial -->
<div class="modal fade" id="DeleteJudicial{{ $judicial->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">{{ trans('Judicial_trans.delete_judicial') }}</h4>
    </div>
    <div class="modal-body">
      <form action="{{ route('judicials.destroy','test') }}" method="post">
      @csrf
      {{ method_field('delete') }}
        <div class="modal-body">
          <p>{{ trans('Judicial_trans.Are_sure_of_the_deleting_process_?') }}</p><br>
          <input type="hidden" name="id"  value="{{ $judicial->id }}">
          <input class="form-control" name="name" value="{{ $judicial->name }}" type="text" readonly>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">{{ trans('Judicial_trans.save_changes') }}</button>
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">{{ trans('Judicial_trans.close') }}</button>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>
<!-- End Delete -->
