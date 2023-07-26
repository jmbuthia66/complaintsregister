<div class="modal fade" id="exampleModal{{$suggestion->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Suggestion information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p><img src="{{asset('images/complaintavatar.jpg')}}" class="table-user-thumb" alt="" width="200"></p>
                    
                    <p>Client Name:      {{$suggestion->client_name}}</p>
                    <p>Client Email:     {{$suggestion->client_email}}</p>
                    <p>Client Phone No:     {{$suggestion->client_no}}</p>
                    <p>Registered By: {{$suggestion->name}}</p>
                    <p>Branch: {{$suggestion->branch}}</p>
                    <p>Department: {{$suggestion->department}}</p>
                    <p>Suggestion: {{$suggestion->suggestion}}</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  
                  </div>
                </div>
              </div>
            </div>


