<div class="modal fade" id="exampleModal{{$call_record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Complaint information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p><img src="{{asset('images/complaintavatar.jpg')}}" class="table-user-thumb" alt="" width="300"></p>
                    <p class="badge badge-pill badge-dark">Status: {{$call_record->status}}</p>
                    <p>Client Name:      {{$call_record->client_name}}</p>
                    <p>Client Email:     {{$call_record->client_email}}</p>
                    <p>Client ID Number: {{$call_record->client_id}}</p>
                    <p>Client Policy No:     {{$call_record->policy_no}}</p>
                    <p>Client Phone No:     {{$call_record->client_no}}</p>
                    <p>Agent: {{$call_record->name}}</p>
                    <p>Query Type: {{$call_record->query}}</p>
                    <p>Date Opened: {{$call_record->created_at}}</p>
                    <p>Date Closed: {{$call_record->date_closed}}</p>
                    <p>Action: {{$call_record->action}}</p>

                    <h2>FINANCE SECTION:</h>
                    <p>Intervention Needed: {{$call_record->finance}}</p>
                    <p>Finance Assignee: {{$call_record->finance_assignee}}</p>
                    <p>Comment From Claims: {{$call_record->comment}}</p>
                    <p>Sent By: {{$call_record->sent_by}}</p>
                  </div>
                  <div class="modal-footer">

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  
                  </div>
                </div>
              </div>
            </div>


