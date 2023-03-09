<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Parent</th>
        <th>Reference</th>
        <th>Pack</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Ville</th>
        <th>Adresse</th>
        <th>Banque</th>
        <th>RIB</th>
        <th>Upgrade 1</th>
        <th>Upgrade 2</th>
        <th>Upgrade 3</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->parent_id }}</td>
            <td>{{ $user->reference }}</td>
            <td>{{ $user->pack_id }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->bank }}</td>
            <td>{{ $user->rib }}</td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
    @endforeach
    </tbody>
</table>