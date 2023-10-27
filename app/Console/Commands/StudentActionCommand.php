<?php

namespace App\Console\Commands;

use App\Models\Student;
use Illuminate\Console\Command;
use function PHPUnit\Framework\isEmpty;

class StudentActionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'student {arg}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $method = $this->argument('arg');
        if (method_exists($this, $method)) {
            $this->$method();
        }
        return 0;
    }
    public function createUpdateStudent(){
        //IT Attendance 2023-2024 Fall
        $studentsData = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbzCrQxB9XnAQHkbmzB_kr7oTwR1wOTLKfZcwI_09rjfJloeknBXYYa6xZvglb-mOjS8MQ/exec'));
        foreach ($studentsData->data as $student){
            if(empty($student->name) or empty($student->id)){
                continue;
            }
            Student::updateOrCreate(
                [
                    'group' => $student->group,
                    'subject' => $student->subject,
                    'studentId' => $student->id,
                ],
                [
                    'lessonCount' => (int)$student->lessonCount,
                    'teacher' => $student->teacher,
                    'studentName' => $student->name,
                    'late' => (int)$student->late,
                    'absence' => (int)$student->absence,
                    'unexcused' => (int)$student->unexcused,
                ]
            );
        }

        //Intermediate and Upper Japanese Language Attendance 2023-2024 Fall

        $studentsData1 = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbzsvPDnQxbap_ZUmLEkuMGE2-AE1FVNbKgz3EOsSsYWVdqIkPLIICxnnbbAFMzM0XYGWg/exec'));
        foreach ($studentsData1->data as $student){
            if(empty($student->name) or empty($student->id)){
                continue;
            }
            Student::updateOrCreate(
                [
                    'group' => $student->group,
                    'subject' => $student->subject,
                    'studentId' => $student->id,
                ],
                [
                    'lessonCount' => (int)$student->lessonCount,
                    'teacher' => $student->teacher,
                    'studentName' => $student->name,
                    'late' => (int)$student->late,
                    'absence' => (int)$student->absence,
                    'unexcused' => (int)$student->unexcused,
                ]
            );
        }
        //Cowork Attendance 2023-2024 Fall
        $studentsData2 = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbwBUl7fBIfv7mKBmjhvS91_JI5CbvvBC3Z_nIuAeOmCWeB-D21dhPz-gvgDe2tarNdzIQ/exec'));
        foreach ($studentsData2->data as $student){
            if(empty($student->name) or empty($student->id)){
                continue;
            }
            Student::updateOrCreate(
                [
                    'group' => $student->group,
                    'subject' => $student->subject,
                    'studentId' => $student->id,
                ],
                [
                    'lessonCount' => (int)$student->lessonCount,
                    'teacher' => $student->teacher,
                    'studentName' => $student->name,
                    'late' => (int)$student->late,
                    'absence' => (int)$student->absence,
                    'unexcused' => (int)$student->unexcused,
                ]
            );
        }
        //Enployment skills in Japan Attendance 2023-2024 Fall

        $studentsData3 = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbwd-SCEuWCrp1Q9Z1Ee3mIEcr2G4NoxfngmfJ5_-KkdWZnfjcd3w9di1p6omu2i1AAGbA/exec'));
        foreach ($studentsData3->data as $student){
            if(empty($student->name) or empty($student->id)){
                continue;
            }
            Student::updateOrCreate(
                [
                    'group' => $student->group,
                    'subject' => $student->subject,
                    'studentId' => $student->id,
                ],
                [
                    'lessonCount' => (int)$student->lessonCount,
                    'teacher' => $student->teacher,
                    'studentName' => $student->name,
                    'late' => (int)$student->late,
                    'absence' => (int)$student->absence,
                    'unexcused' => (int)$student->unexcused,
                ]
            );
        }
        //JSL Attendance 2023-2024 Fall
        $studentsData4 = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbwcv3Ok3iqos6cZpdtJdz9hL4_jDFEEAG3k-RUsBTSXD_FL7qBOWsZai6QdmiNk8zc9/exec'));
        foreach ($studentsData4->data as $student){
            if(empty($student->name) or empty($student->id)){
                continue;
            }
            Student::updateOrCreate(
                [
                    'group' => $student->group,
                    'subject' => $student->subject,
                    'studentId' => $student->id,
                ],
                [
                    'lessonCount' => (int)$student->lessonCount,
                    'teacher' => $student->teacher,
                    'studentName' => $student->name,
                    'late' => (int)$student->late,
                    'absence' => (int)$student->absence,
                    'unexcused' => (int)$student->unexcused,
                ]
            );
        }
        //Partner Universities Attendance 2023-2024 Fall
        $studentsData5 = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbwfoaSAaRmE6do8CaMw7Cs9xNl61Fg1r61AdBkQkgrLg-jEv2dQ-vZ5Vbrkn20YKa3W/exec'));
        foreach ($studentsData5->data as $student){
            if(empty($student->name) or empty($student->id)){
                continue;
            }
            Student::updateOrCreate(
                [
                    'group' => $student->group,
                    'subject' => $student->subject,
                    'studentId' => $student->id,
                ],
                [
                    'lessonCount' => (int)$student->lessonCount,
                    'teacher' => $student->teacher,
                    'studentName' => $student->name,
                    'late' => (int)$student->late,
                    'absence' => (int)$student->absence,
                    'unexcused' => (int)$student->unexcused,
                ]
            );
        }


        return 0;
    }
}
