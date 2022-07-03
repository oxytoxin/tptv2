<?php

namespace App\Http\Livewire\Admin\Applications\GenerateReport;

use Livewire\Component;
use App\Exports\PermitReport;
use Maatwebsite\Excel\Facades\Excel;
class AllReadyToExam extends Component
{
    // report type
    // 1 all ready to exam
    // 2 all applications

    public $report_modal=false;
    public $ready_to_download=false;
    public $selected_report ;
    public function render()
    {
        return view('livewire.admin.applications.generate-report.all-ready-to-exam');
    }

    public function updatedSelectedReport()
    {
        $this->ready_to_download=true;
    }

    public function startDownload()
    {
        switch ($this->selected_report) {
            case 1:
               return Excel::download(new PermitReport, 'readyToExam.xlsx');
                break;
            default:
                break;
        }
    }
}
