<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('email.store') }}" method="POST">
          @csrf
        <div class="modal-body">
         
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">E-Mail Address:</label>
              
                <input type="email" class="form-control" id="email"
                    placeholder="Email Address"
                    name="email"
                    required>
            </div>
           
            <div class="form-group">
              <select class="form-control shadow-sm" 
                      id="category"
                      name="category"
                      required>
                  <option selected>Select category</option>
                  @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
              </select>
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