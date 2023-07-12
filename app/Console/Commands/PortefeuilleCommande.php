<?php

namespace App\Console\Commands;
use App\Models\Portefeuille;

use Illuminate\Console\Command;

class PortefeuilleCommande extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portefeuille:commande';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {   $portefeuilles=Portefeuille::all();
        foreach ($portefeuilles as $portefeuille) {

            $donne = $portefeuille;
            $sold = $donne->solde_p;
            $sold = $sold * 0.0177 ;
            $donne->revenu_p = $sold;
            $benef = $donne->benef;
            $donne->benef = $benef + $sold ;
            $donne->val_solde = $donne->benef + $donne->solde_p;
            $donne->save();

        }
        
        $this->info('Ceci est ma commande personnalisée !');
    }
}
