<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Wlc;

use Illuminate\Database\Eloquent\Model;

class Commissions extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'commissions';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}