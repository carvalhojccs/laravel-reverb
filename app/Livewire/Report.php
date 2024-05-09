<?php

namespace App\Livewire;

use App\Jobs\ProcessReport;
use Livewire\Component;

class Report extends Component
{
    public string $status = 'idle';

    public function getListeners()
    {
        return [
            'echo-private:Processed.Report.' . auth()->user()->id . ',ProcessedReport' => 'onReportProcessed',
        ];
    }

    public function render()
    {
        return view('livewire.report');
    }

    public function processReport()
    {
        $this->status = 'processing';
        ProcessReport::dispatch(auth()->user()->id);
    }

    public function onReportProcessed()
    {
        $this->status = 'done';
    }
}
