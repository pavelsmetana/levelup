<?php



namespace App\controller;

use App\model\File;
use App\model\Magic;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpController
{
    private HttpClientInterface $httpClient;

    public function __construct()
    {
        $this->httpClient = HttpClient::create();
    }

    public function downloadpage()
    {
        if (isset($_GET["link"])) {
            $link = $_GET["link"];
            $response = $this->httpClient->request("GET", $link);
            $content = $response->getContent();
            echo $content;
        }
    }

    public function downloadimages()
    {
        if (isset($_GET["link"])) {
            $link = $_GET["link"];
            $response = $this->httpClient->request("GET", $link);
            $content = $response->getContent();
            $imgs = preg_match_all("~src=(?:\"|')?((?:h|\/)[^\/][^\"|'|\s]+(?:\.svg|\.jpg|\.jpeg|\.png|\.webp|\.gif)[^\"|'|\s]*)[^>]*~", $content, $matches);
            foreach ($matches[1] as $img) {
                $filetype = pathinfo($img, PATHINFO_EXTENSION);
                $filename = pathinfo($img, PATHINFO_BASENAME);
                if (($filetype == "jpg") || ($filetype == "jpeg") || ($filetype == "png") || ($filetype == "svg") || ($filetype == "webp")){
                     if (!str_contains($img, $link)){
                         $url = $link . $img;
                     } else {
                         $url = $img;
                     }

                     $response = $this->httpClient->request('GET', $url);

                     if (200 !== $response->getStatusCode()) {
                            throw new \Exception('...');
                        }

                     $fileHandler = fopen(File::UPLOAD_PATH . $filename, 'w');
                     foreach ($this->httpClient->stream($response) as $chunk) {
                        fwrite($fileHandler, $chunk->getContent());
                        }
                }
            }
        }
        header("Location: /uploads");
    }

    public function test()
    {
        $magic = new Magic();
        echo $magic;


    }
}
