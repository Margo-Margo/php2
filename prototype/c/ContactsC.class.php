<?php

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class ContactsC extends BaseC
{

    public function viewContacts()
    {

        $this->title = 'Наши контакты';
        $loader = new Twig_Loader_Filesystem('v');
        $twig = new Environment($loader);
        echo $twig->render('contacts.twig', ['title' => $this -> title, 'userid' => $_SESSION['user_id'], 'user' => $this->userTest()]);


    }
}