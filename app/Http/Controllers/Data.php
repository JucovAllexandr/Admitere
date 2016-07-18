<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Elev;
use Carbon\Carbon;

class Data extends Controller
{
    public function index(Request $request)
    {
        function ifNull($var)
        {
            if (is_null($var))
                return 0;
            else return 1;
        }

        //dd($request);
        $this->validate($request, [
            'specialitate1' => 'required|exists:specialitates,id|different:specialitate2|different:specialitate3',
            'lib1' => 'required|between:0,1',
            'specialitate2' => 'exists:specialitates,id|different:specialitate1|different:specialitate3',
            'lib2' => 'required|between:0,1',
            'specialitate3' => 'exists:specialitates,id|different:specialitate1|different:specialitate2',
            'lib3' => 'required|between:0,1',
            'bug1' => 'boolean',
            'cont1' => 'boolean',
            'bug2' => 'boolean',
            'cont2' => 'boolean',
            'bug3' => 'boolean',
            'cont3' => 'boolean',


            'lim_instruire' => 'required|integer|between:5,10',
            'lim_straina' => 'integer|between:5,10',
            'matem' => 'integer|between:5,10',
            'biologia' => 'integer|between:5,10',
            'istoria' => 'between:5,10|integer',
            'chimia' => 'between:5,10|integer',
            'informatica' => 'between:5,10|integer',
            'aptitudini' => 'between:5,10|integer',


            'liv_mil' => 'boolean',
            'cop_orf' => 'boolean',
            'patru_cop' => 'boolean',
            'indep_serv_mil' => 'boolean',
            'cop_cu_difect' => 'boolean',
            'parinti_invalid' => 'boolean',
            'par_cernob' => 'boolean',
            'cop_romin' => 'boolean',
            'copil_est' => 'boolean',
            'cetatean_ucr' => 'boolean',
            'parint_invalid' => 'boolean',
            'copil_inv_gr_I_II' => 'boolean',

            'nume' => 'required|string|max:255',
            'prenum' => 'required|string|max:255',
            'patronim' => 'required|string|max:255',
            'sex' => 'required|between:1,2',
            'natia' => '',
            'data_nast' => 'required|date_format:d.m.Y',

            'raion' => 'required|string|max:255',
            'sat_oras' => 'required|between:1,2',
            'num_sat_oras' => 'required|string|max:255',
            'strada' => 'string|max:255',
            'nr_bloc' => 'integer|min:0',

            'telefon' => 'required',
            'mobi' => 'required',
            'email' => 'email',
            'seria1' => 'string|max:255',
            'dat_elib' => 'date_format:d.m.Y',
            'seria2' => 'string|max:255',
            'nr' => 'integer',
            'oficiu' => 'string|max:255',
            'dat_elib2' => 'date_format:d.m.Y',
            'cetatanie' => 'required',
            'tnume' => 'required|string|max:255',
            'tprenume' => 'required|string|max:255',
            'mnume' => 'required|string|max:255',
            'mprenume' => 'required|string|max:255',
            'instit_abs' => 'required|string|max:255',
            'anab' => 'required|integer',
            'act' => 'required|string|max:255',
            'lib_inst' => 'required|between:1,2',
            'lib_stud' => 'required|between:1,3',
            'camin' => 'boolean',
            'baza_doc' => 'string|max:255',
            'dist' => 'string|max:255',
            'med_ex_ab' => 'required|numeric|between:5,10',
            'med_not_ads' => 'required|numeric|between:5,10',
            'cod_pers' => 'required|string|max:13|unique:elev,cod_personal',
            'loc_nas' => 'string|max:255',
            'liv_mil_nr' => 'string|max:255',

        ]);
        //dd($request->num_sat_oras);
         //dd(mb_strtolower($request->num_sat_oras));

        $informatica = [
            'obiect1' => 'Limba de instruire',
            'nota1' => $request->lim_instruire,
            'obiect2' => 'Limba staina',
            'nota2' => $request->lim_straina,
            'obiect3' => 'Matematica',
            'nota3' => $request->matem,
            'obiect4' => 'Informatica',
            'nota4' => $request->informatica,
        ];
        $ecologia = [
            'obiect1' => 'Limba de instruire',
            'nota1' => $request->lim_instruire,
            'obiect2' => 'Biologie',
            'nota2' => $request->biologia,
            'obiect3' => 'Chimie',
            'nota3' => $request->chimia,
            'obiect4' => 'Matematica',
            'nota4' => $request->matem,
        ];

        $coregrafie = [
            'obiect1' => 'Limba de instruire',
            'nota1' => $request->lim_instruire,
            'obiect2' => 'Limba staina',
            'nota2' => $request->lim_straina,
            'obiect3' => 'Istoria',
            'nota3' => $request->istoria,
            'obiect4' => 'Proba de aptitudini',
            'nota4' => $request->aptitudini,
        ];

        $as = [
            'obiect1' => 'Limba de instruire',
            'nota1' => $request->lim_instruire,
            'obiect2' => 'Limba staina',
            'nota2' => $request->lim_straina,
            'obiect3' => 'Matematica',
            'nota3' => $request->matem,
            'obiect4' => 'Istoria',
            'nota4' => $request->istoria,
        ];
        $media2=0;
        $media3=0;
        function med_inf($not1, $not2, $not3, $not4, $med_exam_abs, $est)
        {
            if ($est) {
                $media = (($not1 + $not2 + $not3 + $not4) / 4) * 0.4;
                $media += $med_exam_abs * 0.6;
            } else {
                $media = (($not1 + $not2 + $not3 + $not4) / 4) * 0.6;
                $media += $med_exam_abs * 0.4;
            }
            return $media;
        }

        function med_coreg($not1, $not2, $not3, $med_exam_abs, $est)
        {
            if ($est) {
                $media = (($not1 + $not2 + $not3 ) / 3) * 0.2;
                $media += $med_exam_abs * 0.3;
            } else {
                $media = (($not1 + $not2 + $not3 ) / 3) * 0.3;
                $media += $med_exam_abs * 0.2;
            }
            return $media;
        }

        if (  $request->specialitate1 == 3 || $request->specialitate1 == 4 || $request->specialitate1 == 5) {
            $nota1 = Note::create($informatica);
            $media1 = med_inf($request->lim_instruire,$request->lim_straina,$request->matem,$request->informatica,$request->med_ex_ab,ifNull($request->copil_est));
        }
        if ($request->specialitate1 == 7) {
            $nota1 = Note::create($ecologia);
            $media1 = med_inf($request->lim_instruire,$request->biologia,$request->matem,$request->chimia,$request->med_ex_ab,ifNull($request->copil_est));
        }
        if ($request->specialitate1 == 6 || $request->specialitate1 == 9 || $request->specialitate1 == 10) {
            $nota1 = Note::create($coregrafie);
            $media1 = med_coreg($request->lim_instruire,$request->lim_straina,$request->istoria,$request->med_ex_ab,ifNull($request->copil_est));
        }
        if ($request->specialitate1 == 1 || $request->specialitate1 == 2 || $request->specialitate1 == 8) {
            $nota1 = Note::create($as);
            $media1 = med_inf($request->lim_instruire,$request->lim_straina,$request->matem,$request->istoria,$request->med_ex_ab,ifNull($request->copil_est));
        }

        if ($request->specialitate2 == 8 || $request->specialitate2 == 3 || $request->specialitate2 == 4 || $request->specialitate2 == 5) {
            $nota2 = Note::create($informatica);
            $media2 = med_inf($request->lim_instruire,$request->lim_straina,$request->matem,$request->informatica,$request->med_ex_ab,ifNull($request->copil_est));
        }
        if ($request->specialitate2 == 7) {
            $nota2 = Note::create($ecologia);
            $media2 = med_inf($request->lim_instruire,$request->biologia,$request->matem,$request->chimia,$request->med_ex_ab,ifNull($request->copil_est));
        }
        if ($request->specialitate2 == 6 || $request->specialitate2 == 9 || $request->specialitate2 == 10) {
            $nota2 = Note::create($coregrafie);
            $media2 = med_coreg($request->lim_instruire,$request->lim_straina,$request->istoria,$request->med_ex_ab,ifNull($request->copil_est));
        }
        if ($request->specialitate2 == 1 || $request->specialitate2 == 2 || $request->specialitate2 == 8) {
            $nota2 = Note::create($as);
            $media2 = med_inf($request->lim_instruire,$request->lim_straina,$request->matem,$request->istoria,$request->med_ex_ab,ifNull($request->copil_est));
        }

        if ($request->specialitate3 == 3 || $request->specialitate3 == 4 || $request->specialitate3 == 5) {
            $nota3 = Note::create($informatica);
            $media3 = med_inf($request->lim_instruire,$request->lim_straina,$request->matem,$request->informatica,$request->med_ex_ab,ifNull($request->copil_est));
        }
        if ($request->specialitate3 == 7) {
            $nota3 = Note::create($ecologia);
            $media3 = med_inf($request->lim_instruire,$request->biologia,$request->matem,$request->chimia,$request->med_ex_ab,ifNull($request->copil_est));
        }
        if ($request->specialitate3 == 6 || $request->specialitate3 == 9 || $request->specialitate3 == 10) {
            $nota3 = Note::create($coregrafie);
            $media3 = med_coreg($request->lim_instruire,$request->lim_straina,$request->istoria,$request->med_ex_ab,ifNull($request->copil_est));
        }
        if ($request->specialitate3 == 1 || $request->specialitate3 == 2 || $request->specialitate3 == 8) {
            $nota3 = Note::create($as);
            $media3 = med_inf($request->lim_instruire,$request->lim_straina,$request->matem,$request->istoria,$request->med_ex_ab,ifNull($request->copil_est));
        }

//        if ($request->specialitate1 != 0)
//            //informatica contabilitate , ecologie , as sociala
//            $media1 = (($request->opt1_nt1 + $request->opt1_nt2 + $request->opt1_nt3 + $request->opt1_nt4) / 4);
//        // $media1=(($request->opt1_nt1+$request->opt1_nt2+$request->opt1_nt3+$request->opt1_nt4)/4)*0.6;
//        /*$media1 += $request->med_ex_ab * 0.4;
//          //arte coregrafie interpritare muzicala pictura
//          $media1=(($request->opt1_nt1+$request->opt1_nt2+$request->opt1_nt3+$request->opt1_nt4)/4)*0.3;
//          $media1 += $request->opt1_nt4 * 0.5;
//          $media1 += $request->med_ex_ab * 0.2;
//          //est
//          //informatica contabilitate , ecologie , as sociala
//          $media1=(($request->opt1_nt1+$request->opt1_nt2+$request->opt1_nt3+$request->opt1_nt4)/4)*0.4;
//          $media1 += $request->med_ex_ab * 0.6;
//          //arte coregrafie interpritare muzicala pictura
//          $media1=(($request->opt1_nt1+$request->opt1_nt2+$request->opt1_nt3+$request->opt1_nt4)/4)*0.2;
//          $media1 += $request->opt1_nt4 * 0.5;
//          $media1 += $request->med_ex_ab * 0.3;
//          */
//
//        if (!is_null($request->specialitate2))
//            $media2 = ($request->opt2_nt1 + $request->opt2_nt2 + $request->opt2_nt3 + $request->opt2_nt4) / 4;
//        if (!is_null($request->specialitate3))
//            $media3 = ($request->opt3_nt1 + $request->opt3_nt2 + $request->opt3_nt3 + $request->opt3_nt4) / 4;

        $id1 = 0;
        $id2 = 0;

        if (isset($nota2)) $id1 = $nota2->id;
        if (isset($nota3)) $id2 = $nota3->id;

        $dt = Carbon::parse($request->data_nast);
        $dt2 = Carbon::parse($request->dat_elib);
        $dt3 = Carbon::parse($request->dat_elib2);
        Elev::create([
            'user_id' => Auth::user()->id,
            'id_specialitate' => $request->specialitate1,
            'id_specialitate2' => $request->specialitate2,
            'id_specialitate3' => $request->specialitate3,
            'nota1' => $nota1->id,
            'nota2' => $id1,
            'nota3' => $id2,
            'media1' => $media1,
            'media2' => $media2,
            'media3' => $media3,
            'buget1' => ifNull($request->bug1),
            'buget2' => ifNull($request->bug2),
            'buget3' => ifNull($request->bug3),
            'contract1' => ifNull($request->cont1),
            'contract2' => ifNull($request->cont2),
            'contract3' => ifNull($request->cont3),
            'limba1' => $request->lib1,
            'limba2' => $request->lib2,
            'limba3' => $request->lib3,
            'livret_militar' => ifNull($request->liv_mil),
            'cop_orfan' => ifNull($request->cop_orf),
            'mm_patru_copii' => ifNull($request->patru_cop),
            'cop_deficiente' => ifNull($request->cop_cu_difect),
            'parinti_invalizi' => ifNull($request->parinti_invalid),
            'parinti_Cernobil' => ifNull($request->par_cernob),
            'cop_roman' => ifNull($request->cop_romin),
            'raion_est' => ifNull($request->copil_est),
            'ucrainean' => ifNull($request->cetatean_ucr),
            'un_par_inv' => ifNull($request->parint_invalid),
            'copil_inv_gr_I_II' => ifNull($request->copil_inv_gr_I_II),
            'nume' => mb_strtolower($request->nume),
            'prenume' => mb_strtolower($request->prenum),
            'patronimic' => mb_strtolower($request->patronim),
            'sex' => $request->sex,
            'nationality_id' => $request->natia,
            'datanasterii' => Carbon::createFromDate($dt->year, $dt->month, $dt->day),

            'raion' => mb_strtolower($request->raion),
            'sat_oras' => $request->sat_oras,
            'num_sat_oras' => mb_strtolower($request->num_sat_oras),
            'strada' => mb_strtolower($request->strada),
            'nr_bloc' => $request->nr_bloc,

            'telefon' => $request->telefon,
            'telefon_mobil' => $request->mobi,
            'email' => $request->email,
            'seria_certificat' => $request->seria1,
            'certificat_data_eliberarii' => Carbon::createFromDate($dt2->year, $dt2->month, $dt2->day),
            'seria_buletin' => $request->seria2,
            'numar_buletin' => $request->nr,
            'oficiu' => $request->oficiu,
            'buletin_data_eliberarii' => Carbon::createFromDate($dt3->year, $dt3->month, $dt3->day),
            'cetatanie' => $request->cetatanie,
            'tat_nume' => mb_strtolower($request->tnume),
            'tat_prenume' => mb_strtolower($request->tprenume),
            'mam_nume' => mb_strtolower($request->mnume),
            'mam_prenume' => mb_strtolower($request->mprenume),
            'inst_abs' => $request->instit_abs,
            'an_abs' => $request->anab,
            'acte' => $request->act,
            'limba_de_instruire' => $request->lib_inst,
            'limba_studiata' => $request->lib_stud,
            'camin' => $request->camin,
            'doc_seria' => $request->baza_doc,
            'distinc_abs' => $request->dist,
            'media_exam' => $request->med_ex_ab,
            'media_discipline' => $request->med_not_ads,
            'cod_personal' => $request->cod_pers,
            'loc_nas' => $request->loc_nas,
            'liv_mil_nr' => $request->liv_mil_nr,
        ]);

        return redirect('/data');
    }
}
