<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class archiveController extends Controller
{
    public function archive()
    {
        $archives = Exam::where('user_id',auth()->user()['id'])->where('student_answers','!=','')->orderBy('updated_at','DESC')->get();

        if(count($archives) == 0)
        {
            $noData = 'Heç bir məlumat tapılmadı';
            $data['noData'] = $noData;
        }

        $data['archives'] = $archives;
        return view('frontend.pages.archive',$data);
    }

    public function archiveMore($student_name,$exam_id)
    {
        if(str_slug(auth()->user()->name_lastname) != $student_name)
        {
            abort(404,'Sizin bu imtahana baxmaq icazəniz yoxdur');
        }

        $archive = Exam::where('user_id',auth()->user()['id'])->where('id',$exam_id)->firstOrFail();
        $data['archive'] = $archive;

        $questions      = Question::where('exam_id',$exam_id)->get();
        $rightanswers   = unserialize($archive->right_answers);
        $studentAnswers   = unserialize($archive->student_answers);

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

        $data['questions']          = $questions;
        $data['rightanswers']       = $rightanswers;
        $data['studentAnswers']     = $studentAnswers;
        $data['right']              = $right;
        $data['mistake']            = $mistake;
        $data['nowritten']          = $nowritten;

        return view('frontend.pages.archiveSingle',$data);

    }
}
