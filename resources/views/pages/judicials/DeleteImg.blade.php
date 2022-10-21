 <!-- Delete Student -->
 <div class="modal fade" id="DeleteAttachment{{ $attachment->id }}">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Delete Attachment</h4>
    </div>
    <div class="modal-body">
    <form action="{{ route('DeleteAttachment') }}" method="post">
    @csrf
     <div class="modal-body">
      <input type="hidden" name="id" value="{{ $attachment->id }}">
      <input type="hidden" name="judicial_name" value="{{ $attachment->attachmentable->name }}">
      <input type="hidden" name="judicial_id" value="{{ $attachment->attachmentable->id }}">
      <p>Are sure of the deleting process ?</p>
      <input type="text" name="filename" readonly value="{{ $attachment->filename }}" class="form-control">
     </div>
     <div class="modal-footer">
       <button type="submit" class="btn btn-danger">Save changes</button>
       <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
     </div>
     </form>
    </div>
   </div>
  </div>
</div>
<!-- End Delete -->
