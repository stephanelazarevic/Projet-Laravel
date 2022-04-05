<x-app-layout>
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <br>
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Informations personnelles</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Utilisez une adresse email permanente pour recevoir vos courriels
                    </p>
                </div>
            </div>
            <div class="mt-2 md:mt-0 md:col-span-2">
                <form method="post" action="{{action('App\Http\Controllers\CarteEncController@update', $id)}}">
                    @csrf
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6 sm:col-span-3">
                            <label for="nomEtudiant"> <span style="color:red;">*</span> Nom étudiant:</label>
                            <input required="required" type="text" class="form-control" name="nomEtudiant" value="{{$carteEtudiant->nomEtudiant}}">
                    </div><br>

                                <div class="col-span-6 sm:col-span-3">
                            <label for="prenomEtudiant"> <span style="color:red;">*</span> Prenom étudiant:</label>
                            <input required="required" type="text" class="form-control" name="prenomEtudiant" value="{{$carteEtudiant->prenomEtudiant}}">
                                </div><br>

                                <div class="col-span-6 sm:col-span-3">
                            <label for="email"> <span style="color:red;">*</span> Email</label>
                            <input required="required" type="text" class="form-control" name="email" value="{{$carteEtudiant->email}}">
                    </div><br>

                                <div class="col-span-6 sm:col-span-3">
                            <label for="date"> <span style="color:red;">*</span> Date:</label>
                            <input required="required" type="date" class="form-control" name="date" value="{{$carteEtudiant->date}}">
                    </div><br>

                                <div class="col-span-6 sm:col-span-3">
                            <label for="tel"> <span style="color:red;">*</span> Tel:</label>
                            <input required="required" type="tel" class="form-control" name="tel" value="{{$carteEtudiant->tel}}">
                    </div><br>

                                <div class="col-span-6 sm:col-span-3">
                            <label>
                                Section :
                                <select name="section">
                                    <option value="SLAM">--</option>
                                    <option value="SLAM">SLAM</option>
                                    <option value="SISR">SISR</option>
                                </select>
                            </label>
                    </div><br>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="fichier">
                                        <span style="color:red;">*</span> Fichier:
                                    </label>
                                    <input required="required" type="file" name="fichier" value="{{$carteEtudiant->fichier}}">
                                </div><br><br>

                                <div class="col-span-6 sm:col-span-3">
                            <button type="submit"><a style="color:limegreen;">Update</a></button>
                    </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
