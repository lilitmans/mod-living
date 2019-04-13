<?php
namespace Controller;
use Core\Controller as BaseController;
use Model\Contact as ContactModel;


class Contact extends BaseController
{

    public function __construct($route, $countRoute)
    {
        parent::__construct();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'contact') {
                $this->index();
            }
        }

    }

    public function index()
    {
        $this->result["company-data"] = [
            [
                "icon" => "location-icon.png",
                "data" => "РК, 050026, г. Алматы, <br/>Гоголя 201",
                "number" => "01",
                "type" => "Адрес"
            ],
            [
                "icon" => "phone-icon.png",
                "data" => "8(600) 040-20-65",
                "number" => "02",
                "type" => "Номер телефона"
            ],
            [
                "icon" => "envelope-icon.png",
                "data" => "info@detour.kz",
                "number" => "03",
                "type" => "Почтовый адрес"
            ]
        ];
        $this->result["nav-items"] = [
            [
                "id"            => 0,
                "name"          => "Поиск тура",
                "item-route"    => "search-tour"
            ],
            [
                "id"            => 1,
                "name"          => "Индивидуальные туры",
                "item-route"    => "individualnye-tury"
            ],
            [
                "id"            => 2,
                "name"          => "Медицинский туризм",
                "item-route"    => "medicinskie-tury"
            ],
            [
                "id"            => 3,
                "name"          => "Туры по Казахстану",
                "item-route"    => "toury-po-kazakhstanu"
            ],
            [
                "id"            => 4,
                "name"          => "Обучение за рубежом",
                "item-route"    => "obuchenie-za-rubejom"
            ],
            [
                "id"            => 5,
                "name"          => "Контакты",
                "item-route"    => "contact"
            ]
        ];
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
        $this->renderView("Pages/contact", "contact", $this->result);
    }
}