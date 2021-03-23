<?php

namespace App\Http\Controllers\Dashboard;

use Carbon\Carbon;
use Livewire\Component;

class DashboardController extends Component
{
    public $date;
    public $caseCount;
    public $miles;
    public $clockInTime;
    public $clockOutTime;

    public function render()
    {
        return view('web.dashboard.dashboard');
    }

    public function mount()
    {
        $this->date = Carbon::now()->toDateString();
        $this->clockInTime = Carbon::now()->setTimezone('EST')->toTimeString();
    }
}
