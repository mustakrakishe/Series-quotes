<x-layout :title="'Tokens'">

    @isset($token)
    <div class="alert alert-warning" role="alert">
        <div>Here is your new Bearer Token.</div>
        <div>Store it, cause you will never see it again!</div>

        <x-input value="{{ $token->plainTextToken }}" name="new_token" readonly>{{ $token->accessToken->name }}</x-input>
    </div>
    @endisset

    <h1 class="h3 mb-3 fw-normal">Here are your tokens:</h1>

    <form id="create-token-form" action="{{ route('users.tokens.store', ['user' => $user]) }}" method="post">
        @csrf
    </form>

    <table id="tokens-table" class="table mt-3 mx-auto">
        <thead>
            <th>Name</th>
            <th>Created at</th>
            <th>Actions</th>
        </thead>

        <tbody>
            <tr>
                <td class="align-middle">
                    <x-input form="create-token-form" type="text" id="create-token-name-input" name="name" placeholder="Name" value="auth">New Token Name</x-input>
                </td>
                <td></td>
                <td class="align-middle"><button form="create-token-form" type="submit" class="btn btn-primary">Create</button></td>
            </tr>

            @foreach($user->tokens as $token)
            <tr>
                <td>{{ $token->name }}</td>
                <td>{{ $token->created_at }}</td>
                <td>
                    <form action="{{ route('users.tokens.destroy', ['user' => $user, 'token' => $token]) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>