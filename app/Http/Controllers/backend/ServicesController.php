<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Color;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class ServicesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        

        return view('backend.services.liste', [
            'services' => Service::all(),
        ]);
    }

    public function create()
    {
       
        $colors = Color::get();
        $categories = Categorie::get(); 
        return view('backend.services.ajouter',[
            'colors' => $colors,
            'categories' => $categories,

        ]);
    }

    public function store(Request $request)
    {
        
            $request->validate([
                'ref' => 'required',
                'libelle' => 'required',
                'description' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'color' => 'required',
                'categorie' => 'required',
            ], 
            [
                'ref.required' => 'Veuillez entrer une référence pour le service.',
                'libelle.required' => 'Veuillez entrer le nom du service.',
                'description.required' => 'Veuillez entrer une description pour le service.',
                'image.required' => 'Veuillez télécharger une image pour le service.',
                'image.image' => 'Le fichier doit être une image.',
                'image.mimes' => 'L\'image doit être au format jpeg, png, jpg, gif ou svg.',
                'image.max' => 'L\'image ne doit pas dépasser 2 Mo.',
                'color.required' => 'Veuillez sélectionner une couleur pour le service.',
                'categorie.required' => 'Veuillez sélectionner une catégorie pour le service.',
            ]
        );
    
            $service = new Service();
            $service->reference = $request->ref;
            $service->libelle = $request->libelle;
            $service->description = $request->description;
            $service->color_id = $request->color;
            $service->categorie_id = $request->categorie;
            $service->statut = $request->statut ; // Assuming you want to set the status to active by default
    
            if ($request->hasFile('image')) {
                $imageName = time().'.'.$request->image->extension();  
                $request->image->move(public_path('assets/image/amenagment_img'), $imageName);
                $service->emage = $imageName;
            }
    
            $service->save();
    
            return redirect()->route('services.index')->with('success', 'Service créé avec succès.');
             
         
    }

    public function edit($service)
    {
        $service = Service::findOrFail($service);
        $colors = Color::get();
        $categories = Categorie::get(); 
        return view('backend.services.modifier', [
            'service' => $service,
            'colors' => $colors,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'ref' => 'required',
            'libelle' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'color' => 'required',
            'categorie' => 'required',
        ], 
        [
            'ref.required' => 'Veuillez entrer une référence pour le service.',
            'libelle.required' => 'Veuillez entrer le nom du service.',
            'description.required' => 'Veuillez entrer une description pour le service.',
            'image.image' => 'Le fichier doit être une image.',
            'image.mimes' => 'L\'image doit être au format jpeg, png, jpg, gif ou svg.',
            'image.max' => 'L\'image ne doit pas dépasser 2 Mo.',
            'color.required' => 'Veuillez sélectionner une couleur pour le service.',
            'categorie.required' => 'Veuillez sélectionner une catégorie pour le service.',
        ]);

        $service = Service::findOrFail($request->id);
        $service->reference = $request->ref;
        $service->libelle = $request->libelle;
        $service->description = $request->description;
        $service->color_id = $request->color;
        $service->categorie_id = $request->categorie;
            $service->statut = $request->statut ; // Assuming you want to set the status to active by default


        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/image/amenagment_img'), $imageName);
            $service->emage = $imageName;
        }else {
            // If no new image is uploaded, keep the old one
            $service->emage = $service->emage;
        }

        $service->save();

        return redirect()->route('services.index')->with('success', 'Service mis à jour avec succès.');
    }

    public function delete($service)
    {
        $service = Service::findOrFail($service);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service supprimé avec succès.');
    }
}
