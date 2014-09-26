<?php

class StudentController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /student
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// DB::table('students')->join('users', 'students.id', '=', 'users.id')
  //       ->get(array('name', 'malayalam', 'english'));
  //        $scheduled_classes = Scheduledclass::with('course', 'instructor')->get();
	      $booksList=Book::all();
        return View::make('student.index',compact('booksList'));


	}

	/**
	 * Show the form for creating a new resource.
	 * GET /student/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('student.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /student
	 *
	 * @return Response
	 */
	public function store()
{

    //create a rule validation
    $rules=array(
          'id'=>'required',
          'sname'=>'required',
          'sfathername'=>'required',
          'sclass'=>'required',
          'ssex'=>'required',
          'language'=>'required|numeric'
    );
    //get all book information
    $bookInfo = Input::all();
    //validate book information with the rules
      $validation=Validator::make($bookInfo,$rules);
      if($validation->passes())
      {
      //save new book information in the database 
      //and redirect to index page
          Book::create($bookInfo);
           $sclass = Input::get('sclass');
           switch($sclass)
           {
             case 'one':
             {
               $teacher = 'jabir';
               break;
             }
              case 'two':
             {
               $teacher = 'firox';
               break;
             }
             case 'three':
             {
               $teacher = 'ahamed';
               break;
             }
             case 'four':
             {
               $teacher = 'kabeer';
               break;
             }
             case 'five':
             {
               $teacher = 'soman';
               break;
             }
             case 'six':
             {
               $teacher = 'sindu';
               break;
             }
             case 'seven':
             {
               $teacher = 'praveen';
               break;
             }
             case 'eight':
             {
               $teacher = 'irfad';
               break;
             }
             case 'nine':
             {
               $teacher = 'diljith';
               break;
             }
             

             $teacher = 'mangula';
           }

          $sname = Input::get('sname');
      $id = Input::get('id');
           $post = new Teacher;
      $post->susername = $sname;
      $post->id = $id;
      $post->ClassTeacher = $teacher;
      
      

      $post->save();
          return Redirect::route('student.index')
             ->withInput()
             ->withErrors($validation)
             ->with('message', 'Successfully created book.');
      }
      //show error message
      return Redirect::route('student.create')
           ->withInput()
           ->withErrors($validation)
           ->with('message', 'Some fields are incomplete.');
}

	/**
	 * Display the specified resource.
	 * GET /student/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
    // $rules=array(
    //         'isbn'=>'required',
    //         'title'=>'required',
    //         'author'=>'required',
    //         'publisher'=>'required',
    //         'language'=>'required|numeric'
    //     );
        $bookInfo = Input::all();
        // $validation = Validator::make($bookInfo, $rules);
        // if ($validation->passes())
        // {
            $book = Book::find($id);
            $book->update($bookInfo);
            return Redirect::route('student.index')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'Successfully updated Book.');
        // }
        return Redirect::route('student.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /student/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
 
public function edit($id)
 {
        //get the current book by id
        $book = Book::find($id);
        if (is_null($book))
        {
            return Redirect::route('student.index');
        }
        //redirect to update form
        return View::make('student.edit', compact('book'));
}
public function update($id)
{
        //create a rule validation
      $rules=array(
          'sname'=>'required',
          'sfathername'=>'required',
          'sclass'=>'required',
          'ssex'=>'required',
          'language'=>'required|numeric'
    );
        $bookInfo = Input::all();
        $validation = Validator::make($bookInfo, $rules);
        if ($validation->passes())
        {
            $book = Book::find($id);
            $book->update($bookInfo);
            return Redirect::route('student.index')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'Successfully updated Book.');
        }
        return Redirect::route('student.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /student/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
{
 //delete book
        Book::find($id)->delete();
        return Redirect::route('student.index')
            ->withInput()
            ->with('message', 'Successfully deleted Book.');
}

}