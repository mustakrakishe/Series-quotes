<x-layout :title="'Tokens'">
    <h1 class="h3 mb-3 fw-normal">Here are your tokens:</h1>

    <form id="create-token-form" action="{{ route('users.tokens.store', ['user' => $user]) }}" method="post">
        @csrf
    </form>

    <table class="table mt-3">
        <thead>
            <th>Name</th>
            <th>Actions</th>
        </thead>

        <tbody>
            <tr>
                <td class="align-middle"><x-input form="create-token-form" type="text" name="name" placeholder="Name">Name</x-input></td>
                <td class="align-middle"><button form="create-token-form" type="submit" class="btn btn-primary">Create new</button></td>
            </tr>

            @foreach($user->tokens as $token)
            <tr>
                <td class="align-middle">{{ $token->name }}</td>
                <td class="align-middle">
                    <form action="{{ route('users.tokens.destroy', ['user' => $user, 'token' => $token]) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>