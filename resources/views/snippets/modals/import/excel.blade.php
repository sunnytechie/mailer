<div class="modal fade" id="importPeople" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="modal-body">
         
            <div class="form-group">
              <label>Select file to upload</label>
                <input 
                type="file" 
                name="file" 
                class="form-control" 
                id="file"
                required>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Upload</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </form>
      </div>
    </div>
  </div>