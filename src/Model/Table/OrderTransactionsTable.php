<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class OrderTransactionsTable extends Table {

    public function initialize(array $config) {
        parent::initialize($config);
        $this->belongsTo('Orders');
    }
}
