<?php

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class HomepageC extends BaseC
{

    public function viewHomepage()
    {
        $prod = new HomepageM();
        $this -> title = "Наши новинки";
        $products=$prod->getGoods();
        $loader = new FilesystemLoader('v');
        $twig = new Environment($loader, [
            'cache' => 'tcc','debug' => true,
        ]);
        $twig->addExtension(new DebugExtension());
        echo $twig->render('homepage.twig', ['products' => $products, 'title' => $this -> title, 'userid' => $_SESSION['user_id'], 'user' => $this->userTest()]);
    }
}