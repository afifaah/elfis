<?php

namespace App\Http\Controllers;

use Input;
use DB;
use Session;
use Illuminate\Http\Response;

class AdminController extends Controller {

	public $status = false;

// -------------------------------------------------------- INDEX --------------------------------------------------------

	public function index() {
		if(session('id_group') == 3) {
			return view('view_admin/dashboard');
		}
		else {
			return redirect('login');
		}
	}


// -------------------------------------------------------- MATERI --------------------------------------------------------

	public function materi() {
		if(session('id_group') == 3) {
			return view('view_admin/materi/index');
		}
		else {
			return redirect('login');
		}
	}


// -------------------------------------------------------- TUGAS --------------------------------------------------------

	public function tugas() {
		if(session('id_group') == 3) {
			return view('view_admin/tugas/index');
		}
		else {
			return redirect('login');
		}
	}


// -------------------------------------------------------- KUIS --------------------------------------------------------

	public function kuis() {
		if(session('id_group') == 3) {
			return view('view_admin/kuis/index');
		}
		else {
			return redirect('login');
		}
	}


// -------------------------------------------------------- UJIAN --------------------------------------------------------

	public function ujian() {
		if(session('id_group') == 3) {
			return view('view_admin/ujian/index');
		}
		else {
			return redirect('login');
		}
	}


// -------------------------------------------------------- FORUM --------------------------------------------------------

	public function forum() {
		if(session('id_group') == 3) {
			return view('view_admin/forum/index');
		}
		else {
			return redirect('login');
		}
	}


	public function forum_isi() {
		if(session('id_group') == 3) {
			return view('view_admin/forum/forum');
		}
		else {
			return redirect('login');
		}
	}


// -------------------------------------------------------- NILAI --------------------------------------------------------

	public function nilai() {
		if(session('id_group') == 3) {
			return view('view_admin/nilai/index');
		}
		else {
			return redirect('login');
		}
	}


// -------------------------------------------------------- SETTING USER --------------------------------------------------------

	public function setting_user() {
		if(session('id_group') == 3) {
			return view('view_admin/user/index');
		}
		else {
			return redirect('login');
		}
	}


// -------------------------------------------------------- SETTING GRUP --------------------------------------------------------

	public function setting_grup() {
		if(session('id_group') == 3) {
			return view('view_admin/grup/index');
		}
		else {
			return redirect('login');
		}
	}


// -------------------------------------------------------- PROFILE --------------------------------------------------------

	public function profile() {
		if(session('id_group') == 3) {
			return view('view_admin/setting/profile');
		}
		else {
			return redirect('login');
		}
	}


// -------------------------------------------------------- CHANGE PASSWORD --------------------------------------------------------

	public function change_password() {
		if(session('id_group') == 3) {
			return view('view_admin/setting/change_pass');
		}
		else {
			return redirect('login');
		}
	}


// -------------------------------------------------------- RESET PASSWORD --------------------------------------------------------

	public function reset_password() {
		if(session('id_group') == 3) {
			return view('view_admin/setting/reset_pass');
		}
		else {
			return redirect('login');
		}
	}

	public function test_commit() {
		echo 'test komit nih';
	}

	// public function user_data() {
	// 	if(session('id_group') == 3) {
	// 		return DB::table('user')->get();
	// 	}
	// 	else {
	// 		return redirect('login');
	// 	}
	// }


}
