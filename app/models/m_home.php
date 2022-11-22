<?php
class M_home {
    protected $table = 'products';

    public function getList(){
        $data = [
            'PRODUCT 1',
            'PRODUCT 2',
            'PRODUCT 3'
        ];
        return $data;
    }

}