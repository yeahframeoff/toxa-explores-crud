<?php

class UserController extends \BaseController
{

    protected $userStorage;
    protected $postStorage;

    public function __construct(IPostStorage $postStorage, IUserStorage $userStorage)
    {
        $this->postStorage = $postStorage;
        $this->userStorage = $userStorage;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->userStorage->all();
        return View::make('users.index', ['users' => $users]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//$user = $this->userStorage->create();
        return View::make('user.form');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = Input::except('_token');
		$result = $this->userStorage->save($data);

        if ($result instanceof \Illuminate\Support\Facades\Validator)
            return 'Something gone bad. Write carefully';
        else
            return \Illuminate\Support\Facades\Redirect::route('users.create');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
