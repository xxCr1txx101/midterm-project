<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    public function index() {

        $accs = Account::orderBy('acct_name')->get();

        return view('accounts.index', ['accounts' => $accs]);
    }
}
