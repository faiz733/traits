<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\GenerateToken;
class ContactController extends Controller
{
    use GenerateToken;
    public function test1()
    {
        $this->getRandomString();
       
    }
    public function test2()
    {
        
        $this->getRandomString();
    }
    public function test3()
    {
        
        $this->getRandomString();
    }
    public function test4()
    {
        
        $this->getRandomString();
    }
}
