<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = 'exam_history';

    protected $fillable = ['user_id','right_answers','student_answers'];

    public function getTopicName()
    {
        return $this->hasOne('App\Models\Topic','id', 'topic_id');
    }

    public function getUserName()
    {
        return $this->hasOne('App\Models\User','id', 'user_id');
    }
}
