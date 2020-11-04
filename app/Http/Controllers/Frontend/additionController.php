<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class additionController extends Controller
{
    public function index()
    {
        $exam_history_table = new Exam();
        $exam_history_table->user_id = auth()->user()->id;
        $exam_history_table->topic_id = 1;
        $exam_history_table->save();

        $exam_id = Exam::where('user_id',auth()->user()->id)->orderBy('created_at','DESC')->first('id')->id;


        for($i = 0; $i < 10; $i++)
        {
            $question_table = new Question();
            $variantRandom  = rand(0,4);
            $variants       = ['a','b','c','d','e'];
            $a = rand(1,10);
            $b = rand(1,10);
            $question = $a.' &#8231 '.$b.' = ?';
            $answer = $a*$b;

            $question_table->exam_id    = $exam_id;
            $question_table->question   = $question;
            if($variants[$variantRandom] == 'a')
            {
                $question_table->A          = $answer;
                $question_table->B          = rand(1,100);
                $question_table->C          = rand(1,100);
                $question_table->D          = rand(1,100);
                $question_table->E          = rand(1,100);
            }
            elseif ($variants[$variantRandom] == 'b')
            {
                $question_table->A          = rand(1,100);
                $question_table->B          = $answer;
                $question_table->C          = rand(1,100);
                $question_table->D          = rand(1,100);
                $question_table->E          = rand(1,100);
            }
            elseif ($variants[$variantRandom] == 'c')
            {
                $question_table->A          = rand(1,100);
                $question_table->B          = rand(1,100);
                $question_table->C          = $answer;
                $question_table->D          = rand(1,100);
                $question_table->E          = rand(1,100);
            }
            elseif ($variants[$variantRandom] == 'd')
            {
                $question_table->A          = rand(1,100);
                $question_table->B          = rand(1,100);
                $question_table->C          = rand(1,100);
                $question_table->D          = $answer;
                $question_table->E          = rand(1,100);
            }
            else
            {
                $question_table->A          = rand(1,100);
                $question_table->B          = rand(1,100);
                $question_table->C          = rand(1,100);
                $question_table->D          = rand(1,100);
                $question_table->E          = $answer;
            }
            $question_table->answer         = $answer;
            $question_table->save();
        }
        return redirect()->route('multiplication');
    }
}
