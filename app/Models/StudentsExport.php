<?php

namespace App\Models;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Auth;

class StudentsExport implements FromCollection, WithMapping, WithHeadings
{
    public function collection()
    {
        return User::where('user_type','customer')->where('id', '!=', Auth::user()->id)->get();
    }

    public function headings(): array
    {
        return [
            'name',
            'phone',
            'email',
            'neet_score',
            'subscribe'
        ];
    }

    /**
    * @var Product $product
    */
    public function map($user): array
    {    
        
        $subscribe='Not Subscribed';
        if(!empty($user->payment->id)){
             $subscribe='Subscribed';
        }
      return [
             $user->name,
             $user->phone,
             $user->email,
             $user->customer->neet_score,
             $subscribe
          ];
        
    }
}
