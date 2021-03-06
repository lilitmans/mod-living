<?php
namespace Controller;
use Core\Controller as BaseController;


class Tours extends BaseController{

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 2 && $route[0] == 'tours' && is_string($route[1])) {
                $this->index($route[1]);
            }else if($countRoute == 3 && $route[0] == 'tours' && is_string($route[1]) && is_string($route[2])) {
                 $this->ToursDetaling($route[2]);
            }else if($countRoute == 4 && $route[0] == 'tours' && is_string($route[1]) && is_string($route[2]) && is_string($route[3])) {
                 $this->InfoTours($route[3]);
            }
        }

    }

    public function index($urls)
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
        $this->result["search-tours"] =[
            [
                "img"       => "germany.jpg",
                "country"   => "Германия",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "italy.jpg",
                "country"   => "Италия",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "dubay.jpg",
                "country"   => "Дубай",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "sri-lanka-statues.jpg",
                "country"   => "Шри-Ланка",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "estonia.jpg",
                "country"   => "Эстония",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "ispaniya.jpg",
                "country"   => "Испания",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ]
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

        $this->result["best-directions"] =[
            [
                "title"     => "Нур-Султан",
                "img"       => "nur-sultan.jpg"
            ],
            [
                "title"     => "Алматы",
                "img"       => "almaty.jpg"
            ],
            [
                "title"     => "Шымбулак",
                "img"       => "shimbulak.jpg"
            ],
            [
                "title"     => "Кольсайские озера",
                "img"       => "kolsayskie-ozyora.jpg"
            ],
            [
                "title"     => "Байконур",
                "img"       => "baykonur.jpg"
            ],
            [
                "title"     => "Аральское море",
                "img"       => "aralskoe-more.jpg"
            ],
            [
                "title"     => "Катон-Карагай",
                "img"       => "katon-karagay.jpg"
            ],
            [
                "title"     => "Мавзолей Карахан",
                "img"       => "mavzoley-karakhan.jpg"
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
        $fullUrl ="tours/".$urls;
        for($i=0;$i<count($this->result["nav-items"]);$i++){
            if($fullUrl == $this->result["nav-items"][$i]['item-route']){
                $this->result["cat-name"]=$this->result["nav-items"][$i]['name'];
            }

        }

        
          

        $this->renderView("Pages/tursitem","tursitem", $this->result);
    }

    public function ToursDetaling()
    {
        $this->result["nav-items"] = [
            [
                "id"            => 0,
                "name"          => "Подбор тура",
                "item-route"    => ""
            ],
            [
                "id"            => 1,
                "name"          => "Все туры",
                "item-route"    => ""
            ],
            [
                "id"            => 2,
                "name"          => "Туры по Казахстану",
                "item-route"    => "tours/toury-po-kazakhstanu"
            ],
            [
                "id"            => 3,
                "name"          => "Туристам",
                "item-route"    => ""
            ],
            [
                "id"            => 4,
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

        $this->result["best-directions"] =[
            [
                "title"     => "Нур-Султан",
                "img"       => "nur-sultan.jpg"
            ],
            [
                "title"     => "Алматы",
                "img"       => "almaty.jpg"
            ],
            [
                "title"     => "Шымбулак",
                "img"       => "shimbulak.jpg"
            ],
            [
                "title"     => "Кольсайские озера",
                "img"       => "kolsayskie-ozyora.jpg"
            ],
            [
                "title"     => "Байконур",
                "img"       => "baykonur.jpg"
            ],
            [
                "title"     => "Аральское море",
                "img"       => "aralskoe-more.jpg"
            ],
            [
                "title"     => "Катон-Карагай",
                "img"       => "katon-karagay.jpg"
            ],
            [
                "title"     => "Мавзолей Карахан",
                "img"       => "mavzoley-karakhan.jpg"
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
        $this->renderView("Pages/tursdetaling","tursdetaling", $this->result);
    }
    public function InfoTours(){
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

         $this->result["search-tours"] =[
            [
                "img"       => "assets/img/germany.jpg",
                "country"   => "Германия",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "assets/img/italy.jpg",
                "country"   => "Италия",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "assets/img/dubay.jpg",
                "country"   => "Дубай",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "assets/img/sri-lanka-statues.jpg",
                "country"   => "Шри-Ланка",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "assets/img/estonia.jpg",
                "country"   => "Эстония",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ],
            [
                "img"       => "assets/img/ispaniya.jpg",
                "country"   => "Испания",
                "departure" => "19.04.2019",
                "nights"    => 3,
                "days"      => 4,
                "price"     => "700.300"
            ]
        ];
         $this->renderView("Pages/infotours","infotours", $this->result);
    }
    
}