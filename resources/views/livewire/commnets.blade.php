<div>
   <div>
    <h1 class="text-3xl">Comments</h1>
    {{$newCommnet}}
     <div>
     	<div class="my-4 flex">
    <input type="text" class="w-full rounded border  p-2 mr-2 my-2" placeholder="What in your mind" wire:model.lazy="newCommnet">
    <div class="py-2">
    	<button class="p-2 bg-pink-500 w-20 rounded  text-white" wire:click="addCommnet">Add</button>
    </div>
     	</div>
        
        
     
    </div>
@foreach($comments as $comment)
    <div class="rounded border shadow p-3 my-2">
        <div class="flex justify-between my-2">
            <div class="flex">
                <p class="font-bold text-lg">{{$comment['creator']}}</p>
                <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">
                	{{$comment['created_at']}}
                </p>
            </div>
           
        </div>
        <p class="text-gray-800">{{$comment['body']}}</p>
      
      </div>
    @endforeach

   
</div>


</div>
