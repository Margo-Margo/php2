<?php

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class GuestbookC extends BaseC
{

  /*  public function viewGuestbook()
    {
        $coment = new GuestbookM();
        $this->title = 'Отзывы о магазине';
        $coments=$coment->getGuestbook();
        $loader = new Twig_Loader_Filesystem('v');
        $twig = new Environment($loader, [
            'cache' => 'tcc','debug' => true,
        ]);
        echo $twig->render('guestbook.twig', ['coments' => $coments, 'title' => $this -> title, 'userid' => $_SESSION['user_id'], 'user' => $this->userTest()]);


    }
*/
    public function viewGuestbook()
    {   $coment = new GuestbookM();
        $this->title = 'Отзывы о магазине';
        $coments=$coment->getGuestbook();
        $loader = new Twig_Loader_Filesystem('v');
        $twig = new Twig_Environment($loader);
        $template = $twig -> loadTemplate('guestbook.twig');
        echo $twig->render('guestbook.twig', ['coments' => $coments, 'title' => $this -> title, 'userid' => $_SESSION['user_id'], 'user' => $this->userTest()]);

        if($this->isPost()) {

            $res = $coment -> newComment(strip_tags($_POST['fio']),strip_tags($_POST['email']),strip_tags($_POST['text']));
            echo $template -> render(array('title' => $res));
            echo '<script> window.location="index.php?class=guestbook&method=viewGuestbook"; </script>';

        }

    }
}

