<?php

namespace App\Jobs;

use App\Events\ProcessedReport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessReport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public int $user_id)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        sleep(5);
        ProcessedReport::dispatch($this->user_id);
    }
}
