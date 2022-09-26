@props(['study'])
<!-- Item 1 -->
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$study->logo ? asset('storage/' . $study->logo) : asset('images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/studies/{{$study->id}}">{{$study->title}}</a>
            </h3>
        </div>
    </div>
</x-card>
