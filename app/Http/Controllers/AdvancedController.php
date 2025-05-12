<?php

namespace App\Http\Controllers;

use App\Models\Advanced;
use App\Models\Department;
use App\Models\Experiences;
use App\Models\FamilyInformation;
use App\Models\LastJob;
use App\Models\Recommendation;
use App\Models\Relatives;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\FormType;


class AdvancedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $advanceds = Advanced::All();
        return view("advanced.index", compact('advanceds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $formTypes = FormType::all();
        return view("advanced.create", compact('formTypes', 'users'));
    }

    public function createEmp()
    {
        $users = User::all();
        $formTypes = FormType::all();

        return view("advanced.employmentApplication.createEmploymentApplication", compact('formTypes', 'users'));
    }

    public function createSeasonalTraining()
    {
        $users = User::all();
        $departments = Department::all();
        $formTypes = FormType::all();
        return view("advanced.requestSeasonalTraining.createRequestSeasonalTraining", compact('formTypes', 'users','departments'));
    }

    public function createExtra()
    {
        $users = User::all();
        $departments = Department::all();
        $formTypes = FormType::all();
        return view("advanced.extra.createExtra", compact('formTypes', 'users','departments'));
    }

    public function createDirectingWork()
    {
        $users = User::all();
        $departments = Department::all();
        $formTypes = FormType::all();
        return view("advanced.directingWorkEmployee.createDirectingWorkEmployee", compact('formTypes', 'users','departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'type_id' => 'required|integer',
            'full_name' => 'required|string',
            'mother_name' => 'string|nullable',
            'birth_place' => 'string|nullable',
            'birth_date' => 'date|nullable',
            'current_address' => 'string|nullable',
            /**/ 'family_situation' => 'in:married,single,divorces,widower|nullable',/**/
            'telephone' => 'regex:/^09[0-9]{8}$/|nullable',
            'mobile_phone' => 'regex:/^09[0-9]{8}$/|nullable',
            /**/ 'military_status' => 'in:completed,notCompleted,exempt|nullable',/**/
            'date' => 'date|nullable',
            //'department_id'=>'required|integer',
            'job_title' => 'string|nullable',
            'hourly_wage' => 'string|nullable',
            'count_day_work' => 'integer|nullable',
            'year' => 'integer|nullable',
            'start_training' => 'date|nullable',
            'end_training' => 'date|nullable',
            'start_day' => 'date|nullable',
            'count_daily_work' => 'integer|nullable',
            'salary' => 'numeric|nullable',
            'notes' => 'string|nullable',
            'recommendation' => 'string|nullable',


            'fname' => 'string|nullable',
            'kinship' => 'string|nullable',
            'fphone' => 'regex:/^09[0-9]{8}$/|nullable',
            'fJob' => 'string|nullable',/**/

            'lPhone' => 'regex:/^09[0-9]{8}$/|nullable',
            'rPhone' => 'regex:/^09[0-9]{8}$/|nullable',
            'recoPhone' => 'regex:/^09[0-9]{8}$/|nullable',
            'place' => 'string|nullable',
            'academic_qualification' => 'string|nullable',
            'specialization' => 'string|nullable',
            'palce_specialization' => 'string|nullable',
            'company_name' => 'string|nullable',
            'lJob' => 'string|nullable',
            'start_date' => 'date|nullable',
            'end_date' => 'date|nullable',
            'reason_leaving' => 'string|nullable',


            'name' => 'string|nullable',
            'relationship' => 'string|nullable',

            'rUserId' => 'integer|nullable',
            'signature' => 'string|nullable',
            'recoUserId' => 'integer|nullable',
        ]);


//        return $request;


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if ($request->signature != 'true') $signature = '0';
        else $signature = '1';


        try {
        Advanced::create([
            'type_id' => $request->type_id,
            'full_name' => $request->full_name,
            'mother_name' => $request->mother_name,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'current_address' => $request->current_address,
            'family_situation' => $request->family_situation,
            'telephone' => $request->telephone,
            'mobile_phone' => $request->mobile_phone,
            'military_status' => $request->military_status,//EmpApplication

            'date' => $request->date,


            'department_id' => Auth::user()->department->id,
            'job_title' => $request->job_title,
            'hourly_wage' => $request->hourly_wage,
            'count_day_work' => $request->count_day_work,
            'year' => $request->year,
            'start_training' => $request->start_training,
            'end_training' => $request->end_training,
            'start_day' => $request->start_day,
            'count_daily_work' => $request->count_daily_work,
            'salary' => $request->salary,
            'notes' => $request->notes,
            'recommendation' => $request->recommendation,
            'user_id' => Auth::id(),
        ]);

        } catch (Throwable $e) {
            report($e);

            return false;
        }
        $adv = Advanced::latest()->first()->id;

        try {
            Recommendation::create([
                'signature' => $signature,
                'phone' => $request->recoPhone,
                'adv_id' => $adv,
                'user_id' => $request->recoUserId,
            ]);
        } catch (Throwable $e) {
            report($e);

            return false;
        }




        try {


        FamilyInformation::create([
            'name' => $request->fname,
            'kinship' => $request->kinship,
            'phone' => $request->fphone,
            'job' => $request->fJob,
            'adv_id' => $adv,
        ]);
        } catch (Throwable $e) {
            report($e);

            return false;
        }



        try {
        Experiences::create([
            'academic_qualification' => $request->academic_qualification,
            'specialization' => $request->specialization,
            'palce_specialization' => $request->palce_specialization,
            'adv_id' => $adv,
        ]);
        } catch (Throwable $e) {
            report($e);

            return false;
        }



            try {
        LastJob::create([
            'company_name' => $request->company_name,
            'phone' => $request->lPhone,
            'job' => $request->lJob,
            'place' => $request->place,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'reason_leaving' => $request->reason_leaving,
            'adv_id' => $adv,
        ]);

            } catch (Throwable $e) {
                report($e);

                return false;
            }



                try {
        Relatives::create([
            'name' => $request->name,
            'phone' => $request->rPhone,
            'relationship' => $request->relationship,
            'adv_id' => $adv,
            'user_id' => $request->rUserId,
        ]);
                } catch (Throwable $e) {
                    report($e);

                    return false;
                }



        session()->flash('Add', 'Advanced has been added successfully ');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $advanced = Advanced::find($id);
        //$advanceds = Advanced::find($id);
        return view("advanced.show", compact('advanced'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users=User::all();
        $advanced = Advanced::find($id);
        $formTypes = FormType::all();
        $recommendation = Recommendation::where('adv_id',$advanced->id)->first();
        $relative = Relatives::where('adv_id',$advanced->id)->first();
        $lastJob = LastJob::where('adv_id',$advanced->id)->first();
        $experience = Experiences::where('adv_id',$advanced->id)->first();
        $familyInformation = FamilyInformation::where('adv_id',$advanced->id)->first();


        return view("advanced.edit", compact(
            'advanced'
            ,'users'
            ,'formTypes'
            ,'recommendation'
            ,'relative'
            ,'lastJob'
            ,'experience'
            ,'familyInformation'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'type_id' => 'required|integer',

            'full_name' => 'required|string',
            'mother_name' => 'string|nullable',
            'birth_place' => 'string|nullable',
            'birth_date' => 'date|nullable',
            'current_address' => 'string|nullable',
            /**/ 'family_situation' => 'in:married,single,divorces,widower|nullable',/**/
            'telephone' => 'regex:/^09[0-9]{8}$/|nullable',
            'mobile_phone' => 'regex:/^09[0-9]{8}$/|nullable',
            /**/ 'military_status' => 'in:completed,notCompleted,exempt|nullable',/**/
            'date' => 'date|nullable',
            //'department_id'=>'required|integer',
            'job_title' => 'string|nullable',
            'hourly_wage' => 'string|nullable',
            'count_day_work' => 'integer|nullable',
            'year' => 'integer|nullable',
            'start_training' => 'date|nullable',
            'end_training' => 'date|nullable',
            'start_day' => 'date|nullable',
            'count_daily_work' => 'integer|nullable',
            'salary' => 'numeric|nullable',
            'notes' => 'string|nullable',
            'recommendation' => 'string|nullable',
            'fname' => 'string|nullable',
            'kinship' => 'string|nullable',
            'fphone' => 'regex:/^09[0-9]{8}$/|nullable',
            'fJob' => 'string|nullable',/**/

            'lPhone' => 'regex:/^09[0-9]{8}$/|nullable',
            'rPhone' => 'regex:/^09[0-9]{8}$/|nullable',
            'recoPhone' => 'regex:/^09[0-9]{8}$/|nullable',
            'place' => 'string|nullable',
            'academic_qualification' => 'string|nullable',
            'specialization' => 'string|nullable',
            'palce_specialization' => 'string|nullable',
            'company_name' => 'string|nullable',
            'lJob' => 'string|nullable',
            'start_date' => 'date|nullable',
            'end_date' => 'date|nullable',
            'reason_leaving' => 'string|nullable',
            'name' => 'string|nullable',
            'relationship' => 'string|nullable',
            'rUserId' => 'integer|nullable',
            'signature' => 'string|nullable',
            'recoUserId' => 'integer|nullable',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }



        $advanced = Advanced::findOrFail($id);
        $advanced->update([
            'type_id' => $request->type_id,
            'full_name' => $request->full_name,
            'mother_name' => $request->mother_name,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'current_address' => $request->current_address,
            'family_situation' => $request->family_situation,
            'telephone' => $request->telephone,
            'mobile_phone' => $request->mobile_phone,
            'military_status' => $request->military_status,
            'date' => $request->date,
            'department_id' => Auth::user()->department->id,
            'job_title' => $request->job_title,
            'hourly_wage' => $request->hourly_wage,
            'count_day_work' => $request->count_day_work,
            'year' => $request->year,
            'start_training' => $request->start_training,
            'end_training' => $request->end_training,
            'start_day' => $request->start_day,
            'count_daily_work' => $request->count_daily_work,
            'salary' => $request->salary,
            'notes' => $request->notes,
            'recommendation' => $request->recommendation,
            'user_id' => Auth::id(),


        ]);

        $adv = Advanced::latest()->first()->id;

        FamilyInformation::where('adv_id',$adv)->update([
            'name' => $request->fname,
            'kinship' => $request->kinship,
            'phone' => $request->fphone,
            'job' => $request->fJob,
            'adv_id' => $adv,
        ]);

        Experiences::where('adv_id',$adv)->update([
            'academic_qualification' => $request->academic_qualification,
            'specialization' => $request->specialization,
            'palce_specialization' => $request->palce_specialization,
            'adv_id' => $adv,
        ]);

        LastJob::where('adv_id',$adv)->update([
            'company_name' => $request->company_name,
            'phone' => $request->lPhone,
            'job' => $request->lJob,
            'place' => $request->place,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'reason_leaving' => $request->reason_leaving,
            'adv_id' => $adv,
        ]);

        Relatives::where('adv_id',$adv)->update([
            'name' => $request->name,
            'phone' => $request->rPhone,
            'relationship' => $request->relationship,
            'adv_id' => $adv,
            'user_id' => $request->rUserId,
        ]);

        if ($request->signature != 'true')
            $signature = '0';
        else
            $signature = '1';

        Recommendation::where('adv_id',$adv)->update([
            'signature' => $signature,
            'phone' => $request->recoPhone,
            'adv_id' => $adv,
            'user_id' => $request->recoUserId,
        ]);

        session()->flash('Update', 'Advanced has been updated successfully ');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Advanced::find($id)->delete();

        return redirect('/advanced')
            ->with('delete', 'Advanced deleted successfully');
    }

    public function stepChange(string $id)
    {
        $roles =User::where('id',Auth::id())->first();
        foreach ($roles->getRoleNames() as $role){
            $role;
            break;
        }

        if ($role == 'Manager'){
             Advanced::where('id',$id)->update([
                'step'=> 2
            ]);
        }

        if ($role == "Admin"){
             Advanced::where('id',$id)->update([
                'step'=> 3
             ]);
        }

        return redirect('/advanced')
            ->with('Accepted', 'Advanced request accepted');
    }
}
