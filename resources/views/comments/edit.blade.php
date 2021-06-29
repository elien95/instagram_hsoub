<x-app-layout>
      <!--header word-->
<x-slot name="header">
<div class="flex justify-center">
      <h1 class="text-2xl md:text-5xl mt-7"> {{__('Edit Comment')}} </h1>
</div>
</x-slot>

<!--form posts-->
<div class="grid grid-cols-5 mt-7">
      <form  method="POST" action="/comments/{{$comment->id}}" class="col-start-2 col-span-3 max-w-4xl"
      enctype="multipart/form-data"  >
      @csrf
      @method('PUT')
     <!-- write-->
            <div>
            <x-jet-label value=" {{__('Caption')}} "/>
            <x-jet-input class="block mt-1 w-full h-20"  type="textarea" name="comment"
            :value="old('comment')" value="{{$comment->comment}}" autofocus />
      </div>
       
 <!-- button pubilsh-->
      <x-jet-button class="mt-4">
            {{__('Edit')}} 
      </x-jet-button>


      </form>
</div>

</x-app-layout>