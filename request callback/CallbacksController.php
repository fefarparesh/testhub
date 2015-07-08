<?php

class CallbacksController extends \BaseController {

	/**
	 * Display a listing of callbacks
	 *
	 * @return Response
	 */
	public function index()
	{
		$callbacks = Callback::all();

		return View::make('callbacks.index', compact('callbacks'));
	}

	/**
	 * Show the form for creating a new callback
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('callbacks.create');
	}

	/**
	 * Store a newly created callback in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $validator = Validator::make($data = Input::all(), Callback::$rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::back()->withErrors($validator)->withInput();
		// }

		// Callback::create($data);

		// return Redirect::route('callbacks.index');
		 if (Request::ajax()) {
            $request_date = date('Y-m-d');
            $data = (array(
                'country_code' => Input::get('country_code'),
                'mobile' => Input::get('mobile'),
                'request_date' => $request_date,
                'status' => 'Not Attempted'
            ));
//
            // $a="1";
            $validator = Validator::make($data, Callback::$rules);
			
            if ($validator->fails()) {
//
            	// $a="0";
                return Response::json("Error-0");
                // return Response::json(compact(''));
               // return Redirect::back()->withErrors($validator)->withInput();
            	// return response()->json()->withErrors($validator)->withInput();
            }


            Callback::create($data);
            // return 1;


            return Response::json("1");
        }
	}

	/**
	 * Display the specified callback.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$callback = Callback::findOrFail($id);

		return View::make('callbacks.show', compact('callback'));
	}

	/**
	 * Show the form for editing the specified callback.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$callback = Callback::find($id);

		return View::make('callbacks.edit', compact('callback'));
	}

	/**
	 * Update the specified callback in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$callback = Callback::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Callback::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$callback->update($data);

		return Redirect::route('callbacks.index');
	}

	/**
	 * Remove the specified callback from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Callback::destroy($id);

		return Redirect::route('callbacks.index');
	}
	public function callbackforminqueryStore()
	{
		 if (Request::ajax()) {
            $request_date = date('Y-m-d');
            $data = (array(
                'country_code' => Input::get('country_code1'),
                'mobile' => Input::get('mobile1'),
                'request_date' => $request_date,
                'status' => 'Not Attempted'
            ));
//
            // $a="1";
            $validator = Validator::make($data, Callback::$rules);
			
            if ($validator->fails()) {
// //
//             	// $a="0";
                return Response::json("Error-4");
//                 // return Response::json(compact(''));
//                // return Redirect::back()->withErrors($validator)->withInput();
//             	// return response()->json()->withErrors($validator)->withInput();
            }
// //

            Callback::create($data);
            // return 1;


            return Response::json("3");
        }

	}

	public function checkStore()
	{
		if (Request::ajax()) {
			// return View::make('www.flamingotravell.in');
			echo "check controller";
            // return Redirect::to('www.flamingotravell.in');
            }
	}

}
