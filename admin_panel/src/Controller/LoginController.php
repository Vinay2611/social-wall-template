<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class LoginController extends AppController
{
    //Display login page
    public function display()
    {

        $this->set(compact('page', 'subpage'));

        $this->render('home');

        /*try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }*/
    }
}