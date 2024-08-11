<?php

namespace App;

use App\Models\Rank;
use App\Models\karnataka;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;
use Auth;


class RankImport implements ToModel, WithHeadingRow
{
   
    public function  __construct($category)
    {
        $this->category= $category;
    }

    
    public function model(array $row)
    {

      $rounds=['r1','r2'];
       
            $round_ids=[];
            $round_values=[];
        foreach( $rounds as  $round){
           
            $round_id=$this->category.'_'.$round; 
           
                  $round_name=$row[$round_id];
                  array_push( $round_values,$round_name);
                  array_push( $round_ids,$round);
        }

      return  new karnataka([
            'counseling_type'     => 'Government Quota and Management Quota',
            'quota'  =>$row['quota'],
            'college'  =>$row['college'],
            'course'     => $row['course'],
            'course_fee'  =>$row['course_fee'],
            'private_mgmt_fee'  =>$row['private_mgmt_fee'],
            'nri_fee'  =>$row['nri_fee'],
            'bond_years'  =>$row['bond_years'],
            'bond_penalty'  =>$row['bond_penalty'],
            'stripend_year'  =>$row['stripend_year'],
            'category'  =>$this->category,
            'round'     => json_encode($round_ids),
            'rank'  =>json_encode($round_values), 
         ]);

        

    }

   
}
