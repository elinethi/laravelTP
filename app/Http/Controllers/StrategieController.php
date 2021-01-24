<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usine;
use App\Models\FactureLine;

class StrategieController extends Controller
{
    function go()
    {
        $renault =  Usine::getVoiture('Renault', 'Clio 4', 'Blanche');
        $peugeot =  Usine::getVoiture('Peugeot', '207', 'Bleu');
        $factureLineRenault = new FactureLine($renault, "1");
        $factureLinePeugeot = new FactureLine($peugeot, "2");

        return view('strategie', ['factureRenault'=>$factureLineRenault->getFactureLine()->getFacture(), 'facturePeugeot'=>$factureLinePeugeot->getFactureLine()->getFacture(), 'factureLineRenault'=>$factureLineRenault->getFactureLine(), 'factureLinePeugeot'=>$factureLinePeugeot->getFactureLine()]);
    }
}
