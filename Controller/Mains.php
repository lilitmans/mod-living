<?php
namespace Controller;
use Core\Controller as BaseController;



class Mains extends BaseController{

    public function __construct()
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->index();
        }else{
            $this->renderNotFound('main');
            die();
        }
    }

    public function index()
    {

        $this->result["nav-items"] = [
            [
                "id"    => 0,
                "name"  => "Поиск тура"
            ],
            [
                "id"    => 1,
                "name"  => "Индивидуальные туры"
            ],
            [
                "id"    => 2,
                "name"  => "Медицинский туризм"
            ],
            [
                "id"    => 3,
                "name"  => "Туры по Казахстану"
            ],
            [
                "id"    => 4,
                "name"  => "Обучение за рубежом"
            ],
            [
                "id"    => 5,
                "name"  => "Контакты"
            ]
        ];

        $this->result["popular-tours"] =[
            [
                "country"   =>  "Доминикана",
                "flag"      => "../assets/img/countrys-flag/png/dominican-republic.png",
                "img"       => "../assets/img/beach.jpg"
            ],
            [
                "country"   =>  "Оман",
                "flag"      => "../assets/img/countrys-flag/png/oman.png",
                "img"       => "../assets/img/oblique-shore.jpg"
            ],
            [
                "country"   =>  "Индия",
                "flag"      => "../assets/img/countrys-flag/png/india.png",
                "img"       => "../assets/img/india.jpg"
            ],
            [
                "name"      => "tours",
                "text"      => "Популярные<br />направления<br />зарубежных&nbsp;туров",
                "img"       => "../assets/img/pop-tour-map.jpg"
            ],
            [
                "country"   =>  "Молдавия",
                "flag"      => "../assets/img/countrys-flag/png/moldova.png",
                "img"       => "../assets/img/moldova.jpg"
            ],
            [
                "country"   =>  "ОАЭ",
                "flag"      => "../assets/img/countrys-flag/png/united-arab-emirates.png",
                "img"       => "../assets/img/united-arab-emirates.jpg"
            ],
            [
                "country"   =>  "Таиланд",
                "flag"      => "../assets/img/countrys-flag/png/thailand.png",
                "img"       => "../assets/img/thailand.jpg"
            ],
            [
                "country"   =>  "Шри-Ланка",
                "flag"      => "../assets/img/countrys-flag/png/sri-lanka.png",
                "img"       => "../assets/img/sri-lanka.jpg"
            ],
        ];

        $this->result["hot-tours"] =[
            [
                "name"      => "tours",
                "text"      => "Горящие туры",
                "img"       => "../assets/img/pop-tour-map.jpg"
            ],
            [
                "img"       => "../assets/img/germany.jpg",
                "country"   => "Германия",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "../assets/img/italy.jpg",
                "country"   => "Италия",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "../assets/img/dubay.jpg",
                "country"   => "Дубай",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "../assets/img/sri-lanka-statues.jpg",
                "country"   => "Шри-Ланка",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "../assets/img/estonia.jpg",
                "country"   => "Эстония",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "../assets/img/ispaniya.jpg",
                "country"   => "Испания",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ]
        ];

        $this->result["medical-tours"] =[
            [
                "country"   =>  "Израиль",
                "flag"      => "../assets/img/countrys-flag/png/israel.png",
                "img"       => "../assets/img/israel.jpg"
            ],
            [
                "country"   =>  "Германия",
                "flag"      => "../assets/img/countrys-flag/png/germany.png",
                "img"       => "../assets/img/germany2.jpg"
            ],
            [
                "country"   =>  "Австрия",
                "flag"      => "../assets/img/countrys-flag/png/austria.png",
                "img"       => "../assets/img/austria.jpg"
            ],
            [
                "name"      => "tours",
                "text"      => "Медицинские<br />туры",
                "img"       => "../assets/img/pop-tour-map.jpg"
            ],
            [
                "country"   =>  "Финляндия",
                "flag"      => "../assets/img/countrys-flag/png/finland.png",
                "img"       => "../assets/img/helsinki.jpg"
            ],
            [
                "country"   =>  "Латвия",
                "flag"      => "../assets/img/countrys-flag/png/latvia.png",
                "img"       => "../assets/img/latviа.jpg"
            ],
            [
                "country"   =>  "Южная Корея",
                "flag"      => "../assets/img/countrys-flag/png/south-korea.png",
                "img"       => "../assets/img/south-korea.jpg"
            ],
            [
                "country"   =>  "Китай",
                "flag"      => "../assets/img/countrys-flag/png/china.png",
                "img"       => "../assets/img/china.jpg"
            ]
        ];

        $this->result["work-details"] =[
            [
                "title"     => "Регистрация в системе",
                "text"      => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.",
                "icon"      => "../assets/img/sistem-registration.png"
            ],
            [
                "title"     => "Подбор тура",
                "text"      => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.",
                   "icon"      => "../assets/img/tour-selection.png"
            ],
            [
                "title"     => "Онлайн оплата",
                "text"      => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.",
                "icon"      => "../assets/img/online-payment.png"
            ]
        ];

        $this->renderView("Pages/main","main",$this->result);
    }
}
