<div class="grid grid-cols-4 sm:grid-cols-6 md:grid-cols-8 items-center gap-2 mt-1">
    <span class="col-span-1 mr-2 truncate">{{ $skillName }}</span>
    <div class="col-span-3 sm:col-span-5 md:col-span-7 relative h-3 bg-transparent rounded-lg border {{ $printView ? "
      border-gray-200" : "border-sky-900" }} w-full overflow-hidden">
        <div class="h-full transition-all bg-gradient-to-r from-transparent {{ $printView ? " to-gray-500"
          : "to-sky-500" }}" style="width: {{ ($rating / $max) * 100 }}%;">
        </div>
        <span class="ml-1 absolute top-1/2 transform -translate-y-1/2 text-xs {{ $printView ? " text-gray-500"
          : "text-sky-500" }}" style="left: calc({{ ($rating / $max) * 100 }}%);">
            {{ $rating }}
        </span>
    </div>
</div>
