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
                "description"   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "comments"      => 15,
                "review"        => 20
            ],
            [
                "img"           => "../assets/img/last-news2.jpg",
                "date"          => date("F, Y"),
                "day"           => date("d"),
                "description"   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "comments"      => 6,
                "review"        => 10
            ],
            [
                "img"           => "../assets/img/last-news3.jpg",
                "date"          => date("F, Y"),
                "day"           => date("d"),
                "description"   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
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
