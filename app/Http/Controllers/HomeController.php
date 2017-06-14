<?php

namespace App\Http\Controllers;

use App\Code;
use App\Naw;
use Illuminate\Http\Request;
use App\Location;
use Maatwebsite\Excel\Facades\Excel;
use App\Item;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();

        return view('cms.home', compact('locations'));
    }

    public function locations()
    {
        $locations = Location::all();

        return view('cms.locations', compact('locations'));
    }

    public function showUpdate($id)
    {
        $location = Location::find($id);

        return view('cms.update', compact('location'));
    }

    public function update($id){

        $update = Location::find($id);

        $location = request(['name', 'place', 'zipcode', 'address', 'housenumber', 'tickets']);
        $update->name = $location['name'];
        $update->place = $location['place'];
        $update->zipcode = $location['zipcode'];
        $update->address = $location['address'];
        $update->housenumber = $location['housenumber'];
        $update->ticketAmount = $location['tickets'];


        flash('locatie is geüpdatet', 'success');
        $update->save();

        return redirect('/home/locations');

    }

    public function delete($id){

        $location = Location::find($id);

        $location->delete();

        flash('locatie is verwijderd ', 'success');
        return redirect('/home/locations');


    }

    public function showAdd(){
        return view('cms.new_location');
    }

    public function add(Request $request){

        $this->validate(request(),[
            'name' => 'required',
            'place' => 'required',
            'zipcode' => 'required',
            'address' => 'required',
            'housenumber' => 'required',
            'ticketAmount' => 'required'

        ]);

        $newLocation =  request(['name', 'place', 'zipcode', 'address', 'housenumber', 'ticketAmount']);


        $newLocation =  Location::create($newLocation);

        flash('Product toevoegen is geslaagd ', 'success');

        return redirect('/home/locations');

    }

    public function showNaw(){
        $naws = Naw::all();

        return view('cms.naw', compact('naws'));
    }

    public function excel(){

        $naws = Naw::all();

        Excel::create('Naw', function($excel) use($naws) {

            // Set the spreadsheet title, creator, and description
            $excel->setTitle('Naw gegevens');
            $excel->setCreator('Codechecker')->setCompany('Tjuna');
            $excel->setDescription('Naw gegevens');

            $excel->sheet('Sheetname', function($sheet) use($naws) {

                $sheet->fromArray($naws);

            });

        })->download('xlsx');
    }

    public function showCode(){
        $codes = Code::all();


        return view('cms.code', compact('codes'));
    }

    public function importExcel(Request $request)
    {
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $insert[] = ['code' => $value->code];
                }
                if(!empty($insert)){
                    DB::table('codes')->insert($insert);
                    flash('Uploaden geslaagd ', 'success');
                    return redirect('/home/codes');
                }
            }
        }
    }

}
