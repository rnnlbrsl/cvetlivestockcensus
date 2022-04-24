@extends('layouts.app')
@section('title')
Livestock Census | All Users
@endsection
@section('content')
<div class="container">
    <div class="table-responsive">
        <livewire:users-table>
    </div>
    <br>
</div>
<!-- Modal -->
<div class="modal fade" id="approve" tabindex="-1" role="dialog" aria-labelledby="approveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="approveLabel">Approve User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to approve this user?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" onclick="onApprove()" class="btn btn-primary">Yes</button>
        <input type="hidden" name="id" id="user-id">
      </div>
    </div>
  </div>
</div>
<script>
    function buttonOnClick(id) {
        $('#approve').modal('show');
        $('#user-id').val(id)
    }

    function onApprove() {
        const id = $('#user-id').val()
        $.ajax({
    		method:'PUT',
    		url:"/user/"+id,
    		headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
    		success:function(data) {
                alert('User successfully approved')
                location.reload()
            },
            error: function(error) {
                alert('Error encountered. Please try again later.')
            }
        });
            
    }
</script>
@endsection