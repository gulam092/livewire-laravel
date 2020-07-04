<div>

    @if ( count($errors) > 0 )
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.posts.update')
    @else
        @include('livewire.posts.create')
    @endif

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">Sr Number</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
             @php 
            $sr =1;
            @endphp
            @foreach ($posts as $post)
           
                <tr>
                    <th>{{$sr }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>
            <button wire:click="edit({{ $post->id }})"
                class="btn btn-success btn-sm">Edit</button>
                </td>
                <td>
                <button wire:click="destroy({{ $post->id }})"
                class="btn btn-danger btn-sm">Delete</button>
                   </td> 
                </tr>
                @php 
              $sr++;
                @endphp
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

</div>