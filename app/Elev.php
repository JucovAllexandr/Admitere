<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elev extends Model
{
    protected $table = "elev";
    protected $fillable = [
        'id_specialitate',
        'id_specialitate2',
        'id_specialitate3',
        'nota1',
        'nota2',
        'nota3',
        'media1',
        'media2',
        'media3',
        'buget1',
        'buget2',
        'buget3',
        'contract1',
        'contract2',
        'contract3',
        'limba1',
        'limba2',
        'limba3',
        'nationality_id',
        'nume',
        'prenume',
        'patronimic',
        'email',
        'cod_personal',
        'numar_buletin',
        'oficiu',
        'an_abs',
        'acte',
        'sex',
        'datanasterii',
        'certificat_data_eliberarii',
        'buletin_data_eliberarii',
        'tat_nume',
        'tat_prenume',
        'mam_nume',
        'mam_prenume',
        'cetatanie',
        'seria_certificat',
        'seria_buletin',
        'adresa',
        'raion',
        'telefon',
        'telefon_mobil',
        'sat_oras',
        'inst_abs',
        'distinc_abs',
        'doc_seria',
        'limba_de_instruire',
        'limba_studiata',
        'media_discipline',
        'media_exam',
        'gimnaziu',
        'livret_militar',
        'camin',
        'aloling',
        'cop_orfan',
        'cop_invalid',
        'cop_deficiente',
        'parinti_invalizi',
        'parinti_Cernobil',
        'mm_patru_copii',
        'raion_est',
        'cop_roman',
        'serv_milit',
        'ucrainean',
        'un_par_inv',
    ];

    /**
     * @param boolean $unguarded
     */
    public function Nationalitys()
    {
        return $this->belongsTo('App\Nationality','nationality_id');
    }
    public function specialitates(){
        return $this->belongsTo('App\Specialitate','id_specialitate');

    }
    public function specialitates2(){
        return $this->belongsTo('App\Specialitate','id_specialitate2');

    }
    public function specialitates3(){
        return $this->belongsTo('App\Specialitate','id_specialitate3');

    }
    public function languages1(){
        return $this->belongsTo('App\Language','limba1');

    }
    public function languages2(){
        return $this->belongsTo('App\Language','limba2');

    }
    public function languages3(){
        return $this->belongsTo('App\Language','limba3');

    }
    public function limb_studiata(){
        return $this->belongsTo('App\Language','limba_studiata');

    }
    public function limb_instruire(){
        return $this->belongsTo('App\Language','limba_de_instruire');

    }
}
