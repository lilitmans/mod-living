<?php
namespace Controller;
use Core\Controller as BaseController;



class ToursInKazakhstan extends BaseController{

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'tours-in-kazakhstan') {
                $this->index();
            }
        }

    }

    public function index()
    {
        $this->result["footer-data"] =[
            [
                "title"         => "Страны",
                "items"         => ["Дания", "Эстония", "Эфиопия", "Израиль", "Монако", "Тунис", "Украина"],
                "see-all"  => "страны"
            ],
            [
                "title"         => "Гостиницы",
                "items"         => ["Казжол", "Гранд отель Тянь-Шань", "Гостиница Достык", "Ритц-Карлтон Алматы",
                    "Марриот Астана", "Интерконтиненталь Алматы", "Парк Инн от Радиссон Астана"],
                "see-all"  => "гостиницы"
            ],
            [
                "title"         => "Информация",
                "items"         => ["О компании", "Услуги", "Блог", "Как купить?", "Публичная оферта"]
            ]
        ];
        $this->result["footer-company-data"] =[
            [
                "icon"      => "../assets/img/location-icon.png",
                "data"      => "РК, 050026, г. Алматы, <br/>Гоголя 201"
            ],
            [
                "icon"      => "../assets/img/phone-icon.png",
                "data"      => "8(600) 040-20-65"
            ],
            [
                "icon"      => "../assets/img/envelope-icon.png",
                "data"      => "info@detour.kz"
            ]
        ];

        $this->result["nav-items"] = [
            [
                "id"    => 0,
                "name"  => "Поиск тура",
                "route"  => ""
            ],
            [
                "id"    => 1,
                "name"  => "Индивидуальные туры",
                "route"  => ""
            ],
            [
                "id"    => 2,
                "name"  => "Медицинский туризм",
                "route"  => ""
            ],
            [
                "id"    => 3,
                "name"  => "Туры по Казахстану",
                "route"  => ""
            ],
            [
                "id"    => 4,
                "name"  => "Обучение за рубежом",
                "route"  => "tours-in-kazakhstan"
            ],
            [
                "id"    => 5,
                "name"  => "Контакты",
                "route"  => ""
            ]
        ];
        $this->renderView("Pages/toursInKazakhstan","toursInKazakhstan", $this->result);
    }
}