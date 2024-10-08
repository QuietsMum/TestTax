<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traning;
use App\Models\TraningDisc;
use App\Models\UsersResults;

class TraningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('traning.index', [
                     'traning' => Traning::all()
                 ]);
    }

    public function index2()
    {
    return view('tests.index2', [
                     'tests' => Traning::all()
                 ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
         $string = "";
         $mistakes = [];
         $miscount = 0;
         $traning = Traning::findOrFail($id);
         $request->flash();
         if($request['iin'] != $traning['iin'] || $request['period'] != $traning['period'] || $request['declarationtype'] != $traning['declarationtype'] || $request['surname'] == '' || $request['email'] == '' || $request['name'] == '' || $request['phonename'] == ''){
            if($request['iin'] != $traning['iin']){ array_push($mistakes, "iin"); $miscount++;}
            if($request['period'] != $traning['period']){ array_push($mistakes, "period"); $miscount++;}
            if($request['surname'] == ''){ array_push($mistakes, "surname"); $miscount++;}
            if($request['name'] == ''){ array_push($mistakes, "name"); $miscount++;}
            if($request['email'] == ''){ array_push($mistakes, "email"); $miscount++;}
            if($request['phonename'] == ''){ array_push($mistakes, "phonename"); $miscount++;}
            if($request['declarationtype'] != $traning['declarationtype']){ $miscount++;}
            $string .= " Разделе А";
         }
         if($request['b_1'] != $traning['b_1'] || $request['b_2'] != $traning['b_2'] || $request['b_2a'] != $traning['b_2a'] || $request['b_2b'] != $traning['b_2b'] || $request['b_2c'] != $traning['b_2c'] || $request['b_2d'] != $traning['b_2d']){
            if($request['b_1'] != $traning['b_1']){ array_push($mistakes, "b_1"); $miscount++;}
            if($request['b_2'] != $traning['b_2']){ array_push($mistakes, "b_2"); $miscount++;}
            if($request['b_2a'] != $traning['b_2a']){ array_push($mistakes, "b_2a"); $miscount++;}
            if($request['b_2b'] != $traning['b_2b']){ array_push($mistakes, "b_2b"); $miscount++;}
            if($request['b_2c'] != $traning['b_2c']){ array_push($mistakes, "b_2c"); $miscount++;}
            if($request['b_2d'] != $traning['b_2d']){ array_push($mistakes, "b_2d"); $miscount++;}
            $string .= " Разделе B";
         }
         if($request['c_1'] != $traning['c_1']){
            array_push($mistakes, "c_1");
            $miscount++;
            $string .= " Разделе C";
         }
         if($request['d_1'] != $traning['d_1']){
            array_push($mistakes, "d_1");
            $miscount++;
            $string .= " Разделе D";
         }
         if($request['e_1'] != $traning['e_1'] || $request['e_1a'] != $traning['e_1a'] || $request['e_1b'] != $traning['e_1b'] || $request['e_1c'] != $traning['e_1c'] || $request['e_1d'] != $traning['e_1d'] || $request['e_2'] != $traning['e_2'] || $request['e_3'] != $traning['e_3'] || $request['e_4'] != $traning['e_4'] || $request['e_5'] != $traning['e_5']){
            if($request['e_1'] != $traning['e_1']){ array_push($mistakes, "e_1"); $miscount++;}
            if($request['e_1a'] != $traning['e_1a']){ array_push($mistakes, "e_1a"); $miscount++;}
            if($request['e_1b'] != $traning['e_1b']){ array_push($mistakes, "e_1b"); $miscount++;}
            if($request['e_1c'] != $traning['e_1c']){ array_push($mistakes, "e_1c"); $miscount++;}
            if($request['e_1d'] != $traning['e_1d']){ array_push($mistakes, "e_1d"); $miscount++;}
            if($request['e_2'] != $traning['e_2']){ array_push($mistakes, "e_2"); $miscount++;}
            if($request['e_3'] != $traning['e_3']){ array_push($mistakes, "e_3"); $miscount++;}
            if($request['e_4'] != $traning['e_4']){ array_push($mistakes, "e_4"); $miscount++;}
            if($request['e_5'] != $traning['e_5']){ array_push($mistakes, "e_5"); $miscount++;}
            $string .= " Разделе E";
         }

         $countF11 = false;
         if($request['f_1c'] != '' || $traning['f_1c'] != ''){
          if($traning['f_1c'] == $request['f_1c'] && $traning['f_1e'] == $request['f_1e']){
                   $countF11 = true;
                  }
                  if($traning['f_1c'] == $request['f_2c'] && $traning['f_1e'] == $request['f_2e']){
                   $countF11 = true;
                  }
         } else $countF11 = true;

         $countF12 = false;
            if($request['f_2c'] != '' || $traning['f_2c'] != ''){
               if($traning['f_2c'] == $request['f_1c'] && $traning['f_2e'] == $request['f_1e']){
                      $countF12 = true;
                     }
                     if($traning['f_2c'] == $request['f_2c'] && $traning['f_2e'] == $request['f_2e']){
                      $countF12 = true;
                     }
                     if($traning['f_2c'] == $request['f_3c'] && $traning['f_2e'] == $request['f_3e']){
                      $countF12 = true;
                     }
                 } else $countF12 = true;

         $countF13 = false;
            if($request['f_3c'] != '' || $traning['f_3c'] != ''){
               if($traning['f_1c'] == $request['f_3c'] && $traning['f_1e'] == $request['f_3e']){
                      $countF13 = true;
                     }
                     if($traning['f_2c'] == $request['f_3c'] && $traning['f_2e'] == $request['f_3e']){
                      $countF13 = true;
                     }
                 } else $countF13 = true;

         $countF21 = false;
         if($traning['f_1g'] != '' || $traning['f_1h'] != ''){
          if($traning['f_1g'] == $request['f_1g'] && $traning['f_1h'] == $request['f_1h']){
                  $countF21 = true;
                  }
          if($traning['f_1g'] == $request['f_2g'] && $traning['f_1h'] == $request['f_2h']){
                  $countF21 = true;
                  }
          if($traning['f_1g'] == $request['f_3g'] && $traning['f_1h'] == $request['f_3h']){
                  $countF21 = true;
                  }
          if($traning['f_1g'] == $request['f_4g'] && $traning['f_1h'] == $request['f_4h']){
                  $countF21 = true;
                  }
          if($traning['f_1g'] == $request['f_5g'] && $traning['f_1h'] == $request['f_5h']){
                  $countF21 = true;
                  }
         } else $countF21 = true;

         $countF22 = false;
         if($traning['f_2g'] != '' || $traning['f_2h'] != ''){
                  if($traning['f_2g'] == $request['f_1g'] && $traning['f_2h'] == $request['f_1h']){
                  $countF22 = true;
                  }
                  if($traning['f_2g'] == $request['f_2g'] && $traning['f_2h'] == $request['f_2h']){
                  $countF22 = true;
                  }
                  if($traning['f_2g'] == $request['f_3g'] && $traning['f_2h'] == $request['f_3h']){
                  $countF22 = true;
                  }
                  if($traning['f_2g'] == $request['f_4g'] && $traning['f_2h'] == $request['f_4h']){
                  $countF22 = true;
                  }
                  if($traning['f_2g'] == $request['f_5g'] && $traning['f_2h'] == $request['f_5h']){
                  $countF22 = true;
                  }
         } else $countF22 = true;

         $countF23 = false;
         if($traning['f_3g'] != '' || $traning['f_3h'] != ''){
                  if($traning['f_3g'] == $request['f_1g'] && $traning['f_3h'] == $request['f_1h']){
                  $countF23 = true;
                  }
                  if($traning['f_3g'] == $request['f_2g'] && $traning['f_3h'] == $request['f_2h']){
                  $countF23 = true;
                  }
                  if($traning['f_3g'] == $request['f_3g'] && $traning['f_3h'] == $request['f_3h']){
                  $countF23 = true;
                  }
                  if($traning['f_3g'] == $request['f_4g'] && $traning['f_3h'] == $request['f_4h']){
                  $countF23 = true;
                  }
                  if($traning['f_3g'] == $request['f_5g'] && $traning['f_3h'] == $request['f_5h']){
                  $countF23 = true;
                  }
         } else $countF23 = true;

         $countF24 = false;
         if($traning['f_4g'] != '' || $traning['f_4h'] != ''){
                  if($traning['f_4g'] == $request['f_1g'] && $traning['f_4h'] == $request['f_1h']){
                  $countF24 = true;
                  }
                  if($traning['f_4g'] == $request['f_2g'] && $traning['f_4h'] == $request['f_2h']){
                  $countF24 = true;
                  }
                  if($traning['f_4g'] == $request['f_3g'] && $traning['f_4h'] == $request['f_3h']){
                  $countF24 = true;
                  }
                  if($traning['f_4g'] == $request['f_4g'] && $traning['f_4h'] == $request['f_4h']){
                  $countF24 = true;
                  }
                  if($traning['f_4g'] == $request['f_5g'] && $traning['f_4h'] == $request['f_5h']){
                  $countF24 = true;
                  }
         } else $countF24 = true;

         $countF25 = false;
         if($traning['f_5g'] != '' || $traning['f_5h'] != ''){
                  if($traning['f_5g'] == $request['f_1g'] && $traning['f_5h'] == $request['f_1h']){
                  $countF25 = true;
                  }
                  if($traning['f_5g'] == $request['f_2g'] && $traning['f_5h'] == $request['f_2h']){
                  $countF25 = true;
                  }
                  if($traning['f_5g'] == $request['f_3g'] && $traning['f_5h'] == $request['f_3h']){
                  $countF25 = true;
                  }
                  if($traning['f_5g'] == $request['f_4g'] && $traning['f_5h'] == $request['f_4h']){
                  $countF25 = true;
                  }
                  if($traning['f_5g'] == $request['f_5g'] && $traning['f_5h'] == $request['f_5h']){
                  $countF25 = true;
                  }
         } else $countF25 = true;
 //         dump($countF11, $countF12, $countF13, $countF21, $countF22, $countF23, $countF24, $countF25);
         if(!$countF11 || !$countF12 || !$countF13 || !$countF21 || !$countF22 || !$countF23 || !$countF24 || !$countF25){
            if(!$countF11){ array_push($mistakes, "f_1a", "f_1b", "f_1c", "f_1d", "f_1e"); $miscount++;}
            if(!$countF12){ array_push($mistakes, "f_2a", "f_2b", "f_2c", "f_2d", "f_2e"); $miscount++;}
            if(!$countF13){ array_push($mistakes, "f_3a", "f_3b", "f_3c", "f_3d", "f_3e"); $miscount++;}
            if(!$countF21){ array_push($mistakes,  "f_1f", "f_1g", "f_1h"); $miscount++;}
            if(!$countF22){ array_push($mistakes, "f_2f", "f_2g", "f_2h"); $miscount++;}
            if(!$countF23){ array_push($mistakes, "f_3f", "f_3g", "f_3h"); $miscount++;}
            if(!$countF24){ array_push($mistakes, "f_4f", "f_4g", "f_4h"); $miscount++;}
            if(!$countF25){ array_push($mistakes, "f_5f", "f_5g", "f_5h"); $miscount++;}
            $string .= " Разделе F";
         }
         if($id == 2 || $id == 5) {
             if($request['g_1a'] != $traning['g_1a'] || $request['g_1c'] != $traning['g_1c'] || $request['g_1d'] != $traning['g_1d'] || $request['g_1f'] != $traning['g_1f'] || $request['g_1g'] != $traning['g_1g'] || $request['g_1b'] == '' || $request['g_1e'] == ''){
                if($request['g_1a'] != $traning['g_1a']){ array_push($mistakes, "g_1a"); $miscount++;}
                if($request['g_1b'] == ''){ array_push($mistakes, "g_1b"); $miscount++;}
                if($request['g_1c'] != $traning['g_1c']){ array_push($mistakes, "g_1c"); $miscount++;}
                if($request['g_1d'] != $traning['g_1d']){; array_push($mistakes, "g_1d"); $miscount++;}
                if($request['g_1e'] == ''){ array_push($mistakes, "g_1e"); $miscount++;}
                if($request['g_1f'] != $traning['g_1f']){ array_push($mistakes, "g_1f"); $miscount++;}
                if($request['g_1g'] != $traning['g_1g']){ array_push($mistakes, "g_1g"); $miscount++;}
                $string .= " Разделе G";
             }
         }
         if($id == 3) {
             if($request['h_1a'] != $traning['h_1a'] || $request['h_1b'] != $traning['h_1b'] || $request['h_1f'] != $traning['h_1f'] || $request['h_1c'] == '' || $request['h_1d'] == '' || $request['h_1e'] == ''){
                if($request['h_1a'] != $traning['h_1a']){ array_push($mistakes, "h_1a"); $miscount++;}
                if($request['h_1b'] != $traning['h_1b']){ array_push($mistakes, "h_1b"); $miscount++;}
                if($request['h_1c'] == ''){ array_push($mistakes, "h_1c"); $miscount++;}
                if($request['h_1d'] == ''){ array_push($mistakes, "h_1d"); $miscount++;}
                if($request['h_1e'] == ''){ array_push($mistakes, "h_1e"); $miscount++;}
                if($request['h_1f'] != $traning['h_1f']){ array_push($mistakes, "h_1f"); $miscount++;}
                $string .= " Разделе H";
             }
         }
         $countI1 = false;
         if($traning['i_1a'] != ''){
            if($traning['i_1c'] == $request['i_1c'] && $traning['i_1f'] == $request['i_1f'] && $traning['i_1g'] == $request['i_1g']){
                  $countI1 = true;
            }
            if($traning['i_1c'] == $request['i_2c'] && $traning['i_1f'] == $request['i_2f'] && $traning['i_1g'] == $request['i_2g']){
                     $countI1 = true;
            }
         } else $countI1 = true;

         $countI2 = false;
         if($traning['i_2a'] != ''){
           if($traning['i_2c'] == $request['i_1c'] && $traning['i_2f'] == $request['i_1f'] && $traning['i_2g'] == $request['i_1g']){
                  $countI2 = true;
                  }
           if($traning['i_2c'] == $request['i_2c'] && $traning['i_2f'] == $request['i_2f'] && $traning['i_2g'] == $request['i_2g']){
                  $countI2 = true;
                  }
         } else $countI2 = true;

         if($request['i_1a'] != '' || $request['i_1b'] != '' || $request['i_1c'] != '' || $request['i_1d'] != '' || $request['i_1e'] != '' || $request['i_1f'] != '' || $request['i_1g'] != ''){
             if ($traning['i_1a'] == ''){
              array_push($mistakes, "i_1a", "i_1b", "i_1c", "i_1d", "i_1e", "i_1f", "i_1g"); $miscount++;
             }
         }
         if($request['i_2a'] != '' || $request['i_2b'] != '' || $request['i_2c'] != '' || $request['i_2d'] != '' || $request['i_2e'] != '' || $request['i_2f'] != '' || $request['i_2g'] != '' && $traning['i_2a'] == ''){
             if ($traning['i_1a'] == ''){
              array_push($mistakes, "i_2a", "i_2b", "i_2c", "i_2d", "i_2e", "i_2f", "i_2g"); $miscount++;
             }
         }

         if(!$countI1 || !$countI2){
            if(!$countI1){ array_push($mistakes, "i_1a", "i_1b", "i_1c", "i_1d", "i_1e", "i_1f", "i_1g"); $miscount++;}
            if(!$countI2){ array_push($mistakes, "i_2a", "i_2b", "i_2c", "i_2d", "i_2e", "i_2f", "i_2g"); $miscount++;}
            $string .= " Разделе I";
         }

         if($request['j_1a'] != $traning['j_1a'] || $request['j_1c'] != $traning['j_1c']){
            if($request['j_1a'] != $traning['j_1a']){ array_push($mistakes, "j_1a", "j_1b", "j_1d", "j_1e"); $miscount++;}
            if($request['j_1c'] != $traning['j_1c']){ array_push($mistakes, "j_1c"); $miscount++;}
            $string .= " Разделе J";
         }
         if($request['n_b1'] != $traning['n_b1'] || $request['n_b2'] != $traning['n_b2'] || $request['n_b3'] != $traning['n_b3'] || $request['n_b4'] != $traning['n_b4'] || $request['n_b5'] != $traning['n_b5'] || $request['n_b6'] != $traning['n_b6'] || $request['n_b7'] != $traning['n_b7'] || $request['n_b8'] != $traning['n_b8'] || $request['n_b9'] != $traning['n_b9'] || $request['n_b10'] != $traning['n_b10'] || $request['n_b11'] != $traning['n_b11'] || $request['n_b12'] != $traning['n_b12'] || $request['n_c1'] != $traning['n_c1'] || $request['n_c2'] != $traning['n_c2'] || $request['n_c3'] != $traning['n_c3'] || $request['n_c4'] != $traning['n_c4'] || $request['n_c5'] != $traning['n_c5'] || $request['n_c6'] != $traning['n_c6'] || $request['n_c7'] != $traning['n_c7'] || $request['n_c8'] != $traning['n_c8'] || $request['n_c9'] != $traning['n_c9'] || $request['n_c10'] != $traning['n_c10'] || $request['n_c11'] != $traning['n_c11'] || $request['n_c12'] != $traning['n_c12']){
            if($request['n_b1'] != $traning['n_b1']){ array_push($mistakes, "n_b1"); $miscount++;}
            if($request['n_b2'] != $traning['n_b2']){ array_push($mistakes, "n_b2"); $miscount++;}
            if($request['n_b3'] != $traning['n_b3']){ array_push($mistakes, "n_b3"); $miscount++;}
            if($request['n_b4'] != $traning['n_b4']){ array_push($mistakes, "n_b4"); $miscount++;}
            if($request['n_b5'] != $traning['n_b5']){ array_push($mistakes, "n_b5"); $miscount++;}
            if($request['n_b6'] != $traning['n_b6']){ array_push($mistakes, "n_b6"); $miscount++;}
            if($request['n_b7'] != $traning['n_b7']){ array_push($mistakes, "n_b7"); $miscount++;}
            if($request['n_b8'] != $traning['n_b8']){ array_push($mistakes, "n_b8"); $miscount++;}
            if($request['n_b9'] != $traning['n_b9']){ array_push($mistakes, "n_b9"); $miscount++;}
            if($request['n_b10'] != $traning['n_b10']){ array_push($mistakes, "n_b10"); $miscount++;}
            if($request['n_b11'] != $traning['n_b11']){ array_push($mistakes, "n_b11"); $miscount++;}
            if($request['n_b12'] != $traning['n_b12']){ array_push($mistakes, "n_b12"); $miscount++;}
            if($request['n_c1'] != $traning['n_c1']){ array_push($mistakes, "n_c1"); $miscount++;}
            if($request['n_c2'] != $traning['n_c2']){ array_push($mistakes, "n_c2"); $miscount++;}
            if($request['n_c3'] != $traning['n_c3']){ array_push($mistakes, "n_c3"); $miscount++;}
            if($request['n_c4'] != $traning['n_c4']){ array_push($mistakes, "n_c4"); $miscount++;}
            if($request['n_c5'] != $traning['n_c5']){ array_push($mistakes, "n_c5"); $miscount++;}
            if($request['n_c6'] != $traning['n_c6']){ array_push($mistakes, "n_c6"); $miscount++;}
            if($request['n_c7'] != $traning['n_c7']){ array_push($mistakes, "n_c7"); $miscount++;}
            if($request['n_c8'] != $traning['n_c8']){ array_push($mistakes, "n_c8"); $miscount++;}
            if($request['n_c9'] != $traning['n_c9']){ array_push($mistakes, "n_c9"); $miscount++;}
            if($request['n_c10'] != $traning['n_c10']){ array_push($mistakes, "n_c10"); $miscount++;}
            if($request['n_c11'] != $traning['n_c11']){ array_push($mistakes, "n_c11"); $miscount++;}
            if($request['n_c12'] != $traning['n_c12']){ array_push($mistakes, "n_c12"); $miscount++;}
            $string .= " Разделе N";
         }

//          return view('traning.show', ['id' => $id,
//                  'request' => $request]);


             return view('traning.show', [
                                      'traning' => Traning::findOrFail($id),
                                      'id' => $id,
                                      'mistakes' => $mistakes,
                                      'blocks' => $string,
                                      'disc' => TraningDisc::findOrFail($id),
                                  ]);
//                                    dump($string);
//                                    dump($miscount);
//                                    dump($mistakes);
//                                    $mispercent = $miscount*100/110;
//                                    $percent = 100 - $mispercent;
//                                    dump($percent);
    }

    public function store2(Request $request, $id)
    {
         $string = "";
         $mistakes = [];
         $miscount = 0;
         $traning = Traning::findOrFail($id);
         $request->flash();
         if($request['iin'] != $traning['iin'] || $request['period'] != $traning['period'] || $request['declarationtype'] != $traning['declarationtype'] || $request['surname'] == '' || $request['email'] == '' || $request['name'] == '' || $request['phonename'] == ''){
            if($request['iin'] != $traning['iin']){ array_push($mistakes, "iin"); $miscount++;}
            if($request['period'] != $traning['period']){ array_push($mistakes, "period"); $miscount++;}
            if($request['surname'] == ''){ array_push($mistakes, "surname"); $miscount++;}
            if($request['name'] == ''){ array_push($mistakes, "name"); $miscount++;}
            if($request['email'] == ''){ array_push($mistakes, "email"); $miscount++;}
            if($request['phonename'] == ''){ array_push($mistakes, "phonename"); $miscount++;}
            if($request['declarationtype'] != $traning['declarationtype']){ array_push($mistakes, "declarationtype"); $miscount++;}
            $string .= " Разделе А";
         }
         if($request['b_1'] != $traning['b_1'] || $request['b_2'] != $traning['b_2'] || $request['b_2a'] != $traning['b_2a'] || $request['b_2b'] != $traning['b_2b'] || $request['b_2c'] != $traning['b_2c'] || $request['b_2d'] != $traning['b_2d']){
            if($request['b_1'] != $traning['b_1']){ array_push($mistakes, "b_1"); $miscount++;}
            if($request['b_2'] != $traning['b_2']){ array_push($mistakes, "b_2"); $miscount++;}
            if($request['b_2a'] != $traning['b_2a']){ array_push($mistakes, "b_2a"); $miscount++;}
            if($request['b_2b'] != $traning['b_2b']){ array_push($mistakes, "b_2b"); $miscount++;}
            if($request['b_2c'] != $traning['b_2c']){ array_push($mistakes, "b_2c"); $miscount++;}
            if($request['b_2d'] != $traning['b_2d']){ array_push($mistakes, "b_2d"); $miscount++;}
            $string .= " Разделе B";
         }
         if($request['c_1'] != $traning['c_1']){
            $miscount++;
            $string .= " Разделе C";
         }
         if($request['d_1'] != $traning['d_1']){
            $miscount++;
            $string .= " Разделе D";
         }
         if($request['e_1'] != $traning['e_1'] || $request['e_1a'] != $traning['e_1a'] || $request['e_1b'] != $traning['e_1b'] || $request['e_1c'] != $traning['e_1c'] || $request['e_1d'] != $traning['e_1d'] || $request['e_2'] != $traning['e_2'] || $request['e_3'] != $traning['e_3'] || $request['e_4'] != $traning['e_4'] || $request['e_5'] != $traning['e_5']){
            if($request['e_1'] != $traning['e_1']){ array_push($mistakes, "e_1"); $miscount++;}
            if($request['e_1a'] != $traning['e_1a']){ array_push($mistakes, "e_1a"); $miscount++;}
            if($request['e_1b'] != $traning['e_1b']){ array_push($mistakes, "e_1b"); $miscount++;}
            if($request['e_1c'] != $traning['e_1c']){ array_push($mistakes, "e_1c"); $miscount++;}
            if($request['e_1d'] != $traning['e_1d']){ array_push($mistakes, "e_1d"); $miscount++;}
            if($request['e_2'] != $traning['e_2']){ array_push($mistakes, "e_2"); $miscount++;}
            if($request['e_3'] != $traning['e_3']){ array_push($mistakes, "e_3"); $miscount++;}
            if($request['e_4'] != $traning['e_4']){ array_push($mistakes, "e_4"); $miscount++;}
            if($request['e_5'] != $traning['e_5']){ array_push($mistakes, "e_5"); $miscount++;}
            $string .= " Разделе E";
         }

         $countF11 = false;
         if($request['f_1c'] != '' || $traning['f_1c'] != ''){
          if($traning['f_1c'] == $request['f_1c'] && $traning['f_1e'] == $request['f_1e']){
                   $countF11 = true;
                  }
                  if($traning['f_1c'] == $request['f_2c'] && $traning['f_1e'] == $request['f_2e']){
                   $countF11 = true;
                  }
         } else $countF11 = true;

         $countF12 = false;
            if($request['f_2c'] != '' || $traning['f_2c'] != ''){
               if($traning['f_2c'] == $request['f_1c'] && $traning['f_2e'] == $request['f_1e']){
                      $countF12 = true;
                     }
                     if($traning['f_2c'] == $request['f_2c'] && $traning['f_2e'] == $request['f_2e']){
                      $countF12 = true;
                     }
                     if($traning['f_2c'] == $request['f_3c'] && $traning['f_2e'] == $request['f_3e']){
                      $countF12 = true;
                     }
                 } else $countF12 = true;

         $countF13 = false;
            if($request['f_3c'] != '' || $traning['f_3c'] != ''){
               if($traning['f_1c'] == $request['f_3c'] && $traning['f_1e'] == $request['f_3e']){
                      $countF13 = true;
                     }
                     if($traning['f_2c'] == $request['f_3c'] && $traning['f_2e'] == $request['f_3e']){
                      $countF13 = true;
                     }
                 } else $countF13 = true;

         $countF21 = false;
         if($traning['f_1g'] != '' || $traning['f_1h'] != ''){
          if($traning['f_1g'] == $request['f_1g'] && $traning['f_1h'] == $request['f_1h']){
                  $countF21 = true;
                  }
          if($traning['f_1g'] == $request['f_2g'] && $traning['f_1h'] == $request['f_2h']){
                  $countF21 = true;
                  }
          if($traning['f_1g'] == $request['f_3g'] && $traning['f_1h'] == $request['f_3h']){
                  $countF21 = true;
                  }
          if($traning['f_1g'] == $request['f_4g'] && $traning['f_1h'] == $request['f_4h']){
                  $countF21 = true;
                  }
          if($traning['f_1g'] == $request['f_5g'] && $traning['f_1h'] == $request['f_5h']){
                  $countF21 = true;
                  }
         } else $countF21 = true;

         $countF22 = false;
         if($traning['f_2g'] != '' || $traning['f_2h'] != ''){
                  if($traning['f_2g'] == $request['f_1g'] && $traning['f_2h'] == $request['f_1h']){
                  $countF22 = true;
                  }
                  if($traning['f_2g'] == $request['f_2g'] && $traning['f_2h'] == $request['f_2h']){
                  $countF22 = true;
                  }
                  if($traning['f_2g'] == $request['f_3g'] && $traning['f_2h'] == $request['f_3h']){
                  $countF22 = true;
                  }
                  if($traning['f_2g'] == $request['f_4g'] && $traning['f_2h'] == $request['f_4h']){
                  $countF22 = true;
                  }
                  if($traning['f_2g'] == $request['f_5g'] && $traning['f_2h'] == $request['f_5h']){
                  $countF22 = true;
                  }
         } else $countF22 = true;

         $countF23 = false;
         if($traning['f_3g'] != '' || $traning['f_3h'] != ''){
                  if($traning['f_3g'] == $request['f_1g'] && $traning['f_3h'] == $request['f_1h']){
                  $countF23 = true;
                  }
                  if($traning['f_3g'] == $request['f_2g'] && $traning['f_3h'] == $request['f_2h']){
                  $countF23 = true;
                  }
                  if($traning['f_3g'] == $request['f_3g'] && $traning['f_3h'] == $request['f_3h']){
                  $countF23 = true;
                  }
                  if($traning['f_3g'] == $request['f_4g'] && $traning['f_3h'] == $request['f_4h']){
                  $countF23 = true;
                  }
                  if($traning['f_3g'] == $request['f_5g'] && $traning['f_3h'] == $request['f_5h']){
                  $countF23 = true;
                  }
         } else $countF23 = true;

         $countF24 = false;
         if($traning['f_4g'] != '' || $traning['f_4h'] != ''){
                  if($traning['f_4g'] == $request['f_1g'] && $traning['f_4h'] == $request['f_1h']){
                  $countF24 = true;
                  }
                  if($traning['f_4g'] == $request['f_2g'] && $traning['f_4h'] == $request['f_2h']){
                  $countF24 = true;
                  }
                  if($traning['f_4g'] == $request['f_3g'] && $traning['f_4h'] == $request['f_3h']){
                  $countF24 = true;
                  }
                  if($traning['f_4g'] == $request['f_4g'] && $traning['f_4h'] == $request['f_4h']){
                  $countF24 = true;
                  }
                  if($traning['f_4g'] == $request['f_5g'] && $traning['f_4h'] == $request['f_5h']){
                  $countF24 = true;
                  }
         } else $countF24 = true;

         $countF25 = false;
         if($traning['f_5g'] != '' || $traning['f_5h'] != ''){
                  if($traning['f_5g'] == $request['f_1g'] && $traning['f_5h'] == $request['f_1h']){
                  $countF25 = true;
                  }
                  if($traning['f_5g'] == $request['f_2g'] && $traning['f_5h'] == $request['f_2h']){
                  $countF25 = true;
                  }
                  if($traning['f_5g'] == $request['f_3g'] && $traning['f_5h'] == $request['f_3h']){
                  $countF25 = true;
                  }
                  if($traning['f_5g'] == $request['f_4g'] && $traning['f_5h'] == $request['f_4h']){
                  $countF25 = true;
                  }
                  if($traning['f_5g'] == $request['f_5g'] && $traning['f_5h'] == $request['f_5h']){
                  $countF25 = true;
                  }
         } else $countF25 = true;
 //         dump($countF11, $countF12, $countF13, $countF21, $countF22, $countF23, $countF24, $countF25);
         if(!$countF11 || !$countF12 || !$countF13 || !$countF21 || !$countF22 || !$countF23 || !$countF24 || !$countF25){
            if(!$countF11){ array_push($mistakes, "f_1a", "f_1b", "f_1c", "f_1d", "f_1e"); $miscount++;}
            if(!$countF12){ array_push($mistakes, "f_2a", "f_2b", "f_2c", "f_2d", "f_2e"); $miscount++;}
            if(!$countF13){ array_push($mistakes, "f_3a", "f_3b", "f_3c", "f_3d", "f_3e"); $miscount++;}
            if(!$countF21){ array_push($mistakes,  "f_1f", "f_1g", "f_1h"); $miscount++;}
            if(!$countF22){ array_push($mistakes, "f_2f", "f_2g", "f_2h"); $miscount++;}
            if(!$countF23){ array_push($mistakes, "f_3f", "f_3g", "f_3h"); $miscount++;}
            if(!$countF24){ array_push($mistakes, "f_4f", "f_4g", "f_4h"); $miscount++;}
            if(!$countF25){ array_push($mistakes, "f_5f", "f_5g", "f_5h"); $miscount++;}
            $string .= " Разделе F";
         }
         if($id == 2 || $id == 5) {
             if($request['g_1a'] != $traning['g_1a'] || $request['g_1c'] != $traning['g_1c'] || $request['g_1d'] != $traning['g_1d'] || $request['g_1f'] != $traning['g_1f'] || $request['g_1g'] != $traning['g_1g'] || $request['g_1b'] == '' || $request['g_1e'] == ''){
                if($request['g_1a'] != $traning['g_1a']){ array_push($mistakes, "g_1a"); $miscount++;}
                if($request['g_1b'] == ''){ array_push($mistakes, "g_1b"); $miscount++;}
                if($request['g_1c'] != $traning['g_1c']){ array_push($mistakes, "g_1c"); $miscount++;}
                if($request['g_1d'] != $traning['g_1d']){; array_push($mistakes, "g_1d"); $miscount++;}
                if($request['g_1e'] == ''){ array_push($mistakes, "g_1e"); $miscount++;}
                if($request['g_1f'] != $traning['g_1f']){ array_push($mistakes, "g_1f"); $miscount++;}
                if($request['g_1g'] != $traning['g_1g']){ array_push($mistakes, "g_1g"); $miscount++;}
                $string .= " Разделе G";
             }
         }
         if($id == 3) {
             if($request['h_1a'] != $traning['h_1a'] || $request['h_1b'] != $traning['h_1b'] || $request['h_1f'] != $traning['h_1f'] || $request['h_1c'] == '' || $request['h_1d'] == '' || $request['h_1e'] == ''){
                if($request['h_1a'] != $traning['h_1a']){ array_push($mistakes, "h_1a"); $miscount++;}
                if($request['h_1b'] != $traning['h_1b']){ array_push($mistakes, "h_1b"); $miscount++;}
                if($request['h_1c'] == ''){ array_push($mistakes, "h_1c"); $miscount++;}
                if($request['h_1d'] == ''){ array_push($mistakes, "h_1d"); $miscount++;}
                if($request['h_1e'] == ''){ array_push($mistakes, "h_1e"); $miscount++;}
                if($request['h_1f'] != $traning['h_1f']){ array_push($mistakes, "h_1f"); $miscount++;}
                $string .= " Разделе H";
             }
         }
         $countI1 = false;
         if($traning['i_1a'] != ''){
            if($traning['i_1c'] == $request['i_1c'] && $traning['i_1f'] == $request['i_1f'] && $traning['i_1g'] == $request['i_1g']){
                  $countI1 = true;
            }
            if($traning['i_1c'] == $request['i_2c'] && $traning['i_1f'] == $request['i_2f'] && $traning['i_1g'] == $request['i_2g']){
                     $countI1 = true;
            }
         } else $countI1 = true;

         $countI2 = false;
         if($traning['i_2a'] != ''){
           if($traning['i_2c'] == $request['i_1c'] && $traning['i_2f'] == $request['i_1f'] && $traning['i_2g'] == $request['i_1g']){
                  $countI2 = true;
                  }
           if($traning['i_2c'] == $request['i_2c'] && $traning['i_2f'] == $request['i_2f'] && $traning['i_2g'] == $request['i_2g']){
                  $countI2 = true;
                  }
         } else $countI2 = true;

         if($request['i_1a'] != '' || $request['i_1b'] != '' || $request['i_1c'] != '' || $request['i_1d'] != '' || $request['i_1e'] != '' || $request['i_1f'] != '' || $request['i_1g'] != ''){
             if ($traning['i_1a'] == ''){
              array_push($mistakes, "i_1a", "i_1b", "i_1c", "i_1d", "i_1e", "i_1f", "i_1g"); $miscount++;
             }
         }
         if($request['i_2a'] != '' || $request['i_2b'] != '' || $request['i_2c'] != '' || $request['i_2d'] != '' || $request['i_2e'] != '' || $request['i_2f'] != '' || $request['i_2g'] != '' && $traning['i_2a'] == ''){
             if ($traning['i_1a'] == ''){
              array_push($mistakes, "i_2a", "i_2b", "i_2c", "i_2d", "i_2e", "i_2f", "i_2g"); $miscount++;
             }
         }

         if(!$countI1 || !$countI2){
            if(!$countI1){ array_push($mistakes, "i_1a", "i_1b", "i_1c", "i_1d", "i_1e", "i_1f", "i_1g"); $miscount++;}
            if(!$countI2){ array_push($mistakes, "i_2a", "i_2b", "i_2c", "i_2d", "i_2e", "i_2f", "i_2g"); $miscount++;}
            $string .= " Разделе I";
         }

         if($request['j_1a'] != $traning['j_1a'] || $request['j_1c'] != $traning['j_1c']){
            if($request['j_1a'] != $traning['j_1a']){ array_push($mistakes, "j_1a"); $miscount++;}
            if($request['j_1c'] != $traning['j_1c']){ array_push($mistakes, "j_1c"); $miscount++;}
            $string .= " Разделе J";
         }
         if($request['n_b1'] != $traning['n_b1'] || $request['n_b2'] != $traning['n_b2'] || $request['n_b3'] != $traning['n_b3'] || $request['n_b4'] != $traning['n_b4'] || $request['n_b5'] != $traning['n_b5'] || $request['n_b6'] != $traning['n_b6'] || $request['n_b7'] != $traning['n_b7'] || $request['n_b8'] != $traning['n_b8'] || $request['n_b9'] != $traning['n_b9'] || $request['n_b10'] != $traning['n_b10'] || $request['n_b11'] != $traning['n_b11'] || $request['n_b12'] != $traning['n_b12'] || $request['n_c1'] != $traning['n_c1'] || $request['n_c2'] != $traning['n_c2'] || $request['n_c3'] != $traning['n_c3'] || $request['n_c4'] != $traning['n_c4'] || $request['n_c5'] != $traning['n_c5'] || $request['n_c6'] != $traning['n_c6'] || $request['n_c7'] != $traning['n_c7'] || $request['n_c8'] != $traning['n_c8'] || $request['n_c9'] != $traning['n_c9'] || $request['n_c10'] != $traning['n_c10'] || $request['n_c11'] != $traning['n_c11'] || $request['n_c12'] != $traning['n_c12']){
            if($request['n_b1'] != $traning['n_b1']){ array_push($mistakes, "n_b1"); $miscount++;}
            if($request['n_b2'] != $traning['n_b2']){ array_push($mistakes, "n_b2"); $miscount++;}
            if($request['n_b3'] != $traning['n_b3']){ array_push($mistakes, "n_b3"); $miscount++;}
            if($request['n_b4'] != $traning['n_b4']){ array_push($mistakes, "n_b4"); $miscount++;}
            if($request['n_b5'] != $traning['n_b5']){ array_push($mistakes, "n_b5"); $miscount++;}
            if($request['n_b6'] != $traning['n_b6']){ array_push($mistakes, "n_b6"); $miscount++;}
            if($request['n_b7'] != $traning['n_b7']){ array_push($mistakes, "n_b7"); $miscount++;}
            if($request['n_b8'] != $traning['n_b8']){ array_push($mistakes, "n_b8"); $miscount++;}
            if($request['n_b9'] != $traning['n_b9']){ array_push($mistakes, "n_b9"); $miscount++;}
            if($request['n_b10'] != $traning['n_b10']){ array_push($mistakes, "n_b10"); $miscount++;}
            if($request['n_b11'] != $traning['n_b11']){ array_push($mistakes, "n_b11"); $miscount++;}
            if($request['n_b12'] != $traning['n_b12']){ array_push($mistakes, "n_b12"); $miscount++;}
            if($request['n_c1'] != $traning['n_c1']){ array_push($mistakes, "n_c1"); $miscount++;}
            if($request['n_c2'] != $traning['n_c2']){ array_push($mistakes, "n_c2"); $miscount++;}
            if($request['n_c3'] != $traning['n_c3']){ array_push($mistakes, "n_c3"); $miscount++;}
            if($request['n_c4'] != $traning['n_c4']){ array_push($mistakes, "n_c4"); $miscount++;}
            if($request['n_c5'] != $traning['n_c5']){ array_push($mistakes, "n_c5"); $miscount++;}
            if($request['n_c6'] != $traning['n_c6']){ array_push($mistakes, "n_c6"); $miscount++;}
            if($request['n_c7'] != $traning['n_c7']){ array_push($mistakes, "n_c7"); $miscount++;}
            if($request['n_c8'] != $traning['n_c8']){ array_push($mistakes, "n_c8"); $miscount++;}
            if($request['n_c9'] != $traning['n_c9']){ array_push($mistakes, "n_c9"); $miscount++;}
            if($request['n_c10'] != $traning['n_c10']){ array_push($mistakes, "n_c10"); $miscount++;}
            if($request['n_c11'] != $traning['n_c11']){ array_push($mistakes, "n_c11"); $miscount++;}
            if($request['n_c12'] != $traning['n_c12']){ array_push($mistakes, "n_c12"); $miscount++;}
            $string .= " Разделе N";
         }

//          return view('traning.show', ['id' => $id,
//                  'request' => $request]);
            $misDB = [14, 27, 26, 41, 15, 14, 12, 13, 9, 22];
            $mispercent = $miscount*100/$misDB[$id-1];
            $percent = 100 - $mispercent;
            $testuserID = session("testuserID");
            UsersResults::where('id', $testuserID)->update(['result' => $percent]);
             return view('tests.show2', [
                                      'traning' => Traning::findOrFail($id),
                                      'id' => $id,
                                      'mistakes' => $mistakes,
                                      'blocks' => $string,
                                      'percent' => $percent,
                                      'disc' => TraningDisc::findOrFail($id),
                                  ]);
//                                    dump($string);
//                                    dump($miscount);
//                                    dump($mistakes);
//                                    dump($percent);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('traning.show', [
                     'traning' => Traning::findOrFail($id),
                     'id' => $id,
                     'disc' => TraningDisc::findOrFail($id),
                 ]);
    }

      public function show2(Request $request, $id)
        {
             $testuserID = UsersResults::create([
                                        'code' => $request['code'],
                                        'iin' => $request['iin'],
                                        'fio' => $request['fio'],
                                        'depart' => $request['depart'],
                                        'case' => $id,
                                        'result' => '',
                                     ])->id;
             session(["testuserID"=>$testuserID]);
             return view('tests.show2', [
                         'tests' => Traning::findOrFail($id),
                         'disc' => TraningDisc::findOrFail($id),
                         'id' => $id
                     ]);
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function info()
    {
          return view('info');
    }
}
