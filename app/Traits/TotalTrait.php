<?php 

namespace App\Traits;

trait TotalTrait{

	public function total($collection){

        $total = 0;
        
        foreach ($collection as $value) {
            $total += $value->total;
        }

        return $total;
    }
}