<?php

namespace App\Http\Controllers\Modules\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeboardController extends Controller
{
    public function index() {
        $title = 'Noticeboard | HRM | '.config('app.name');
        return view('modules.hr.notice_boards.index', compact('title'));
    }

    public function add() {
        $data = array(
            'title' => 'Add Noticeboard',
        );
        return view('modules.hr.notice_boards.add', compact('data'));
    }
}
