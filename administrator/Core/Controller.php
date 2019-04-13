<?php
namespace administrator\Core;

use Core\ImplimentFace\Rendering as renders;
use Model\FiltrName;

Class Controller implements renders{
    
    protected $route = array();
    protected $countRoute = 0;


    protected $baseurl;
    protected $baseurlM;
    
    protected $model = NULL;
    protected $modelSeo = NULL;
    
    protected $lastId = NULL;
    protected $result = array();
    protected $page;
    protected $CatsArray = array();
    protected $seo = array();
    
    protected $multyUploadData = NULL;
    protected $uploadData = NULL;


    public function __construct(&$route=NULL,&$countRoute=NULL) {
        $this->route = $route;
        $this->countRoute = $countRoute;
        $route = NULL;
        $countRoute = NULL;
        $this->baseurl =  "http://".$_SERVER['HTTP_HOST']."/administrator";
        $this->baseurlM =  "http://".$_SERVER['HTTP_HOST'];
    }
    
    public function renderView($pagePath,$page,array $params){
        
        header('Content-Type: text/html');
        $baseurl = $this->baseurl;
        $baseurlM = $this->baseurlM;
        include ("A_View/Default/header.php");
        include ("A_View/Default/menu.php");
        include ("A_View/".$pagePath.".php");
        include ("A_View/Default/footer.php");
    }
    
    public function renderNotFound($path,array $params = NULL)
    {
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        include ("A_View/404/".$path.".php");
    }
    
     public function renderLoginView($pagePath,$page,array $params)
    {
        header('Content-Type: text/html');
        $baseurl = $this->baseurl;
        $baseurlM = $this->baseurlM;
        include ("A_View/".$pagePath.".php");
    }
    
    protected function sendHeaderId()
    {
        $gourl = $this->baseurl."/".$this->headerUrl.$this->lastId."/";
        header("LOCATION: $gourl");
    }
    protected function sendHeader()
    {
         $gourl = $this->baseurl."/".$this->headerUrl;
        header("LOCATION: $gourl");
    }
    
    protected function sendErrorHeader()
    {
        $gourl = $this->baseurl."/".$this->headerUrl.$this->lastId."/";
        header("LOCATION: $gourl");
    }
    protected function headreUrl($url)
    {
        $gourl = $this->baseurl."/".$url."/";
        header("LOCATION: $gourl");
    }
    protected function rus2translit($string) {
        $converter = array(
            ' ' => '-',
        );
        return strtr($string, $converter);
    }

    protected function transliter($string) {
        $textcyr=$string;
        $cyr = [
            'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
            'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
            'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
            'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'," "
        ];
        $lat = [
            'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
            'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
            'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P',
            'R','S','T','U','F','H','Ts','Ch','Sh','Sht','A','I','Y','e','Yu','Ya',"-"
        ];
        $textcyr = str_replace($cyr, $lat, $textcyr);
        $textcyr = strtolower($textcyr);

        return $textcyr;
    }
}