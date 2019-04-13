<?php
namespace Controller;
use Core\Controller as BaseController;
use Model\Country;
use Model\PaymentInfo;
use Model\UserType;
use Model\Dinner;
use Model\Plans;
use Model\Users;


class SignUp extends BaseController{

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'sign-up') {
                $this->index();
            }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if ($countRoute == 1 && $route[0] == 'sign-up') {
                $this->index();
            }
        }
    }

    private function index()
    {

        $this->result["nav-items"] = [
            [
                "id"            => 0,
                "name"          => "Поиск тура",
                "item-route"    => ""
            ],
            [
                "id"            => 1,
                "name"          => "Индивидуальные туры",
                "item-route"    => "tours/individualnye-tury"
            ],
            [
                "id"            => 2,
                "name"          => "Медицинский туризм",
                "item-route"    => "tours/medicinskie-tury"
            ],
            [
                "id"            => 3,
                "name"          => "Туры по Казахстану",
                "item-route"    => "tours/toury-po-kazakhstanu"
            ],
            [
                "id"            => 4,
                "name"          => "Обучение за рубежом",
                "item-route"    => "tours/obuchenie-za-rubejom"
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
        $this->renderView("Pages/login-registration","login-registration", $this->result);
    }

}


