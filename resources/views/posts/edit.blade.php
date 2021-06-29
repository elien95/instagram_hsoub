<x-app-layout>
      <!--header word-->
<x-slot name="header">
<div class="flex justify-center">
      <h1 class="text-2xl md:text-5xl mt-7"> {{__('Edit Post')}} </h1>
</div>
</x-slot>

<!--form posts-->
<div class="grid grid-cols-5 mt-7">
      <form  method="POST" action="/posts/{{$post->id}}" class="col-start-2 col-span-3 max-w-4xl"
      enctype="multipart/form-data"  autocomplete="off">
      @csrf
      @method('PUT')
     <!-- write-->
            <div>
            <x-jet-label value=" {{__('Caption')}} "/>
            <x-jet-input class="block mt-1 w-full h-20"  type="textarea" name="post_caption"
            :value="old('post_caption')" value="{{$post->post_caption}}" autofocus />
      </div>
       <!-- put image -->

      <div class="mt-4">
            <x-jet-label value=" {{__('Image')}} "/>
            <x-jet-input class="block mt-1 w-full bg-white p-2"  type="file" name="image_path"
            :value="old('image_path')" autofocus value="{{$post->image_path}}" />
      </div>
 <!-- button pubilsh-->
      <x-jet-button class="mt-4">
            {{__('Publish')}} 
      </x-jet-button>


      </form>
</div>

</x-app-layout>