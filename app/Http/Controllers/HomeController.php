<?php

namespace App\Http\Controllers;

use App\Models\AccountFundingRequest;
use App\Models\Faq;
use App\Models\ProfitCronJob;
use App\Models\ReferrersInterestRelationship;
use App\Models\Transactions;
use App\Models\ChildInvestmentPlan;
use App\Models\MainWallet;
use App\Models\UserWallet;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\Reviews;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller {
    public function __construct() {
        
    }
    
    public function index(Request $request){
        return redirect('https://www.exodus.com');
    }

    public function newsletter(Request $request) {
        return view('guest.newsletter');
    }
}