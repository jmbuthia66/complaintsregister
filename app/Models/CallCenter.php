<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallCenter extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'client_id',
        'client_name',
        'client_email',
        'client_no',
        'query',
        'policy_no',
        'action',
        'priority' ,
        'date_closed',
        'status',
        'assignee',
        'finance',
        'finance_assignee',
        'comment',
        'sent_by',
        'point',

    ];
}
