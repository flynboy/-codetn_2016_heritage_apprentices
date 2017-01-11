class InterestsController extends Controller
{
  public function index()
  {
    return view('Interest', ['Interests'=>Interest::all()]);
  }

  public function add_Interest()
  {
    return view('add_Interest');
  }
  
  public function add_Interest_post(Request $request)
  {
    Car::create(array(
        'name'=>$request->input('name'),
        'subname'=>$request->input('subname'),
      ));
      
    return redirect()->action('InterestController@index');