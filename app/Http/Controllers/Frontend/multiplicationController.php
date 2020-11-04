<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class multiplicationController extends Controller
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

    public function multiview()
    {
        $exam = Exam::where('user_id',auth()->user()['id'])->orderBy('created_at','DESC')->firstOrFail();

        if($exam->student_answers == '')
        {
            $data['questions'] = Question::where('exam_id',$exam->id)->get();
            return view('frontend.pages.multiplication',$data);
        }
        else
        {
            $error = 'Bu imtahanda artıq iştirak etmisiniz';
            abort(404,$error);
        }
    }

    public function multiviewPost(Request $request)
    {
        $exam_id = Exam::where('user_id',auth()->user()['id'])->orderBy('created_at','DESC')->firstOrFail('id')->id;
        $questions      = Question::where('exam_id',$exam_id)->get();
        $rightanswers   = [];
        $i = 0;
        foreach ($questions as $question)
        {
            $rightanswers[$i] = $question['answer'];
            $i++;
        }
        $rightanswers;
        $studentAnswers = [];
        $studentAnswers[0] = $request->sual_1;
        $studentAnswers[1] = $request->sual_2;
        $studentAnswers[2] = $request->sual_3;
        $studentAnswers[3] = $request->sual_4;
        $studentAnswers[4] = $request->sual_5;
        $studentAnswers[5] = $request->sual_6;
        $studentAnswers[6] = $request->sual_7;
        $studentAnswers[7] = $request->sual_8;
        $studentAnswers[8] = $request->sual_9;
        $studentAnswers[9] = $request->sual_10;
        $studentAnswers;

        $right      = 0;
        $mistake    = 0;
        $nowritten  = 0;

        for($i = 0;$i < 10;$i++)
        {
            if ($studentAnswers[$i] !='')
            {
                if ($rightanswers[$i] == $studentAnswers[$i])
                {
                    $right++;
                }
                else
                {
                    $mistake++;
                }
            }
            else
            {
                $nowritten++;
            }
        }

        strlen(implode(',',$studentAnswers)) > 250 ? abort('404','Bir şeylər yanlış gedir!') : '' ;

        Exam::where('id',$exam_id)->update([
            'right_answers'         => serialize($rightanswers),
            'student_answers'       => serialize($studentAnswers),
        ]);

        $data['questions']          = $questions;
        $data['rightanswers']       = $rightanswers;
        $data['studentAnswers']     = $studentAnswers;
        $data['right']              = $right;
        $data['mistake']            = $mistake;
        $data['nowritten']          = $nowritten;
        return view('frontend.pages.multiplicationResult',$data);
    }

}
