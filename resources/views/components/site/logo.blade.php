<div class="w-full flex items-center justify-center">
    <img {{ $attributes }} src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">

    @if ($attributes->has('withName'))
    <span class="ml-3 text-3xl font-bold text-gray-800">{{config('app.name')}}</span>
    @endif
</div>
