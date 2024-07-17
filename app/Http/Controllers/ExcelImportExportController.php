<?php

namespace App\Http\Controllers;

use App\RankImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImportExportController extends Controller
{

    public function index(Request $request){
        return view('backend.admin.bulk_upload.rank');
    }


public function bulk_upload(Request $request){

    $category_array=['1g','1h','2ag','2ah','2bg','2bh','3ag','3ah','3bg','3bh','gm','gm_at','gm_dhfw','gm_esi','gmh','gmh_at','gmh_dhfw','gmp','gmph','ma','mc','me','meh','mm','mmh','mng','mu','nri','opn','p2ag','p3ag','pgm','rc1','rc2','rc3','scg','scg_at','sch_dhfw','sch','stg','sth'];
      foreach($category_array as $category){
        Excel::import(new RankImport($category),$request->file('bulk_file'));
       }
  }

}
