<?php

namespace App\Console\Commands;

use App\Models\Thesis\Disease;
use App\Models\Thesis\Journal;
use App\Models\Thesis\JournalDiseaseProtein;
use App\Models\Thesis\Protein;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class testPencarian extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pencarian:baru';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $journal = Journal::findOrFail(1);
        $protein = Protein::findOrFail(1);
        $disease = Disease::findOrFail(1);
        $data  = [
            'journal' => $journal,
            'protein' => $protein,
            'disease' => $disease,
            'uuid' => Str::uuid()->toString()
        ];
        /*
        $journal->listProtein()->create([
            'disease_id'=>$disease->id,
            'protein_id'=>$protein->id
        ]);
        */
        /*$jdp = new JournalDiseaseProtein();
        $jdp->protein_id = $protein->id;
        $jdp->disease_id = $disease->id;
        $jdp->save();
        $this->info(json_encode($data));
        */
        $jdp = JournalDiseaseProtein::findOrFail(6);
        $journal->listProtein()->save($jdp); //it's worked
        $this->info($jdp);
        return Command::SUCCESS;
    }
}
