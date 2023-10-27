<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesadminController extends Controller
{
    public function indexadmin(){
        return view('backend.admin.index');
    }

    public function managepatient(){
        $patients = DB::table('patients')//Query Builder
        ->orderBy('patient_name', 'asc')//classement des noms par ordre alphabétique
        //->get();
        ->paginate(2);//affiche 2 éléments par page

        return view('backend.admin.managepatient')
            ->with('patients', $patients);
        ;
    }

    public function patientdetails($id)
    {
        $patient = DB::table('patients')
            ->where('id', $id)
            ->first();
        return view('backend.admin.patientdetails')
            ->with('patients', $patient);
    }

    public function addpatient(){
        return view('backend.admin.addpatient');
    }

    public function savepatient(Request $request)
    {
        // On valide les données du formulaire
        $request->validate([
            'patient_name' => 'required',
            'patient_number' => 'required',
            'patient_address' => 'required',
            'patient_category' => 'required',
        ]);

        // On crée une nouvelle instance du modèle et on attribut les valeurs des champs
        $patient = new Patient();
        $patient->patient_name = $request->input('patient_name');
        $patient->patient_number = $request->input('patient_number');
        $patient->patient_address = $request->input('patient_address');
        $patient->patient_category = $request->input('patient_category');

        // Enregistre le produit dans la base de données
        $patient->save();

        return redirect('/managepatient')->with('success', 'Le produit <u><strong>' . $request->nom_produit. "</strong></u> a été enregistré avec succès");
    }

    public function deletepatient($id)
    {
        $patient=Patient::find($id);
        $patient->delete();
        return redirect('/managepatient')->with('status', 'Le patient ' . $patient->patient_name. "a été supprimé avec succès");
    }

/*    public function updatepatient($id)
    {
        $patient=Patient::find($id);
        return redirect('/updatepatient/'.$id)->with('patient', $patient);    
    }
*/
    public function updatepatient($id)
    {
        $patient = Patient::find($id);
        return view('backend.admin.updatepatient')
            ->with('patient', $patient);
    }

    public function editpatient(Request $request, $id)
    {
        $patient = Patient::find($id);
        //$patient = Patient::find($request->input('id'));

        $patient->patient_name = $request->input('patient_name');
        $patient->patient_number = $request->input('patient_number');
        $patient->patient_address = $request->input('patient_address');
        $patient->patient_category = $request->input('patient_category');

        // Met à jour le patient dans la base de données
        $patient->update();

        return redirect('/managepatient')->with('success', 'Le patient <u><strong>' . $request->patient_name. "</strong></u> a été modifié avec succès");
    }
    
}
