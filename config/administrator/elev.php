<?php
return [
    'title' => 'Elevi',
    'single' => 'Elev',
    'model' => 'App\Elev',
    'columns' => [
        'id_specialitate'=> [
            'title' => 'Specialitate 1',
            'relationship' => 'specialitates',
            'select' => "(:table).denumire",
        ],
        'buget1',
        'contract1',
        'nota1',
        'media1',
        'limba1'=>[
            'title' => 'Limba 1',
            'relationship' => 'languages1',
            'select' => "(:table).language",
        ],
        'id_specialitate2' =>[
            'title' => 'Specialitate 2',
            'relationship' => 'specialitates2',
            'select' => "(:table).denumire",
        ],
        'buget2',
        'contract2',
        'nota2',
        'media2',
        'limba2'=>[
            'title' => 'Limba 2',
            'relationship' => 'languages2',
            'select' => "(:table).language",
        ],
        'id_specialitate3' => [
            'title' => 'Specialitate 3',
            'relationship' => 'specialitates3',
            'select' => "(:table).denumire",
        ],
        'buget3',
        'contract3',
        'nota3',
        'media3',
        'limba3'=>[
            'title' => 'Limba 3',
            'relationship' => 'languages3',
            'select' => "(:table).language",
        ],
        'nationality_id' => [
            'title' => 'Nationalitatea',
            'relationship' => 'Nationalitys',
            'select' => "(:table).nationality",
        ],

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
        'num_sat_oras',
        'strada',
        'nr_bloc',
        'raion',
        'telefon',
        'telefon_mobil',
        'sat_oras',
        'inst_abs',
        'distinc_abs',
        'doc_seria',
        'limba_de_instruire'=>[
            'title' => 'Limba de instruire',
            'relationship' => 'limb_instruire',
            'select' => "(:table).language",
        ],
        'limba_studiata'=>[
            'title' => 'Limba studiata',
            'relationship' => 'limb_studiata',
            'select' => "(:table).language",
        ],
        'media_discipline',
        'media_exam',
        'livret_militar',
        'camin',
        'cop_orfan',
        'cop_invalid',
        'cop_deficiente',
        'parinti_invalizi',
        'parinti_Cernobil',
        'mm_patru_copii',
        'raion_est',
        'cop_roman',
        'ucrainean',
        'un_par_inv',
    ],
    'edit_fields' => [
        'id' => [
            'nume' => 'number',
        ],
        'nume' => [
            'title' => 'Nume',
            'type' => 'text'
        ],
        'prenume' => [
            'title' => 'Prenume',
            'type' => 'text'
        ],
        'email' => [
            'title' => 'Email',
            'type' => 'text'
        ],

        'specialitates' => [
            'title' => 'Specialitate 1',
            'type' => 'relationship',
            'name_field' => 'denumire',
        ],
        'languages1' => [
            'title' => 'Limba de instruire 1',
            'type' => 'relationship',
            'name_field' => 'language',
        ],

        'buget1' => [
            'title' => 'Buget 1',
            'type' => 'bool'
        ],
        'contract1' => [
            'title' => 'Contract 1',
            'type' => 'bool'
        ],
        'nota1' => [
            'title' => 'Id Nota 1',
            'type' => 'text'
        ],
        'media1' => [
            'title' => 'Media 1',
            'type' => 'text'
        ],

        'specialitates2' => [
            'title' => 'Specialitate 2',
            'type' => 'relationship',
            'name_field' => 'denumire',
        ],
        'languages2' => [
            'title' => 'Limba de instruire 2',
            'type' => 'relationship',
            'name_field' => 'language',
        ],
        'buget2' => [
            'title' => 'Buget 2',
            'type' => 'bool'
        ],
        'contract2' => [
            'title' => 'Contract 2',
            'type' => 'bool'
        ],
        'nota2' => [
            'title' => 'Id Nota 2',
            'type' => 'text'
        ],
        'media2' => [
            'title' => 'Media 2',
            'type' => 'text'
        ],

        'specialitates3' => [
            'title' => 'Specialitate 3',
            'type' => 'relationship',
            'name_field' => 'denumire',
        ],
        'languages3' => [
            'title' => 'Limba de instruire 3',
            'type' => 'relationship',
            'name_field' => 'language',
        ],
        'buget3' => [
            'title' => 'Buget 3',
            'type' => 'bool'
        ],
        'contract3' => [
            'title' => 'Contract 3',
            'type' => 'bool'
        ],
        'nota3' => [
            'title' => 'Id Nota 3',
            'type' => 'text'
        ],
        'media3' => [
            'title' => 'Media 3',
            'type' => 'text'
        ],


        'Nationalitys' => [
            'title' => 'Nationalitatea',
            'type' => 'relationship',
            'name_field' => 'nationality',
        ],
        'cod_personal' => [
            'title' => 'Cod personal',
            'type' => 'text',
        ],
        'numar_buletin' => [
            'title' => 'Numar buletin',
            'type' => 'text'
        ],
        'oficiu' => [
            'title' => 'Oficiu',
            'type' => 'text'
        ],
        'an_abs' => [
            'title' => 'Anul de absolvire',
            'type' => 'text'
        ],
        'acte'=> [
            'title' => 'Acte',
            'type' => 'text'
        ],
        'sex'=> [
            'title' => 'Sex',
            'type' => 'text'
        ],
        'datanasterii'=> [
            'title' => 'Data nasterii',
            'type' => 'date'
        ],
        'certificat_data_eliberarii'=> [
            'title' => 'Certificat data eliberarii',
            'type' => 'date'
        ],
        'buletin_data_eliberarii'=> [
            'title' => 'Buletin data eliberarii',
            'type' => 'date'
        ],
        'tat_nume'=> [
            'title' => 'Tatal nume',
            'type' => 'text'
        ],
        'tat_prenume'=> [
            'title' => 'Tatal prenume',
            'type' => 'text'
        ],
        'mam_nume'=> [
            'title' => 'Mama nume',
            'type' => 'text'
        ],
        'mam_prenume'=> [
            'title' => 'Mama prenume',
            'type' => 'text'
        ],
        'cetatanie'=> [
            'title' => 'Cetatanie',
            'type' => 'text'
        ],
        'seria_certificat'=> [
            'title' => 'Seria Certificat',
            'type' => 'text'
        ],
        'seria_buletin'=> [
            'title' => 'Seria buletin',
            'type' => 'text'
        ],
        'num_sat_oras'=> [
            'title' => 'Nume sat sau oras',
            'type' => 'text'
        ],
        'strada'=> [
            'title' => 'Strada',
            'type' => 'text'
        ],
        'nr_bloc'=> [
            'title' => 'Nr bloc',
            'type' => 'text'
        ],
        'raion'=> [
            'title' => 'raion',
            'type' => 'text'
        ],
        'telefon'=> [
            'title' => 'Telefon',
            'type' => 'text'
        ],
        'telefon_mobil'=> [
            'title' => 'Telefon mobil',
            'type' => 'text'
        ],
        'sat_oras'=> [
            'title' => 'sat oras',
            'type' => 'text'
        ],
        'inst_abs'=> [
            'title' => 'Instituția de învatămant absolvită',
            'type' => 'text'
        ],
        'distinc_abs'=> [
            'title' => 'Distinctii acordate la absolvire',
            'type' => 'text'
        ],
        'doc_seria'=> [
            'title' => 'În baza documentelor',
            'type' => 'text'
        ],
        'limb_instruire'=> [
            'title' => 'Limba de instruire',
            'type' => 'relationship',
            'name_field' => 'language',
        ],
        'limb_studiata'=> [
            'title' => 'Limba studiata',
            'type' => 'relationship',
            'name_field' => 'language',
        ],
        'media_discipline'=> [
            'title' => 'Media discipline',
            'type' => 'text'
        ],
        'media_exam'=> [
            'title' => 'Media examinilor',
            'type' => 'text'
        ],
        'livret_militar'=> [
            'title' => 'Livret Militar',
            'type' => 'bool'
        ],
        'camin'=> [
            'title' => 'Camin',
            'type' => 'bool'
        ],
        'cop_orfan'=> [
            'title' => 'Copil orfan',
            'type' => 'bool'
        ],
        'cop_invalid'=> [
            'title' => 'Copil invalid',
            'type' => 'bool'
        ],
        'cop_deficiente'=> [
            'title' => 'Copil cu deficiente',
            'type' => 'bool'
        ],
        'parinti_invalizi'=> [
            'title' => 'Parinti invalizi',
            'type' => 'bool'
        ],
        'parinti_Cernobil'=> [
            'title' => 'Parinţii participanti la act milit şi Cernobîl',
            'type' => 'bool'
        ],
        'mm_patru_copii'=> [
            'title' => 'Mai mult de patru copii',
            'type' => 'bool'
        ],
        'raion_est'=> [
            'title' => 'Copil din r-le de Est, Bender',
            'type' => 'bool'
        ],
        'cop_roman'=> [
            'title' => 'Copil din r-le de Est, Bender',
            'type' => 'bool'
        ],
        'ucrainean'=> [
            'title' => 'Cetateni ai ucrainei',
            'type' => 'bool'
        ],
        'un_par_inv'=> [
            'title' => 'Unul din părinți Invalid',
            'type' => 'bool'
        ],
    ],
    'action_permissions'=> [
        'create' => function($model)
        {
            return false;
        }
    ],
];