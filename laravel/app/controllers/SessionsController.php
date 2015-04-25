<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionsController
 *
 * @author vfranco
 */
class SessionsController extends BaseController{
    
    public function create(){
        if(Auth::check())
            return Redirect::to('');
        
        return View::make('sessions.create');
    }
    
    public function store(){
        
        if(Auth::attempt(Input::only('username','password'))){
            return Redirect::action('AdminController@index');
        }
        return 'login invalido';
    }
    
    public function destroy(){
        Auth::logout();
        return Redirect::to('login');
    }
}
