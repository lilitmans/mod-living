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
                "id"            => 0,
                "name"          => "Подбор тура",
                "item-route"    => "",
                "img"           => "earth"
            ],
            [
                "id"            => 1,
                "name"          => "Все туры",
                "item-route"    => "",
                "img"           => "suitcase"
            ],
            [
                "id"            => 2,
                "name"          => "Туры по Казахстану",
                "item-route"    => "tours/toury-po-kazakhstanu",
                "img"           => "sun-bird"
            ],
            [
                "id"            => 3,
                "name"          => "Туристам",
                "item-route"    => "",
                "img"           => "tourist"
            ],
            [
                "id"            => 4,
                "name"          => "Контакты",
                "item-route"    => "contact",
                "img"           => "contact"
            ]
        ];

        $this->result["popular-tours"] =[
            [
                "country"   =>  "Доминикана",
                "flag"      => "flag",
                "img"       => "../assets/img/beach.jpg"
            ],
            [
                "country"   =>  "Оман",
                "flag"      => "flag",
                "img"       => "../assets/img/oblique-shore.jpg"
            ],
            [
                "country"   =>  "Индия",
                "flag"      => "flag",
                "img"       => "../assets/img/india.jpg"
            ],
            [
                "country"   =>  "Доминикана",
                "flag"      => "flag",
                "img"       => "../assets/img/beach.jpg"
            ],
            [
                "country"   =>  "Молдавия",
                "flag"      => "flag",
                "img"       => "../assets/img/moldova.jpg"
            ],
            [
                "country"   =>  "ОАЭ",
                "flag"      => "flag",
                "img"       => "../assets/img/united-arab-emirates.jpg"
            ],
            [
                "country"   =>  "Таиланд",
                "flag"      => "flag",
                "img"       => "../assets/img/thailand.jpg"
            ],
            [
                "country"   =>  "Шри-Ланка",
                "flag"      => "flag",
                "img"       => "../assets/img/sri-lanka.jpg"
            ],
        ];

        $this->result["hot-tours"] =[
            [
                "img"       => "germany",
                "country"   => "Германия",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "italy",
                "country"   => "Италия",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "dubay",
                "country"   => "Дубай",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "sri-lanka-statues",
                "country"   => "Шри-Ланка",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "estonia",
                "country"   => "Эстония",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "ispaniya",
                "country"   => "Испания",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "germany",
                "country"   => "Германия",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "italy",
                "country"   => "Италия",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ]
        ];

        $this->result["medical-tours"] =[
            [
                "country"   =>  "Израиль",
                "flag"      => "flag",
                "img"       => "israel"
            ],
            [
                "country"   =>  "Германия",
                "flag"      => "flag",
                "img"       => "germany2"
            ],
            [
                "country"   =>  "Австрия",
                "flag"      => "flag",
                "img"       => "austria"
            ],
            [
                "country"   =>  "Финляндия",
                "flag"      => "flag",
                "img"       => "helsinki"
            ],
            [
                "country"   =>  "Латвия",
                "flag"      => "flag",
                "img"       => "latviа"
            ],
            [
                "country"   =>  "Латвия",
                "flag"      => "flag",
                "img"       => "latviа"
            ],
            [
                "country"   =>  "Южная Корея",
                "flag"      => "flag",
                "img"       => "south-korea"
            ],
            [
                "country"   =>  "Китай",
                "flag"      => "flag",
                "img"       => "china"
            ]
        ];

        $this->result["work-details"] =[
            [
                "title"     => "Регистрация в системе",
                "text"      => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. ",
                "icon"      => "system-registration-icon"
            ],
            [
                "title"     => "Подбор тура",
                "text"      => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. ",
                   "icon"      => "tour-selection-icon"
            ],
            [
                "title"     => "Онлайн оплата",
                "text"      => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. ",
                "icon"      => "online-payment-icon"
            ]
        ];

        $this->result["best-directions"] =[
            [
                "title"     => "Нур-Султан",
                "img"       => "../assets/img/nur-sultan.jpg"
            ],
            [
                "title"     => "Алматы",
                "img"       => "../assets/img/almaty.jpg"
            ],
            [
                "title"     => "Шымбулак",
                "img"       => "../assets/img/shimbulak.jpg"
            ],
            [
                "title"     => "Кольсайские озера",
                "img"       => "../assets/img/kolsayskie-ozyora.jpg"
            ],
            [
                "title"     => "Байконур",
                "img"       => "../assets/img/baykonur.jpg"
            ],
            [
                "title"     => "Аральское море",
                "img"       => "../assets/img/aralskoe-more.jpg"
            ],
            [
                "title"     => "Катон-Карагай",
                "img"       => "../assets/img/katon-karagay.jpg"
            ],
            [
                "title"     => "Мавзолей Карахан",
                "img"       => "../assets/img/mavzoley-karakhan.jpg"
            ]
        ];

        $this->result["last-news"] =[
            [
                "img"           => "../assets/img/last-news1.jpg",
                "date"          => date("F, Y"),
                "day"           => date("d"),
                "description"   => "Какие туры искали росияне в Яндексе этой зимой",
                "comments"      => 15,
                "review"        => 20
            ],
            [
                "img"           => "../assets/img/last-news2.jpg",
                "date"          => date("F, Y"),
                "day"           => date("d"),
                "description"   => "Таиланд открыл бесплатную онлайн-академию для турагентов",
                "comments"      => 6,
                "review"        => 10
            ],
            [
                "img"           => "../assets/img/last-news3.jpg",
                "date"          => date("F, Y"),
                "day"           => date("d"),
                "description"   => "В Турции строят один из самых дорогих отелей на Средиземноморье",
                "comments"      => 21,
                "review"        => 50
            ]
        ];

        $this->result["search-tours"] =[
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

        $this->result["sidebar-filters"] =[
            [
                "filter-name"   => "Фильтр 1"
            ],
            [
                "filter-name"   => "Фильтр 2"
            ],
            [
                "filter-name"   => "Фильтр 3"
            ],
            [
                "filter-name"   => "Фильтр 4"
            ],
            [
                "filter-name"   => "Фильтр 5"
            ],
            [
                "filter-name"   => "Фильтр 6"
            ],
            [
                "filter-name"   => "Фильтр 7"
            ],
            [
                "filter-name"   => "Фильтр 8"
            ]

        ];

        $this->result["footer-company-data"] =[
            [
                "icon"      => "location-icon",
                "data"      => "РК, 050026, г. Алматы, <br/>Гоголя 201"
            ],
            [
                "icon"      => "phone-icon",
                "data"      => "8(600) 040-20-65"
            ],
            [
                "icon"      => "envelope-icon",
                "data"      => "info@detour.kz"
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

        $this->result["company-data"] =[
            [
                "icon"      => "location-icon.png",
                "data"      => "РК, 050026, г. Алматы, <br/>Гоголя 201",
                "number"    => "01",
                "type"      => "Адрес"
            ],
            [
                "icon"      => "phone-icon.png",
                "data"      => "8(600) 040-20-65",
                "number"    => "02",
                "type"      => "Номер телефона"
            ],
            [
                "icon"      => "envelope-icon.png",
                "data"      => "info@detour.kz",
                "number"    => "03",
                "type"      => "Почтовый адрес"
            ]
        ];

        $this->renderView("Pages/main","main",$this->result);
    }
}
