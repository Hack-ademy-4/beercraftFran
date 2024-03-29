<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BreweryController extends Controller
{
    public function todas()
    {
        $cervecerias = [
          [
            "nombre"=>"Old Town",
            "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
            "aforo"=>20
            ],
          [
            "nombre"=>"Irish Drunks",
            "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
            "aforo"=>43
            ],
          [
            "nombre"=>"Joyce",
            "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
            "aforo"=>17
            ],
          [
            "nombre"=>"Piccolo Bar",
            "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
            "aforo"=>26
            ]
        ];
        return view("cervecerias",["breweries"=>$cervecerias]);
    }
    
    public function details()
    {
        $detalles = 
      [
        [
          "nombre"=>"Dorada no filetrada",
          "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
          "cantidad"=>20
          ],
        [
          "nombre"=>"Mahou classica",
          "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
          "cantidad"=>5
          ],
        [
          "nombre"=>"Estrella galicia",
          "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
          "cantidad"=>150
          ],
        [
          "nombre"=>"San Miguel",
          "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
          "cantidad"=>0
          ]
      ];

    return view ("detalles", ["lots"=>$detalles]);

}
}
