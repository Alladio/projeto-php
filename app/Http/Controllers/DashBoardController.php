<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Exception;
//Autenticador LARAVEL
use Auth;

class DashBoardController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * @var UserValidator
     */
    protected $validator;

    /**
     * UsersController constructor.
     *
     * @param UserRepository $repository
     * @param UserValidator $validator
     */
    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function auth(Request $request){

      //Laravel traz o token - Para não acontecer de hackear
      //dd($request->all());

      $data = [
        'email' => $request->get('username'),
        'password' => $request ->get('password')
      ];

      try {
        if(env('PASSWORD_HASH')){
          \Auth::attempt($data, false );

        }else{
            //User::where()
            $user = $this->repository->findWhere(['email' => $request -> get('username')])->first();

            if(!$user)
            throw new Exception("E-mail informado é invalido!");

            if($user-> password != $request -> get('password'))
            throw new Exception("A senha informada é invalida!");

            Auth::login($user);
        }

        //segundo parametro é para manter conectado ou não(CACHE)
        return redirect()->route('user.dashboard');
      } catch (Exception $e) {
        return $e->getMessage();
      }
    }

    public function index(Request $request){
      return "Index Dashboard";

    }
}
