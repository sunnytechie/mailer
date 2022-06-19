<!-- Modal -->
<div class="modal fade" id="sentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">
            <i class="mdi mdi-send"></i>
            Sent Messages
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @foreach ($allMsgs as $msg)
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ Str::limit($msg->subject, 100) }}</h5>
                    <span>{{ $msg->updated_at->diffForHumans() }}</span>
                  
                  <div class="btn-group" role="group" aria-label="Button group">
                    <button class="btn btn-info" type="button">Reuse</button>
                    <button class="btn btn-danger" type="button">Delete</button>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>