<x-layout :title="'Tokens'">

    <table>
        <th>
            <td>Name</td>
            <td>Actions</td>
        </th>

        @foreach($user->tokens as $token)
        <tr>
            <td>{{ $token->name }}</td>
            <td>
                <form action="{{ route('users.tokens.destroy', ['user' => $user, 'token' => $token]) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
        </tr>
        @endforeach
    </table>
</x-layout>