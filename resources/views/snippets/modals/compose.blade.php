<div class="modal fade" id="compose" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Compose message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('email') }}" method="POST">
            @csrf
        <div class="modal-body text-left">
          
            <div class="form-group">
                <label for="message-text" class="col-form-label">Select a category of people to send email to:</label>
                
                <select class="form-control shadow-sm" 
                        id="category"
                        name="category_id"
                        required>
                    <option selected>Select category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="subjext-text" class="col-form-label">Message Subject</label>
                <input type="text" 
                        class="form-control" 
                        id="subject"
                        placeholder="God's Heart Beat Summary for the week"
                        name="subject"
                        required>
              </div>


            <div class="form-group">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea 
              class="form-control" 
              name="message"
              id="floatingTextarea"></textarea>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send message</button>
        </div>
    </form>
      </div>
    </div>
  </div>