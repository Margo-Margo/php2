<?php


class GuestbookM
{

    public function __construct()
    {
    }

    public function getGuestbook()
    {
        $query = "SELECT * FROM coments";
        $res = PdoM::Instance()->SelectAll($query);
        return $res;
    }

    public function newComment($fio, $email, $text)
    {

            $object = [
                'fio' => $fio,
                'email' => $email,
                'text' => $text
            ];
            $res = PdoM::Instance()->Insert('coments', $object);
            if ($res) {
                return "Вы добавили отзыв!";
            } else {
                return "Добавить отзыв не удалось!";
            }

    }
}

    // Вывод отзывов

