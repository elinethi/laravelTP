<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class observateur extends Model
{
    private $notification;
    private $countNotif = 0;

    public function __construct()
    {
        $this->notification = "Création du sujet";
    }

    public function display()
    {
        return $this->notification;
    }

    public function addNotif() {
        $this->countNotif++;
        $this->notification = "Updaté ".$this->countNotif." fois.";
    }
}
