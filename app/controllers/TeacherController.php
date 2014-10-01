<?php

class TeacherController extends BaseController 
{
  /**
	 * Display a listing of the resource.
	 * GET /student
	 *
	 * @return Response
	 */
  public function __construct()
  {
    $this->beforefilter('guest');
  }
	public function index()
	{
		//
		// DB::table('students')->join('users', 'students.id', '=', 'users.id')
  //       ->get(array('name', 'malayalam', 'english'));
  //        $scheduled_classes = Scheduledclass::with('course', 'instructor')->get();
		// $attendance = Teacher::getdetails()::all;

	      $booksList=Teacher::all();
        return View::make('teacher.index',compact('booksList'));


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
		return View::make('teacher.create');
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
         
          'susername'=>'required',
          'ClassTeacher'=>'required',
          
          'id'=>'required|numeric'
    );
    //get all book information
    $bookInfo = Input::all();
    //validate book information with the rules
      $validation=Validator::make($bookInfo,$rules);
      if($validation->passes())
      {
      //save new book information in the database 
      //and redirect to index page
          Teacher::create($bookInfo);
          return Redirect::route('teacher.index')
             ->withInput()
             ->withErrors($validation)
             ->with('message', 'Successfully created book.');
      }
      //show error message
      return Redirect::route('Teacher.create')
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
	public function show()
	{
		//
    
        $id  = Input::get('id');
      
        echo $id;
        $is = new DateTime('today');
        //$is=array('created_at' => new DateTime('today'))
        //echo $is[0];
       
       $user = Teacher::find($id);

 $user->MarkAttendance = 'present';
 $user->date = new DateTime('today');
 $user->save();
       
            //$books = Teacher::find($id);
            //$books = Teacher::update($rules);
            //Teacher::update($id,$rules);
            //return Redirect::route('teacher.index')
            //->with('message', 'update sucess.');
         
            return Redirect::route('teacher.index');
                //->with('message', 'Successfully updated Book.');
        
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

        $book = Teacher::find($id);
        if (is_null($book))
        {
            return Redirect::route('student.index');
        }
        //redirect to update form
        return View::make('student.edit', compact('book'));
}
public function update()
{
        //create a rule validation
         $id  = Input::get('id');
      
        echo $id;
        $is = new DateTime('today');
        //$is=array('created_at' => new DateTime('today'))
        //echo $is[0];
       
       $user = Teacher::find($id);

 $user->MarkAttendance = 'absent';
 $user->date = new DateTime('today');
 $user->save();
       
            //$books = Teacher::find($id);
            //$books = Teacher::update($rules);
            //Teacher::update($id,$rules);
            //return Redirect::route('teacher.index')
            //->with('message', 'update sucess.');
         
            return Redirect::route('teacher.index');
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
        Teacher::find($id)->delete();
        return Redirect::route('teacher.index')
            ->withInput()
            ->with('message', 'Successfully deleted Book.');
} 


	

}