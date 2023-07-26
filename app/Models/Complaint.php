<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Complaint extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'client_name',
        'client_email',
        'subject',
        'branch',
        'department',
        'priority' ,
        'complaint',
        'status',
        'client_id',
        'policy_no',
        'client_no',
        'assignee',
        'finance',
        'finance_assignee',
        'comment',
        'sent_by',
        'point',
        'query',
        'assignee_email',
    ];
}
