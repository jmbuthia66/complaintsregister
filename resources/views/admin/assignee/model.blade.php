<div class="modal fade" id="exampleModal{{$complaint->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Complaint information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p><img src="{{asset('images/complaintavatar.jpg')}}" class="table-user-thumb" alt="" width="200"></p>
                    <p class="badge badge-pill badge-dark">Status: {{$complaint->status}}</p>
                    <p>Client Name:      {{$complaint->client_name}}</p>
                    <p>Client Email:     {{$complaint->client_email}}</p>
                    <p>Client ID Number: {{$complaint->client_id}}</p>
                    <p>Client Policy No:     {{$complaint->policy_no}}</p>
                    <p>Client Phone No:     {{$complaint->client_no}}</p>
                    <p>Registered By: {{$complaint->name}}</p>
                    <p>Touch Point: {{$complaint->point}}</p>
                    <p>Query Type: {{$complaint->query}}</p>
                    <p>Branch: {{$complaint->branch}}</p>
                    <p>Department: {{$complaint->department}}</p>
                    <p>Assigned To: {{$complaint->assignee}}</p>
                    <p>Subject: {{$complaint->subject}}</p>
                    <p>Complaint: {{$complaint->complaint}}</p><br>

                    <h2>FINANCE SECTION</h2><br>
                    <p>Intervention Needed: {{$complaint->finance}}</p>
                    <p>Finance Assignee: {{$complaint->finance_assignee}}</p>
                    <p>Comment From Claims: {{$complaint->comment}}</p>
                    <p>Sent By: {{$complaint->sent_by}}</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  
                  </div>
                </div>
              </div>
            </div>


