<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Log;
use App\Models\Email;
use App\Mail\TestMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendMails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $details;
    public $timeout=7200;
    public function __construct($details)
    {
       $this->details=$details;
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try{
        $emails=Email::all();
        $input['title']=$this->details['title'];
        $input['body']=$this->details['body'];
        foreach($emails as $email){
            $input['name']=$email->name;
            $input['email']=$email->email;
            Mail::send('mail.test_mail',['input'=>$input],function($message)use ($input){
$message->to($input['email'],$input['name'])->subject($input['title']);
            });
        }
    }catch(\Exception $e){
        Log::error('job_failed'.$e->getMessage());
    }
       
    }
}
