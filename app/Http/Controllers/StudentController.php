<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function send_data(Request $request){
        // Queries
        $students = Student::paginate(10);

        // Table data
        $studentTable = '';

        foreach($students as $sl=>$student){
            $studentTable.= '
                <tr class="border-b border-gray-300 bg-gray-200">
                    <td class="p-2">'.$sl+$students->firstItem().'</td>
                    <td class="p-2">'.$student->name.'</td>
                    <td class="p-2">'.$student->email.'</td>
                    <td class="p-2">'.$student->phone.'</td>
                    <td class="p-2"><button onclick="deleteStudent('.$student->id.')" class="bg-red-500 text-gray-200 p-1 px-2 rounded-lg">Delete</button></td>
                </tr>
            ';
        }

        // $total = $students->total();

        // Pagination
        $pagination = false;
        $page_numbers = null;
        $last_page = $students->lastPage();

        if($students->hasPages()){
            $pagination = true;
            if($last_page <= 3){
                $current_page = $students->currentPage();
                for($i = 0; $i <= $last_page; $i++){
                    $page_numbers.= '
                    <button class="bg-gray-400 cursor-pointer my-1 p-2" onclick="paginate('.$i+$current_page.')">'.$i+$current_page.'</button>
                ';
                }
            }else{
                $current_page = $students->currentPage();
                for($i = 0; $i < 3; $i++){
                    if($i == 0){
                        $active = 600;
                    }else{
                        $active = 400;
                    }
                    $page_numbers.= '
                    <button class="bg-gray-'.$active.' cursor-pointer my-1 p-2" onclick="paginate('.$i+$current_page.')">'.$i+$current_page.'</button>
                ';
                }
            }
        }

        return response()->json([
            'studentTable' => $studentTable,
            'pagination' => $pagination,
            'total' => $students,
            'page_numbers' => $page_numbers,
            'last_page' => $last_page,
        ]);
    }
}
