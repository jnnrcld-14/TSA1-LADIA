<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'task_id';

    protected $allowedFields = [
        'user_id',
        'task_title',
        'task_description',
        'status',
        'due_date'
    ];
}