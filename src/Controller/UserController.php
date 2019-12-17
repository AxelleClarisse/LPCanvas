<?php


namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController {

    public function user($firstname, $lastname) {
        $user = new User(1, $firstname, $lastname, new \DateTime('1997-11-30'), new \DateTime());

        return $this->json($user);
    }

    public function list() {
        $listUser = array();
        for($i=0; $i<4; $i++) {
            $user = new User($i, 'toto', 'toto', new \DateTime('2019-12-11'), new \DateTime());
            array_push($listUser, $user);
        }

        return $this->json($listUser);
    }
}