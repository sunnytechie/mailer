<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
        <div class="modal-body">
           
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" 
                class="form-control" 
                id="title"
                placeholder="Name, City, Area, or Chapter, HQ, Wednesday, Daily Anything.."
                name="title"
                required>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Note:</label>
                <textarea class="form-control" placeholder="Write your email here" name="description" id="description"  style="height: 150px;">Write note </textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        
    </form>
      </div>
    </div>
  </div>