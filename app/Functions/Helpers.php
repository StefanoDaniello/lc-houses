<?php
    namespace App\Functions;
    class Helpers
    {
        public static function getCsvData($path){
       
            //utilizzo fopen per prire il file in lettura tramite l' ultimo paramentro 'r'
            $file_steam = fopen($path,'r');
     
            // se non rie4sce a leggere il file stampa un errore
            if($file_steam === false){
                exit('Cannot open th file: '.$path);
            }
     
            //utilizzo fgetcsv per leggere riga per riga e lo stampo nell array vuoto $data
            $data=[];
            while($row = fgetcsv($file_steam)){
                $data[] = $row;
            }
             // dd($data);
            return $data;
         }
    }