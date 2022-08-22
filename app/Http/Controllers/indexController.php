<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::where('id', 'like', '%' . $request->search . '%')
                ->orwhere('name', 'like', '%' . $request->search . '%')
                ->get();


            $output = "";
            if (count($data) > 0) {
                $output = '
                    <table class="table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>';
                foreach ($data as $row) {
                    $output .= ' 
                        <tr>
                            <td>' . $row->id . '</td>
                            <td>' . $row->name . '</td>
                        </tr>';
                }
                $output .= '
                  </tbody>
                  </table>';
            } else {
                $output .= 'Data not avaliable';
            }
            return $output;
        }
    }
}
najmul