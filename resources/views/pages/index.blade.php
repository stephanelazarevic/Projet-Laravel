<x-app-layout>
    <div class="container mx-auto">
        <br />
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
            <thead>
            <tr class="text-center font-bold">
                <td class="border px-6 py-4">ID</td>
                <td class="border px-6 py-4">Nom</td>
                <td class="border px-6 py-4">Prénom</td>
                <td class="border px-6 py-4">Email</td>
                <td class="border px-6 py-4">Date</td>
                <td class="border px-6 py-4">Tel</td>


            </tr>
            </thead>
            <tbody>

            @foreach($cartesEtudiant as $carteEtudiant)
                <tr>
                    <td class="border px-6 py-4">{{$carteEtudiant['id']}}</td>
                    <td class="border px-6 py-4">{{$carteEtudiant['nomEtudiant']}}</td>
                    <td class="border px-6 py-4">{{$carteEtudiant['prenomEtudiant']}}</td>
                    <td class="border px-6 py-4">{{$carteEtudiant['email']}}</td>
                    <td class="border px-6 py-4">{{$carteEtudiant['date']}}</td>
                    <td class="border px-6 py-4">{{$carteEtudiant['tel']}}</td>



                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
