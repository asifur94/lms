<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use App\Models\Curriculum;

class CourseView extends Component
{
    public $course_id;
    public function render()
    {
        $course = Course::where('id', $this->course_id)->first();
        $curriculums = Curriculum::where('course_id', $this->course_id)->get();

        return view('livewire.course-view', [
            'course' => $course,
            'curriculums' => $curriculums,
        ]);
    }

    public function curriculamDelete($id)
    {
        $curriculum = Curriculum::findOrFail($id);

        $curriculum->delete();

        flash()->addSuccess('Curriculum deleted successfully');
    }
}
